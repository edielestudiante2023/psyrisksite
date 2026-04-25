<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',                'url' => base_url('/')],
    ['name' => 'Servicios',             'url' => base_url('/#servicios')],
    ['name' => 'Clima Organizacional',  'url' => base_url('servicios/clima-organizacional')],
]]) ?>
<?= view('partials/jsonld-service', [
    'name'        => 'Diagnóstico de Clima Organizacional',
    'description' => 'Diagnóstico de clima organizacional con segmentación por área, cargo y antigüedad. 8 dimensiones medidas, indicadores accionables y capacitaciones de bienestar incluidas.',
    'url'         => base_url('servicios/clima-organizacional'),
    'serviceType' => 'Clima organizacional',
]) ?>
<?= view('partials/jsonld-faq', ['faqs' => [
    ['q' => '¿En qué se diferencia el clima organizacional de la batería de riesgo psicosocial?', 'a' => 'La batería es un instrumento legalmente obligatorio que mide factores de riesgo psicosocial definidos por Mintrabajo. El clima organizacional es un diagnóstico estratégico voluntario que mide la percepción global de la experiencia laboral. Son complementarios.'],
    ['q' => '¿Cada cuánto se debería medir el clima organizacional?', 'a' => 'Una medición anual con pulsos cortos cada trimestre para detectar variaciones tempranas. PsyRisk ofrece ambos formatos.'],
    ['q' => '¿Cómo se garantiza el anonimato de las respuestas?', 'a' => 'El enlace único evita respuestas duplicadas, pero las respuestas se almacenan disociadas del identificador y los reportes solo se entregan con un mínimo de 7 personas por segmento.'],
    ['q' => '¿Qué pasa si un área tiene menos de 7 personas?', 'a' => 'El sistema agrupa esa área con la inmediatamente superior o con áreas afines para preservar el anonimato.'],
    ['q' => '¿Las capacitaciones de bienestar están incluidas en el precio?', 'a' => 'Sí. El plan de Clima Organizacional incluye 2 capacitaciones grupales en formato virtual o presencial sobre los temas que arroje el diagnóstico.'],
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
            <span aria-current="page">Clima Organizacional</span>
        </nav>

        <ul class="tag-list">
            <li class="purple">Diagnóstico de percepción</li>
            <li>8 dimensiones</li>
            <li class="purple">Segmentación avanzada</li>
            <li>Capacitaciones incluidas</li>
        </ul>

        <h1>Mide el <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">clima real</span> de tu organización, no la versión filtrada</h1>
        <p class="lead">El clima organizacional anticipa la rotación, la productividad y los conflictos antes de que aparezcan en los indicadores duros. PsyRisk lo mide con anonimato garantizado, segmentación rica y planes de mejora ejecutables.</p>

        <div class="hero-ctas">
            <a href="#" class="btn btn-primary btn-lg">Solicitar diagnóstico</a>
            <a href="#dimensiones" class="btn btn-outline btn-lg">Ver qué medimos</a>
        </div>
    </div>
</section>

<!-- =================== POR QUÉ MEDIR =================== -->
<section>
    <div class="container">
        <div class="big-callout">
            <div class="num">1 de cada 3</div>
            <p>colaboradores piensa en renunciar este trimestre — y la mayoría no lo dirá en una reunión 1:1. El clima organizacional bien medido lo revela antes de que se vaya.</p>
        </div>
    </div>
</section>

<!-- =================== QUÉ MEDIMOS =================== -->
<section id="dimensiones" class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Qué medimos</span>
            <h2>Las 8 dimensiones que definen el clima de una empresa</h2>
            <p>Adaptadas al contexto colombiano y validadas en sectores que van desde manufactura hasta servicios profesionales.</p>
        </div>

        <div class="dim-grid">
            <div class="dim-card">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
                <h4>Liderazgo</h4>
                <p>Estilo, cercanía y reconocimiento</p>
            </div>
            <div class="dim-card alt">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></span>
                <h4>Comunicación</h4>
                <p>Flujo, claridad y retroalimentación</p>
            </div>
            <div class="dim-card">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg></span>
                <h4>Motivación</h4>
                <p>Sentido y propósito del rol</p>
            </div>
            <div class="dim-card alt">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                <h4>Reconocimiento</h4>
                <p>Justicia y equidad percibida</p>
            </div>
            <div class="dim-card">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><circle cx="19" cy="7" r="2"/></svg></span>
                <h4>Trabajo en equipo</h4>
                <p>Cohesión y colaboración</p>
            </div>
            <div class="dim-card alt">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
                <h4>Bienestar</h4>
                <p>Equilibrio vida-trabajo</p>
            </div>
            <div class="dim-card">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 17 9 11 13 15 21 7"/><polyline points="14 7 21 7 21 14"/></svg></span>
                <h4>Desarrollo</h4>
                <p>Crecimiento y aprendizaje</p>
            </div>
            <div class="dim-card alt">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.6a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9c.36.16.69.4 1 .69 1 0 0 0 1.51-1H21a2 2 0 0 1 0 4h-.09c-.71.06-1.32.4-1.51 1z"/></svg></span>
                <h4>Procesos</h4>
                <p>Claridad y eficiencia operativa</p>
            </div>
        </div>
    </div>
</section>

<!-- =================== EJEMPLO PREGUNTAS =================== -->
<section>
    <div class="container">
        <div class="split flip">
            <div class="split-text">
                <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">Cómo se responde</span>
                <h2>Escala de 5 niveles con redacción cuidada</h2>
                <p>Tus colaboradores responden afirmaciones cortas en una escala de 5 puntos. Las preguntas están redactadas para evitar sesgo de deseabilidad social y respuesta automática.</p>
                <p>Cada cuestionario toma entre <strong>10 y 15 minutos</strong> y se puede responder desde cualquier dispositivo. Los enlaces son únicos por persona, pero las respuestas son <strong>completamente anónimas</strong> a nivel individual.</p>
                <a href="#" class="btn btn-primary">Ver formulario de demostración</a>
            </div>

            <div class="split-visual" style="background:#fff;">
                <div style="font-size:.8rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:14px;">Vista previa del cuestionario</div>

                <div class="likert">
                    <span class="stmt">Mi líder me retroalimenta de forma constructiva</span>
                    <div class="scale">
                        <span class="dot">1</span>
                        <span class="dot">2</span>
                        <span class="dot">3</span>
                        <span class="dot active">4</span>
                        <span class="dot">5</span>
                    </div>
                </div>
                <div class="likert">
                    <span class="stmt">La carga de trabajo asignada es razonable</span>
                    <div class="scale">
                        <span class="dot">1</span>
                        <span class="dot">2</span>
                        <span class="dot active purple">3</span>
                        <span class="dot">4</span>
                        <span class="dot">5</span>
                    </div>
                </div>
                <div class="likert">
                    <span class="stmt">Recomendaría a un amigo trabajar aquí</span>
                    <div class="scale">
                        <span class="dot">1</span>
                        <span class="dot">2</span>
                        <span class="dot">3</span>
                        <span class="dot">4</span>
                        <span class="dot active">5</span>
                    </div>
                </div>
                <div style="display:flex; justify-content:space-between; margin-top:14px; font-size:.78rem; color:var(--color-muted);">
                    <span>Totalmente en desacuerdo</span>
                    <span>Totalmente de acuerdo</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== SEGMENTACIÓN =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Segmentación</span>
            <h2>El promedio organizacional miente — los segmentos cuentan la verdad</h2>
            <p>PsyRisk te entrega la lectura por capa, no solo el dato global. Así descubres dónde está el problema antes de que se contagie.</p>
        </div>

        <div class="split">
            <div class="split-text">
                <h3 style="font-size:1.1rem; margin-bottom:14px;">Variables de corte disponibles</h3>
                <div class="seg-list">
                    <div class="seg-row">
                        <span class="seg-label">Por área</span>
                        <span class="seg-bar"><span style="width:88%;"></span></span>
                        <span class="seg-val">Operaciones</span>
                    </div>
                    <div class="seg-row">
                        <span class="seg-label">Por cargo</span>
                        <span class="seg-bar"><span style="width:62%;"></span></span>
                        <span class="seg-val">Coord.</span>
                    </div>
                    <div class="seg-row">
                        <span class="seg-label">Por antigüedad</span>
                        <span class="seg-bar"><span style="width:45%;"></span></span>
                        <span class="seg-val">1-3 años</span>
                    </div>
                    <div class="seg-row">
                        <span class="seg-label">Por género</span>
                        <span class="seg-bar"><span style="width:74%;"></span></span>
                        <span class="seg-val">M / F</span>
                    </div>
                    <div class="seg-row">
                        <span class="seg-label">Por sede</span>
                        <span class="seg-bar"><span style="width:58%;"></span></span>
                        <span class="seg-val">Bogotá</span>
                    </div>
                    <div class="seg-row">
                        <span class="seg-label">Por modalidad</span>
                        <span class="seg-bar"><span style="width:36%;"></span></span>
                        <span class="seg-val">Híbrido</span>
                    </div>
                </div>
            </div>

            <div class="split-visual">
                <div style="text-align:center; margin-bottom:14px;">
                    <div style="font-size:.78rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:4px;">Perfil global de clima</div>
                    <div style="font-weight:700; color:var(--color-primary); font-size:1.05rem;">Empresa Ejemplo S.A.S.</div>
                </div>
                <div class="radar-wrap">
                    <div class="radar-bg"></div>
                    <div class="radar-axes"></div>
                    <div class="radar-shape"></div>
                    <span class="radar-label" style="top:-8px; left:50%; transform:translateX(-50%);">Liderazgo</span>
                    <span class="radar-label" style="top:30%; right:-12px;">Comunic.</span>
                    <span class="radar-label" style="bottom:14%; right:0;">Bienestar</span>
                    <span class="radar-label" style="bottom:-8px; left:50%; transform:translateX(-50%);">Desarrollo</span>
                    <span class="radar-label" style="top:42%; left:-8px;">Procesos</span>
                </div>
                <div style="margin-top:18px; display:flex; justify-content:space-around; font-size:.78rem; color:var(--color-muted);">
                    <span>● Promedio empresa</span>
                    <span>○ Benchmark sector</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== TESTIMONIO =================== -->
<section>
    <div class="container">
        <div class="quote">
            "El reporte de clima de PsyRisk nos mostró que la rotación en planta no era por sueldo — era por ausencia de retroalimentación. Ajustamos el modelo de supervisión y la rotación bajó 11 puntos en seis meses. Sin esa segmentación habríamos seguido subiendo salarios sin resolver el problema."
            <span class="by">— Jefatura de Talento Humano · Empresa del sector industrial · Cundinamarca</span>
        </div>
    </div>
</section>

<!-- =================== CTA BAND =================== -->
<section>
    <div class="container">
        <div class="cta-band">
            <div>
                <h3>Diagnóstico desde 1.200.000 COP — incluye capacitaciones</h3>
                <p>Para empresas de 1 a 50 colaboradores. Empresas más grandes, cotización a la medida.</p>
            </div>
            <a href="#" class="btn btn-primary btn-lg">Solicitar cotización</a>
        </div>
    </div>
</section>

<!-- =================== FAQ =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Preguntas frecuentes</span>
            <h2>Lo que más nos preguntan sobre clima</h2>
        </div>

        <div class="faq">
            <details>
                <summary>¿En qué se diferencia clima de la batería de riesgo psicosocial?</summary>
                <div class="answer">
                    <p>La batería es un instrumento <strong>legalmente obligatorio</strong> que mide factores de riesgo psicosocial específicos definidos por Mintrabajo. El clima organizacional es un diagnóstico <strong>estratégico voluntario</strong> que mide la percepción global de la experiencia laboral. Son complementarios: la batería marca el cumplimiento; el clima marca la cultura.</p>
                </div>
            </details>
            <details>
                <summary>¿Cada cuánto se debería medir el clima?</summary>
                <div class="answer">
                    <p>Lo recomendable es <strong>una medición anual</strong> con pulsos cortos (5–7 preguntas) cada trimestre para detectar variaciones tempranas. PsyRisk ofrece ambos formatos.</p>
                </div>
            </details>
            <details>
                <summary>¿Cómo garantizan el anonimato si el enlace es único?</summary>
                <div class="answer">
                    <p>El enlace único sirve solo para evitar respuestas duplicadas y controlar la participación. Las respuestas se almacenan disociadas del identificador y los reportes solo se entregan en grupos de <strong>mínimo 7 personas</strong> por segmento, lo que hace imposible la identificación individual.</p>
                </div>
            </details>
            <details>
                <summary>¿Qué pasa si un área tiene menos de 7 personas?</summary>
                <div class="answer">
                    <p>El sistema agrupa esa área con la inmediatamente superior o con áreas afines para preservar el anonimato. La segmentación se ajusta automáticamente sin que tu empresa tenga que hacer nada.</p>
                </div>
            </details>
            <details>
                <summary>¿Las capacitaciones de bienestar están incluidas en el precio?</summary>
                <div class="answer">
                    <p>Sí. El plan de Clima Organizacional incluye <strong>2 capacitaciones grupales</strong> (en formato virtual o presencial en Bogotá/Soacha) sobre los temas que arroje el diagnóstico — usualmente liderazgo, gestión emocional o equilibrio vida-trabajo.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- =================== CTA FINAL =================== -->
<section class="cta-final">
    <div class="container">
        <h2>Mide hoy el clima — toma decisiones con datos mañana</h2>
        <p>Combina Clima Organizacional con la Batería de Riesgo Psicosocial y obtén una vista completa de la salud cultural y normativa de tu empresa.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="#" class="btn btn-primary btn-lg">Solicitar Demo Gratis</a>
            <a href="<?= base_url('servicios/bateria-riesgo') ?>" class="btn btn-outline btn-lg">Ver Batería Psicosocial</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
