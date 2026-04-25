<?php
/**
 * @var array $items  Lista [['name' => 'Inicio', 'url' => 'https://...'], ...]
 */
$schema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [],
];
foreach ($items as $i => $it) {
    $schema['itemListElement'][] = [
        '@type'    => 'ListItem',
        'position' => $i + 1,
        'name'     => $it['name'],
        'item'     => $it['url'],
    ];
}
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
