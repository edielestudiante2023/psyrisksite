<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',           'url' => base_url('/')],
    ['name' => 'Recursos',         'url' => base_url('recursos')],
    ['name' => 'Ley 1581 de 2012', 'url' => base_url('normativa/ley-1581')],
]]) ?>
<?= view('partials/jsonld-article', [
    'headline'    => 'Ley 1581 de 2012 — Habeas Data en evaluaciones psicosociales',
    'description' => 'Ley colombiana de protección de datos personales, datos sensibles, derechos del titular y aplicación específica en la batería de riesgo psicosocial.',
    'url'         => base_url('normativa/ley-1581'),
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
            <span aria-current="page">Ley 1581 de 2012</span>
        </nav>

        <h1>Ley 1581 de 2012 — Protección de Datos Personales</h1>
        <p class="lead">La ley colombiana de habeas data y por qué es central en cualquier evaluación psicosocial profesional.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="article">
            <div class="toc">
                <h4>En esta guía</h4>
                <ul>
                    <li>¿Qué establece la Ley 1581?</li>
                    <li>Datos sensibles y datos públicos</li>
                    <li>Derechos del titular</li>
                    <li>Obligaciones del responsable del tratamiento</li>
                    <li>Aplicación en la batería psicosocial</li>
                </ul>
            </div>

            <h2>¿Qué establece la Ley 1581?</h2>
            <p>La Ley 1581 de 2012, reglamentada por el Decreto 1377 de 2013, regula el tratamiento de datos personales en Colombia. Establece los principios, derechos y obligaciones que deben observar todas las personas y entidades que recolecten, almacenen o usen información personal de otros.</p>
            <p>Su autoridad de control es la <strong>Superintendencia de Industria y Comercio (SIC)</strong>, que puede sancionar incumplimientos con multas de hasta 2.000 SMMLV.</p>

            <h2>Datos sensibles y datos públicos</h2>
            <p>La ley clasifica los datos en varios niveles de protección:</p>
            <ul>
                <li><strong>Datos públicos</strong> — información que la ley reconoce como tal (Ej: registros mercantiles).</li>
                <li><strong>Datos privados</strong> — información de carácter íntimo (Ej: dirección, teléfono).</li>
                <li><strong>Datos semiprivados</strong> — interesan a su titular y a un grupo reducido (Ej: información financiera).</li>
                <li><strong>Datos sensibles</strong> — información que afecta la intimidad o cuyo uso indebido puede generar discriminación. <em>Aquí entran los datos psicosociales y de salud mental</em>.</li>
            </ul>

            <h2>Derechos del titular</h2>
            <p>Quien entrega sus datos (el "titular") tiene derechos protegidos:</p>
            <ul>
                <li>Conocer, actualizar y rectificar sus datos.</li>
                <li>Solicitar prueba de la autorización otorgada.</li>
                <li>Ser informado sobre el uso que se da a sus datos.</li>
                <li>Presentar quejas ante la SIC.</li>
                <li>Revocar la autorización o solicitar supresión de los datos.</li>
                <li>Acceder gratuitamente a sus datos al menos una vez al mes.</li>
            </ul>

            <h2>Obligaciones del responsable del tratamiento</h2>
            <p>La empresa o persona que recolecta los datos debe:</p>
            <ul>
                <li>Solicitar autorización previa, expresa e informada.</li>
                <li>Disponer de una política de tratamiento de datos publicada.</li>
                <li>Mantener mecanismos para que el titular ejerza sus derechos.</li>
                <li>Implementar medidas técnicas y administrativas de seguridad.</li>
                <li>Reportar incidentes de seguridad a la SIC.</li>
                <li>Inscribir bases de datos relevantes en el RNBD (Registro Nacional de Bases de Datos).</li>
            </ul>

            <h2>Aplicación en la batería psicosocial</h2>
            <p>Los datos generados por la batería son <strong>datos sensibles</strong>: revelan estado de salud mental, percepción del ambiente laboral y relaciones interpersonales. Su mal manejo puede generar discriminación, acoso o despidos injustificados.</p>
            <p>Por eso, una aplicación profesional de la batería incluye:</p>
            <ul>
                <li>Consentimiento explícito del trabajador antes de aplicar.</li>
                <li>Disociación entre identidad y respuestas.</li>
                <li>Reportes solo a nivel agregado (mínimo 7 personas por segmento).</li>
                <li>Almacenamiento cifrado.</li>
                <li>Acceso restringido al psicólogo responsable.</li>
                <li>Derecho del trabajador a solicitar sus datos o pedir su supresión.</li>
            </ul>

            <blockquote>
                "Si una empresa puede ver los resultados individuales de sus colaboradores en la batería, está incumpliendo la Ley 1581."
            </blockquote>

            <div class="related-cta">
                <h3>PsyRisk cumple integralmente con la Ley 1581</h3>
                <p>Anonimato real, agrupación segura, almacenamiento cifrado y trazabilidad completa.</p>
                <a href="<?= base_url('privacidad') ?>" class="btn btn-primary">Leer nuestra política</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
