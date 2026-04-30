<?php
$pageTitle       = $title       ?? 'PsyRisk - Batería de Riesgo Psicosocial';
$pageDescription = $description ?? 'Plataforma para evaluar, vigilar y gestionar el riesgo psicosocial conforme a la Resolución 2764 de 2022 en Colombia.';
$canonical       = base_url(uri_string());
$ogTitle         = $ogTitle       ?? $pageTitle;
$ogDescription   = $ogDescription ?? $pageDescription;
$ogImage         = $ogImage ?? base_url('assets/img/og/default.png');
$ogImageAlt      = $ogImageAlt ?? $pageTitle;
$ogType          = $ogType  ?? 'website';
$keywords        = $keywords ?? 'batería de riesgo psicosocial, resolución 2764, riesgo psicosocial, evaluación psicosocial Colombia, SG-SST, clima organizacional';

// Versionado de assets para invalidar caches (browser, CDN, SW) en cada release.
$assetVer = '7';

$organizationLd = [
    '@context'      => 'https://schema.org',
    '@type'         => 'Organization',
    'name'          => 'PsyRisk',
    'alternateName' => 'PsyRisk - Batería de Riesgo Psicosocial',
    'url'           => base_url('/'),
    'logo'          => base_url('assets/img/logo_psirysk.png'),
    'description'   => 'Plataforma para evaluar, vigilar y gestionar el riesgo psicosocial conforme a la Resolución 2764 de 2022 en Colombia.',
    'parentOrganization' => [
        '@type' => 'Organization',
        'name'  => 'Cycloid Talent',
    ],
    'address' => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => 'Tv. 24B #17-209',
        'addressLocality' => 'Soacha',
        'addressRegion'   => 'Cundinamarca',
        'addressCountry'  => 'CO',
    ],
    'contactPoint' => [
        '@type'             => 'ContactPoint',
        'telephone'         => '+57-322-907-4371',
        'email'             => 'diana.cuestas@cycloidtalent.com',
        'contactType'       => 'sales',
        'areaServed'        => 'CO',
        'availableLanguage' => ['Spanish'],
    ],
    'sameAs' => [
        'https://www.facebook.com/CycloidTalent',
        'https://co.linkedin.com/company/cycloid-talent',
        'https://www.instagram.com/cycloid_talent',
        'https://www.tiktok.com/@cycloid_talent',
    ],
];
?>
<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <!-- Google Search Console verification -->
    <meta name="google-site-verification" content="tGfrKoq0CsfwItQ3bQYWhE7_dLeDy6HOq3K5yQSZJwA">

    <title><?= esc($pageTitle) ?></title>
    <meta name="description" content="<?= esc($pageDescription) ?>">
    <meta name="keywords" content="<?= esc($keywords) ?>">
    <meta name="author" content="Cycloid Talent">
    <meta name="robots" content="index, follow, max-image-preview:large">

    <link rel="canonical" href="<?= esc($canonical) ?>">

    <!-- Geo (Colombia) -->
    <meta name="geo.region" content="CO-CUN">
    <meta name="geo.placename" content="Soacha, Cundinamarca">
    <meta name="geo.position" content="4.5790;-74.2167">
    <meta name="ICBM" content="4.5790, -74.2167">

    <!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:locale" content="es_CO">
    <meta property="og:type" content="<?= esc($ogType) ?>">
    <meta property="og:title" content="<?= esc($ogTitle) ?>">
    <meta property="og:description" content="<?= esc($ogDescription) ?>">
    <meta property="og:url" content="<?= esc($canonical) ?>">
    <meta property="og:site_name" content="PsyRisk">
    <meta property="og:image" content="<?= esc($ogImage) ?>">
    <meta property="og:image:secure_url" content="<?= esc($ogImage) ?>">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?= esc($ogImageAlt) ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@psyrisk">
    <meta name="twitter:title" content="<?= esc($ogTitle) ?>">
    <meta name="twitter:description" content="<?= esc($ogDescription) ?>">
    <meta name="twitter:image" content="<?= esc($ogImage) ?>">
    <meta name="twitter:image:alt" content="<?= esc($ogImageAlt) ?>">

    <!-- PWA: manifest y tema -->
    <link rel="manifest" href="<?= base_url('manifest.webmanifest') ?>">
    <meta name="theme-color" content="#3B6FB5">
    <meta name="application-name" content="PsyRisk">

    <!-- iOS / Apple -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="PsyRisk">
    <link rel="apple-touch-icon" href="<?= base_url('assets/img/icons/apple-touch-icon.png') ?>?v=<?= $assetVer ?>">

    <!-- Windows Tile -->
    <meta name="msapplication-TileColor" content="#3B6FB5">
    <meta name="msapplication-TileImage" content="<?= base_url('assets/img/icons/icon-144.png') ?>?v=<?= $assetVer ?>">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>?v=<?= $assetVer ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/icons/favicon-32.png') ?>?v=<?= $assetVer ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/icons/favicon-16.png') ?>?v=<?= $assetVer ?>">
    <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>?v=<?= $assetVer ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/psyrisk.css') ?>?v=<?= $assetVer ?>">

    <!-- JSON-LD: Organization -->
    <script type="application/ld+json"><?= json_encode($organizationLd, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>

    <?= $this->renderSection('jsonld') ?>
    <?= $this->renderSection('head') ?>
</head>
<body>
    <?= view('partials/header', ['activeNav' => $activeNav ?? '']) ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= view('partials/footer') ?>
    <?= view('partials/referidos-float') ?>
    <?= view('partials/whatsapp') ?>

    <script src="<?= base_url('assets/js/psyrisk.js') ?>?v=<?= $assetVer ?>" defer></script>
    <script src="<?= base_url('assets/js/pwa.js') ?>?v=<?= $assetVer ?>" defer></script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
