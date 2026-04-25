<?php
/**
 * @var array $faqs  Lista [['q' => '¿Pregunta?', 'a' => 'Respuesta'], ...]
 */
$schema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [],
];
foreach ($faqs as $f) {
    $schema['mainEntity'][] = [
        '@type' => 'Question',
        'name'  => $f['q'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => $f['a'],
        ],
    ];
}
?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
