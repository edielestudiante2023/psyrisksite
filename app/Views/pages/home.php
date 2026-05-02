<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- =================== HERO =================== -->
<section class="hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-text">
                <ul class="tag-list" style="margin-bottom:18px;">
                    <li>Resolución 2764 de 2022</li>
                    <li class="purple">Empresas en Colombia</li>
                </ul>
                <h1>El riesgo psicosocial deja de ser un PDF y se vuelve <span class="accent">infraestructura</span></h1>
                <p class="lead">PsyRisk reúne en una sola plataforma la batería oficial, la vigilancia epidemiológica, los planes de intervención y el clima organizacional. Cumple, decide y actúa con datos, no con suposiciones.</p>
                <div class="hero-ctas">
                    <a href="<?= signup_url() ?>" target="_blank" rel="noopener" class="btn btn-cta btn-lg">Crear cuenta gratis</a>
                    <a href="https://wa.me/573229074371?text=Hola,%20quiero%20solicitar%20una%20demo%20de%20PsyRisk" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Solicitar demo</a>
                </div>
                <p style="margin-top:10px; font-size:.85rem; color:var(--color-muted);">14 días gratis · sin tarjeta · cancelas cuando quieras</p>
                <div class="hero-meta">
                    <span><span class="check">✓</span> Forma A y B oficiales</span>
                    <span><span class="check">✓</span> Datos protegidos (Ley 1581)</span>
                    <span><span class="check">✓</span> Soporte de psicólogos certificados</span>
                </div>
            </div>

            <div class="hero-visual" aria-hidden="true" style="background:transparent; border:0; box-shadow:none; padding:0;">
                <div class="hero-illustration">
                    <div class="brain-circle"></div>
                    <div class="brain-ring"></div>
                    <img src="<?= base_url('assets/img/logo_psirysk.png') ?>" alt="" class="brain-img">
                    <span class="orbit-pill tl">✓ Resolución 2764 cumplida</span>
                    <span class="orbit-pill tr">📊 Reporte oficial automático</span>
                    <span class="orbit-pill br">⚡ Plan de intervención generado</span>
                    <span class="orbit-pill bl">🔒 Datos protegidos · Ley 1581</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== PREGUNTA PROVOCATIVA =================== -->
<section class="problem-band">
    <div class="container">
        <span class="quote-mark">“</span>
        <h2>¿Cuándo fue la última vez que tu empresa midió el <em>riesgo psicosocial real</em> y no la versión que cabe en un PDF?</h2>
        <span class="answer-line">Si tienes que pensarlo, <strong>es momento de actuar</strong>.</span>
    </div>
</section>

<!-- =================== CIFRAS DEL PROBLEMA EN COLOMBIA =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">El problema en cifras</span>
            <h2>Colombia tiene un asunto pendiente con la salud mental laboral</h2>
            <p>No es opinión, es lo que reportan las fuentes oficiales. Mientras tanto, la mayoría de empresas siguen evaluando el riesgo psicosocial por cumplimiento mínimo.</p>
        </div>

        <div class="country-stats">
            <div class="country-stat">
                <div class="pct">36.6%</div>
                <div class="text">de los trabajadores colombianos reportan niveles de estrés laboral altos o muy altos.</div>
                <div class="source">Fuente: Encuesta Nacional de Condiciones de Trabajo, Mintrabajo</div>
            </div>
            <div class="country-stat">
                <div class="pct alt">+25%</div>
                <div class="text">aumento de incapacidades por trastornos mentales y del comportamiento entre 2020 y 2023.</div>
                <div class="source">Fuente: Reportes del sistema de seguridad social en Colombia</div>
            </div>
            <div class="country-stat">
                <div class="pct">8 de cada 10</div>
                <div class="text">empresas que aplican la batería no cuentan con un plan de intervención ejecutado al año siguiente.</div>
                <div class="source">Fuente: Estimaciones del sector consultor en SST</div>
            </div>
        </div>
    </div>
</section>

<!-- =================== RUTA PSYRISK =================== -->
<section id="ruta" class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">La ruta PsyRisk</span>
            <h2>Tres movimientos que convierten el cumplimiento en gestión</h2>
            <p>No vendemos encuestas — vendemos un sistema. Cada movimiento alimenta al siguiente y deja huella documental.</p>
        </div>

        <div class="ruta-pillars">
            <article class="ruta-pillar">
                <span class="step-num">1</span>
                <h3>Medir</h3>
                <p>Aplicación digital de la batería oficial y diagnóstico de clima organizacional con segmentación rica.</p>
                <ul>
                    <li>Batería de Riesgo Psicosocial (Forma A y B)</li>
                    <li>Clima Organizacional · 8 dimensiones</li>
                    <li>Tabulación automática y reportes oficiales</li>
                </ul>
            </article>

            <article class="ruta-pillar alt">
                <span class="step-num">2</span>
                <h3>Vigilar</h3>
                <p>Sistema de Vigilancia Epidemiológica activo: indicadores en línea, alertas tempranas y trazabilidad documental para auditoría.</p>
                <ul>
                    <li>SVE Psicosocial continuo</li>
                    <li>Pulsos cortos trimestrales</li>
                    <li>Alertas por umbral y tendencia</li>
                </ul>
            </article>

            <article class="ruta-pillar">
                <span class="step-num">3</span>
                <h3>Intervenir</h3>
                <p>Planes priorizados por dominio, capacitaciones de bienestar y acompañamiento experto para cerrar el ciclo.</p>
                <ul>
                    <li>Planes de intervención trazables</li>
                    <li>Capacitaciones en liderazgo y estrés</li>
                    <li>Soporte de psicólogos certificados</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<!-- =================== CICLO DE GESTIÓN =================== -->
<section>
    <div class="container">
        <div class="split">
            <div class="split-text">
                <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">Ciclo de gestión</span>
                <h2>El riesgo psicosocial no se resuelve una vez — se gestiona siempre</h2>
                <p>La normativa exige reaplicar cada 1 o 2 años, pero la realidad organizacional cambia mucho más rápido. PsyRisk te acompaña en un ciclo que nunca se detiene.</p>
                <p>Cada vuelta del ciclo deja registro: cuándo se midió, qué se encontró, qué se hizo, qué cambió. Esa memoria institucional es lo que el Ministerio del Trabajo busca cuando audita.</p>
                <a href="<?= base_url('servicios/vigilancia-epidemiologica') ?>" class="btn btn-primary">Ver el SVE en detalle</a>
            </div>

            <div class="cycle-vis">
                <div class="cycle-center">
                    <span class="lbl">Ciclo</span>
                    <span class="name">PsyRisk</span>
                </div>
                <div class="cycle-stage top">
                    <div class="step">Etapa 01</div>
                    <div class="name">Diagnóstico</div>
                </div>
                <div class="cycle-stage right">
                    <div class="step">Etapa 02</div>
                    <div class="name">Análisis</div>
                </div>
                <div class="cycle-stage bottom">
                    <div class="step">Etapa 03</div>
                    <div class="name">Intervención</div>
                </div>
                <div class="cycle-stage left">
                    <div class="step">Etapa 04</div>
                    <div class="name">Vigilancia</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== ¿PARA QUIÉN ES PSYRISK? =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Para quién es PsyRisk</span>
            <h2>Tres perfiles que ya están haciendo bien su trabajo con menos esfuerzo</h2>
            <p>Si te identificas con alguno, hablamos el mismo idioma.</p>
        </div>

        <div class="persona-grid">
            <div class="persona-card">
                <span class="role-badge">Empresas</span>
                <h3>Gerencia general y dirección</h3>
                <p class="who">"No quiero descubrir un problema de salud mental cuando ya sea costoso o público."</p>
                <ul class="signals">
                    <li>Necesitas evidencia auditable de cumplimiento</li>
                    <li>Quieres anticipar rotación y ausentismo</li>
                    <li>Buscas un proveedor único, no cinco</li>
                </ul>
                <a href="<?= base_url('servicios/bateria-riesgo') ?>" class="cta-link">Ver oferta para empresas →</a>
            </div>

            <div class="persona-card alt">
                <span class="role-badge">Áreas SST y Talento</span>
                <h3>Coordinación de bienestar y SG-SST</h3>
                <p class="who">"Aplicar la batería en Excel y tabular a mano me consume semanas que necesito para intervenir."</p>
                <ul class="signals">
                    <li>Tabulación automática y reportes listos</li>
                    <li>Plan de intervención sugerido y trazable</li>
                    <li>Tablero que el comité paritario sí entiende</li>
                </ul>
                <a href="<?= base_url('servicios/clima-organizacional') ?>" class="cta-link">Ver herramientas para tu área →</a>
            </div>

            <div class="persona-card">
                <span class="role-badge">Consultores</span>
                <h3>Psicólogos consultores independientes</h3>
                <p class="who">"Quiero ofrecer la batería con marca propia sin construir una plataforma desde cero."</p>
                <ul class="signals">
                    <li>Plataforma con tu marca propia (logo y dominio)</li>
                    <li>Tarifa mayorista por evaluación</li>
                    <li>Soporte técnico y legal incluido</li>
                </ul>
                <a href="<?= base_url('consultoras') ?>" class="cta-link">Ver programa de consultores →</a>
            </div>
        </div>
    </div>
</section>

<!-- =================== PLATAFORMA EN ACCIÓN =================== -->
<section class="dashboard-demo">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Plataforma en acción</span>
            <h2>Una mirada al panel que tu empresa va a usar</h2>
            <p>Datos agregados, segmentados y comparables — sin Excel, sin esperas.</p>
        </div>

        <div class="dashboard-card">
            <div class="head">
                <h4>Resumen por dominio · Empresa Ejemplo S.A.S.</h4>
                <div class="badges">
                    <span class="badge badge-info">248 trabajadores</span>
                    <span class="badge badge-success">95% participación</span>
                </div>
            </div>
            <div style="overflow-x:auto;">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Dominio</th>
                            <th>Puntaje</th>
                            <th>Nivel</th>
                            <th>Tendencia</th>
                            <th>Plan asociado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Liderazgo y relaciones sociales</td>
                            <td>32.4</td>
                            <td><span class="badge badge-warning">Medio</span></td>
                            <td>↘ -8%</td>
                            <td>Taller liderazgo saludable</td>
                        </tr>
                        <tr>
                            <td>Control sobre el trabajo</td>
                            <td>41.7</td>
                            <td><span class="badge badge-danger">Alto</span></td>
                            <td>↗ +5%</td>
                            <td>Rediseño de cargas</td>
                        </tr>
                        <tr>
                            <td>Demandas del trabajo</td>
                            <td>28.1</td>
                            <td><span class="badge badge-warning">Medio</span></td>
                            <td>→ 0%</td>
                            <td>Gestión del estrés</td>
                        </tr>
                        <tr>
                            <td>Recompensa</td>
                            <td>18.6</td>
                            <td><span class="badge badge-success">Bajo</span></td>
                            <td>↘ -3%</td>
                            <td>Mantener</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- =================== DIGITACIÓN INTELIGENTE (teaser ventaja IA) =================== -->
<section class="alt">
    <div class="container">
        <div class="split">
            <div class="split-text">
                <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">Ventaja PsyRisk · IA aplicada</span>
                <h2>Ya no digitamos. <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">Inteligentizamos</span>.</h2>
                <p>Cada cartilla en papel cuesta entre 25 y 30 minutos de digitación manual a buen ritmo. Una jornada de 50 personas se vuelve 20+ horas de teclado — y el error humano crece con el cansancio.</p>
                <p>Con la <strong>digitación inteligente</strong>, fotografías la cartilla desde tu celular, la IA reconoce las marcas y solo arbitras los pocos casos dudosos. El psicólogo vuelve a interpretar; deja de teclear.</p>

                <ul style="list-style:none; padding:0; margin:18px 0 22px; display:flex; flex-direction:column; gap:10px;">
                    <li style="display:flex; align-items:flex-start; gap:10px;"><span style="color:var(--color-success); font-weight:bold; flex-shrink:0;">✓</span><span>La IA digitaliza, tú no tecleas</span></li>
                    <li style="display:flex; align-items:flex-start; gap:10px;"><span style="color:var(--color-success); font-weight:bold; flex-shrink:0;">✓</span><span>Solo arbitras lo dudoso, no cartilla por cartilla</span></li>
                    <li style="display:flex; align-items:flex-start; gap:10px;"><span style="color:var(--color-success); font-weight:bold; flex-shrink:0;">✓</span><span>De semanas a horas en jornadas masivas</span></li>
                </ul>

                <a href="<?= base_url('digitacion-inteligente?utm_source=psyrisksite&utm_medium=internal&utm_campaign=digitacion-inteligente') ?>" class="btn btn-primary">Conoce la digitación inteligente →</a>
            </div>

            <div style="background:linear-gradient(135deg,var(--color-primary-light),#fff); border:1px solid var(--color-border); border-radius:16px; padding:32px; aspect-ratio:4/3; display:flex; flex-direction:column; justify-content:center; gap:16px;">
                <div style="display:flex; align-items:center; gap:14px; padding:14px 18px; background:#fff; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,.04);">
                    <span style="font-size:1.6rem;">📄</span>
                    <div>
                        <div style="font-weight:600; font-size:.95rem;">Aplicas en papel</div>
                        <div style="font-size:.82rem; color:var(--color-muted);">Forma A o B oficial, como siempre</div>
                    </div>
                </div>
                <div style="text-align:center; color:var(--color-secondary); font-weight:bold; font-size:1.2rem;">↓</div>
                <div style="display:flex; align-items:center; gap:14px; padding:14px 18px; background:#fff; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,.04);">
                    <span style="font-size:1.6rem;">📷</span>
                    <div>
                        <div style="font-weight:600; font-size:.95rem;">Fotografías desde el celular</div>
                        <div style="font-size:.82rem; color:var(--color-muted);">La IA reconoce las marcas en segundos</div>
                    </div>
                </div>
                <div style="text-align:center; color:var(--color-secondary); font-weight:bold; font-size:1.2rem;">↓</div>
                <div style="display:flex; align-items:center; gap:14px; padding:14px 18px; background:#fff; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,.04);">
                    <span style="font-size:1.6rem;">📊</span>
                    <div>
                        <div style="font-weight:600; font-size:.95rem;">Reporte oficial generado</div>
                        <div style="font-size:.82rem; color:var(--color-muted);">Sin re-digitar, sin Excel, sin esperas</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== CÓMO SE COMPARA (timeline) =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Cómo se compara</span>
            <h2>La línea del tiempo dice más que un comparativo</h2>
            <p>Lo mismo, pero ejecutado de dos maneras muy distintas. Esta es la diferencia real.</p>
        </div>

        <div class="cmp-timeline">
            <div class="cmp-row">
                <div class="label">Ruta tradicional · ARL</div>
                <div class="track">
                    <span class="cmp-block long">Solicitud + espera 2-4 meses</span>
                    <span class="cmp-arrow">→</span>
                    <span class="cmp-block">Aplicación presencial</span>
                    <span class="cmp-arrow">→</span>
                    <span class="cmp-block long">Tabulación manual 3-6 sem.</span>
                    <span class="cmp-arrow">→</span>
                    <span class="cmp-block">PDF genérico</span>
                </div>
            </div>
            <div class="cmp-row us">
                <div class="label">Con PsyRisk</div>
                <div class="track">
                    <span class="cmp-block short">Solicitud +</span>
                    <span class="cmp-arrow">→</span>
                    <span class="cmp-block psy">Aplicación digital 7 días</span>
                    <span class="cmp-arrow">→</span>
                    <span class="cmp-block short">Tabulación auto. 1 día</span>
                    <span class="cmp-arrow">→</span>
                    <span class="cmp-block psy alt">Tablero + plan + SVE</span>
                </div>
            </div>
        </div>

        <p style="text-align:center; margin-top:24px; color:var(--color-muted); font-size:.92rem;">
            <strong style="color:var(--color-text);">Mismo objetivo, mismo marco legal.</strong> Solo cambia el camino y los entregables.
        </p>
    </div>
</section>

<!-- =================== SECTORES =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Sectores que confían</span>
            <h2>Empresas de industrias muy diversas, mismo objetivo</h2>
            <p>La metodología es la misma; lo que cambia son las preguntas críticas de cada sector. PsyRisk se adapta.</p>
        </div>

        <div class="sector-row">
            <span class="sector-badge">🏭 Manufactura e industria</span>
            <span class="sector-badge">📞 Centros de atención telefónica</span>
            <span class="sector-badge">🏥 Salud y servicios médicos</span>
            <span class="sector-badge">🏗️ Construcción e ingeniería</span>
            <span class="sector-badge">💼 Servicios profesionales</span>
            <span class="sector-badge">🎓 Educación</span>
            <span class="sector-badge">🚛 Logística y transporte</span>
            <span class="sector-badge">🏨 Turismo y hotelería</span>
            <span class="sector-badge">🛒 Retail y consumo masivo</span>
            <span class="sector-badge">💻 Tecnología y software</span>
        </div>
    </div>
</section>

<!-- =================== INVERSIÓN =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Inversión transparente</span>
            <h2>Pago por evaluación, no por suscripción</h2>
            <p>Solo pagas cuando aplicas. Validez de 1 a 2 años según la normativa.</p>
        </div>

        <div class="cta-band">
            <div>
                <h3>Desde $1.100.000 COP por aplicación</h3>
                <p>Empresas de 1 a 50 trabajadores. Tarifa por persona ajustada para empresas más grandes.</p>
            </div>
            <a href="<?= base_url('precios') ?>" class="btn btn-primary btn-lg">Ver tabla completa</a>
        </div>
    </div>
</section>

<!-- =================== CTA FINAL =================== -->
<section class="cta-final">
    <div class="container">
        <h2>Empieza el ciclo hoy — el siguiente reporte llega solo</h2>
        <p>Crea tu cuenta gratis en 2 minutos o agenda una demo de 30 minutos para verlo aplicado a una empresa como la tuya.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="<?= signup_url() ?>" target="_blank" rel="noopener" class="btn btn-cta btn-lg">Crear cuenta gratis</a>
            <a href="https://wa.me/573229074371?text=Hola,%20quiero%20solicitar%20una%20demo%20de%20PsyRisk" target="_blank" rel="noopener" class="btn btn-outline btn-lg">Solicitar demo</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
