<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',                       'url' => base_url('/')],
    ['name' => 'Recursos',                     'url' => base_url('recursos')],
    ['name' => 'Batería Psicosocial Colombia', 'url' => base_url('normativa/bateria-psicosocial-colombia')],
]]) ?>
<?= view('partials/jsonld-article', [
    'headline'    => 'Batería Psicosocial Colombia — guía explicada',
    'description' => 'Qué es la batería psicosocial colombiana, sus formas A y B, dimensiones, niveles de riesgo y qué entrega un informe profesional completo.',
    'url'         => base_url('normativa/bateria-psicosocial-colombia'),
]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <a href="<?= base_url('recursos') ?>">Recursos</a>
            <span class="sep">/</span>
            <span aria-current="page">Batería Psicosocial Colombia</span>
        </nav>

        <h1>Batería Psicosocial — guía explicada</h1>
        <p class="lead">Qué es, cómo se compone, en qué se diferencian las Formas A y B, y qué se espera del informe final.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="article">
            <div class="toc">
                <h4>En esta guía</h4>
                <ul>
                    <li>Definición</li>
                    <li>Estructura de la batería</li>
                    <li>Forma A vs Forma B</li>
                    <li>Niveles de riesgo</li>
                    <li>Qué entrega un informe completo</li>
                </ul>
            </div>

            <h2>Definición</h2>
            <p>La <strong>Batería de Riesgo Psicosocial</strong> es el conjunto oficial de instrumentos psicométricos validados por el Ministerio del Trabajo de Colombia para medir los factores de riesgo psicosocial intra y extralaborales de los colaboradores de una empresa.</p>
            <p>No es una encuesta de clima ni una opinión sobre la empresa: es un instrumento clínico con metodología, puntos de corte y procedimiento de aplicación regulados por norma.</p>

            <h2>Estructura de la batería</h2>
            <p>La batería incluye varios cuestionarios complementarios:</p>
            <ul>
                <li><strong>Cuestionario de factores intralaborales</strong> (Forma A o B según el cargo).</li>
                <li><strong>Cuestionario de factores extralaborales</strong> — común a todos los cargos.</li>
                <li><strong>Cuestionario sociodemográfico</strong> — caracterización del trabajador.</li>
                <li><strong>Cuestionario de evaluación del estrés</strong> — síntomas presentes.</li>
                <li><strong>Guía para análisis psicosocial</strong> — entrevista cualitativa cuando aplica.</li>
            </ul>

            <h2>Forma A vs Forma B</h2>
            <p>El cuestionario intralaboral tiene dos versiones según el perfil del colaborador:</p>
            <h3>Forma A</h3>
            <p>Aplica a cargos con personal a cargo, formación profesional, jefaturas y técnicos especializados. Tiene <strong>123 ítems</strong> distribuidos en <strong>19 dimensiones intralaborales</strong>.</p>
            <h3>Forma B</h3>
            <p>Aplica a auxiliares, operarios y personal sin personal a cargo. Tiene <strong>97 ítems</strong> en <strong>16 dimensiones intralaborales</strong>. Más corta porque algunas dimensiones (liderazgo de equipos, por ejemplo) no aplican a estos roles.</p>

            <h2>Niveles de riesgo</h2>
            <p>Cada dominio se clasifica en uno de estos niveles según el puntaje transformado:</p>
            <ul>
                <li><strong>Sin riesgo o riesgo despreciable</strong> — no requiere intervención inmediata.</li>
                <li><strong>Riesgo bajo</strong> — monitoreo periódico.</li>
                <li><strong>Riesgo medio</strong> — atención focalizada.</li>
                <li><strong>Riesgo alto</strong> — intervención prioritaria.</li>
                <li><strong>Riesgo muy alto</strong> — acción inmediata y reaplicación anual.</li>
            </ul>

            <h2>Qué entrega un informe completo</h2>
            <p>Un informe profesional de la batería incluye, mínimo:</p>
            <ul>
                <li>Caracterización sociodemográfica de la población evaluada.</li>
                <li>Resultados por dominio intralaboral, extralaboral y de estrés.</li>
                <li>Análisis cualitativo de hallazgos.</li>
                <li>Plan de intervención priorizado.</li>
                <li>Sistema de Vigilancia Epidemiológica propuesto.</li>
                <li>Firma del psicólogo responsable.</li>
            </ul>

            <div class="related-cta">
                <h3>Aplica la batería con PsyRisk</h3>
                <p>Forma A y B oficiales, tabulación automática, informe firmado por profesional certificado.</p>
                <a href="<?= base_url('servicios/bateria-riesgo') ?>" class="btn btn-primary">Ver servicio completo</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
