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

imagedestroy($src);
echo "Listo.\n";
