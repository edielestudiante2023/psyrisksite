<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',                'url' => base_url('/')],
    ['name' => 'Servicios',             'url' => base_url('/#servicios')],
    ['name' => 'Clima Organizacional',  'url' => base_url('servicios/clima-organizacional')],
]]) ?>
<?= view('partials/jsonld-service', [
    'name'        => 'Diagnóstico de Clima Organizacional',
    'description' => 'Diagnóstico de clima organizacional con 10 dimensiones, 40 ítems en escala Likert e Índice Global de Clima 0–100. El complemento estratégico de la Batería de Riesgo Psicosocial: mide identificación, propósito, justicia, talento y cultura.',
    'url'         => base_url('servicios/clima-organizacional'),
    'serviceType' => 'Clima organizacional',
]) ?>
<?= view('partials/jsonld-faq', ['faqs' => [
    ['q' => '¿En qué se diferencia el clima organizacional de la batería de riesgo psicosocial?', 'a' => 'La Batería es un instrumento legalmente obligatorio que mide factores de riesgo psicosocial definidos por Mintrabajo: detecta lo que potencialmente daña a las personas. El Clima Organizacional es un diagnóstico estratégico voluntario que mide el activo cultural: identificación, propósito, justicia, talento y excelencia. Son complementarios y no sustitutos.'],
    ['q' => '¿Por qué necesito ambos instrumentos?', 'a' => 'La Batería protege a la empresa del riesgo y del incumplimiento. El Clima Organizacional la diferencia, la hace rentable y sostenible. Medir solo Batería es como un examen médico que detecta enfermedades pero nunca dice si estás en forma.'],
    ['q' => '¿Cuánto tarda una persona en responder el cuestionario?', 'a' => 'Entre 12 y 15 minutos. Es 100% digital, anónimo e individual.'],
    ['q' => '¿Quiénes pueden responder el instrumento?', 'a' => 'Trabajadores con al menos 3 meses de antigüedad. Se excluyen personas en proceso de desvinculación y temporales con vínculo intermitente menor a 90 días.'],
    ['q' => '¿Cómo se garantiza el anonimato de las respuestas?', 'a' => 'El enlace es único para evitar duplicados, pero las respuestas se almacenan disociadas del identificador. Los reportes se entregan solo con un mínimo de 7 personas por segmento.'],
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
            <li class="purple">Complemento estratégico de la Batería</li>
            <li>10 dimensiones</li>
            <li class="purple">40 ítems · Likert 5 puntos</li>
            <li>IGC 0–100</li>
        </ul>

        <h1>El diagnóstico que la <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">Batería no puede darte</span></h1>
        <p class="lead">La Batería de Riesgo Psicosocial te dice si estás haciendo daño a tu gente. <strong>El Clima Organizacional te dice si estás sacando lo mejor de ella.</strong> Son dos preguntas distintas — y ningún diagnóstico organizacional serio responde las dos sin medirlas por separado.</p>

        <div class="hero-ctas">
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Solicitar diagnóstico</a>
            <a href="<?= base_url('servicios/clima-organizacional/ficha-tecnica') ?>" class="btn btn-outline btn-lg">Ver ficha técnica</a>
        </div>
    </div>
</section>

<!-- =================== POR QUÉ MEDIR =================== -->
<section>
    <div class="container">
        <div class="big-callout">
            <div class="num">1 de cada 3</div>
            <p>colaboradores piensa en renunciar este trimestre — y la mayoría no lo dirá en una reunión 1:1. Un instrumento de clima fundamentado y bien aplicado lo revela antes de que se vaya.</p>
        </div>
    </div>
</section>

<!-- =================== COMPLEMENTARIEDAD CON LA BATERÍA =================== -->
<section id="complementariedad" class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Por qué necesitas las dos</span>
            <h2>Lo que la Batería no puede ver — y por qué Clima la complementa</h2>
            <p>Ambos instrumentos miden cosas distintas con propósitos distintos. Juntos te dan la lectura completa de la salud organizacional.</p>
        </div>

        <div class="comp-grid">
            <article class="comp-card comp-bateria">
                <header>
                    <span class="comp-tag">Batería de Riesgo Psicosocial</span>
                    <h3>Mide el riesgo · Protege a la empresa</h3>
                    <p class="comp-question">¿Estamos haciendo daño a la gente?</p>
                </header>
                <ul class="comp-bullets">
                    <li>Demandas del trabajo, control y cargas</li>
                    <li>Liderazgo del jefe inmediato</li>
                    <li>Recompensas y compensación</li>
                    <li>Doble presencia (extralaboral)</li>
                    <li>Sintomatología de estrés</li>
                </ul>
                <div class="comp-footer">
                    <strong>Lente:</strong> Salud ocupacional · SST<br>
                    <strong>Marco:</strong> Cumplimiento Resolución 2764<br>
                    <strong>Carácter:</strong> Legal y obligatorio
                </div>
            </article>

            <article class="comp-card comp-clima">
                <header>
                    <span class="comp-tag">Clima Organizacional</span>
                    <h3>Mide el activo cultural · Diferencia a la empresa</h3>
                    <p class="comp-question">¿Estamos sacando lo mejor de la gente?</p>
                </header>
                <ul class="comp-bullets">
                    <li>Identificación, orgullo y recomendación</li>
                    <li>Propósito y alineación estratégica</li>
                    <li>Justicia organizacional (procedimental, distributiva, interaccional)</li>
                    <li>Confianza en la alta dirección, no en el jefe inmediato</li>
                    <li>Seguridad psicológica, talento y cultura de calidad</li>
                </ul>
                <div class="comp-footer">
                    <strong>Lente:</strong> Estrategia · Talento · Cultura<br>
                    <strong>Marco:</strong> Decisión gerencial<br>
                    <strong>Carácter:</strong> Voluntario y diferenciador
                </div>
            </article>
        </div>

        <div class="comp-conclusion">
            <p>Medir solo Batería es como un examen médico que detecta enfermedades pero nunca te dice si estás en forma. Medir solo Clima es como medirte el rendimiento físico sin chequear si tienes una afección de fondo. <strong>No compiten — son las dos mitades del mismo diagnóstico.</strong></p>
            <a href="<?= base_url('servicios/bateria-riesgo') ?>" class="btn btn-outline">Ver Batería de Riesgo Psicosocial</a>
        </div>
    </div>
</section>

<!-- =================== QUÉ MEDIMOS =================== -->
<section id="dimensiones">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Qué medimos</span>
            <h2>Las 10 dimensiones del clima organizacional</h2>
            <p>Cada dimensión está anclada en literatura científica de referencia (Schneider, Patterson, Edmondson, Colquitt, Likert, Toro Álvarez) y se mide con 4 ítems positivos en escala Likert de 5 puntos.</p>
        </div>

        <div class="dim-grid">
            <div class="dim-card">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
                <h4>1. Identificación y orgullo</h4>
                <p>Vínculo emocional, orgullo de pertenecer y disposición a recomendar.</p>
            </div>
            <div class="dim-card alt">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></span>
                <h4>2. Comunicación e información</h4>
                <p>Calidad y oportunidad del flujo de información; canales bidireccionales.</p>
            </div>
            <div class="dim-card">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c2.39 0 4.68.94 6.36 2.64"/></svg></span>
                <h4>3. Innovación y apertura al cambio</h4>
                <p>Cultura que experimenta, valora ideas nuevas y aprende del error.</p>
            </div>
            <div class="dim-card alt">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><circle cx="19" cy="7" r="2"/></svg></span>
                <h4>4. Trabajo en equipo y cohesión</h4>
                <p>Colaboración, confianza interpersonal y seguridad psicológica.</p>
            </div>
            <div class="dim-card">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                <h4>5. Reconocimiento y desarrollo</h4>
                <p>Reconocimiento no salarial, retroalimentación útil y crecimiento.</p>
            </div>
            <div class="dim-card alt">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1v22"/><path d="M5 8h14"/><path d="M5 16h14"/></svg></span>
                <h4>6. Justicia organizacional y equidad</h4>
                <p>Justicia procedimental, distributiva e interaccional.</p>
            </div>
            <div class="dim-card">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg></span>
                <h4>7. Visión, propósito y alineación</h4>
                <p>Claridad del rumbo, sentido del trabajo y alineación estratégica.</p>
            </div>
            <div class="dim-card alt">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
                <h4>8. Liderazgo y confianza en la dirección</h4>
                <p>Confianza en la alta dirección y coherencia decir-hacer.</p>
            </div>
            <div class="dim-card">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 17 9 11 13 15 21 7"/><polyline points="14 7 21 7 21 14"/></svg></span>
                <h4>9. Gestión estratégica del talento</h4>
                <p>Identificar, desarrollar, atraer y retener talento meritocráticamente.</p>
            </div>
            <div class="dim-card alt">
                <span class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.39 7.36H22l-6.18 4.49L18.21 22 12 17.27 5.79 22l2.39-8.15L2 9.36h7.61z"/></svg></span>
                <h4>10. Cultura de calidad y excelencia</h4>
                <p>Estándares altos compartidos, mejora continua y orgullo del producto.</p>
            </div>
        </div>

        <div style="text-align:center; margin-top:32px;">
            <a href="<?= base_url('servicios/clima-organizacional/ficha-tecnica') ?>" class="btn btn-outline">Ver ficha técnica completa</a>
        </div>
    </div>
</section>

<!-- =================== EJEMPLO PREGUNTAS =================== -->
<section class="alt">
    <div class="container">
        <div class="split flip">
            <div class="split-text">
                <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">Cómo se responde</span>
                <h2>40 ítems positivos en escala Likert de 5 puntos</h2>
                <p>Los colaboradores responden afirmaciones cortas en una escala que va de <strong>1 = Totalmente en desacuerdo</strong> a <strong>5 = Totalmente de acuerdo</strong>. Todos los ítems son positivos: puntaje alto = clima favorable, sin ítems inversos.</p>
                <p>Cada cuestionario toma entre <strong>12 y 15 minutos</strong> y se responde desde cualquier dispositivo. Los enlaces son únicos por persona, las respuestas son <strong>completamente anónimas</strong> a nivel individual y el marco temporal evaluado es la <strong>experiencia de los últimos 6 meses</strong>.</p>
                <a href="<?= base_url('servicios/clima-organizacional/ficha-tecnica') ?>" class="btn btn-primary">Ver tabla de especificaciones</a>
            </div>

            <div class="split-visual" style="background:#fff;">
                <div style="font-size:.8rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:14px;">Cómo se ve el cuestionario</div>

                <div class="likert">
                    <span class="stmt">Afirmación sobre orgullo de pertenencia organizacional.</span>
                    <div class="scale">
                        <span class="dot">1</span>
                        <span class="dot">2</span>
                        <span class="dot">3</span>
                        <span class="dot">4</span>
                        <span class="dot active">5</span>
                    </div>
                </div>
                <div class="likert">
                    <span class="stmt">Afirmación sobre claridad en la comunicación de decisiones.</span>
                    <div class="scale">
                        <span class="dot">1</span>
                        <span class="dot">2</span>
                        <span class="dot active purple">3</span>
                        <span class="dot">4</span>
                        <span class="dot">5</span>
                    </div>
                </div>
                <div class="likert">
                    <span class="stmt">Afirmación sobre seguridad psicológica en el equipo.</span>
                    <div class="scale">
                        <span class="dot">1</span>
                        <span class="dot">2</span>
                        <span class="dot">3</span>
                        <span class="dot active">4</span>
                        <span class="dot">5</span>
                    </div>
                </div>
                <div style="display:flex; justify-content:space-between; margin-top:14px; font-size:.78rem; color:var(--color-muted);">
                    <span>1 · Totalmente en desacuerdo</span>
                    <span>5 · Totalmente de acuerdo</span>
                </div>
                <div style="margin-top:14px; padding-top:12px; border-top:1px solid var(--color-border); font-size:.75rem; color:var(--color-muted); font-style:italic;">Vista ilustrativa. La redacción literal de los reactivos está reservada para las aplicaciones del servicio.</div>
            </div>
        </div>
    </div>
</section>

<!-- =================== ÍNDICE GLOBAL DE CLIMA =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Índice Global de Clima</span>
            <h2>Un solo número para conversar — 10 dimensiones para actuar</h2>
            <p>El IGC se calcula como promedio ponderado de las 10 dimensiones, escalado a 0–100. Cinco niveles equidistantes con interpretación clínica de cada uno.</p>
        </div>

        <div class="ficha-baremos">
            <div class="ficha-baremo critico">
                <span class="ficha-baremo-bullet">🔴</span>
                <div>
                    <strong>Crítico</strong>
                    <span class="ficha-baremo-range">0 – 20</span>
                    <p>Estado severamente deficitario. Intervención inmediata.</p>
                </div>
            </div>
            <div class="ficha-baremo bajo">
                <span class="ficha-baremo-bullet">🟠</span>
                <div>
                    <strong>Bajo</strong>
                    <span class="ficha-baremo-range">20.01 – 40</span>
                    <p>Estado deficitario. Intervención prioritaria a corto plazo.</p>
                </div>
            </div>
            <div class="ficha-baremo medio">
                <span class="ficha-baremo-bullet">🟡</span>
                <div>
                    <strong>Medio</strong>
                    <span class="ficha-baremo-range">40.01 – 60</span>
                    <p>Focos de mejora identificables. Plan a 12 meses.</p>
                </div>
            </div>
            <div class="ficha-baremo alto">
                <span class="ficha-baremo-bullet">🟢</span>
                <div>
                    <strong>Alto</strong>
                    <span class="ficha-baremo-range">60.01 – 80</span>
                    <p>Estado favorable. Mantener prácticas.</p>
                </div>
            </div>
            <div class="ficha-baremo optimo">
                <span class="ficha-baremo-bullet">🟢</span>
                <div>
                    <strong>Óptimo</strong>
                    <span class="ficha-baremo-range">80.01 – 100</span>
                    <p>Estado de excelencia. Documentar y replicar.</p>
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
                <p style="margin-top:18px; font-size:.85rem; color:var(--color-muted);">El IGC se complementa con el índice <strong>rWG</strong> (James, Demaree &amp; Wolf, 1984) para validar agregabilidad: si rWG ≥ 0.70 las percepciones son suficientemente compartidas; si rWG &lt; 0.70 se reporta variabilidad y se recomienda análisis cualitativo por subgrupo.</p>
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
                    <span class="radar-label" style="top:-8px; left:50%; transform:translateX(-50%);">Identif.</span>
                    <span class="radar-label" style="top:30%; right:-12px;">Comunic.</span>
                    <span class="radar-label" style="bottom:14%; right:0;">Liderazgo</span>
                    <span class="radar-label" style="bottom:-8px; left:50%; transform:translateX(-50%);">Calidad</span>
                    <span class="radar-label" style="top:42%; left:-8px;">Equipo</span>
                </div>
                <div style="margin-top:18px; display:flex; justify-content:space-around; font-size:.78rem; color:var(--color-muted);">
                    <span>● Promedio empresa</span>
                    <span>○ Benchmark sector</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== TESTIMONIOS =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Casos de aplicación</span>
            <h2>Lo que han descubierto otras organizaciones</h2>
        </div>

        <div class="quote">
            "El reporte de clima nos mostró que la rotación en planta no era por sueldo — era por ausencia de retroalimentación y de reconocimiento. Ajustamos el modelo de supervisión y la rotación bajó 11 puntos en seis meses. Sin esa segmentación habríamos seguido subiendo salarios sin resolver el problema."
            <span class="by">— Jefatura de Talento Humano · Empresa del sector industrial · Cundinamarca</span>
        </div>

        <div class="quote">
            "La Batería nos había dado puntajes aceptables, pero la rotación voluntaria de coordinadores seguía alta. El diagnóstico de clima reveló que el problema estaba en justicia procedimental: la gente sentía que las promociones no se decidían con criterios claros. Ajustamos el proceso de evaluación y la intención de quedarse en cargos medios subió de 54% a 78% en el siguiente pulso."
            <span class="by">— Gerencia de Talento · Empresa de servicios profesionales · Bogotá</span>
        </div>

        <div class="quote">
            "Lo que más nos sorprendió fue el contraste entre dimensiones: liderazgo del jefe inmediato puntuaba alto, pero confianza en la alta dirección puntuaba en nivel Bajo. Eso explicaba por qué los planes estratégicos no aterrizaban. Trabajamos un programa de comunicación de la dirección con el equipo y el IGC subió 14 puntos al año siguiente."
            <span class="by">— Dirección Administrativa · Institución del sector salud · Antioquia</span>
        </div>
    </div>
</section>

<!-- =================== CTA BAND =================== -->
<section class="alt">
    <div class="container">
        <div class="cta-band">
            <div>
                <h3>Diagnóstico desde 1.200.000 COP — incluye capacitaciones</h3>
                <p>Para empresas de 1 a 50 colaboradores. Empresas más grandes, cotización a la medida.</p>
            </div>
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Solicitar cotización</a>
        </div>
    </div>
</section>

<!-- =================== FAQ =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Preguntas frecuentes</span>
            <h2>Lo que más nos preguntan sobre clima</h2>
        </div>

        <div class="faq">
            <details>
                <summary>¿En qué se diferencia clima de la Batería de Riesgo Psicosocial?</summary>
                <div class="answer">
                    <p>La Batería es un instrumento <strong>legalmente obligatorio</strong> que mide factores de riesgo psicosocial específicos definidos por Mintrabajo: <strong>detecta lo que potencialmente daña</strong> a las personas. El Clima Organizacional es un diagnóstico <strong>estratégico voluntario</strong> que mide el activo cultural: <strong>detecta lo que potencia</strong>. La Batería marca el cumplimiento; el Clima marca la cultura.</p>
                </div>
            </details>
            <details>
                <summary>¿Por qué necesito ambos instrumentos si la Batería ya es obligatoria?</summary>
                <div class="answer">
                    <p>Porque miden cosas distintas. La Batería protege a la empresa del riesgo y del incumplimiento legal. El Clima la diferencia, la hace rentable y sostenible. Hay dimensiones críticas — identificación, propósito, justicia, confianza en la alta dirección, gestión del talento, cultura de calidad — que <strong>la Batería no toca</strong> y que explican rotación, productividad y engagement. Empresas con Batería en verde pueden seguir perdiendo talento si nunca miden Clima.</p>
                </div>
            </details>
            <details>
                <summary>¿Quiénes deberían responder y quiénes no?</summary>
                <div class="answer">
                    <p>Población objetivo: trabajadores con <strong>≥ 3 meses de antigüedad</strong> en la organización. No deberían responder: personas con menos de 3 meses, quienes están en proceso de desvinculación y temporales con vínculo intermitente menor a 90 días.</p>
                </div>
            </details>
            <details>
                <summary>¿Cuánto tarda y desde qué dispositivo se responde?</summary>
                <div class="answer">
                    <p>Entre <strong>12 y 15 minutos</strong>, en aplicación 100% digital, anónima e individual. Funciona desde cualquier dispositivo con navegador (computador, tablet o móvil).</p>
                </div>
            </details>
            <details>
                <summary>¿Cómo garantizan el anonimato si el enlace es único?</summary>
                <div class="answer">
                    <p>El enlace único sirve solo para evitar respuestas duplicadas. Las respuestas se almacenan disociadas del identificador y los reportes solo se entregan en grupos de <strong>mínimo 7 personas</strong> por segmento. Si un área tiene menos de 7 personas, el sistema la agrupa automáticamente con áreas afines.</p>
                </div>
            </details>
            <details>
                <summary>¿Las capacitaciones de bienestar están incluidas en el precio?</summary>
                <div class="answer">
                    <p>Sí. El plan de Clima Organizacional incluye <strong>2 capacitaciones grupales</strong> (en formato virtual o presencial en Bogotá/Soacha) sobre los temas que arroje el diagnóstico — usualmente liderazgo, gestión emocional, retroalimentación o equilibrio vida-trabajo.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- =================== CTA FINAL =================== -->
<section class="cta-final">
    <div class="container">
        <h2>Tu diagnóstico organizacional está incompleto sin las dos lecturas</h2>
        <p>Combina el Clima Organizacional con la Batería de Riesgo Psicosocial y obtén la vista completa: lo que protege a tu empresa y lo que la diferencia.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Solicitar Demo Gratis</a>
            <a href="<?= base_url('servicios/bateria-riesgo') ?>" class="btn btn-outline btn-lg">Ver Batería Psicosocial</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
