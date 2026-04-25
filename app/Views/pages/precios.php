<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',  'url' => base_url('/')],
    ['name' => 'Precios', 'url' => base_url('precios')],
]]) ?>
<?= view('partials/jsonld-faq', ['faqs' => [
    ['q' => '¿El precio de la batería de riesgo psicosocial incluye IVA?', 'a' => 'No. Las tarifas mostradas son antes de IVA. El IVA aplicable se factura según la legislación colombiana vigente.'],
    ['q' => '¿Cómo se factura el servicio?', 'a' => 'Anticipo del 50% al aceptar cotización + saldo del 50% al entregar el informe oficial. Para empresas con compra recurrente ofrecemos plan de pago a 30 días.'],
    ['q' => '¿Aceptan ARL como pagador del servicio?', 'a' => 'Algunas ARL permiten reembolso parcial bajo el componente de promoción y prevención. Te ayudamos a estructurar la solicitud con la ARL si tu plan lo cubre.'],
    ['q' => '¿El precio incluye desplazamiento si la aplicación es presencial?', 'a' => 'Para Bogotá y Cundinamarca, sí. Para otras regiones cotizamos viáticos por separado. La modalidad virtual no tiene este costo adicional.'],
]]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <span aria-current="page">Precios</span>
        </nav>

        <ul class="tag-list">
            <li>Pago por evaluación</li>
            <li class="purple">Sin suscripciones</li>
            <li>Validez 1 a 2 años</li>
        </ul>

        <h1>Precios <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">claros y predecibles</span></h1>
        <p class="lead">Pagas cuando aplicas. Sin contratos anuales obligatorios, sin sorpresas. La normativa exige reaplicar cada 1 o 2 años — tu inversión también dura ese tiempo.</p>

        <div class="hero-ctas">
            <a href="#" class="btn btn-primary btn-lg">Solicitar cotización</a>
            <a href="<?= base_url('contacto') ?>" class="btn btn-outline btn-lg">Hablar con un asesor</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Tres planes</span>
            <h2>Empresas de 1 a 50 trabajadores</h2>
            <p>Tarifas desde para empresas pequeñas. Para empresas más grandes calculamos por persona con descuentos por volumen.</p>
        </div>

        <div class="pricing-grid">
            <div class="price-card">
                <h3>Batería Psicosocial</h3>
                <div class="tagline">Cumplimiento Resolución 2764</div>
                <div class="price">$1.100.000<span class="currency">COP</span></div>
                <div class="price-from">Desde · 1 a 50 trabajadores</div>
                <ul>
                    <li>Aplicación digital Forma A y B</li>
                    <li>Tabulación automática</li>
                    <li>Informe oficial para Mintrabajo</li>
                    <li>Sistema de Vigilancia Epidemiológica</li>
                    <li>Plan de intervención priorizado</li>
                    <li>Acompañamiento de psicólogo certificado</li>
                </ul>
                <a href="#" class="btn btn-outline">Cotizar</a>
            </div>

            <div class="price-card popular">
                <h3>Servicio Integrado</h3>
                <div class="tagline">Batería + Clima · Ahorra 10%</div>
                <div class="price">$2.070.000<span class="currency">COP</span></div>
                <div class="price-from">Desde · 1 a 50 trabajadores</div>
                <ul>
                    <li>Todo lo del plan Batería Psicosocial</li>
                    <li>Diagnóstico de Clima Organizacional</li>
                    <li>2 capacitaciones de bienestar incluidas</li>
                    <li>Tablero combinado batería + clima</li>
                    <li>Acompañamiento extendido</li>
                    <li>Pulsos cortos trimestrales</li>
                </ul>
                <a href="#" class="btn btn-secondary">Cotizar</a>
            </div>

            <div class="price-card">
                <h3>Clima Organizacional</h3>
                <div class="tagline">Diagnóstico cultural</div>
                <div class="price">$1.200.000<span class="currency">COP</span></div>
                <div class="price-from">Desde · 1 a 50 trabajadores</div>
                <ul>
                    <li>Encuesta segmentada (área, cargo, antigüedad)</li>
                    <li>Reporte ejecutivo</li>
                    <li>2 capacitaciones de bienestar</li>
                    <li>Tablero comparativo por segmento</li>
                    <li>Recomendaciones accionables</li>
                </ul>
                <a href="#" class="btn btn-outline">Cotizar</a>
            </div>
        </div>
    </div>
</section>

<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Tarifa por volumen</span>
            <h2>Empresas medianas y grandes</h2>
            <p>Precio por persona con descuentos progresivos. Cotización formal en 24 horas hábiles.</p>
        </div>

        <div class="pricing-table">
            <table>
                <thead>
                    <tr>
                        <th>Tamaño de empresa</th>
                        <th>Batería Psicosocial</th>
                        <th>Clima Organizacional</th>
                        <th>Servicio Integrado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 a 50 trabajadores</td>
                        <td class="price-cell">$1.100.000 (paquete)</td>
                        <td class="price-cell">$1.200.000 (paquete)</td>
                        <td class="price-cell">$2.070.000 (paquete)</td>
                    </tr>
                    <tr>
                        <td>51 a 150 trabajadores</td>
                        <td class="price-cell">$22.000 / persona</td>
                        <td class="price-cell">$24.000 / persona</td>
                        <td class="price-cell">$41.000 / persona</td>
                    </tr>
                    <tr>
                        <td>151 a 500 trabajadores</td>
                        <td class="price-cell">$18.000 / persona</td>
                        <td class="price-cell">$20.000 / persona</td>
                        <td class="price-cell">$34.000 / persona</td>
                    </tr>
                    <tr>
                        <td>Más de 500 trabajadores</td>
                        <td class="price-cell">A cotización</td>
                        <td class="price-cell">A cotización</td>
                        <td class="price-cell">A cotización</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p style="text-align:center; color:var(--color-muted); margin-top:18px; font-size:.88rem;">
            * Tarifas en pesos colombianos, no incluyen IVA. Pueden variar según ubicación geográfica y modalidad presencial/virtual.
        </p>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Servicios adicionales</span>
            <h2>Capacitaciones, planes a la medida y acompañamiento extendido</h2>
        </div>

        <div class="catalog-grid">
            <div class="catalog-card">
                <div class="head">
                    <h4>Capacitación grupal</h4>
                    <span class="level low">Por sesión</span>
                </div>
                <div class="body">
                    <ul>
                        <li>Sesión de 2 horas (hasta 30 personas) <span class="meta">$650.000</span></li>
                        <li>Programa de 4 sesiones <span class="meta">$2.350.000</span></li>
                        <li>Programa de 8 sesiones <span class="meta">$4.200.000</span></li>
                    </ul>
                </div>
            </div>

            <div class="catalog-card alt">
                <div class="head">
                    <h4>Plan de intervención a medida</h4>
                    <span class="level med">Por proyecto</span>
                </div>
                <div class="body">
                    <ul>
                        <li>Diagnóstico + plan de 6 meses <span class="meta">desde $4.500.000</span></li>
                        <li>Implementación 12 meses <span class="meta">desde $9.800.000</span></li>
                        <li>Acompañamiento dedicado anual <span class="meta">desde $14M</span></li>
                    </ul>
                </div>
            </div>

            <div class="catalog-card">
                <div class="head">
                    <h4>Pulsos trimestrales</h4>
                    <span class="level low">Suscripción opcional</span>
                </div>
                <div class="body">
                    <ul>
                        <li>Pulso de 5-7 preguntas <span class="meta">$280.000 / pulso</span></li>
                        <li>Plan anual de 4 pulsos <span class="meta">$980.000 / año</span></li>
                    </ul>
                </div>
            </div>

            <div class="catalog-card alt">
                <div class="head">
                    <h4>Reaplicaciones (clientes activos)</h4>
                    <span class="level low">Recurrente</span>
                </div>
                <div class="body">
                    <ul>
                        <li>Segunda aplicación de la batería <span class="meta">-15% de descuento</span></li>
                        <li>Reaplicación a partir del 3er ciclo <span class="meta">-20% de descuento</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Preguntas frecuentes</span>
            <h2>Sobre precios y facturación</h2>
        </div>

        <div class="faq">
            <details>
                <summary>¿El precio incluye IVA?</summary>
                <div class="answer"><p>No. Las tarifas mostradas son antes de IVA. El IVA aplicable se factura según la legislación colombiana vigente.</p></div>
            </details>
            <details>
                <summary>¿Cómo se factura?</summary>
                <div class="answer"><p>Anticipo del 50% al aceptar cotización + saldo del 50% al entregar el informe oficial. Para empresas con compra recurrente ofrecemos plan de pago a 30 días.</p></div>
            </details>
            <details>
                <summary>¿Aceptan ARL como pagador?</summary>
                <div class="answer"><p>Algunas ARL permiten reembolso parcial bajo el componente de promoción y prevención. Te ayudamos a estructurar la solicitud con la ARL si tu plan lo cubre.</p></div>
            </details>
            <details>
                <summary>¿El precio incluye desplazamiento si la aplicación es presencial?</summary>
                <div class="answer"><p>Para Bogotá y Cundinamarca, sí. Para otras regiones cotizamos viáticos por separado. La modalidad virtual no tiene este costo adicional.</p></div>
            </details>
        </div>
    </div>
</section>

<section class="cta-final">
    <div class="container">
        <h2>¿Cuántos trabajadores tiene tu empresa?</h2>
        <p>Te enviamos cotización formal en menos de 24 horas hábiles, ajustada a tu sector y región.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="<?= base_url('contacto') ?>" class="btn btn-primary btn-lg">Solicitar cotización</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
