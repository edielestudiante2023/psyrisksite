<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',                 'url' => base_url('/')],
    ['name' => 'Términos y Condiciones', 'url' => base_url('terminos')],
]]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <span aria-current="page">Términos y Condiciones</span>
        </nav>

        <h1>Términos y Condiciones de Uso</h1>
        <p class="lead">Sitio web PsyRisk · marca de Cycloid Talent. Última actualización: <?= date('d/m/Y') ?>.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="article">
            <h2>1. Aceptación de los términos</h2>
            <p>El uso del sitio web psyrisk.cycloidtalent.com (en adelante, "el sitio") implica la aceptación de estos términos y condiciones. Si no estás de acuerdo con ellos, por favor no uses el sitio.</p>

            <h2>2. Naturaleza del sitio</h2>
            <p>El sitio es una plataforma informativa y comercial de la marca PsyRisk, perteneciente a Cycloid Talent. A través de él presentamos nuestros servicios profesionales en evaluación, vigilancia y gestión del riesgo psicosocial.</p>
            <p>El sitio <strong>no constituye una herramienta clínica de evaluación</strong>. Las evaluaciones formales se realizan en una plataforma separada, exclusivamente bajo contrato comercial con clientes corporativos.</p>

            <h2>3. Uso permitido</h2>
            <p>El usuario se compromete a:</p>
            <ul>
                <li>Usar el sitio con fines legales y de buena fe.</li>
                <li>No realizar acciones que comprometan la seguridad o disponibilidad del sitio.</li>
                <li>No reproducir, copiar, distribuir o explotar comercialmente los contenidos sin autorización expresa.</li>
                <li>Suministrar información veraz en los formularios de contacto.</li>
            </ul>

            <h2>4. Propiedad intelectual</h2>
            <p>Todos los contenidos del sitio (textos, imágenes, diseños, código fuente, marca PsyRisk) son propiedad de Cycloid Talent o se usan bajo licencia. Su uso no autorizado puede acarrear responsabilidad civil y penal según la legislación colombiana sobre derechos de autor.</p>

            <h2>5. Servicios profesionales</h2>
            <p>Los servicios mostrados en el sitio (batería, clima, vigilancia, planes, capacitaciones) se prestan bajo contrato comercial separado, con condiciones específicas de alcance, plazos, entregables y precios. Los precios mostrados son referenciales y pueden variar según el sector, tamaño y ubicación del cliente.</p>

            <h2>6. Formularios de contacto</h2>
            <p>Los datos suministrados a través del formulario de contacto se tratan conforme a nuestra <a href="<?= base_url('privacidad') ?>">Política de Privacidad</a>. La información se usa exclusivamente para responder tu solicitud y enviar comunicaciones comerciales relacionadas si autorizaste recibirlas.</p>

            <h2>7. Limitación de responsabilidad</h2>
            <p>El contenido publicado en el sitio (especialmente las guías sobre normativa) es informativo y no constituye asesoría jurídica formal. Recomendamos siempre consultar con un profesional en derecho laboral o SST para casos específicos.</p>
            <p>Cycloid Talent hace esfuerzos razonables por mantener la información actualizada, pero no se hace responsable por errores, omisiones o daños derivados del uso de la información publicada en el sitio.</p>

            <h2>8. Enlaces externos</h2>
            <p>El sitio puede contener enlaces a sitios de terceros. No nos hacemos responsables por el contenido, la disponibilidad ni las prácticas de privacidad de esos sitios.</p>

            <h2>9. Modificaciones</h2>
            <p>Cycloid Talent se reserva el derecho a modificar estos términos en cualquier momento. Los cambios se publicarán en esta página con la fecha de actualización correspondiente.</p>

            <h2>10. Legislación aplicable y jurisdicción</h2>
            <p>Estos términos se rigen por las leyes de la República de Colombia. Cualquier controversia derivada del uso del sitio se someterá a los jueces de Bogotá D.C., salvo que la ley imponga jurisdicción diferente.</p>

            <h2>11. Contacto</h2>
            <p>Para cualquier inquietud sobre estos términos, escríbenos a <a href="mailto:diana.cuestas@cycloidtalent.com">diana.cuestas@cycloidtalent.com</a>.</p>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
