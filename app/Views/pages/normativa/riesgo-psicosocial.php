<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',             'url' => base_url('/')],
    ['name' => 'Recursos',           'url' => base_url('recursos')],
    ['name' => 'Riesgo Psicosocial', 'url' => base_url('normativa/riesgo-psicosocial')],
]]) ?>
<?= view('partials/jsonld-article', [
    'headline'    => 'Riesgo Psicosocial — qué es y por qué importa',
    'description' => 'Qué es el riesgo psicosocial, factores intra y extralaborales, consecuencias para la empresa y cómo se gestiona profesionalmente.',
    'url'         => base_url('normativa/riesgo-psicosocial'),
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
            <span aria-current="page">Riesgo Psicosocial</span>
        </nav>

        <h1>Riesgo Psicosocial — qué es y por qué importa</h1>
        <p class="lead">El riesgo psicosocial es el factor de riesgo más subestimado en seguridad y salud en el trabajo. Y al mismo tiempo, uno de los que más impacto económico genera.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="article">
            <div class="toc">
                <h4>En esta guía</h4>
                <ul>
                    <li>Definición</li>
                    <li>Factores intralaborales</li>
                    <li>Factores extralaborales</li>
                    <li>Consecuencias para la empresa</li>
                    <li>Cómo se gestiona</li>
                </ul>
            </div>

            <h2>Definición</h2>
            <p>El riesgo psicosocial es la probabilidad de que las condiciones del trabajo (organización, contenido, relaciones, contexto) afecten negativamente la salud mental, física y social del trabajador.</p>
            <p>A diferencia de los riesgos físicos o químicos, no se ve a simple vista. Se manifiesta en comportamientos: rotación, ausentismo, conflictos, errores, accidentes, incapacidades por trastornos mentales.</p>

            <h2>Factores intralaborales</h2>
            <p>Son condiciones presentes dentro de la organización. La batería oficial colombiana evalúa cuatro dominios principales:</p>
            <ul>
                <li><strong>Liderazgo y relaciones sociales en el trabajo</strong> — estilo de jefatura, calidad de las relaciones, apoyo de superiores y pares.</li>
                <li><strong>Control sobre el trabajo</strong> — autonomía, capacitación, oportunidades de desarrollo, claridad del rol.</li>
                <li><strong>Demandas del trabajo</strong> — carga, ritmo, exigencia emocional, conflictos de rol.</li>
                <li><strong>Recompensa</strong> — reconocimiento, compensación, sentido de pertenencia, estabilidad.</li>
            </ul>

            <h2>Factores extralaborales</h2>
            <p>Son condiciones fuera del trabajo que impactan el desempeño. La batería evalúa siete dimensiones:</p>
            <ul>
                <li>Tiempo fuera del trabajo</li>
                <li>Relaciones familiares</li>
                <li>Comunicación y relaciones interpersonales</li>
                <li>Situación económica</li>
                <li>Características de la vivienda y el entorno</li>
                <li>Influencia del entorno extralaboral en el trabajo</li>
                <li>Desplazamiento vivienda-trabajo</li>
            </ul>

            <h2>Consecuencias para la empresa</h2>
            <p>Las empresas que ignoran el riesgo psicosocial pagan en silencio. Estas son las cuentas más comunes:</p>
            <ul>
                <li><strong>Rotación elevada</strong> — perder y reemplazar a un colaborador profesional cuesta entre 50% y 200% de su salario anual.</li>
                <li><strong>Ausentismo</strong> — incapacidades por trastornos mentales han crecido sostenidamente en Colombia.</li>
                <li><strong>Caída de productividad</strong> — el llamado <em>presentismo</em>: estar en el puesto sin rendimiento real.</li>
                <li><strong>Demandas y sanciones</strong> — exposición legal por enfermedad profesional o acoso laboral.</li>
                <li><strong>Daño reputacional</strong> — más visible hoy con redes sociales y plataformas de reseñas laborales.</li>
            </ul>

            <h2>Cómo se gestiona</h2>
            <p>Gestionar riesgo psicosocial no es un evento, es un sistema. Idealmente combina:</p>
            <ol>
                <li><strong>Evaluación periódica</strong> con la batería oficial.</li>
                <li><strong>Vigilancia epidemiológica</strong> activa entre evaluaciones.</li>
                <li><strong>Intervención por niveles</strong> (primaria, secundaria, terciaria).</li>
                <li><strong>Capacitación continua</strong> de líderes y equipos.</li>
                <li><strong>Cultura organizacional</strong> que valore la salud mental.</li>
            </ol>

            <div class="related-cta">
                <h3>Empieza con un diagnóstico riguroso</h3>
                <p>PsyRisk te entrega la batería, la vigilancia y el plan de intervención en una sola plataforma.</p>
                <a href="<?= base_url('/') ?>" class="btn btn-primary">Conocer la propuesta</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
