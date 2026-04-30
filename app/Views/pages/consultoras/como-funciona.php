<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',         'url' => base_url('/')],
    ['name' => 'Consultoras',    'url' => base_url('consultoras')],
    ['name' => 'Cómo funciona',  'url' => base_url('consultoras/como-funciona')],
]]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <a href="<?= base_url('consultoras') ?>">Consultoras</a>
            <span class="sep">/</span>
            <span aria-current="page">Cómo funciona</span>
        </nav>

        <h1>Cómo se vincula un consultor a PsyRisk</h1>
        <p class="lead">Cinco pasos simples desde la postulación hasta tu primer cliente cerrado.</p>
    </div>
</section>

<section>
    <div class="container">
        <ol class="timeline" style="max-width:780px; margin:0 auto;">
            <li>
                <h3>Postulación</h3>
                <p>Diligencia el formulario de contacto indicando que eres consultor. Adjuntamos un breve formato para conocer tu trayectoria, formación y la licencia profesional vigente en SST.</p>
            </li>
            <li>
                <h3>Entrevista corta (30 min)</h3>
                <p>Conversación virtual para validar que tu enfoque profesional encaja con la metodología PsyRisk. Aclaramos dudas comerciales y técnicas.</p>
            </li>
            <li>
                <h3>Vinculación</h3>
                <p>Firma de acuerdo de colaboración (no exclusividad), creación de tu usuario en la plataforma y activación de la tarifa mayorista. En la modalidad de Marca Propia añadimos la configuración del subdominio.</p>
            </li>
            <li>
                <h3>Capacitación práctica (4 horas)</h3>
                <p>Te entrenamos en el flujo completo: alta de empresa cliente, aplicación, lectura del tablero, generación del informe oficial y manejo del SVE. Incluye material de apoyo y guías rápidas.</p>
            </li>
            <li>
                <h3>Primera aplicación</h3>
                <p>Tu primer proyecto se ejecuta con acompañamiento de un consultor senior PsyRisk en línea. A partir del segundo, ya operas con autonomía.</p>
            </li>
        </ol>
    </div>
</section>

<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Soporte permanente</span>
            <h2>No te dejamos solo después de vincularte</h2>
        </div>

        <div class="cards-grid" style="grid-template-columns:repeat(3,1fr);">
            <div class="service-card">
                <h3>Soporte técnico</h3>
                <p>Canal directo de WhatsApp para resolver dudas de plataforma en horario hábil.</p>
            </div>
            <div class="service-card purple">
                <h3>Soporte clínico</h3>
                <p>Consulta a nuestros psicólogos senior para casos complejos de interpretación.</p>
            </div>
            <div class="service-card">
                <h3>Comunidad de consultores</h3>
                <p>Encuentros mensuales virtuales para compartir buenas prácticas y casos.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-final">
    <div class="container">
        <h2>¿Listo para empezar?</h2>
        <p>Crea tu cuenta gratis y prueba la plataforma con tus propios clientes en 14 días, o postula al programa formal.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="<?= signup_url() ?>" target="_blank" rel="noopener" class="btn btn-cta btn-lg">Crear cuenta gratis</a>
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-outline btn-lg">Postular al programa</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
