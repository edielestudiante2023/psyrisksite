<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',                 'url' => base_url('/')],
    ['name' => 'Política de Privacidad', 'url' => base_url('privacidad')],
]]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <span aria-current="page">Política de Privacidad</span>
        </nav>

        <h1>Política de Tratamiento de Datos Personales</h1>
        <p class="lead">PsyRisk · marca de Cycloid Talent. Última actualización: <?= date('d/m/Y') ?>.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="article">
            <h2>1. Identificación del responsable</h2>
            <p><strong>Razón social:</strong> Cycloid Talent<br>
            <strong>Marca comercial:</strong> PsyRisk<br>
            <strong>Dirección:</strong> Tv. 24B #17-209, Soacha, Cundinamarca, Colombia<br>
            <strong>Correo electrónico:</strong> diana.cuestas@cycloidtalent.com<br>
            <strong>Teléfono:</strong> +57 322 907 4371</p>

            <h2>2. Marco legal</h2>
            <p>Esta política se rige por la Ley Estatutaria 1581 de 2012, el Decreto Reglamentario 1377 de 2013 y demás normas concordantes que regulan el tratamiento de datos personales en Colombia.</p>

            <h2>3. Datos que recolectamos</h2>
            <ul>
                <li><strong>Datos de contacto:</strong> nombre, correo electrónico, teléfono, empresa.</li>
                <li><strong>Datos de evaluación:</strong> respuestas a la batería de riesgo psicosocial y cuestionarios de clima organizacional (datos sensibles).</li>
                <li><strong>Datos sociodemográficos:</strong> edad, género, antigüedad, área, cargo (cuando aplique al estudio).</li>
                <li><strong>Datos de navegación:</strong> dirección IP, dispositivo, navegador, comportamiento de uso del sitio.</li>
            </ul>

            <h2>4. Finalidades del tratamiento</h2>
            <ul>
                <li>Atender consultas y solicitudes de cotización enviadas por el formulario de contacto.</li>
                <li>Aplicar y procesar las evaluaciones psicosociales contratadas.</li>
                <li>Generar informes oficiales y planes de intervención agregados (sin identificación individual).</li>
                <li>Mantener el sistema de vigilancia epidemiológica de las empresas clientes.</li>
                <li>Cumplir con obligaciones legales y de reporte ante las autoridades competentes.</li>
                <li>Realizar comunicaciones comerciales relacionadas con nuestros servicios (con autorización).</li>
            </ul>

            <h2>5. Derechos del titular</h2>
            <p>Como titular de los datos personales, tienes derecho a:</p>
            <ul>
                <li>Conocer, actualizar y rectificar tus datos.</li>
                <li>Solicitar prueba de la autorización otorgada.</li>
                <li>Ser informado sobre el uso que damos a tus datos.</li>
                <li>Presentar quejas ante la Superintendencia de Industria y Comercio (SIC).</li>
                <li>Revocar la autorización y/o solicitar la supresión del dato cuando no medie deber legal.</li>
                <li>Acceder gratuitamente a tus datos al menos una vez por mes.</li>
            </ul>

            <h2>6. Procedimiento para ejercer derechos</h2>
            <p>Las solicitudes pueden enviarse al correo <a href="mailto:diana.cuestas@cycloidtalent.com">diana.cuestas@cycloidtalent.com</a>. Daremos respuesta en un plazo máximo de quince (15) días hábiles. Para consultas, en máximo diez (10) días hábiles.</p>

            <h2>7. Medidas de seguridad</h2>
            <p>Aplicamos medidas técnicas, humanas y administrativas para preservar la confidencialidad, integridad y disponibilidad de los datos. Los datos sensibles (resultados de la batería) se almacenan cifrados, con acceso restringido al psicólogo responsable y reportes solo a nivel agregado con un mínimo de siete (7) personas por segmento.</p>

            <h2>8. Transferencias y transmisiones</h2>
            <p>No vendemos ni transferimos datos personales a terceros con fines comerciales. Solo compartimos información con proveedores tecnológicos que prestan servicios necesarios para la operación (alojamiento, correo), bajo contratos que garantizan los mismos niveles de protección.</p>

            <h2>9. Vigencia</h2>
            <p>Esta política rige a partir de la fecha de publicación. Cualquier modificación será comunicada en el sitio web con al menos diez (10) días de antelación.</p>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
