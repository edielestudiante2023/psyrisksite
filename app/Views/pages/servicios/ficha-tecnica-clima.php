<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',                'url' => base_url('/')],
    ['name' => 'Servicios',             'url' => base_url('/#servicios')],
    ['name' => 'Clima Organizacional',  'url' => base_url('servicios/clima-organizacional')],
    ['name' => 'Ficha Técnica',         'url' => base_url('servicios/clima-organizacional/ficha-tecnica')],
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
            <a href="<?= base_url('servicios/clima-organizacional') ?>">Clima Organizacional</a>
            <span class="sep">/</span>
            <span aria-current="page">Ficha Técnica</span>
        </nav>

        <ul class="tag-list">
            <li class="purple">10 dimensiones</li>
            <li>40 ítems</li>
            <li class="purple">Escala Likert 5 puntos</li>
            <li>IGC 0–100</li>
        </ul>

        <h1>Ficha Técnica — <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">Clima Organizacional</span></h1>
        <p class="lead">Documento técnico del instrumento de auto-reporte para medir clima organizacional, fundamentado en literatura científica consolidada y diseñado para entornos colombianos.</p>
    </div>
</section>

<!-- =================== ÍNDICE DE LA FICHA =================== -->
<section class="alt" style="padding-top:40px; padding-bottom:40px;">
    <div class="container">
        <div class="ficha-toc">
            <strong>Contenido:</strong>
            <a href="#datos-generales">Datos generales</a>
            <span class="sep">·</span>
            <a href="#dimensiones">Las 10 dimensiones</a>
            <span class="sep">·</span>
            <a href="#especificaciones">Tabla de especificaciones</a>
            <span class="sep">·</span>
            <a href="#baremos">Tabla de baremos</a>
        </div>
    </div>
</section>

<!-- =================== DATOS GENERALES =================== -->
<section id="datos-generales">
    <div class="container">
        <div class="section-head" style="text-align:left;">
            <span class="eyebrow">1 · Datos generales</span>
            <h2>Identificación del instrumento</h2>
        </div>

        <div class="ficha-table-wrap">
            <table class="ficha-table">
                <thead>
                    <tr>
                        <th>Atributo</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><th>Nombre del instrumento</th><td>Psycloid Method – Clima Organizacional</td></tr>
                    <tr><th>Código interno</th><td><code>PSYCLOID_CLIMA_v1</code></td></tr>
                    <tr><th>Versión</th><td>1.0</td></tr>
                    <tr><th>Tipo</th><td>Cuestionario de auto-reporte</td></tr>
                    <tr><th>Constructo medido</th><td>Clima organizacional (percepciones compartidas sobre políticas, prácticas y conductas organizacionales)</td></tr>
                    <tr><th>Marco teórico de referencia</th><td>Schneider (1975, 2013) · Patterson et al. – OCM (2005) · Moos – WES · Edmondson (1999) · Colquitt (2001) · Likert (1961, 1967) · van Muijen et al. – FOCUS (1999) · Toro Álvarez (Cincel)</td></tr>
                    <tr><th>Número de dimensiones</th><td>10</td></tr>
                    <tr><th>Número total de ítems</th><td>40 (4 por dimensión)</td></tr>
                    <tr><th>Escala de respuesta</th><td>Likert de 5 puntos: 1 = Totalmente en desacuerdo · 2 = En desacuerdo · 3 = Ni de acuerdo ni en desacuerdo · 4 = De acuerdo · 5 = Totalmente de acuerdo</td></tr>
                    <tr><th>Direccionalidad</th><td>Todos los ítems son positivos (puntaje alto = clima favorable). Sin ítems inversos.</td></tr>
                    <tr><th>Marco temporal</th><td>Experiencia del respondiente en los últimos 6 meses</td></tr>
                    <tr><th>Tiempo estimado</th><td>12 a 15 minutos</td></tr>
                    <tr><th>Modalidad</th><td>Aplicación digital, anónima, individual</td></tr>
                    <tr><th>Población objetivo</th><td>Trabajadores con ≥ 3 meses de antigüedad en la organización</td></tr>
                    <tr><th>Población NO objetivo</th><td>Menos de 3 meses de antigüedad · personas en proceso de desvinculación · temporales con vínculo intermitente &lt; 90 días</td></tr>
                    <tr><th>Cálculo del Índice Global de Clima (IGC)</th><td>Promedio ponderado de las 10 dimensiones, escalado a 0–100. Pesos iguales (0.10 cada una).</td></tr>
                    <tr><th>Niveles de clasificación</th><td>Crítico (0–20) · Bajo (20.01–40) · Medio (40.01–60) · Alto (60.01–80) · Óptimo (80.01–100)</td></tr>
                    <tr><th>Validez declarada</th><td>Instrumento diagnóstico fundamentado teóricamente; validación psicométrica continua con datos de aplicación.</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- =================== LAS 10 DIMENSIONES =================== -->
<section id="dimensiones" class="alt">
    <div class="container">
        <div class="section-head" style="text-align:left;">
            <span class="eyebrow">2 · Las 10 dimensiones</span>
            <h2>Definiciones operacionales y anclajes teóricos</h2>
            <p>Cada dimensión se operacionaliza con 4 ítems positivos en escala Likert de 5 puntos.</p>
        </div>

        <div class="ficha-dim-list">
            <article class="ficha-dim">
                <header><span class="ficha-dim-num">1</span><h3>Identificación y orgullo organizacional</h3></header>
                <p><strong>Definición operacional:</strong> Grado en que las personas se sienten emocionalmente vinculadas a la organización, orgullosas de pertenecer a ella y dispuestas a recomendarla como buen lugar de trabajo.</p>
                <p class="ficha-dim-anclaje"><strong>Anclajes teóricos:</strong> Schneider (1975) · Allen &amp; Meyer (1991) – compromiso afectivo · Levering &amp; Moskowitz (GPTW)</p>
            </article>

            <article class="ficha-dim">
                <header><span class="ficha-dim-num">2</span><h3>Comunicación e información</h3></header>
                <p><strong>Definición operacional:</strong> Calidad y oportunidad del flujo de información entre áreas, transparencia en la comunicación de decisiones organizacionales y existencia de canales bidireccionales.</p>
                <p class="ficha-dim-anclaje"><strong>Anclajes teóricos:</strong> Patterson et al. (OCM, 2005) · Toro Álvarez (Cincel/IMC Colombia)</p>
            </article>

            <article class="ficha-dim">
                <header><span class="ficha-dim-num">3</span><h3>Innovación y apertura al cambio</h3></header>
                <p><strong>Definición operacional:</strong> Cultura organizacional que promueve la experimentación, valora ideas nuevas, aprende de los errores y se adapta con agilidad al entorno.</p>
                <p class="ficha-dim-anclaje"><strong>Anclajes teóricos:</strong> Patterson et al. (OCM, 2005) · van Muijen et al. (FOCUS, 1999) · Quinn &amp; Rohrbaugh – Competing Values Framework</p>
            </article>

            <article class="ficha-dim">
                <header><span class="ficha-dim-num">4</span><h3>Trabajo en equipo y cohesión</h3></header>
                <p><strong>Definición operacional:</strong> Calidad de la colaboración entre pares, confianza interpersonal y seguridad psicológica (capacidad de expresar opiniones sin temor a consecuencias negativas).</p>
                <p class="ficha-dim-anclaje"><strong>Anclajes teóricos:</strong> Edmondson (1999) – psychological safety · Moos (WES) – coworker cohesion</p>
            </article>

            <article class="ficha-dim">
                <header><span class="ficha-dim-num">5</span><h3>Reconocimiento y desarrollo (individual)</h3></header>
                <p><strong>Definición operacional:</strong> Percepción individual de ser valorado por el desempeño no salarial, recibir retroalimentación útil y contar con oportunidades reales de crecimiento profesional.</p>
                <p class="ficha-dim-anclaje"><strong>Anclajes teóricos:</strong> Koys &amp; DeCotiis (1991) · Litwin &amp; Stringer (1968) · Patterson et al. (OCM)</p>
            </article>

            <article class="ficha-dim">
                <header><span class="ficha-dim-num">6</span><h3>Justicia organizacional y equidad</h3></header>
                <p><strong>Definición operacional:</strong> Percepción de equidad procedimental (procesos justos), distributiva (recursos repartidos equitativamente) e interaccional (trato respetuoso e imparcial) en las decisiones que afectan al personal.</p>
                <p class="ficha-dim-anclaje"><strong>Anclajes teóricos:</strong> Colquitt (2001) · Greenberg (1987)</p>
            </article>

            <article class="ficha-dim">
                <header><span class="ficha-dim-num">7</span><h3>Visión, propósito y alineación estratégica</h3></header>
                <p><strong>Definición operacional:</strong> Claridad sobre el rumbo de la organización, identificación con su propósito y alineación percibida entre las tareas individuales y los objetivos generales.</p>
                <p class="ficha-dim-anclaje"><strong>Anclajes teóricos:</strong> Schein (1985) · Quinn &amp; Rohrbaugh – Competing Values</p>
            </article>

            <article class="ficha-dim">
                <header><span class="ficha-dim-num">8</span><h3>Liderazgo estratégico y confianza en la dirección</h3></header>
                <p><strong>Definición operacional:</strong> Confianza en la alta dirección (no jefe inmediato), coherencia entre lo que se comunica y lo que se hace, credibilidad del rumbo estratégico.</p>
                <p class="ficha-dim-anclaje"><strong>Anclajes teóricos:</strong> Likert (1961, 1967) – Sistemas de gestión · Bass – transformational/authentic leadership</p>
            </article>

            <article class="ficha-dim">
                <header><span class="ficha-dim-num">9</span><h3>Gestión estratégica del talento</h3></header>
                <p><strong>Definición operacional:</strong> Percepción sobre la capacidad organizacional para identificar, desarrollar, atraer y retener el talento humano de manera meritocrática y sistémica.</p>
                <p class="ficha-dim-anclaje"><strong>Anclajes teóricos:</strong> Boudreau &amp; Ramstad (2007) · Collings &amp; Mellahi (2009) · Cappelli (2008) · Michaels et al. (2001) – War for Talent · Kristof-Brown – Person-Job Fit</p>
            </article>

            <article class="ficha-dim">
                <header><span class="ficha-dim-num">10</span><h3>Cultura de calidad y excelencia operacional</h3></header>
                <p><strong>Definición operacional:</strong> Existencia de estándares altos compartidos, cultura de mejora continua y orgullo por la calidad del producto o servicio entregado.</p>
                <p class="ficha-dim-anclaje"><strong>Anclajes teóricos:</strong> Patterson et al. (OCM, 2005) – quality subscale · Pfeffer · Deming</p>
            </article>
        </div>
    </div>
</section>

<!-- =================== TABLA DE ESPECIFICACIONES =================== -->
<section id="especificaciones">
    <div class="container">
        <div class="section-head" style="text-align:left;">
            <span class="eyebrow">3 · Tabla de especificaciones</span>
            <h2>Qué evalúa cada reactivo, por dimensión</h2>
            <p>Por dimensión, qué evalúa cada uno de los 4 reactivos en escala Likert de 5 puntos. La redacción literal de los reactivos está reservada para las aplicaciones del servicio.</p>
        </div>

        <!-- Dimensión 1 -->
        <div class="ficha-items-block">
            <h3>Dimensión 1 — Identificación y orgullo organizacional</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th style="width:30%;">Sub-constructo</th><th>Qué evalúa el reactivo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Orgullo de pertenencia</td><td>Grado de orgullo emocional asociado a pertenecer a la organización.</td></tr>
                        <tr><td>2</td><td>Intención de recomendación (eNPS)</td><td>Disposición del respondiente a recomendar la organización como lugar de trabajo.</td></tr>
                        <tr><td>3</td><td>Identificación con valores</td><td>Nivel de identificación personal con los valores y la forma de operar de la organización.</td></tr>
                        <tr><td>4</td><td>Sentido de importancia personal</td><td>Percepción del respondiente sobre su relevancia y aporte dentro de la organización.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Dimensión 2 -->
        <div class="ficha-items-block">
            <h3>Dimensión 2 — Comunicación e información</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th style="width:30%;">Sub-constructo</th><th>Qué evalúa el reactivo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>5</td><td>Flujo de información entre áreas</td><td>Percepción sobre la oportunidad y fluidez de la información que circula entre áreas para hacer el trabajo.</td></tr>
                        <tr><td>6</td><td>Comunicación descendente</td><td>Claridad y oportunidad percibidas en la comunicación de decisiones organizacionales relevantes.</td></tr>
                        <tr><td>7</td><td>Funcionamiento de canales</td><td>Valoración del funcionamiento de los canales formales de comunicación interna.</td></tr>
                        <tr><td>8</td><td>Comunicación ascendente</td><td>Disponibilidad percibida de espacios para expresar opiniones y sugerencias hacia arriba.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Dimensión 3 -->
        <div class="ficha-items-block">
            <h3>Dimensión 3 — Innovación y apertura al cambio</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th style="width:30%;">Sub-constructo</th><th>Qué evalúa el reactivo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>9</td><td>Promoción de lo nuevo</td><td>Grado en que la organización estimula la búsqueda de nuevas formas de hacer el trabajo.</td></tr>
                        <tr><td>10</td><td>Apertura a ideas</td><td>Percepción sobre el nivel en que las ideas innovadoras de los colaboradores son consideradas.</td></tr>
                        <tr><td>11</td><td>Adaptación al entorno</td><td>Valoración de la agilidad organizacional para adaptarse a los cambios del entorno.</td></tr>
                        <tr><td>12</td><td>Aprendizaje organizacional</td><td>Percepción sobre cómo la organización trata el error: como castigo o como oportunidad de aprendizaje.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Dimensión 4 -->
        <div class="ficha-items-block">
            <h3>Dimensión 4 — Trabajo en equipo y cohesión</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th style="width:30%;">Sub-constructo</th><th>Qué evalúa el reactivo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>13</td><td>Colaboración y apoyo mutuo</td><td>Percepción del clima de colaboración y apoyo mutuo dentro del equipo de trabajo inmediato.</td></tr>
                        <tr><td>14</td><td>Seguridad psicológica</td><td>Percepción de poder expresar opiniones y desacuerdos sin temor a consecuencias negativas.</td></tr>
                        <tr><td>15</td><td>Confianza interpersonal</td><td>Nivel percibido de confianza interpersonal entre las personas con las que se trabaja directamente.</td></tr>
                        <tr><td>16</td><td>Manejo constructivo del error</td><td>Forma percibida en que el equipo aborda los errores de sus integrantes (constructiva vs. punitiva).</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Dimensión 5 -->
        <div class="ficha-items-block">
            <h3>Dimensión 5 — Reconocimiento y desarrollo (individual)</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th style="width:30%;">Sub-constructo</th><th>Qué evalúa el reactivo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>17</td><td>Reconocimiento del desempeño</td><td>Percepción individual sobre el reconocimiento que recibe el trabajo bien hecho.</td></tr>
                        <tr><td>18</td><td>Oportunidades de aprendizaje</td><td>Percepción sobre la existencia de oportunidades reales de aprender y desarrollarse profesionalmente.</td></tr>
                        <tr><td>19</td><td>Retroalimentación de desempeño</td><td>Valoración de la utilidad de la retroalimentación recibida sobre el propio desempeño.</td></tr>
                        <tr><td>20</td><td>Proyección de crecimiento</td><td>Percepción individual sobre las posibilidades concretas de crecimiento profesional dentro de la organización.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Dimensión 6 -->
        <div class="ficha-items-block">
            <h3>Dimensión 6 — Justicia organizacional y equidad</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th style="width:30%;">Sub-constructo</th><th>Qué evalúa el reactivo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>21</td><td>Justicia procedimental</td><td>Percepción sobre el uso de criterios justos en decisiones que afectan al personal.</td></tr>
                        <tr><td>22</td><td>Justicia distributiva</td><td>Percepción sobre la equidad en la distribución de cargas de trabajo entre las personas.</td></tr>
                        <tr><td>23</td><td>Justicia interaccional</td><td>Percepción sobre el trato respetuoso e imparcial que reciben las personas en la organización.</td></tr>
                        <tr><td>24</td><td>Transparencia evaluativa</td><td>Valoración de la transparencia de los procesos para evaluar y promover al personal.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Dimensión 7 -->
        <div class="ficha-items-block">
            <h3>Dimensión 7 — Visión, propósito y alineación estratégica</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th style="width:30%;">Sub-constructo</th><th>Qué evalúa el reactivo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>25</td><td>Claridad de dirección estratégica</td><td>Grado de claridad percibido respecto al rumbo estratégico de la organización.</td></tr>
                        <tr><td>26</td><td>Sentido del trabajo (meaning)</td><td>Percepción de cómo el trabajo individual contribuye al propósito de la organización.</td></tr>
                        <tr><td>27</td><td>Alineación área-organización</td><td>Percepción de alineación entre las metas del área y los objetivos generales de la organización.</td></tr>
                        <tr><td>28</td><td>Comprensión del aporte personal</td><td>Comprensión del respondiente sobre cómo su trabajo aporta a los resultados organizacionales.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Dimensión 8 -->
        <div class="ficha-items-block">
            <h3>Dimensión 8 — Liderazgo estratégico y confianza en la dirección</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th style="width:30%;">Sub-constructo</th><th>Qué evalúa el reactivo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>29</td><td>Confianza en decisiones de alta dirección</td><td>Nivel de confianza en las decisiones que toma la alta dirección de la organización.</td></tr>
                        <tr><td>30</td><td>Coherencia decir-hacer</td><td>Percepción de coherencia entre los valores que comunica la alta dirección y su actuación efectiva.</td></tr>
                        <tr><td>31</td><td>Liderazgo transformacional / inspirador</td><td>Grado en que los líderes inspiran confianza en el rumbo del negocio.</td></tr>
                        <tr><td>32</td><td>Orientación a las personas</td><td>Percepción de la preocupación genuina de la dirección por las personas que trabajan en la organización.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Dimensión 9 -->
        <div class="ficha-items-block">
            <h3>Dimensión 9 — Gestión estratégica del talento</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th style="width:30%;">Sub-constructo</th><th>Qué evalúa el reactivo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>33</td><td>Identificación de alto potencial (HiPo)</td><td>Percepción sobre la capacidad organizacional para identificar y cuidar a las personas con alto potencial.</td></tr>
                        <tr><td>34</td><td>Meritocracia en promociones</td><td>Percepción de meritocracia en las decisiones sobre promociones y movimientos internos.</td></tr>
                        <tr><td>35</td><td>Atracción y retención</td><td>Valoración sobre la capacidad organizacional para atraer y retener profesionales talentosos.</td></tr>
                        <tr><td>36</td><td>Person-Job Fit</td><td>Percepción sobre el aprovechamiento de las capacidades de las personas en los cargos donde mejor encajan.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Dimensión 10 -->
        <div class="ficha-items-block">
            <h3>Dimensión 10 — Cultura de calidad y excelencia operacional</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th style="width:30%;">Sub-constructo</th><th>Qué evalúa el reactivo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>37</td><td>Compromiso con la calidad</td><td>Percepción del compromiso real de la organización con la calidad del trabajo.</td></tr>
                        <tr><td>38</td><td>Mejora continua</td><td>Grado en que se promueve activamente la mejora continua en procesos y resultados.</td></tr>
                        <tr><td>39</td><td>Estándares de desempeño</td><td>Percepción sobre la existencia de estándares claros y exigentes sobre cómo se debe hacer el trabajo.</td></tr>
                        <tr><td>40</td><td>Orgullo por el producto/servicio</td><td>Grado de orgullo de las personas por la calidad de los productos o servicios que entrega la organización.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- =================== TABLA DE BAREMOS =================== -->
<section id="baremos" class="alt">
    <div class="container">
        <div class="section-head" style="text-align:left;">
            <span class="eyebrow">4 · Tabla de baremos</span>
            <h2>Niveles de clasificación</h2>
            <p>Los mismos cortes equidistantes en escala 0–100 aplican tanto por dimensión como para el Índice Global de Clima (IGC).</p>
        </div>

        <h3 style="margin-bottom:14px;">Por dimensión (escala 0–100)</h3>
        <div class="ficha-table-wrap">
            <table class="ficha-table ficha-baremos-table">
                <thead>
                    <tr>
                        <th style="width:140px;">Nivel</th>
                        <th style="width:140px;">Score</th>
                        <th>Interpretación general</th>
                        <th style="width:130px;">Color</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td><strong>Crítico</strong></td><td>0 – 20</td><td>Estado severamente deficitario. Intervención inmediata.</td><td>🔴 Rojo</td></tr>
                    <tr><td><strong>Bajo</strong></td><td>20.01 – 40</td><td>Estado deficitario. Intervención prioritaria a corto plazo.</td><td>🟠 Naranja</td></tr>
                    <tr><td><strong>Medio</strong></td><td>40.01 – 60</td><td>Focos de mejora identificables. Plan a 12 meses.</td><td>🟡 Amarillo</td></tr>
                    <tr><td><strong>Alto</strong></td><td>60.01 – 80</td><td>Estado favorable. Mantener prácticas.</td><td>🟢 Verde claro</td></tr>
                    <tr><td><strong>Óptimo</strong></td><td>80.01 – 100</td><td>Estado de excelencia. Documentar y replicar.</td><td>🟢 Verde oscuro</td></tr>
                </tbody>
            </table>
        </div>

        <h3 style="margin:32px 0 14px;">Para el Índice Global de Clima (IGC)</h3>
        <p>Mismos cortes equidistantes en escala 0–100. La interpretación se complementa con el índice <strong>rWG</strong> (James, Demaree &amp; Wolf, 1984) para validar agregabilidad: si rWG ≥ 0.70 las percepciones son suficientemente compartidas; si rWG &lt; 0.70 se reporta variabilidad y se recomienda análisis cualitativo por subgrupo.</p>
    </div>
</section>

<!-- =================== CTA FINAL =================== -->
<section class="cta-final">
    <div class="container">
        <h2>¿Quieres aplicar este diagnóstico de clima en tu organización?</h2>
        <p>Solicita una demo gratuita y conversemos sobre cómo se vería un diagnóstico de clima en tu empresa: tamaño, segmentaciones, cronograma e inversión.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Solicitar Demo Gratis</a>
            <a href="<?= base_url('servicios/clima-organizacional') ?>" class="btn btn-outline btn-lg">Volver al servicio</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
