<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',         'url' => base_url('/')],
    ['name' => 'Consultoras',    'url' => base_url('consultoras')],
    ['name' => 'Marca Propia',   'url' => base_url('consultoras/marca-propia')],
]]) ?>
<?= view('partials/jsonld-service', [
    'name'        => 'Plataforma con Marca Propia para Consultores',
    'description' => 'Plataforma de batería de riesgo psicosocial con tu logo, dominio y firma profesional. El consultor mantiene el vínculo con sus clientes mientras PsyRisk opera la tecnología en segundo plano.',
    'url'         => base_url('consultoras/marca-propia'),
    'serviceType' => 'Plataforma marca propia',
]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <a href="<?= base_url('consultoras') ?>">Consultoras</a>
            <span class="sep">/</span>
            <span aria-current="page">Marca Propia</span>
        </nav>

        <ul class="tag-list">
            <li>Tu logo</li>
            <li class="purple">Tu dominio</li>
            <li>Tu firma profesional</li>
        </ul>

        <h1>La plataforma con <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">tu marca</span> — sin construir nada</h1>
        <p class="lead">Tu cliente entra a tudominio.com, ve tu logo, recibe los reportes con tu firma y nunca se entera de que la tecnología la opera PsyRisk. Tú mantienes el vínculo profesional al 100%.</p>

        <div class="hero-ctas">
            <a href="<?= base_url('contacto') ?>" class="btn btn-primary btn-lg">Solicitar demo de Marca Propia</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Qué se personaliza</span>
            <h2>Tu marca en cada punto de contacto del cliente</h2>
        </div>

        <div class="dim-grid">
            <div class="dim-card">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                </span>
                <h4>Subdominio</h4>
                <p>tudominio.com</p>
            </div>
            <div class="dim-card alt">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                </span>
                <h4>Logo y colores</h4>
                <p>Identidad visual</p>
            </div>
            <div class="dim-card">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </span>
                <h4>Reportes oficiales</h4>
                <p>Tu firma profesional</p>
            </div>
            <div class="dim-card alt">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </span>
                <h4>Correos al cliente</h4>
                <p>Desde tu correo</p>
            </div>
            <div class="dim-card">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                </span>
                <h4>Tablero del cliente</h4>
                <p>Header con tu logo</p>
            </div>
            <div class="dim-card alt">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </span>
                <h4>Certificados</h4>
                <p>Tu sello y firma</p>
            </div>
            <div class="dim-card">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </span>
                <h4>Política de privacidad</h4>
                <p>Tu razón social</p>
            </div>
            <div class="dim-card alt">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </span>
                <h4>Soporte al cliente</h4>
                <p>WhatsApp tuyo</p>
            </div>
        </div>
    </div>
</section>

<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Inversión</span>
            <h2>Costos y vigencia de la modalidad Marca Propia</h2>
        </div>

        <div class="pricing-grid">
            <div class="price-card">
                <h3>Configuración inicial</h3>
                <div class="tagline">Único pago al activar</div>
                <div class="price">$2.800.000<span class="currency">COP</span></div>
                <ul>
                    <li>Configuración de subdominio</li>
                    <li>Aplicación de logo y colores</li>
                    <li>Personalización de plantillas de reporte</li>
                    <li>Capacitación de equipo</li>
                </ul>
                <a href="<?= base_url('contacto') ?>" class="btn btn-outline">Cotizar</a>
            </div>

            <div class="price-card popular">
                <h3>Cuota anual</h3>
                <div class="tagline">Mantenimiento y soporte</div>
                <div class="price">$3.600.000<span class="currency">COP / año</span></div>
                <ul>
                    <li>Infraestructura y soporte</li>
                    <li>Actualizaciones de plataforma</li>
                    <li>Gestión del subdominio</li>
                    <li>Tarifa mayorista por aplicación aparte</li>
                </ul>
                <a href="<?= base_url('contacto') ?>" class="btn btn-secondary">Cotizar</a>
            </div>

            <div class="price-card">
                <h3>Tarifa mayorista por aplicación</h3>
                <div class="tagline">Cobras lo que quieras a tu cliente</div>
                <div class="price">Desde $640.000<span class="currency">COP</span></div>
                <ul>
                    <li>Empresa de hasta 50 colaboradores</li>
                    <li>Tarifa por persona en empresas grandes</li>
                    <li>Margen 100% tuyo sobre lo que cobres</li>
                    <li>Sin tope de aplicaciones por año</li>
                </ul>
                <a href="<?= base_url('contacto') ?>" class="btn btn-outline">Ver tarifas</a>
            </div>
        </div>
    </div>
</section>

<section class="cta-final">
    <div class="container">
        <h2>Lleva tu consultoría al siguiente nivel</h2>
        <p>Conversemos sobre tu cartera, tu propuesta de valor y cómo PsyRisk Marca Propia puede multiplicarla.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="<?= base_url('contacto') ?>" class="btn btn-primary btn-lg">Solicitar demo personalizada</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
