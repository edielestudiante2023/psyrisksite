<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <a href="<?= base_url('recursos') ?>">Recursos</a>
            <span class="sep">/</span>
            <span aria-current="page">Resolución 2764 de 2022</span>
        </nav>

        <ul class="tag-list">
            <li>Mintrabajo</li>
            <li class="purple">Vigente desde 2022</li>
            <li>Reemplaza a la Resolución 2646</li>
        </ul>

        <h1>Resolución 2764 de 2022 — guía explicada</h1>
        <p class="lead">Qué dice la norma actual de batería de riesgo psicosocial en Colombia, qué cambió frente a la 2646 y qué tiene que hacer tu empresa para cumplir.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="article">
            <div class="toc">
                <h4>En esta guía</h4>
                <ul>
                    <li>¿Qué es la Resolución 2764?</li>
                    <li>Cambios frente a la Resolución 2646 de 2008</li>
                    <li>A quién aplica y cuándo</li>
                    <li>Periodicidad de la evaluación</li>
                    <li>Sanciones por incumplimiento</li>
                    <li>Cómo cumplirla con PsyRisk</li>
                </ul>
            </div>

            <h2>¿Qué es la Resolución 2764?</h2>
            <p>La Resolución 2764 del 26 de diciembre de 2022, expedida por el Ministerio del Trabajo de Colombia, adopta los instrumentos de evaluación de los factores de riesgo psicosocial y reemplaza a la histórica Resolución 2646 de 2008. Es la norma vigente que rige la batería de riesgo psicosocial en el país.</p>
            <p>El espíritu de la norma es claro: las empresas no solo deben identificar el riesgo psicosocial, sino documentarlo con un instrumento validado y mantener un sistema de vigilancia activo sobre él.</p>

            <h2>Cambios frente a la Resolución 2646 de 2008</h2>
            <p>La 2646 cumplió un ciclo histórico importante pero quedó corta frente a la realidad laboral actual. Estos son los cambios más relevantes:</p>
            <ul>
                <li><strong>Actualización de la batería:</strong> dimensiones e ítems revisados con base en evidencia clínica reciente.</li>
                <li><strong>Mayor precisión en niveles de riesgo:</strong> puntos de corte mejor calibrados al contexto colombiano.</li>
                <li><strong>Énfasis en vigilancia continua:</strong> la nueva norma exige no solo medir, sino mantener sistema de vigilancia epidemiológica activo.</li>
                <li><strong>Trazabilidad documental:</strong> mayor exigencia en evidencia para auditoría.</li>
                <li><strong>Habeas data reforzado:</strong> alineación con la Ley 1581 de 2012.</li>
            </ul>

            <h2>A quién aplica y cuándo</h2>
            <p>La obligación recae sobre <strong>toda empresa colombiana</strong> con uno o más colaboradores en relación laboral, sin importar el sector económico, el tamaño ni la ciudad de operación. La aplicación debe ser realizada por psicólogos con licencia profesional vigente y especialización en SST.</p>

            <blockquote>
                "El empleador tiene la obligación de identificar, evaluar, prevenir, intervenir y monitorear permanentemente la exposición a factores de riesgo psicosocial." — extracto adaptado de la norma.
            </blockquote>

            <h2>Periodicidad de la evaluación</h2>
            <p>La frecuencia con que debes reaplicar la batería depende del último resultado:</p>
            <ul>
                <li><strong>Cada año</strong> — si tu última evaluación arrojó nivel de riesgo <em>alto</em> o <em>muy alto</em>.</li>
                <li><strong>Cada dos años</strong> — si el resultado fue <em>bajo</em>, <em>medio</em> o <em>sin riesgo</em>.</li>
            </ul>
            <p>Adicionalmente, hay disparadores que obligan a aplicación anticipada: reestructuraciones organizacionales, cambios significativos en condiciones laborales, fusiones, cambios de modalidad (presencial a híbrido), eventos de gran impacto colectivo (accidentes, despidos masivos, etc.).</p>

            <h2>Sanciones por incumplimiento</h2>
            <p>El no cumplimiento puede acarrear sanciones de hasta <strong>500 SMMLV</strong> según la severidad y reincidencia, además de exposición legal frente a demandas individuales por enfermedad profesional. La auditoría puede provenir del Ministerio del Trabajo, la ARL o la justicia laboral.</p>

            <h2>Cómo cumplirla con PsyRisk</h2>
            <p>PsyRisk fue diseñada para satisfacer todos los requerimientos de la Resolución 2764:</p>
            <ul>
                <li>Aplicación de la batería oficial (Forma A y B) en formato digital validado.</li>
                <li>Tabulación automática conforme a los puntos de corte oficiales.</li>
                <li>Informe ejecutivo firmado por psicólogo con licencia en SST.</li>
                <li>Sistema de Vigilancia Epidemiológica activo con trazabilidad documental.</li>
                <li>Plan de intervención priorizado por dominio.</li>
                <li>Cumplimiento integral con Ley 1581 de Habeas Data.</li>
            </ul>

            <div class="related-cta">
                <h3>¿Te toca aplicar la batería este año?</h3>
                <p>Cotización en menos de 24 horas hábiles. Cumplimiento completo de la Resolución 2764.</p>
                <a href="<?= base_url('servicios/bateria-riesgo') ?>" class="btn btn-primary">Conocer el servicio</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
