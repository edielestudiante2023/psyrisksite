<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',   'url' => base_url('/')],
    ['name' => 'Recursos', 'url' => base_url('recursos')],
]]) ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"CollectionPage","name":"Recursos sobre riesgo psicosocial en Colombia","url":"<?= base_url('recursos') ?>","description":"Guías y artículos verificados sobre la Resolución 2764, la batería psicosocial, SG-SST, Ley 1581 de habeas data y otros temas de seguridad y salud en el trabajo."}</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <span aria-current="page">Recursos</span>
        </nav>

        <h1>Recursos sobre riesgo psicosocial en Colombia</h1>
        <p class="lead">Guías, explicaciones de normativa y artículos prácticos para áreas de talento humano, SST y consultores. Todo gratuito y verificado por nuestro equipo profesional.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Normativa</span>
            <h2>Lo esencial del marco legal colombiano</h2>
        </div>

        <div class="res-grid">
            <a href="<?= base_url('normativa/resolucion-2764') ?>" class="res-card">
                <span class="pill-cat">Resolución</span>
                <h4>Resolución 2764 de 2022</h4>
                <p>Qué cambia frente a la Resolución 2646, qué exige la nueva norma y cómo cumplirla sin sobresaltos.</p>
                <span class="read-more">Leer guía →</span>
            </a>
            <a href="<?= base_url('normativa/bateria-psicosocial-colombia') ?>" class="res-card">
                <span class="pill-cat">Instrumento</span>
                <h4>Batería Psicosocial Colombia</h4>
                <p>Forma A vs Forma B, dimensiones, tiempos de aplicación y cómo se interpreta cada nivel de riesgo.</p>
                <span class="read-more">Leer guía →</span>
            </a>
            <a href="<?= base_url('normativa/riesgo-psicosocial') ?>" class="res-card">
                <span class="pill-cat">Concepto</span>
                <h4>Riesgo Psicosocial</h4>
                <p>Qué es, qué factores intra y extralaborales lo componen, y por qué es uno de los riesgos más subestimados en SST.</p>
                <span class="read-more">Leer guía →</span>
            </a>
            <a href="<?= base_url('normativa/sg-sst') ?>" class="res-card">
                <span class="pill-cat">Sistema</span>
                <h4>SG-SST en Colombia</h4>
                <p>Sistema de Gestión de la Seguridad y Salud en el Trabajo: estándares mínimos y conexión con riesgo psicosocial.</p>
                <span class="read-more">Leer guía →</span>
            </a>
            <a href="<?= base_url('normativa/ley-1581') ?>" class="res-card">
                <span class="pill-cat">Ley</span>
                <h4>Ley 1581 de 2012 · Habeas Data</h4>
                <p>Cómo proteger datos personales en evaluaciones psicosociales y qué derechos tiene cada trabajador.</p>
                <span class="read-more">Leer guía →</span>
            </a>
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="res-card">
                <span class="pill-cat">Asesoría</span>
                <h4>¿Necesitas asesoría puntual?</h4>
                <p>Habla con nuestro equipo profesional. Resolvemos dudas concretas sobre obligaciones, plazos y procedimientos.</p>
                <span class="read-more">Contactar →</span>
            </a>
        </div>
    </div>
</section>

<section class="cta-final">
    <div class="container">
        <h2>¿Quieres recibir nuevas guías cuando las publiquemos?</h2>
        <p>Escríbenos y te avisamos cuando publiquemos contenido nuevo sobre normativa y buenas prácticas.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Suscribirme</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
