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
            <li class="purple">Versión 1.0</li>
            <li>10 dimensiones</li>
            <li class="purple">40 ítems</li>
            <li>Escala Likert 5 puntos</li>
        </ul>

        <h1>Ficha Técnica — <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">Psycloid Method · Clima Organizacional v1.0</span></h1>
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
            <a href="#items">Los 40 ítems</a>
            <span class="sep">·</span>
            <a href="#baremos">Tabla de baremos</a>
            <span class="sep">·</span>
            <a href="#fuentes">Fuentes documentales</a>
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
                    <tr><th>Cálculo del Índice Global de Clima (IGC)</th><td>Promedio ponderado de las 10 dimensiones, escalado a 0–100. Pesos iguales (0.10 cada una) en v1.0.</td></tr>
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

<!-- =================== LOS 40 ÍTEMS =================== -->
<section id="items">
    <div class="container">
        <div class="section-head" style="text-align:left;">
            <span class="eyebrow">3 · Los 40 ítems</span>
            <h2>Listado completo por dimensión</h2>
            <p>Todos los ítems se responden en escala Likert de 5 puntos (1 = Totalmente en desacuerdo · 5 = Totalmente de acuerdo).</p>
        </div>

        <!-- Dimensión 1 -->
        <div class="ficha-items-block">
            <h3>Dimensión 1 — Identificación y orgullo organizacional</h3>
            <div class="ficha-table-wrap">
                <table class="ficha-table ficha-items">
                    <thead>
                        <tr><th style="width:50px;">#</th><th>Ítem</th><th style="width:32%;">Sub-constructo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Me siento orgulloso(a) de pertenecer a esta organización.</td><td>Orgullo de pertenencia</td></tr>
                        <tr><td>2</td><td>Recomendaría esta organización como un buen lugar para trabajar.</td><td>Intención de recomendación (eNPS)</td></tr>
                        <tr><td>3</td><td>Me identifico con los valores y la forma de ser de esta organización.</td><td>Identificación con valores</td></tr>
                        <tr><td>4</td><td>Siento que soy parte importante de esta organización.</td><td>Sentido de importancia personal</td></tr>
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
                        <tr><th style="width:50px;">#</th><th>Ítem</th><th style="width:32%;">Sub-constructo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>5</td><td>La información que necesito para hacer mi trabajo fluye oportunamente entre las áreas.</td><td>Flujo de información entre áreas</td></tr>
                        <tr><td>6</td><td>Las decisiones importantes de la organización se comunican de manera clara y oportuna.</td><td>Comunicación descendente</td></tr>
                        <tr><td>7</td><td>Los canales de comunicación interna funcionan adecuadamente.</td><td>Funcionamiento de canales</td></tr>
                        <tr><td>8</td><td>Cuando tengo una opinión o sugerencia, encuentro espacios para expresarla.</td><td>Comunicación ascendente</td></tr>
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
                        <tr><th style="width:50px;">#</th><th>Ítem</th><th style="width:32%;">Sub-constructo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>9</td><td>En esta organización se promueve la búsqueda de nuevas formas de hacer las cosas.</td><td>Promoción de lo nuevo</td></tr>
                        <tr><td>10</td><td>Las ideas innovadoras de los colaboradores son tomadas en cuenta.</td><td>Apertura a ideas</td></tr>
                        <tr><td>11</td><td>La organización se adapta con agilidad a los cambios del entorno.</td><td>Adaptación al entorno</td></tr>
                        <tr><td>12</td><td>Aquí los errores se utilizan como oportunidad de aprendizaje y mejora.</td><td>Aprendizaje organizacional</td></tr>
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
                        <tr><th style="width:50px;">#</th><th>Ítem</th><th style="width:32%;">Sub-constructo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>13</td><td>En mi equipo de trabajo existe un ambiente de colaboración y apoyo mutuo.</td><td>Colaboración y apoyo mutuo</td></tr>
                        <tr><td>14</td><td>Puedo expresar mis opiniones y desacuerdos sin temor a consecuencias negativas.</td><td>Seguridad psicológica</td></tr>
                        <tr><td>15</td><td>Las personas con las que trabajo confían unas en otras.</td><td>Confianza interpersonal</td></tr>
                        <tr><td>16</td><td>Cuando alguien comete un error en mi equipo, se aborda de manera constructiva.</td><td>Manejo constructivo del error</td></tr>
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
                        <tr><th style="width:50px;">#</th><th>Ítem</th><th style="width:32%;">Sub-constructo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>17</td><td>Mi trabajo bien hecho es reconocido en esta organización.</td><td>Reconocimiento del desempeño</td></tr>
                        <tr><td>18</td><td>Tengo oportunidades reales de aprender y desarrollarme profesionalmente.</td><td>Oportunidades de aprendizaje</td></tr>
                        <tr><td>19</td><td>Recibo retroalimentación útil sobre mi desempeño.</td><td>Retroalimentación de desempeño</td></tr>
                        <tr><td>20</td><td>Veo posibilidades concretas de crecimiento profesional para mí en esta organización.</td><td>Proyección de crecimiento</td></tr>
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
                        <tr><th style="width:50px;">#</th><th>Ítem</th><th style="width:32%;">Sub-constructo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>21</td><td>Las decisiones que afectan al personal se toman siguiendo criterios justos.</td><td>Justicia procedimental</td></tr>
                        <tr><td>22</td><td>Las cargas de trabajo se distribuyen de manera equitativa entre las personas.</td><td>Justicia distributiva</td></tr>
                        <tr><td>23</td><td>En esta organización las personas reciben un trato respetuoso e imparcial.</td><td>Justicia interaccional</td></tr>
                        <tr><td>24</td><td>Los procesos para evaluar y promover al personal son transparentes.</td><td>Transparencia evaluativa</td></tr>
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
                        <tr><th style="width:50px;">#</th><th>Ítem</th><th style="width:32%;">Sub-constructo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>25</td><td>Conozco con claridad hacia dónde se dirige esta organización.</td><td>Claridad de dirección estratégica</td></tr>
                        <tr><td>26</td><td>El trabajo que realizo contribuye al propósito de la organización.</td><td>Sentido del trabajo (meaning)</td></tr>
                        <tr><td>27</td><td>Las metas de mi área están alineadas con los objetivos generales de la organización.</td><td>Alineación área-organización</td></tr>
                        <tr><td>28</td><td>Comprendo cómo lo que hago aporta a los resultados de la organización.</td><td>Comprensión del aporte personal</td></tr>
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
                        <tr><th style="width:50px;">#</th><th>Ítem</th><th style="width:32%;">Sub-constructo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>29</td><td>Confío en las decisiones que toma la alta dirección de esta organización.</td><td>Confianza en decisiones de alta dirección</td></tr>
                        <tr><td>30</td><td>La alta dirección actúa de manera coherente con los valores que comunica.</td><td>Coherencia decir-hacer</td></tr>
                        <tr><td>31</td><td>Los líderes de esta organización inspiran confianza en el rumbo del negocio.</td><td>Liderazgo transformacional / inspirador</td></tr>
                        <tr><td>32</td><td>La dirección demuestra preocupación genuina por las personas que trabajan aquí.</td><td>Orientación a las personas</td></tr>
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
                        <tr><th style="width:50px;">#</th><th>Ítem</th><th style="width:32%;">Sub-constructo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>33</td><td>En esta organización se identifica y se cuida a las personas con alto potencial.</td><td>Identificación de alto potencial (HiPo)</td></tr>
                        <tr><td>34</td><td>Las decisiones sobre promociones y movimientos internos se basan en méritos y capacidades.</td><td>Meritocracia en promociones</td></tr>
                        <tr><td>35</td><td>La organización logra atraer y retener profesionales talentosos.</td><td>Atracción y retención</td></tr>
                        <tr><td>36</td><td>Las capacidades de las personas son aprovechadas en los cargos donde mejor encajan.</td><td>Person-Job Fit</td></tr>
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
                        <tr><th style="width:50px;">#</th><th>Ítem</th><th style="width:32%;">Sub-constructo</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>37</td><td>En esta organización existe un compromiso real con la calidad del trabajo.</td><td>Compromiso con la calidad</td></tr>
                        <tr><td>38</td><td>Se promueve activamente la mejora continua en procesos y resultados.</td><td>Mejora continua</td></tr>
                        <tr><td>39</td><td>Existen estándares claros y exigentes sobre cómo se debe hacer el trabajo.</td><td>Estándares de desempeño</td></tr>
                        <tr><td>40</td><td>Las personas se sienten orgullosas de la calidad de los productos o servicios que entrega la organización.</td><td>Orgullo por el producto/servicio</td></tr>
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

<!-- =================== FUENTES DOCUMENTALES =================== -->
<section id="fuentes">
    <div class="container">
        <div class="section-head" style="text-align:left;">
            <span class="eyebrow">5 · Fuentes documentales</span>
            <h2>Documentos completos disponibles en el repositorio</h2>
            <p>Esta ficha es un extracto. Los documentos extendidos del Psycloid Method · Clima Organizacional v1.0 viven dentro del repositorio del proyecto.</p>
        </div>

        <ul class="ficha-fuentes">
            <li>
                <strong>Manual técnico completo</strong>
                <span>Aproximadamente 25 páginas con 30 referencias APA.</span>
                <code>legal/06_psycloid_clima_manual.md</code>
            </li>
            <li>
                <strong>Tabla de especificaciones</strong>
                <span>Blueprint completo del instrumento (dimensiones, sub-constructos e ítems).</span>
                <code>legal/05_psycloid_clima_items.md</code>
            </li>
            <li>
                <strong>Schema y seeds en base de datos</strong>
                <span>Estructura multitenant con datos iniciales del instrumento.</span>
                <code>sql/multitenant/010-015</code>
            </li>
        </ul>
    </div>
</section>

<!-- =================== CTA FINAL =================== -->
<section class="cta-final">
    <div class="container">
        <h2>¿Quieres aplicar el Psycloid Method en tu organización?</h2>
        <p>Solicita una demo gratuita y conversemos sobre cómo se vería un diagnóstico de clima en tu empresa: tamaño, segmentaciones, cronograma e inversión.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Solicitar Demo Gratis</a>
            <a href="<?= base_url('servicios/clima-organizacional') ?>" class="btn btn-outline btn-lg">Volver al servicio</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
