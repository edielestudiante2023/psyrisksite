<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',                  'url' => base_url('/')],
    ['name' => 'Servicios',               'url' => base_url('/#servicios')],
    ['name' => 'Planes de Intervención',  'url' => base_url('servicios/planes-intervencion')],
]]) ?>
<?= view('partials/jsonld-service', [
    'name'        => 'Planes de Intervención Psicosocial',
    'description' => 'Planes de intervención psicosocial priorizados por dominio, con responsables, plazos, evidencia y trazabilidad. Convierten los hallazgos de la batería en acciones ejecutables.',
    'url'         => base_url('servicios/planes-intervencion'),
    'serviceType' => 'Intervención en riesgo psicosocial',
]) ?>
<?= view('partials/jsonld-faq', ['faqs' => [
    ['q' => '¿Necesito tener la batería aplicada para contratar planes de intervención?', 'a' => 'Lo recomendable, sí. Los planes se diseñan sobre hallazgos. Si ya tienes una batería reciente trabajamos sobre ella; si no, lo natural es contratar el paquete integrado.'],
    ['q' => '¿Quién ejecuta el plan de intervención: PsyRisk o mi empresa?', 'a' => 'El responsable formal siempre es tu empresa según la normativa SST. PsyRisk participa como diseñador, facilitador de capacitaciones y verificador independiente.'],
    ['q' => '¿Cuánto cuesta un plan de intervención psicosocial?', 'a' => 'Depende de las acciones seleccionadas y del tamaño de la población. Una capacitación grupal típica arranca en 650.000 COP. Un programa completo de 3 meses ronda los 3.500.000 COP.'],
    ['q' => '¿Las capacitaciones son virtuales o presenciales?', 'a' => 'Ambas. Las virtuales se dictan en vivo, no son grabaciones. Las presenciales las llevamos a tu sede en Bogotá, Cundinamarca y la región central.'],
    ['q' => '¿Qué pasa si un plan de intervención no logra su objetivo?', 'a' => 'Lo documentamos honestamente y diseñamos una iteración. PsyRisk no factura nuevos servicios por reintentar; entra dentro del acompañamiento del ciclo.'],
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
            <span aria-current="page">Planes de Intervención</span>
        </nav>

        <ul class="tag-list">
            <li>Prevención por niveles</li>
            <li class="purple">Trazabilidad documental</li>
            <li>Responsables asignados</li>
            <li class="purple">Indicadores de cierre</li>
        </ul>

        <h1>El plan que <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">sí se ejecuta</span> — porque está diseñado para ejecutarse</h1>
        <p class="lead">Un buen diagnóstico sin un plan ejecutable es papel mojado. PsyRisk transforma cada hallazgo de la batería y del SVE en planes con responsable, plazo, evidencia y métrica de cierre.</p>

        <div class="hero-ctas">
            <a href="#" class="btn btn-primary btn-lg">Cotizar plan a la medida</a>
            <a href="#catalogo" class="btn btn-outline btn-lg">Ver catálogo de intervenciones</a>
        </div>
    </div>
</section>

<!-- =================== POR QUÉ FALLAN =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Por qué la mayoría falla</span>
            <h2>Tres razones por las que un plan de intervención termina archivado</h2>
            <p>Si reconoces alguna en tu empresa, este servicio existe exactamente para eso.</p>
        </div>

        <div class="fail-grid">
            <div class="fail-card">
                <span class="big-num">01</span>
                <span class="tag">Anti-patrón</span>
                <h3>Plan genérico copiado</h3>
                <p>"Programa de pausas activas + taller de manejo del estrés" para todas las empresas. Cuando todo aplica, nada cambia.</p>
            </div>
            <div class="fail-card">
                <span class="big-num">02</span>
                <span class="tag">Anti-patrón</span>
                <h3>Sin responsable claro</h3>
                <p>"El área de gestión humana lo coordinará". Cuando todo el mundo es responsable, en realidad nadie lo es. Las acciones pierden tracción a las dos semanas.</p>
            </div>
            <div class="fail-card">
                <span class="big-num">03</span>
                <span class="tag">Anti-patrón</span>
                <h3>Sin evidencia ni cierre</h3>
                <p>El plan se "ejecuta" pero no hay registro fotográfico, lista de asistencia ni indicador de impacto. Auditoría externa lo declara incumplido.</p>
            </div>
        </div>
    </div>
</section>

<!-- =================== MODELO DE PREVENCIÓN POR NIVELES =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Modelo metodológico</span>
            <h2>Tres niveles de prevención — distintos niveles de profundidad</h2>
            <p>Adoptamos el marco clásico de salud pública adaptado al riesgo psicosocial. Cada plan combina los niveles que tu empresa necesita.</p>
        </div>

        <div class="tier-stack">
            <div class="tier">
                <span class="level-pill">
                    Nivel 1
                    <small>Prevención primaria</small>
                </span>
                <div>
                    <h3>Eliminar la fuente del riesgo</h3>
                    <p>Rediseño de cargas, ajuste de turnos, redefinición de roles, políticas anti-acoso, modelos de liderazgo. El cambio actúa sobre la causa, no sobre el síntoma.</p>
                </div>
            </div>

            <div class="tier t2">
                <span class="level-pill">
                    Nivel 2
                    <small>Prevención secundaria</small>
                </span>
                <div>
                    <h3>Detectar y mitigar antes de que escale</h3>
                    <p>Pulsos cortos, líneas de escucha, capacitaciones específicas, mentoría, programas de gestión del estrés. La acción atenúa el impacto cuando el riesgo ya está presente.</p>
                </div>
            </div>

            <div class="tier t3">
                <span class="level-pill">
                    Nivel 3
                    <small>Prevención terciaria</small>
                </span>
                <div>
                    <h3>Atender el caso ya instalado</h3>
                    <p>Acompañamiento clínico individual, derivación a EPS o ARL, planes de retorno laboral, gestión de reincidencias. Recupera al colaborador y reduce el costo organizacional.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== CATÁLOGO POR DOMINIO =================== -->
<section id="catalogo">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Catálogo</span>
            <h2>Intervenciones probadas por dominio crítico</h2>
            <p>Cuatro dominios típicos de la batería con su set de acciones recomendadas. Tu plan se construye eligiendo entre estas (y otras) según tus hallazgos.</p>
        </div>

        <div class="catalog-grid">
            <div class="catalog-card">
                <div class="head">
                    <h4>Liderazgo y relaciones sociales</h4>
                    <span class="level high">Frecuente</span>
                </div>
                <div class="body">
                    <ul>
                        <li>Diagnóstico 360° de líderes <span class="meta">4 sem.</span></li>
                        <li>Programa de liderazgo saludable <span class="meta">3 meses</span></li>
                        <li>Mentoría cruzada entre áreas <span class="meta">6 meses</span></li>
                        <li>Política anti-acoso operativa <span class="meta">2 sem.</span></li>
                    </ul>
                </div>
            </div>

            <div class="catalog-card alt">
                <div class="head">
                    <h4>Demandas del trabajo</h4>
                    <span class="level med">Recurrente</span>
                </div>
                <div class="body">
                    <ul>
                        <li>Análisis de cargas por puesto <span class="meta">3 sem.</span></li>
                        <li>Rediseño de turnos y descansos <span class="meta">1 mes</span></li>
                        <li>Talleres de gestión del estrés <span class="meta">8 sesiones</span></li>
                        <li>Política de desconexión laboral <span class="meta">2 sem.</span></li>
                    </ul>
                </div>
            </div>

            <div class="catalog-card alt">
                <div class="head">
                    <h4>Control sobre el trabajo</h4>
                    <span class="level high">Frecuente</span>
                </div>
                <div class="body">
                    <ul>
                        <li>Modelos de autonomía por rol <span class="meta">1 mes</span></li>
                        <li>Plan individual de desarrollo <span class="meta">trimestral</span></li>
                        <li>Capacitación técnica focalizada <span class="meta">según rol</span></li>
                        <li>Rituales de retroalimentación estructurada <span class="meta">continuo</span></li>
                    </ul>
                </div>
            </div>

            <div class="catalog-card">
                <div class="head">
                    <h4>Recompensa y reconocimiento</h4>
                    <span class="level low">Manejable</span>
                </div>
                <div class="body">
                    <ul>
                        <li>Política de reconocimiento no monetario <span class="meta">2 sem.</span></li>
                        <li>Bandas salariales transparentes <span class="meta">1 mes</span></li>
                        <li>Programa de beneficios flexibles <span class="meta">3 meses</span></li>
                        <li>Comunicaciones de logros equipo <span class="meta">continuo</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== ANATOMÍA DE UN PLAN =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Anatomía PsyRisk</span>
            <h2>Lo que tiene que tener un plan para que se ejecute</h2>
            <p>Cada plan que sale de PsyRisk contiene estos siete elementos — sin excepción. Si falta uno, el plan no se publica.</p>
        </div>

        <div class="plan-anatomy">
            <h3>Plan de intervención #18 · Liderazgo en planta</h3>
            <div class="subtitle">Dominio: Liderazgo y relaciones sociales · Nivel de riesgo: alto · Sede: Soacha</div>

            <div class="field">
                <div class="name"><span class="num">1</span> Hallazgo de origen</div>
                <div class="desc"><strong>Puntaje 38 (riesgo alto)</strong> en dominio Liderazgo, sede Soacha. 32 colaboradores afectados según segmentación.</div>
            </div>
            <div class="field">
                <div class="name"><span class="num">2</span> Objetivo medible</div>
                <div class="desc">Reducir el puntaje del dominio en al menos <strong>10 puntos</strong> en el próximo ciclo (12 meses), con participación ≥ 90%.</div>
            </div>
            <div class="field">
                <div class="name"><span class="num">3</span> Acciones específicas</div>
                <div class="desc">Programa de liderazgo saludable de 3 meses (8 sesiones), seguido de mentoría cruzada y política anti-acoso operativa publicada.</div>
            </div>
            <div class="field">
                <div class="name"><span class="num">4</span> Responsable nombrado</div>
                <div class="desc">Coord. de Talento Humano (líder), Gerencia de Operaciones (sponsor), Comité Paritario (verificador).</div>
            </div>
            <div class="field">
                <div class="name"><span class="num">5</span> Cronograma</div>
                <div class="desc">Inicio el día 15 del mes siguiente al diagnóstico. Hitos: sesión 1 (mes 1) · sesión final (mes 3) · medición de impacto (mes 6).</div>
            </div>
            <div class="field">
                <div class="name"><span class="num">6</span> Evidencia documental</div>
                <div class="desc">Listas de asistencia firmadas, registro fotográfico, material de las sesiones, encuesta de satisfacción post-sesión.</div>
            </div>
            <div class="field">
                <div class="name"><span class="num">7</span> Indicador de cierre</div>
                <div class="desc">Pulso de seguimiento al mes 6 con preguntas focalizadas sobre el dominio. Cierre formal cuando puntaje &lt; 30 sostenidamente.</div>
            </div>
        </div>
    </div>
</section>

<!-- =================== TABLERO KANBAN =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Tablero en vivo</span>
            <h2>El estado de los planes a la vista de quien lo necesita</h2>
            <p>Cada plan se mueve por etapas y deja huella en cada paso. Tu equipo, el comité y la auditoría ven lo mismo.</p>
        </div>

        <div class="kanban">
            <div class="kanban-col">
                <h4>Pendiente <span class="count">3</span></h4>
                <div class="kanban-card">
                    <div class="title">Plan #21 · Recompensa comercial</div>
                    <div class="meta">
                        <span>Vence en 8 días</span>
                        <span class="who">CT</span>
                    </div>
                </div>
                <div class="kanban-card warn">
                    <div class="title">Plan #22 · Demandas operaciones</div>
                    <div class="meta">
                        <span>Por iniciar</span>
                        <span class="who">DC</span>
                    </div>
                </div>
                <div class="kanban-card">
                    <div class="title">Plan #23 · Capacitación líderes</div>
                    <div class="meta">
                        <span>Aprobación</span>
                        <span class="who">EM</span>
                    </div>
                </div>
            </div>

            <div class="kanban-col">
                <h4>En curso <span class="count">4</span></h4>
                <div class="kanban-card">
                    <div class="title">Plan #18 · Liderazgo Soacha</div>
                    <div class="meta">
                        <span>Sesión 4/8</span>
                        <span class="who">CT</span>
                    </div>
                </div>
                <div class="kanban-card warn">
                    <div class="title">Plan #19 · Anti-acoso</div>
                    <div class="meta">
                        <span>2 días retraso</span>
                        <span class="who">DC</span>
                    </div>
                </div>
                <div class="kanban-card">
                    <div class="title">Plan #20 · Pulso trimestral</div>
                    <div class="meta">
                        <span>67% participación</span>
                        <span class="who">EM</span>
                    </div>
                </div>
                <div class="kanban-card danger">
                    <div class="title">Plan #16 · Carga turnos</div>
                    <div class="meta">
                        <span>Atrasado 7d</span>
                        <span class="who">RT</span>
                    </div>
                </div>
            </div>

            <div class="kanban-col">
                <h4>Verificación <span class="count">2</span></h4>
                <div class="kanban-card">
                    <div class="title">Plan #14 · Mentoría cruzada</div>
                    <div class="meta">
                        <span>Pendiente CPHS</span>
                        <span class="who">DC</span>
                    </div>
                </div>
                <div class="kanban-card">
                    <div class="title">Plan #15 · Política DL</div>
                    <div class="meta">
                        <span>Pendiente firma</span>
                        <span class="who">CT</span>
                    </div>
                </div>
            </div>

            <div class="kanban-col">
                <h4>Cerrado <span class="count">5</span></h4>
                <div class="kanban-card success">
                    <div class="title">Plan #11 · Pausas activas</div>
                    <div class="meta">
                        <span>Hace 2 meses</span>
                        <span class="who">EM</span>
                    </div>
                </div>
                <div class="kanban-card success">
                    <div class="title">Plan #12 · Reconocimiento</div>
                    <div class="meta">
                        <span>Hace 1 mes</span>
                        <span class="who">DC</span>
                    </div>
                </div>
                <div class="kanban-card success">
                    <div class="title">Plan #13 · Onboarding</div>
                    <div class="meta">
                        <span>Hace 3 sem.</span>
                        <span class="who">CT</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== CTA BAND =================== -->
<section>
    <div class="container">
        <div class="cta-band">
            <div>
                <h3>Tus hallazgos merecen un plan que se ejecute</h3>
                <p>Cotizamos plan a la medida sobre los resultados de tu última batería o SVE.</p>
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
            <h2>Lo que más nos preguntan sobre planes</h2>
        </div>

        <div class="faq">
            <details>
                <summary>¿Necesito tener la batería aplicada para contratar planes?</summary>
                <div class="answer">
                    <p>Lo recomendable, sí — los planes se diseñan sobre hallazgos. Si ya tienes una batería reciente (de PsyRisk u otro proveedor) trabajamos sobre ella. Si no, lo natural es contratar el paquete integrado para tener línea base e intervención coherentes.</p>
                </div>
            </details>
            <details>
                <summary>¿Quién ejecuta el plan: PsyRisk o mi empresa?</summary>
                <div class="answer">
                    <p>El responsable formal siempre es tu empresa (lo exige la normativa SST). PsyRisk participa como diseñador, facilitador de capacitaciones y verificador independiente. Tú decides qué actividades ejecutas internamente y cuáles tercerizas con nosotros.</p>
                </div>
            </details>
            <details>
                <summary>¿Cuánto cuesta un plan de intervención?</summary>
                <div class="answer">
                    <p>Depende de las acciones seleccionadas y del tamaño de la población. Una capacitación grupal típica arranca en <strong>$650.000 COP</strong>. Un programa completo de liderazgo saludable (3 meses) ronda los <strong>$3.500.000 COP</strong>. Cotizamos por plan, no por suscripción.</p>
                </div>
            </details>
            <details>
                <summary>¿Las capacitaciones son virtuales o presenciales?</summary>
                <div class="answer">
                    <p>Ambas. Las virtuales se dictan en vivo (no son grabaciones). Las presenciales las llevamos a tu sede en Bogotá, Cundinamarca y la región central. Para otras regiones evaluamos viáticos en la cotización.</p>
                </div>
            </details>
            <details>
                <summary>¿Qué pasa si un plan no logra su objetivo?</summary>
                <div class="answer">
                    <p>Lo documentamos honestamente y diseñamos una iteración. Un plan que no impacta es información valiosa: nos dice que la causa está en otro nivel (estructural, externo, etc). PsyRisk no factura nuevos servicios por reintentar — entra dentro del acompañamiento del ciclo.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- =================== CTA FINAL =================== -->
<section class="cta-final">
    <div class="container">
        <h2>Convierte el diagnóstico en cambio real — no en otro PDF olvidado</h2>
        <p>Diseñamos el plan, capacitamos al equipo, registramos la evidencia y verificamos el impacto. Cierre del ciclo, sin medias tintas.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="#" class="btn btn-primary btn-lg">Cotizar mi plan</a>
            <a href="<?= base_url('servicios/capacitaciones') ?>" class="btn btn-outline btn-lg">Ver capacitaciones</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
