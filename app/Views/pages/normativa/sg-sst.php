<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',         'url' => base_url('/')],
    ['name' => 'Recursos',       'url' => base_url('recursos')],
    ['name' => 'SG-SST Colombia','url' => base_url('normativa/sg-sst')],
]]) ?>
<?= view('partials/jsonld-article', [
    'headline'    => 'SG-SST en Colombia — guía explicada',
    'description' => 'Sistema de Gestión de Seguridad y Salud en el Trabajo en Colombia: marco legal, estándares mínimos según la Resolución 0312 y conexión con el riesgo psicosocial.',
    'url'         => base_url('normativa/sg-sst'),
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
            <span aria-current="page">SG-SST Colombia</span>
        </nav>

        <h1>SG-SST — Sistema de Gestión de Seguridad y Salud en el Trabajo</h1>
        <p class="lead">Marco general del sistema, sus estándares mínimos y cómo se relaciona con la evaluación de riesgo psicosocial.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="article">
            <div class="toc">
                <h4>En esta guía</h4>
                <ul>
                    <li>¿Qué es el SG-SST?</li>
                    <li>Decreto 1072 de 2015</li>
                    <li>Estándares mínimos (Resolución 0312 de 2019)</li>
                    <li>Riesgo psicosocial dentro del SG-SST</li>
                    <li>Evidencia documental requerida</li>
                </ul>
            </div>

            <h2>¿Qué es el SG-SST?</h2>
            <p>El Sistema de Gestión de Seguridad y Salud en el Trabajo (SG-SST) es el conjunto de procesos que toda empresa colombiana debe implementar para identificar, evaluar y controlar los riesgos a los que están expuestos sus colaboradores. Su objetivo es prevenir lesiones, enfermedades y muertes derivadas del trabajo.</p>
            <p>El SG-SST es obligatorio para todas las empresas, incluyendo las que operan con un solo colaborador.</p>

            <h2>Decreto 1072 de 2015</h2>
            <p>Es el Decreto Único Reglamentario del Sector Trabajo. Compila y unifica las normas dispersas que regulaban la SST. Establece la obligación del SG-SST y define sus componentes mínimos: política, planificación, aplicación, evaluación, auditoría y mejora continua.</p>

            <h2>Estándares mínimos · Resolución 0312 de 2019</h2>
            <p>La Resolución 0312 establece los estándares mínimos del SG-SST según el tamaño y nivel de riesgo de la empresa:</p>
            <ul>
                <li><strong>Empresas con 10 o menos trabajadores</strong> y riesgo I, II, III: 7 estándares mínimos.</li>
                <li><strong>Empresas con 11 a 50 trabajadores</strong> y riesgo I, II, III: 21 estándares mínimos.</li>
                <li><strong>Empresas con más de 50 trabajadores</strong>: 60 estándares mínimos completos.</li>
            </ul>
            <p>El cumplimiento se verifica con auto-evaluación anual cuyo resultado debe ser igual o superior al 86% para considerarse aceptable.</p>

            <h2>Riesgo psicosocial dentro del SG-SST</h2>
            <p>El riesgo psicosocial es uno de los riesgos contemplados en la matriz de identificación que exige el SG-SST. La Resolución 2764 de 2022 define los instrumentos específicos para evaluarlo (la batería oficial), y los resultados de esa evaluación deben incorporarse al SG-SST como insumo para la planificación, las acciones preventivas y la vigilancia.</p>

            <blockquote>
                "La empresa que tiene SG-SST sin evaluación psicosocial vigente tiene un sistema incompleto."
            </blockquote>

            <h2>Evidencia documental requerida</h2>
            <p>Para que el SG-SST sea auditable, debes mantener al menos:</p>
            <ul>
                <li>Política de SST firmada por la alta dirección.</li>
                <li>Matriz de riesgos actualizada (incluye psicosocial).</li>
                <li>Plan anual de trabajo en SST.</li>
                <li>Resultados de la batería de riesgo psicosocial.</li>
                <li>Plan de intervención derivado.</li>
                <li>Registros de capacitaciones (acoso laboral, riesgo psicosocial, etc.).</li>
                <li>Actas del COPASST/Vigía de SST.</li>
                <li>Reportes de incidentes y enfermedades laborales.</li>
            </ul>

            <div class="related-cta">
                <h3>PsyRisk integra el componente psicosocial de tu SG-SST</h3>
                <p>Te entregamos la evidencia documental lista para auditar.</p>
                <a href="<?= base_url('servicios/bateria-riesgo') ?>" class="btn btn-primary">Ver servicio</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
