<?php
/**
 * Genera el set de íconos PWA a partir de logo_psirysk.png.
 * Ejecutar una sola vez con: php generate_icons.php
 *
 * Produce:
 *  - icon-{size}.png (any)
 *  - icon-maskable-{size}.png (con padding ~10% para safe area)
 *  - apple-touch-icon.png (180x180)
 *  - favicon-32.png, favicon-16.png
 */

$source = __DIR__ . '/../logo_psirysk.png';
$out    = __DIR__;

if (!file_exists($source)) {
    fwrite(STDERR, "No se encontró el logo en {$source}\n");
    exit(1);
}

if (!is_dir($out)) {
    mkdir($out, 0775, true);
}

$src = imagecreatefrompng($source);
if (!$src) {
    fwrite(STDERR, "No pude leer el PNG\n");
    exit(1);
}
$srcW = imagesx($src);
$srcH = imagesy($src);

// Color de fondo institucional (debe coincidir con manifest background_color).
$bgR = 255; $bgG = 255; $bgB = 255;

function makeIcon($src, $srcW, $srcH, int $size, string $path, float $contentRatio = 1.0, array $bg = [255,255,255]) {
    $canvas = imagecreatetruecolor($size, $size);
    // Fondo sólido (PNG sin transparencia mejora soporte iOS).
    $bgColor = imagecolorallocate($canvas, $bg[0], $bg[1], $bg[2]);
    imagefilledrectangle($canvas, 0, 0, $size, $size, $bgColor);

    // Calcular tamaño del logo manteniendo aspecto.
    $maxSide = (int) round($size * $contentRatio);
    $ratio   = min($maxSide / $srcW, $maxSide / $srcH);
    $dstW    = (int) round($srcW * $ratio);
    $dstH    = (int) round($srcH * $ratio);
    $dstX    = (int) round(($size - $dstW) / 2);
    $dstY    = (int) round(($size - $dstH) / 2);

    imagecopyresampled($canvas, $src, $dstX, $dstY, 0, 0, $dstW, $dstH, $srcW, $srcH);
    imagepng($canvas, $path, 9);
    imagedestroy($canvas);
    echo "  -> {$path}\n";
}

$sizes = [72, 96, 128, 144, 152, 192, 256, 384, 512];
echo "Generando íconos any...\n";
foreach ($sizes as $s) {
    makeIcon($src, $srcW, $srcH, $s, "{$out}/icon-{$s}.png", 0.85, [$bgR,$bgG,$bgB]);
}

echo "Generando íconos maskable (safe area 80%)...\n";
foreach ([192, 512] as $s) {
    makeIcon($src, $srcW, $srcH, $s, "{$out}/icon-maskable-{$s}.png", 0.70, [$bgR,$bgG,$bgB]);
}

echo "Generando apple-touch-icon y favicons...\n";
makeIcon($src, $srcW, $srcH, 180, "{$out}/apple-touch-icon.png", 0.85, [$bgR,$bgG,$bgB]);
makeIcon($src, $srcW, $srcH, 32,  "{$out}/favicon-32.png",       0.90, [$bgR,$bgG,$bgB]);
makeIcon($src, $srcW, $srcH, 16,  "{$out}/favicon-16.png",       0.90, [$bgR,$bgG,$bgB]);

echo "Generando favicon.ico multi-resolución (16, 32, 48)...\n";

/**
 * Devuelve un blob PNG en memoria con el logo centrado sobre fondo sólido.
 */
function pngBlob($src, $srcW, $srcH, int $size, float $contentRatio, array $bg): string {
    $canvas = imagecreatetruecolor($size, $size);
    $bgColor = imagecolorallocate($canvas, $bg[0], $bg[1], $bg[2]);
    imagefilledrectangle($canvas, 0, 0, $size, $size, $bgColor);

    $maxSide = (int) round($size * $contentRatio);
    $ratio   = min($maxSide / $srcW, $maxSide / $srcH);
    $dstW    = (int) round($srcW * $ratio);
    $dstH    = (int) round($srcH * $ratio);
    $dstX    = (int) round(($size - $dstW) / 2);
    $dstY    = (int) round(($size - $dstH) / 2);

    imagecopyresampled($canvas, $src, $dstX, $dstY, 0, 0, $dstW, $dstH, $srcW, $srcH);
    ob_start();
    imagepng($canvas, null, 9);
    $blob = ob_get_clean();
    imagedestroy($canvas);
    return $blob;
}

$icoSizes = [16, 32, 48];
$pngBlobs = [];
foreach ($icoSizes as $s) {
    $pngBlobs[$s] = pngBlob($src, $srcW, $srcH, $s, 0.90, [$bgR,$bgG,$bgB]);
}

$count   = count($pngBlobs);
$header  = pack('vvv', 0, 1, $count);   // reserved=0, type=1 (icon), count=N
$entries = '';
$offset  = 6 + $count * 16;
foreach ($pngBlobs as $size => $blob) {
    // ICONDIRENTRY: width, height (0 = 256), palette, reserved, planes, bpp, size, offset
    $entries .= pack(
        'CCCCvvVV',
        $size === 256 ? 0 : $size,
        $size === 256 ? 0 : $size,
        0,                  // sin palette
        0,                  // reserved
        1,                  // color planes
        32,                 // bits por pixel
        strlen($blob),      // tamaño de la imagen embebida
        $offset
    );
    $offset += strlen($blob);
}

$icoPath = dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'favicon.ico';
file_put_contents($icoPath, $header . $entries . implode('', $pngBlobs));
echo "  -> {$icoPath} (" . filesize($icoPath) . " bytes)\n";

imagedestroy($src);
echo "Listo.\n";
