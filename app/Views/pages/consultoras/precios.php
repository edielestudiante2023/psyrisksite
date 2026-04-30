<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',         'url' => base_url('/')],
    ['name' => 'Consultoras',    'url' => base_url('consultoras')],
    ['name' => 'Precios',        'url' => base_url('consultoras/precios')],
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
            <span aria-current="page">Precios</span>
        </nav>

        <h1>Tarifa mayorista por aplicación</h1>
        <p class="lead">Pagas solo por las aplicaciones que ejecutas. Tu margen sobre lo que cobras a tu cliente es 100% tuyo.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Tarifa por volumen anual</span>
            <h2>A más volumen, mejor precio por aplicación</h2>
            <p>El cómputo se hace por aplicaciones acumuladas en los últimos 12 meses.</p>
        </div>

        <div class="pricing-table">
            <table>
                <thead>
                    <tr>
                        <th>Volumen anual</th>
                        <th>Batería Psicosocial</th>
                        <th>Clima Organizacional</th>
                        <th>Servicio Integrado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hasta 5 empresas / año</td>
                        <td class="price-cell">$700.000</td>
                        <td class="price-cell">$760.000</td>
                        <td class="price-cell">$1.300.000</td>
                    </tr>
                    <tr>
                        <td>6 a 15 empresas / año</td>
                        <td class="price-cell">$640.000</td>
                        <td class="price-cell">$700.000</td>
                        <td class="price-cell">$1.180.000</td>
                    </tr>
                    <tr>
                        <td>16 a 30 empresas / año</td>
                        <td class="price-cell">$580.000</td>
                        <td class="price-cell">$640.000</td>
                        <td class="price-cell">$1.080.000</td>
                    </tr>
                    <tr>
                        <td>Más de 30 empresas / año</td>
                        <td class="price-cell">A negociar</td>
                        <td class="price-cell">A negociar</td>
                        <td class="price-cell">A negociar</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p style="text-align:center; color:var(--color-muted); margin-top:18px; font-size:.88rem;">
            * Tarifas para empresas de hasta 50 colaboradores. Empresas más grandes se cobran por persona con descuento por volumen. Valores antes de IVA.
        </p>
    </div>
</section>

<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Ejemplo de margen</span>
            <h2>Cómo se ve un proyecto típico</h2>
        </div>

        <div class="plan-anatomy">
            <h3>Empresa cliente · 40 colaboradores · servicio Batería Psicosocial</h3>
            <div class="subtitle">Volumen anual del consultor: 8 empresas</div>

            <div class="field">
                <div class="name"><span class="num">1</span> Lo que cobras al cliente</div>
                <div class="desc"><strong>$1.500.000 COP</strong> (precio promedio del mercado para el paquete batería en empresa pequeña).</div>
            </div>
            <div class="field">
                <div class="name"><span class="num">2</span> Lo que pagas a PsyRisk</div>
                <div class="desc"><strong>$640.000 COP</strong> (tarifa mayorista por volumen 6-15 empresas).</div>
            </div>
            <div class="field">
                <div class="name"><span class="num">3</span> Tu margen bruto</div>
                <div class="desc"><strong style="color:var(--color-success);">$860.000 COP</strong> por proyecto. Si haces 8 proyectos al año = <strong>$6.880.000 COP</strong> de margen anual con plataforma profesional incluida.</div>
            </div>
            <div class="field">
                <div class="name"><span class="num">4</span> Inversión adicional (opcional)</div>
                <div class="desc">Si activas Marca Propia: $2.800.000 configuración + $3.600.000 cuota anual. Recuperable con 8 a 10 proyectos al año.</div>
            </div>
        </div>
    </div>
</section>

<section class="cta-final">
    <div class="container">
        <h2>¿Calculas tu plan ideal?</h2>
        <p>Crea tu cuenta gratis y explora tarifas dentro de la plataforma, o conversemos sobre tu volumen proyectado.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="<?= signup_url() ?>" target="_blank" rel="noopener" class="btn btn-cta btn-lg">Crear cuenta gratis</a>
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-outline btn-lg">Hablar con un asesor</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
