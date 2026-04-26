<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',                       'url' => base_url('/')],
    ['name' => 'Servicios',                    'url' => base_url('/#servicios')],
    ['name' => 'Batería de Riesgo Psicosocial','url' => base_url('servicios/bateria-riesgo')],
]]) ?>
<?= view('partials/jsonld-service', [
    'name'        => 'Batería de Riesgo Psicosocial',
    'description' => 'Aplicación digital de la batería oficial Forma A y B conforme a la Resolución 2764 de 2022 con tabulación automática, informe ejecutivo, vigilancia epidemiológica y plan de intervención.',
    'url'         => base_url('servicios/bateria-riesgo'),
    'serviceType' => 'Evaluación de riesgo psicosocial',
]) ?>
<?= view('partials/jsonld-faq', ['faqs' => [
    ['q' => '¿La aplicación digital de la batería es válida ante el Ministerio del Trabajo de Colombia?', 'a' => 'Sí. La Resolución 2764 de 2022 no exige modalidad presencial; exige que la aplicación sea realizada por psicólogo con licencia en SST y que los resultados queden documentados. PsyRisk cumple ambos requisitos.'],
    ['q' => '¿Cada cuánto debo aplicar la batería de riesgo psicosocial?', 'a' => 'La normativa establece reaplicación cada 1 año si la última evaluación arrojó nivel de riesgo alto o muy alto, y cada 2 años si el resultado fue bajo, medio o sin riesgo.'],
    ['q' => '¿Quién puede acceder a los resultados individuales de la batería?', 'a' => 'Únicamente el psicólogo responsable del estudio. La empresa solo recibe resultados agregados por área, cargo o sociodemografía. PsyRisk cumple la Ley 1581 de Habeas Data.'],
    ['q' => '¿Qué sucede si un colaborador no responde la batería?', 'a' => 'Se reporta como no participación documentando el intento. PsyRisk genera el log de aplicación y los recordatorios automáticamente.'],
    ['q' => '¿Cuánto tarda el proceso completo de la batería con PsyRisk?', 'a' => 'Para una empresa de hasta 80 colaboradores el proceso completo (alistamiento + aplicación + entrega del informe) toma 14 días hábiles.'],
    ['q' => '¿La ARL no debería aplicarme la batería gratis?', 'a' => 'La ARL puede ofrecerlo, pero suele tener tiempos de espera de 3 a 6 meses, entrega un informe genérico y no incluye plan de intervención ni vigilancia continua. PsyRisk garantiza tiempos cortos, entregables ricos y acompañamiento real.'],
]]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- =================== PAGE HERO =================== -->
<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <a href="<?= base_url('/#servicios') ?>">Servicios</a>
            <span class="sep">/</span>
            <span aria-current="page">Batería de Riesgo Psicosocial</span>
        </nav>

        <ul class="tag-list">
            <li>Resolución 2764 de 2022</li>
            <li>Forma A · Jefes y profesionales</li>
            <li class="purple">Forma B · Operativos</li>
            <li>Aplicación 100% digital</li>
        </ul>

        <h1>Batería de Riesgo Psicosocial conforme a la <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">Resolución 2764</span></h1>
        <p class="lead">Aplicamos el instrumento oficial validado por el Ministerio del Trabajo de Colombia. PsyRisk digitaliza el proceso completo: aplicación, tabulación, informe oficial, vigilancia epidemiológica y plan de intervención — todo desde una sola plataforma.</p>

        <div class="hero-ctas">
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Solicitar cotización</a>
            <a href="#como-funciona" class="btn btn-outline btn-lg">Ver cómo funciona</a>
        </div>
    </div>
</section>

<!-- =================== ¿QUÉ ES? =================== -->
<section>
    <div class="container">
        <div class="split">
            <div class="split-text">
                <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">¿Qué es?</span>
                <h2>Un instrumento legal, no una encuesta más</h2>
                <p>La Batería de Riesgo Psicosocial es el conjunto de cuestionarios oficiales que toda empresa colombiana debe aplicar a sus colaboradores para identificar, evaluar y mitigar los factores intra y extralaborales que afectan la salud mental.</p>
                <p>Está reglamentada por la <strong>Resolución 2764 de 2022</strong>, sustituye a la Resolución 2646 de 2008, y su omisión expone a la organización a sanciones del Ministerio del Trabajo, incidentes laborales y demandas por enfermedad profesional.</p>
                <p>PsyRisk no reemplaza al instrumento — lo digitaliza, lo automatiza y lo entrega listo para auditoría.</p>
            </div>

            <div class="split-visual">
                <div style="display:grid; gap:14px;">
                    <div style="background:#fff; padding:18px; border-radius:var(--radius-md); box-shadow:var(--shadow-sm);">
                        <div style="font-size:.78rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:6px;">Marco legal</div>
                        <div style="font-weight:700; color:var(--color-primary);">Resolución 2764 / 2022</div>
                        <div style="font-size:.85rem; color:var(--color-text-soft); margin-top:4px;">Mintrabajo · Ministerio de Salud</div>
                    </div>
                    <div style="background:#fff; padding:18px; border-radius:var(--radius-md); box-shadow:var(--shadow-sm);">
                        <div style="font-size:.78rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:6px;">Periodicidad</div>
                        <div style="font-weight:700; color:var(--color-primary);">1 año (riesgo alto) · 2 años (riesgo bajo/medio)</div>
                    </div>
                    <div style="background:linear-gradient(135deg, var(--color-primary), var(--color-secondary)); padding:18px; border-radius:var(--radius-md); color:#fff;">
                        <div style="font-size:.78rem; opacity:.85; text-transform:uppercase; letter-spacing:.08em; margin-bottom:6px;">Aplicación obligatoria</div>
                        <div style="font-weight:700;">Toda empresa con 1 o más colaboradores</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== ¿CUÁNDO APLICA? =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Cuándo aplica</span>
            <h2>Tres escenarios donde tu empresa la necesita</h2>
            <p>No esperes una visita del Ministerio para descubrir que estás en mora.</p>
        </div>

        <div class="cards-grid" style="grid-template-columns:repeat(3,1fr);">
            <article class="service-card">
                <span class="ico">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </span>
                <h3>Cumplimiento periódico</h3>
                <p>Si ya pasó 1 año (riesgo alto) o 2 años (medio/bajo) desde tu última evaluación, debes reaplicar para mantener vigente el cumplimiento.</p>
            </article>

            <article class="service-card purple">
                <span class="ico">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 2 7l10 5 10-5-10-5z"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                </span>
                <h3>Cambio organizacional</h3>
                <p>Reestructuraciones, fusiones, expansión rápida, nuevos turnos o cambios de modelo (presencial → híbrido) obligan a reevaluar el riesgo.</p>
            </article>

            <article class="service-card">
                <span class="ico">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                </span>
                <h3>Alertas tempranas</h3>
                <p>Aumento de incapacidades, rotación, conflictos internos o reportes de estrés son señales que ameritan diagnóstico inmediato.</p>
            </article>
        </div>
    </div>
</section>

<!-- =================== FORMA A vs FORMA B =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Instrumento oficial</span>
            <h2>Forma A y Forma B — los dos cuestionarios validados</h2>
            <p>PsyRisk aplica la versión correspondiente a cada colaborador según su perfil ocupacional, sin que tengas que decidir manualmente.</p>
        </div>

        <div class="forma-grid">
            <div class="forma-card a">
                <span class="label-pill">Forma A</span>
                <h3>Jefes, profesionales y técnicos</h3>
                <p class="target">Colaboradores con personal a cargo, formación profesional o cargos de coordinación.</p>
                <ul>
                    <li>Total de ítems <span class="v">123</span></li>
                    <li>Tiempo estimado <span class="v">35–45 min</span></li>
                    <li>Dimensiones intralaborales <span class="v">19</span></li>
                    <li>Dimensiones extralaborales <span class="v">7</span></li>
                    <li>Estrés (cuestionario adicional) <span class="v">Incluido</span></li>
                </ul>
            </div>

            <div class="forma-card b">
                <span class="label-pill">Forma B</span>
                <h3>Auxiliares, operarios y personal operativo</h3>
                <p class="target">Colaboradores sin personal a cargo, formación técnica/auxiliar y cargos operativos.</p>
                <ul>
                    <li>Total de ítems <span class="v">97</span></li>
                    <li>Tiempo estimado <span class="v">25–35 min</span></li>
                    <li>Dimensiones intralaborales <span class="v">16</span></li>
                    <li>Dimensiones extralaborales <span class="v">7</span></li>
                    <li>Estrés (cuestionario adicional) <span class="v">Incluido</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- =================== CÓMO LO HACEMOS =================== -->
<section id="como-funciona" class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Cómo lo hacemos</span>
            <h2>De la solicitud al informe oficial en 4 etapas</h2>
            <p>Sin instalaciones, sin tabulación manual, sin papeleo. Cada etapa con tiempos predecibles.</p>
        </div>

        <div class="split">
            <div class="split-text">
                <ol class="timeline">
                    <li>
                        <h3>Alistamiento (día 1 a 3)</h3>
                        <p>Cargamos tu base de colaboradores en la plataforma, configuramos áreas, cargos y la información sociodemográfica. Definimos el cronograma de aplicación contigo.</p>
                    </li>
                    <li>
                        <h3>Aplicación digital (día 4 a 10)</h3>
                        <p>Cada colaborador recibe un acceso único y responde la batería desde computador o celular. Seguimiento en tiempo real del avance por área.</p>
                    </li>
                    <li>
                        <h3>Tabulación automática (día 11)</h3>
                        <p>El motor PsyRisk calcula puntajes brutos, transformados y niveles según la metodología oficial. Cero errores de Excel.</p>
                    </li>
                    <li>
                        <h3>Entrega (día 12 a 14)</h3>
                        <p>Reporte oficial PDF + tablero interactivo + plan de intervención priorizado por dominio. Listo para Mintrabajo y comité paritario.</p>
                    </li>
                </ol>
            </div>

            <div class="split-visual">
                <div style="font-size:.8rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:14px;">Cronograma típico — empresa 80 personas</div>
                <div style="display:flex; flex-direction:column; gap:10px;">
                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:44px; font-weight:700; color:var(--color-primary); font-size:.85rem;">D1-3</div>
                        <div style="flex:1; height:8px; background:var(--color-primary-light); border-radius:4px; position:relative;"><div style="position:absolute; left:0; top:0; height:100%; width:18%; background:var(--color-primary); border-radius:4px;"></div></div>
                        <div style="font-size:.85rem; width:90px; color:var(--color-text-soft);">Alistamiento</div>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:44px; font-weight:700; color:var(--color-primary); font-size:.85rem;">D4-10</div>
                        <div style="flex:1; height:8px; background:var(--color-primary-light); border-radius:4px; position:relative;"><div style="position:absolute; left:18%; top:0; height:100%; width:42%; background:var(--color-secondary); border-radius:4px;"></div></div>
                        <div style="font-size:.85rem; width:90px; color:var(--color-text-soft);">Aplicación</div>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:44px; font-weight:700; color:var(--color-primary); font-size:.85rem;">D11</div>
                        <div style="flex:1; height:8px; background:var(--color-primary-light); border-radius:4px; position:relative;"><div style="position:absolute; left:60%; top:0; height:100%; width:8%; background:var(--color-primary); border-radius:4px;"></div></div>
                        <div style="font-size:.85rem; width:90px; color:var(--color-text-soft);">Tabulación</div>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <div style="width:44px; font-weight:700; color:var(--color-primary); font-size:.85rem;">D12-14</div>
                        <div style="flex:1; height:8px; background:var(--color-primary-light); border-radius:4px; position:relative;"><div style="position:absolute; left:68%; top:0; height:100%; width:32%; background:var(--color-secondary); border-radius:4px;"></div></div>
                        <div style="font-size:.85rem; width:90px; color:var(--color-text-soft);">Entrega</div>
                    </div>
                </div>
                <div style="margin-top:18px; padding-top:18px; border-top:1px solid var(--color-border); display:flex; justify-content:space-between; font-size:.85rem; color:var(--color-text-soft);">
                    <span>Total estimado</span>
                    <strong style="color:var(--color-primary);">14 días hábiles</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== ENTREGABLES =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Qué recibe tu empresa</span>
            <h2>Entregables tangibles, listos para auditoría</h2>
            <p>Cada batería aplicada con PsyRisk se cierra con seis productos verificables.</p>
        </div>

        <div class="deliv-grid">
            <div class="deliv-card">
                <span class="ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></span>
                <h4>Informe oficial PDF</h4>
                <p>Reporte ejecutivo firmado por psicólogo especialista en SST, listo para presentar a Mintrabajo.</p>
            </div>
            <div class="deliv-card">
                <span class="ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></span>
                <h4>Tablero interactivo</h4>
                <p>Acceso 24/7 al panel con filtros por área, cargo, género y tendencias entre periodos.</p>
            </div>
            <div class="deliv-card">
                <span class="ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 17 9 11 13 15 21 7"/><polyline points="14 7 21 7 21 14"/></svg></span>
                <h4>Plan de intervención</h4>
                <p>Recomendaciones priorizadas por dominio, con responsables, plazos y métricas sugeridas.</p>
            </div>
            <div class="deliv-card">
                <span class="ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></span>
                <h4>Sistema de Vigilancia</h4>
                <p>SVE con indicadores activos: tasa de exposición, casos sospechosos y seguimiento de planes.</p>
            </div>
            <div class="deliv-card">
                <span class="ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg></span>
                <h4>Acompañamiento experto</h4>
                <p>Sesión de socialización y resolución de dudas con el psicólogo responsable del estudio.</p>
            </div>
            <div class="deliv-card">
                <span class="ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></span>
                <h4>Certificado de cumplimiento</h4>
                <p>Constancia oficial PsyRisk con la fecha de aplicación, vigencia y cobertura del estudio.</p>
            </div>
        </div>
    </div>
</section>

<!-- =================== CTA BAND =================== -->
<section>
    <div class="container">
        <div class="cta-band">
            <div>
                <h3>¿Cuántos colaboradores tiene tu empresa?</h3>
                <p>Te enviamos cotización personalizada en menos de 24 horas hábiles.</p>
            </div>
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Solicitar cotización</a>
        </div>
    </div>
</section>

<!-- =================== FAQ =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Preguntas frecuentes</span>
            <h2>Lo que más nos preguntan sobre la batería</h2>
        </div>

        <div class="faq">
            <details>
                <summary>¿La aplicación digital es válida ante el Ministerio del Trabajo?</summary>
                <div class="answer">
                    <p>Sí. La Resolución 2764 de 2022 no exige modalidad presencial: lo que exige es que la aplicación sea realizada por psicólogo con licencia en SST y que los resultados queden documentados. PsyRisk cumple ambos requisitos.</p>
                </div>
            </details>
            <details>
                <summary>¿Cada cuánto debo aplicarla?</summary>
                <div class="answer">
                    <p>La normativa establece reaplicación cada <strong>1 año</strong> si tu última evaluación arrojó nivel de riesgo <em>alto o muy alto</em>, y cada <strong>2 años</strong> si el resultado fue <em>bajo, medio o sin riesgo</em>.</p>
                </div>
            </details>
            <details>
                <summary>¿Quién puede acceder a los resultados individuales?</summary>
                <div class="answer">
                    <p>Únicamente el psicólogo responsable del estudio. La empresa solo recibe resultados <strong>agregados</strong> (por área, cargo o sociodemografía) — nunca datos individuales identificables. PsyRisk cumple la Ley 1581 de Habeas Data.</p>
                </div>
            </details>
            <details>
                <summary>¿Qué sucede si un colaborador no responde la batería?</summary>
                <div class="answer">
                    <p>La normativa permite reportar el caso como "no participación" siempre que se documente el intento. PsyRisk genera automáticamente el log de aplicación y los recordatorios necesarios.</p>
                </div>
            </details>
            <details>
                <summary>¿Cuánto tarda todo el proceso?</summary>
                <div class="answer">
                    <p>Para una empresa de hasta 80 colaboradores, el proceso completo (alistamiento + aplicación + entrega del informe) toma <strong>14 días hábiles</strong>. Empresas más grandes tienen cronogramas escalados que ajustamos en la cotización.</p>
                </div>
            </details>
            <details>
                <summary>¿La ARL no debería aplicarme la batería gratis?</summary>
                <div class="answer">
                    <p>Tu ARL puede ofrecerte el servicio, pero suele tener tiempos de espera de 3 a 6 meses, entrega un informe genérico y no incluye plan de intervención ni vigilancia continua. PsyRisk garantiza tiempos cortos, entregables ricos y acompañamiento real.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- =================== CTA FINAL =================== -->
<section class="cta-final">
    <div class="container">
        <h2>Cumple, evalúa y gestiona — todo desde una sola plataforma</h2>
        <p>Más de un instrumento legal: PsyRisk es la infraestructura que tu empresa necesita para convertir el riesgo psicosocial en datos accionables.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Solicitar Demo Gratis</a>
            <a href="<?= base_url('precios') ?>" class="btn btn-outline btn-lg">Ver precios</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
