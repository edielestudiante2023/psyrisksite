<?php
/**
 * Generates 5 Open Graph images (1200x630) for psyrisksite at
 * public/assets/img/og/{default,home,precios,consultoras,blog}.png.
 *
 * Each image is a brand-colored gradient with the page title and a tagline.
 * Re-run after editing this file to regenerate.
 *
 *   php tools/generate_og_images.php
 */

if (! extension_loaded('gd')) {
    fwrite(STDERR, "GD extension required.\n");
    exit(1);
}

$outDir = __DIR__ . '/../public/assets/img/og';
if (! is_dir($outDir) && ! mkdir($outDir, 0755, true) && ! is_dir($outDir)) {
    fwrite(STDERR, "Cannot create $outDir\n");
    exit(1);
}

$pages = [
    'default' => [
        'eyebrow' => 'PSYRISK',
        'title'   => 'Batería de Riesgo Psicosocial',
        'tagline' => 'Resolución 2764 · Cumple, decide y actúa con datos.',
    ],
    'home' => [
        'eyebrow' => 'PSYRISK',
        'title'   => 'El riesgo psicosocial deja de ser un PDF',
        'tagline' => 'Plataforma para evaluar, vigilar e intervenir el riesgo en empresas colombianas.',
    ],
    'precios' => [
        'eyebrow' => 'PRECIOS',
        'title'   => 'Pago por evaluación, no por suscripción',
        'tagline' => 'Tres planes desde $1.100.000 COP · Sin contratos obligatorios.',
    ],
    'consultoras' => [
        'eyebrow' => 'PARA CONSULTORAS',
        'title'   => 'La plataforma con tu marca, sin construirla',
        'tagline' => 'Programa para psicólogos consultores y firmas de SST.',
    ],
    'blog' => [
        'eyebrow' => 'BLOG SG-SST',
        'title'   => 'Artículos sobre normativa y riesgo psicosocial',
        'tagline' => 'Resolución 2764, Forma A y B, vigilancia epidemiológica.',
    ],
];

foreach ($pages as $slug => $data) {
    $im = render_og_image(
        $data['eyebrow'],
        $data['title'],
        $data['tagline']
    );

    $path = $outDir . '/' . $slug . '.png';
    imagepng($im, $path, 6);
    imagedestroy($im);
    echo "✓ $path\n";
}

echo "Done.\n";

/**
 * Render a 1200x630 PNG with the brand gradient and supplied texts.
 * Uses GD bundled font (no external fonts required, so portable across servers).
 */
function render_og_image(string $eyebrow, string $title, string $tagline)
{
    $W = 1200;
    $H = 630;

    $im = imagecreatetruecolor($W, $H);

    // Diagonal gradient #3B6FB5 -> #A14BA1
    $start = [0x3B, 0x6F, 0xB5];
    $end   = [0xA1, 0x4B, 0xA1];

    for ($y = 0; $y < $H; $y++) {
        for ($x = 0; $x < $W; $x++) {
            $t = (($x + $y) / ($W + $H));
            $r = (int) ($start[0] + ($end[0] - $start[0]) * $t);
            $g = (int) ($start[1] + ($end[1] - $start[1]) * $t);
            $b = (int) ($start[2] + ($end[2] - $start[2]) * $t);
            imagesetpixel($im, $x, $y, imagecolorallocate($im, $r, $g, $b));
        }
    }

    // Subtle decorative circle (top-right)
    $circleColor = imagecolorallocatealpha($im, 255, 255, 255, 110);
    imagefilledellipse($im, $W - 80, 100, 320, 320, $circleColor);

    // Subtle decorative circle (bottom-left)
    $circleColor2 = imagecolorallocatealpha($im, 255, 255, 255, 115);
    imagefilledellipse($im, 60, $H - 60, 280, 280, $circleColor2);

    // Brand strip on the left
    $stripColor = imagecolorallocatealpha($im, 0, 0, 0, 95);
    imagefilledrectangle($im, 0, 0, 12, $H, $stripColor);

    $white = imagecolorallocate($im, 255, 255, 255);
    $soft  = imagecolorallocatealpha($im, 255, 255, 255, 40);

    // Brand mark: "PsyRisk"
    $brand    = 'PsyRisk';
    $brandFnt = 5;
    $brandX   = 70;
    $brandY   = 60;
    imagestring($im, $brandFnt, $brandX, $brandY, $brand, $white);

    // Eyebrow
    $eyeX = 70;
    $eyeY = 110;
    imagestring($im, 3, $eyeX, $eyeY, mb_strtoupper($eyebrow, 'UTF-8'), $soft);

    // Title (wrap to ~28 chars per line, max 3 lines)
    $titleLines = wrap_text($title, 28, 3);
    $titleY     = 200;
    foreach ($titleLines as $i => $line) {
        // Approximate large title using built-in font 5 with shadow effect
        $shadow = imagecolorallocatealpha($im, 0, 0, 0, 90);
        for ($dx = 0; $dx <= 2; $dx++) {
            for ($dy = 0; $dy <= 2; $dy++) {
                imagestring($im, 5, 70 + $dx, $titleY + ($i * 60) + $dy, $line, $shadow);
            }
        }
        // Render multiple offset copies of font 5 to fake bold-large
        for ($dy = 0; $dy <= 2; $dy++) {
            for ($dx = 0; $dx <= 2; $dx++) {
                imagestring($im, 5, 70 + $dx, $titleY + ($i * 60) + $dy, $line, $white);
            }
        }
    }

    // Tagline (wrap to ~52 chars per line, max 2 lines)
    $taglineLines = wrap_text($tagline, 52, 2);
    $taglineY     = 460;
    foreach ($taglineLines as $i => $line) {
        imagestring($im, 4, 70, $taglineY + ($i * 26), $line, $soft);
    }

    // URL footer
    imagestring($im, 3, 70, $H - 50, 'psyrisksite.cycloidtalent.com', $white);

    // 14 días gratis pill (top-right)
    $pillX1 = $W - 280;
    $pillY1 = 50;
    $pillX2 = $W - 60;
    $pillY2 = 90;
    $pillBg = imagecolorallocatealpha($im, 22, 163, 74, 30);
    imagefilledrectangle($im, $pillX1, $pillY1, $pillX2, $pillY2, $pillBg);
    imagestring($im, 4, $pillX1 + 18, $pillY1 + 12, '14 dias gratis', $white);

    return $im;
}

function wrap_text(string $text, int $maxChars, int $maxLines): array
{
    $words = preg_split('/\s+/', trim($text));
    if (! $words) {
        return [];
    }
    $lines   = [];
    $current = '';
    foreach ($words as $w) {
        if (mb_strlen($current . ' ' . $w) <= $maxChars) {
            $current = $current === '' ? $w : ($current . ' ' . $w);
        } else {
            $lines[] = $current;
            $current = $w;
            if (count($lines) >= $maxLines - 1) {
                break;
            }
        }
    }
    if ($current !== '' && count($lines) < $maxLines) {
        $lines[] = $current;
    }
    if (count($lines) === $maxLines) {
        $last = $lines[$maxLines - 1];
        if (mb_strlen($last) > $maxChars - 1) {
            $lines[$maxLines - 1] = mb_substr($last, 0, $maxChars - 2) . '…';
        }
    }
    return $lines;
}
