<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',                      'url' => base_url('/')],
    ['name' => 'Para Psicólogos y Consultoras', 'url' => base_url('consultoras')],
]]) ?>
<?= view('partials/jsonld-service', [
    'name'        => 'Programa para Psicólogos Consultores',
    'description' => 'Programa para psicólogos consultores y firmas de consultoría que ofrecen batería de riesgo psicosocial, clima organizacional y vigilancia epidemiológica con tecnología profesional. Modalidades: plataforma compartida o marca propia.',
    'url'         => base_url('consultoras'),
    'serviceType' => 'Plataforma para consultores en SST',
]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <span aria-current="page">Para Psicólogos y Consultoras</span>
        </nav>

        <ul class="tag-list">
            <li>Programa profesional</li>
            <li class="purple">Marca propia disponible</li>
            <li>Tarifa mayorista</li>
        </ul>

        <h1>La plataforma de tus clientes <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">no la tienes que construir</span></h1>
        <p class="lead">Si eres psicólogo consultor independiente o tienes una firma de consultoría en SST, PsyRisk te entrega la plataforma para que ofrezcas batería, clima y vigilancia con tecnología profesional. Tú pones el conocimiento y la relación; nosotros la infraestructura.</p>

        <div class="hero-ctas">
            <a href="<?= base_url('contacto') ?>" class="btn btn-primary btn-lg">Postular al programa</a>
            <a href="<?= base_url('consultoras/como-funciona') ?>" class="btn btn-outline btn-lg">Ver cómo funciona</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Por qué unirte</span>
            <h2>Cuatro razones para dejar Excel atrás</h2>
        </div>

        <div class="cards-grid">
            <article class="service-card">
                <span class="ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 17 9 11 13 15 21 7"/><polyline points="14 7 21 7 21 14"/></svg></span>
                <h3>Más clientes con menos esfuerzo</h3>
                <p>Atiende empresas más grandes sin ahogarte en tabulación. La plataforma hace el trabajo operativo.</p>
            </article>
            <article class="service-card purple">
                <span class="ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></span>
                <h3>Cierras proyectos en días, no meses</h3>
                <p>De la solicitud al informe final en menos de 14 días hábiles. Más rotación de proyectos, más facturación.</p>
            </article>
            <article class="service-card">
                <span class="ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
                <h3>Imagen profesional desde el día 1</h3>
                <p>Reportes, tableros y certificados con calidad de empresa grande. Tus clientes notan la diferencia.</p>
            </article>
            <article class="service-card purple">
                <span class="ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></span>
                <h3>Cumplimiento Ley 1581 incluido</h3>
                <p>Manejo de habeas data, anonimización y trazabilidad. No tienes que preocuparte por la parte legal.</p>
            </article>
        </div>
    </div>
</section>

<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Dos modalidades</span>
            <h2>Elige cómo trabajar con PsyRisk</h2>
        </div>

        <div class="forma-grid">
            <div class="forma-card a">
                <span class="label-pill">Modalidad 1</span>
                <h3>Plataforma compartida</h3>
                <p class="target">Tu cliente accede a PsyRisk con la marca PsyRisk visible. Tú facturas tus honorarios profesionales aparte.</p>
                <ul>
                    <li>Costo de plataforma <span class="v">tarifa mayorista por aplicación</span></li>
                    <li>Configuración <span class="v">inmediata</span></li>
                    <li>Tus honorarios <span class="v">tú los defines</span></li>
                    <li>Marca visible <span class="v">PsyRisk</span></li>
                </ul>
            </div>

            <div class="forma-card b">
                <span class="label-pill">Modalidad 2</span>
                <h3>Marca Propia</h3>
                <p class="target">La plataforma se presenta con tu logo, dominio y firma. Tu cliente nunca ve la marca PsyRisk.</p>
                <ul>
                    <li>Costo de plataforma <span class="v">tarifa mayorista + cuota anual</span></li>
                    <li>Configuración <span class="v">2 a 3 semanas</span></li>
                    <li>Tus honorarios <span class="v">tú los defines</span></li>
                    <li>Marca visible <span class="v">la tuya</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="cta-final">
    <div class="container">
        <h2>Postula al programa de consultores</h2>
        <p>Recibimos solicitudes con perfil profesional y trayectoria. Te respondemos en 3 días hábiles con propuesta de vinculación.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="<?= base_url('contacto') ?>" class="btn btn-primary btn-lg">Quiero postular</a>
            <a href="<?= base_url('consultoras/precios') ?>" class="btn btn-outline btn-lg">Ver precios para consultores</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
