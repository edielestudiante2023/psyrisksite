<?php
/**
 * @var string $headline
 * @var string $description
 * @var string $url
 * @var string $datePublished (opcional, formato Y-m-d)
 */
$schema = [
    '@context'         => 'https://schema.org',
    '@type'            => 'Article',
    'headline'         => $headline,
    'description'      => $description,
    'url'              => $url,
    'inLanguage'       => 'es-CO',
    'datePublished'    => $datePublished ?? '2026-04-25',
    'dateModified'     => $datePublished ?? '2026-04-25',
    'author'           => [
        '@type' => 'Organization',
        'name'  => 'PsyRisk',
    ],
    'publisher'        => [
        '@type' => 'Organization',
        'name'  => 'PsyRisk',
        'logo'  => [
            '@type' => 'ImageObject',
            'url'   => base_url('assets/img/logo_psirysk.png'),
        ],
    ],
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id'   => $url,
    ],
];
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
