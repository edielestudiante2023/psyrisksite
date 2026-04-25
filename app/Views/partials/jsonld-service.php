<?php
/**
 * @var string $name
 * @var string $description
 * @var string $url
 * @var string $serviceType (opcional)
 */
$schema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    'name'        => $name,
    'description' => $description,
    'url'         => $url,
    'serviceType' => $serviceType ?? 'Salud y seguridad en el trabajo',
    'provider'    => [
        '@type' => 'Organization',
        'name'  => 'PsyRisk',
        'url'   => base_url('/'),
        'parentOrganization' => [
            '@type' => 'Organization',
            'name'  => 'Cycloid Talent',
        ],
    ],
    'areaServed'  => [
        '@type' => 'Country',
        'name'  => 'Colombia',
    ],
    'audience'    => [
        '@type' => 'BusinessAudience',
        'audienceType' => 'Empresas en Colombia',
    ],
];
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
