<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',          'url' => base_url('/')],
    ['name' => 'Servicios',       'url' => base_url('/#servicios')],
    ['name' => 'Capacitaciones',  'url' => base_url('servicios/capacitaciones')],
]]) ?>
<?= view('partials/jsonld-service', [
    'name'        => 'Capacitaciones en bienestar laboral y liderazgo',
    'description' => 'Capacitaciones en liderazgo saludable, manejo del estrés, prevención del agotamiento laboral, comunicación asertiva y bienestar emocional. Diseñadas por psicólogos certificados con medición de impacto.',
    'url'         => base_url('servicios/capacitaciones'),
    'serviceType' => 'Formación en bienestar laboral',
]) ?>
<?= view('partials/jsonld-faq', ['faqs' => [
    ['q' => '¿Las capacitaciones cuentan para el cumplimiento del SG-SST?', 'a' => 'Sí. Las capacitaciones de PsyRisk se entregan con certificado individual, lista de asistencia firmada y registro fotográfico. La evidencia es válida ante Mintrabajo o ARL.'],
    ['q' => '¿Las dicta siempre la misma persona?', 'a' => 'No necesariamente. Asignamos al psicólogo más afín al sector y al tema. Puedes solicitar continuidad de facilitador para programas largos.'],
    ['q' => '¿Puedo armar un programa a la medida con varios temas?', 'a' => 'Sí. Lo común es combinar 2 o 3 programas en una ruta de 12 a 16 sesiones distribuida a lo largo de 3 a 6 meses.'],
    ['q' => '¿Qué pasa si tengo personal en regiones lejanas?', 'a' => 'Recomendamos formato virtual o mixto. Para grupos exclusivamente regionales hacemos cotización con viáticos.'],
    ['q' => '¿Sirven las capacitaciones para cumplir la formación obligatoria contra el acoso laboral (Ley 1010)?', 'a' => 'Sí. El programa Prevención del acoso laboral cumple con los lineamientos de la Ley 1010 y entrega certificación válida ante auditoría.'],
    ['q' => '¿Hay un mínimo de personas para abrir un programa de capacitación?', 'a' => 'Sí: 8 personas para grupo cerrado. Empresas más pequeñas pueden vincularse a un grupo abierto compartido con otras empresas.'],
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
            <span aria-current="page">Capacitaciones</span>
        </nav>

        <ul class="tag-list">
            <li>Liderazgo saludable</li>
            <li class="purple">Manejo del estrés</li>
            <li>Bienestar emocional</li>
            <li class="purple">Comunicación</li>
        </ul>

        <h1>Capacitaciones que <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">cambian el comportamiento</span>, no solo el ánimo del momento</h1>
        <p class="lead">Diseñadas por psicólogos certificados, dictadas en vivo y conectadas a los hallazgos reales de tu empresa. No son charlas motivacionales — son procesos formativos con medición de impacto.</p>

        <div class="hero-ctas">
            <a href="#" class="btn btn-primary btn-lg">Solicitar agenda y precios</a>
            <a href="#catalogo" class="btn btn-outline btn-lg">Ver catálogo</a>
        </div>
    </div>
</section>

<!-- =================== ¿QUÉ RESUELVEN? =================== -->
<section>
    <div class="container">
        <div class="big-callout">
            <div class="num">81%</div>
            <p>de los participantes en capacitaciones tradicionales no recuerda el contenido pasados 30 días. Las nuestras se diseñan para sobrevivir a esa cifra.</p>
        </div>
    </div>
</section>

<!-- =================== CATÁLOGO DE PROGRAMAS =================== -->
<section id="catalogo" class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Catálogo</span>
            <h2>Nueve programas que sí mueven la aguja</h2>
            <p>Cada programa se puede contratar individual o como ruta combinada. Los más solicitados están en color destacado.</p>
        </div>

        <div class="program-grid">
            <article class="program-card">
                <div class="cover">
                    <span class="topic-num">01</span>
                    <h3>Liderazgo saludable</h3>
                </div>
                <div class="body">
                    <p>Cómo liderar sin generar agotamiento, dar retroalimentación que construye y manejar el conflicto sin escalarlo.</p>
                    <div class="meta-row">
                        <span class="pill">⏱ 8 sesiones</span>
                        <span class="pill">🎯 Mandos medios</span>
                    </div>
                    <div class="audience"><strong>Para:</strong> jefes, coordinadores y supervisores con personal a cargo.</div>
                </div>
            </article>

            <article class="program-card alt">
                <div class="cover">
                    <span class="topic-num">02</span>
                    <h3>Manejo del estrés laboral</h3>
                </div>
                <div class="body">
                    <p>Identificar fuentes propias de estrés, técnicas validadas para regularlo y rituales sostenibles para el día a día.</p>
                    <div class="meta-row">
                        <span class="pill">⏱ 6 sesiones</span>
                        <span class="pill">🎯 Todos los cargos</span>
                    </div>
                    <div class="audience"><strong>Para:</strong> equipos completos sin distinción de jerarquía.</div>
                </div>
            </article>

            <article class="program-card warm">
                <div class="cover">
                    <span class="topic-num">03</span>
                    <h3>Prevención del agotamiento laboral</h3>
                </div>
                <div class="body">
                    <p>Reconocer las tres fases del agotamiento (también llamado <em>burnout</em>), ajustar la carga personal y construir hábitos de recuperación.</p>
                    <div class="meta-row">
                        <span class="pill">⏱ 5 sesiones</span>
                        <span class="pill">🎯 Sectores intensivos</span>
                    </div>
                    <div class="audience"><strong>Para:</strong> sectores con alta exposición (salud, atención al cliente, ventas).</div>
                </div>
            </article>

            <article class="program-card">
                <div class="cover">
                    <span class="topic-num">04</span>
                    <h3>Comunicación asertiva</h3>
                </div>
                <div class="body">
                    <p>Decir lo difícil sin agredir, pedir lo necesario sin parecer débil, y escuchar de verdad. Habilidad central para reducir conflictos.</p>
                    <div class="meta-row">
                        <span class="pill">⏱ 4 sesiones</span>
                        <span class="pill">🎯 Todos los cargos</span>
                    </div>
                    <div class="audience"><strong>Para:</strong> equipos con dificultades de coordinación o conflicto recurrente.</div>
                </div>
            </article>

            <article class="program-card alt">
                <div class="cover">
                    <span class="topic-num">05</span>
                    <h3>Inteligencia emocional</h3>
                </div>
                <div class="body">
                    <p>Reconocer las emociones propias y ajenas, usarlas como información y no dejarse arrastrar por ellas en momentos críticos.</p>
                    <div class="meta-row">
                        <span class="pill">⏱ 6 sesiones</span>
                        <span class="pill">🎯 Todos los cargos</span>
                    </div>
                    <div class="audience"><strong>Para:</strong> equipos con relaciones interpersonales tensas o liderazgos en transición.</div>
                </div>
            </article>

            <article class="program-card cool">
                <div class="cover">
                    <span class="topic-num">06</span>
                    <h3>Equilibrio vida-trabajo</h3>
                </div>
                <div class="body">
                    <p>Cómo poner límites sin culpa, desconectarse después del horario y proteger el tiempo personal en culturas de alta exigencia.</p>
                    <div class="meta-row">
                        <span class="pill">⏱ 4 sesiones</span>
                        <span class="pill">🎯 Profesionales</span>
                    </div>
                    <div class="audience"><strong>Para:</strong> equipos con jornadas extendidas o presión sostenida.</div>
                </div>
            </article>

            <article class="program-card">
                <div class="cover">
                    <span class="topic-num">07</span>
                    <h3>Resolución de conflictos</h3>
                </div>
                <div class="body">
                    <p>Detectar el conflicto temprano, abrirlo en lugar de evitarlo, y conducirlo a un acuerdo que las dos partes puedan sostener.</p>
                    <div class="meta-row">
                        <span class="pill">⏱ 5 sesiones</span>
                        <span class="pill">🎯 Líderes y mandos</span>
                    </div>
                    <div class="audience"><strong>Para:</strong> jefes y miembros de comités paritarios.</div>
                </div>
            </article>

            <article class="program-card warm">
                <div class="cover">
                    <span class="topic-num">08</span>
                    <h3>Prevención del acoso laboral</h3>
                </div>
                <div class="body">
                    <p>Qué configura acoso (Ley 1010), cómo prevenirlo y qué hacer si se presenta. Cumple con el componente formativo obligatorio del SG-SST.</p>
                    <div class="meta-row">
                        <span class="pill">⏱ 3 sesiones</span>
                        <span class="pill">🎯 Toda la empresa</span>
                    </div>
                    <div class="audience"><strong>Para:</strong> aplicación general anual, exigida por normativa.</div>
                </div>
            </article>

            <article class="program-card alt">
                <div class="cover">
                    <span class="topic-num">09</span>
                    <h3>Trabajo en equipo de alto desempeño</h3>
                </div>
                <div class="body">
                    <p>Las cinco condiciones que separan a un equipo bueno de uno extraordinario, con ejercicios prácticos para instalarlas.</p>
                    <div class="meta-row">
                        <span class="pill">⏱ 5 sesiones</span>
                        <span class="pill">🎯 Equipos completos</span>
                    </div>
                    <div class="audience"><strong>Para:</strong> equipos en formación, fusiones recientes o reestructuraciones.</div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- =================== FORMATOS =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Formatos disponibles</span>
            <h2>Tres maneras de tomarlas — la que se ajuste a tu operación</h2>
            <p>Todas las modalidades son dictadas en vivo por psicólogos certificados. Nada pregrabado, nada genérico.</p>
        </div>

        <div class="format-grid">
            <div class="format-card">
                <span class="ico-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V8a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v13"/><path d="M9 12h6"/><path d="M9 16h6"/></svg>
                </span>
                <h3>Presencial</h3>
                <p class="lead">En tu sede o en un espacio externo facilitado por nosotros.</p>
                <ul>
                    <li>Mejor para construcción de confianza</li>
                    <li>Disponible en Bogotá y Cundinamarca</li>
                    <li>Otras regiones con cotización de viáticos</li>
                    <li>Material físico incluido</li>
                </ul>
            </div>

            <div class="format-card alt">
                <span class="ico-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7 16 12 23 17V7z"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>
                </span>
                <h3>Virtual en vivo</h3>
                <p class="lead">Por videollamada con dinámicas activas — no es una clase magistral.</p>
                <ul>
                    <li>Sin desplazamientos</li>
                    <li>Disponible en cualquier región del país</li>
                    <li>Hasta 30 personas por sesión</li>
                    <li>Material digital descargable</li>
                </ul>
            </div>

            <div class="format-card">
                <span class="ico-wrap">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </span>
                <h3>Mixto</h3>
                <p class="lead">Combinación: kick-off presencial + sesiones virtuales + cierre presencial.</p>
                <ul>
                    <li>Mejor balance costo-impacto</li>
                    <li>Recomendado para programas de 6+ sesiones</li>
                    <li>Mantiene la intensidad sin viáticos repetidos</li>
                    <li>Soporte continuo entre sesiones</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- =================== MEDICIÓN DE IMPACTO =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Medición de impacto</span>
            <h2>Cuatro niveles para verificar si la capacitación realmente sirvió</h2>
            <p>Adoptamos el modelo Kirkpatrick adaptado al contexto colombiano. La mayoría de proveedores se queda en el nivel 1.</p>
        </div>

        <div class="pyramid">
            <div class="level l1">
                <span class="lvl-num">1</span>
                <div class="body">
                    <h4>Reacción · ¿Les gustó?</h4>
                    <p>Encuesta de satisfacción al cierre de cada sesión. La mayoría de proveedores se detiene aquí.</p>
                </div>
            </div>
            <div class="level l2">
                <span class="lvl-num">2</span>
                <div class="body">
                    <h4>Aprendizaje · ¿Aprendieron?</h4>
                    <p>Evaluación corta antes y después del programa. Permite verificar la transferencia de conocimiento.</p>
                </div>
            </div>
            <div class="level l3">
                <span class="lvl-num">3</span>
                <div class="body">
                    <h4>Comportamiento · ¿Lo aplican en el día a día?</h4>
                    <p>Pulso a los 60 días con preguntas focalizadas a los participantes y a sus pares/jefes.</p>
                </div>
            </div>
            <div class="level l4">
                <span class="lvl-num">4</span>
                <div class="body">
                    <h4>Resultados · ¿Impactó al negocio?</h4>
                    <p>Comparación contra el dominio de la batería o el indicador de clima al siguiente ciclo de medición.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== AUDIENCIAS =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Para quién</span>
            <h2>Programas para cada nivel de la organización</h2>
            <p>Diseñamos rutas formativas distintas según el cargo. Un mismo tema se aborda con profundidad y lenguaje diferente.</p>
        </div>

        <div class="audience-chips">
            <span class="audience-chip">
                <span class="ico"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/></svg></span>
                Alta dirección
            </span>
            <span class="audience-chip">
                <span class="ico"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 11h-6"/></svg></span>
                Mandos medios y supervisores
            </span>
            <span class="audience-chip">
                <span class="ico"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><circle cx="19" cy="11" r="2"/></svg></span>
                Equipos profesionales
            </span>
            <span class="audience-chip">
                <span class="ico"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg></span>
                Personal operativo
            </span>
            <span class="audience-chip">
                <span class="ico"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></span>
                Comité paritario (CPHS)
            </span>
            <span class="audience-chip">
                <span class="ico"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
                Áreas de talento humano
            </span>
        </div>
    </div>
</section>

<!-- =================== CTA BAND =================== -->
<section>
    <div class="container">
        <div class="cta-band">
            <div>
                <h3>Capacitaciones desde 650.000 COP por sesión grupal</h3>
                <p>Hasta 30 personas por sesión. Programas completos con descuento por volumen.</p>
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
            <h2>Lo que más nos preguntan sobre capacitaciones</h2>
        </div>

        <div class="faq">
            <details>
                <summary>¿Las capacitaciones cuentan para el cumplimiento del SG-SST?</summary>
                <div class="answer">
                    <p>Sí. Las capacitaciones de PsyRisk se entregan con certificado individual, lista de asistencia firmada y registro fotográfico — la evidencia que pide el sistema de gestión y la auditoría de Mintrabajo o ARL.</p>
                </div>
            </details>
            <details>
                <summary>¿Las dicta siempre la misma persona?</summary>
                <div class="answer">
                    <p>No necesariamente. Asignamos al psicólogo más afín al sector y al tema. Puedes solicitar continuidad de facilitador para programas largos cuando ayuda al vínculo grupal.</p>
                </div>
            </details>
            <details>
                <summary>¿Puedo armar un programa a la medida con varios temas?</summary>
                <div class="answer">
                    <p>Sí. Lo común es combinar 2 o 3 programas en una ruta de 12 a 16 sesiones distribuida a lo largo de 3-6 meses. Es la modalidad con mejor relación costo-impacto.</p>
                </div>
            </details>
            <details>
                <summary>¿Qué pasa si en mi empresa hay personal en regiones lejanas?</summary>
                <div class="answer">
                    <p>Recomendamos formato virtual o mixto. Para grupos exclusivamente regionales hacemos cotización con viáticos. Hemos dictado capacitaciones en la Costa Caribe, Eje Cafetero, Antioquia, Santanderes y Pacífico.</p>
                </div>
            </details>
            <details>
                <summary>¿Sirven para cumplir la formación obligatoria contra el acoso laboral (Ley 1010)?</summary>
                <div class="answer">
                    <p>Sí. El programa "Prevención del acoso laboral" cumple con los lineamientos de la Ley 1010 y entrega certificación válida ante auditoría. Lo recomendable es repetirlo anualmente.</p>
                </div>
            </details>
            <details>
                <summary>¿Hay un mínimo de personas para abrir un programa?</summary>
                <div class="answer">
                    <p>Sí: <strong>8 personas</strong> para grupo cerrado. Si tu empresa es más pequeña, podemos vincularte a un grupo abierto compartido con otras empresas, con tarifa por persona.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- =================== CTA FINAL =================== -->
<section class="cta-final">
    <div class="container">
        <h2>Forma a tu equipo con contenido que sí se sostiene en el tiempo</h2>
        <p>Solicita una conversación con uno de nuestros psicólogos para diseñar la ruta formativa que se ajuste al momento de tu empresa.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="#" class="btn btn-primary btn-lg">Hablar con un asesor</a>
            <a href="<?= base_url('precios') ?>" class="btn btn-outline btn-lg">Ver precios</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
