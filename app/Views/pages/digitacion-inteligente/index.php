<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',                  'url' => base_url('/')],
    ['name' => 'Digitación inteligente',  'url' => base_url('digitacion-inteligente')],
]]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- =================== HERO =================== -->
<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <span aria-current="page">Digitación inteligente</span>
        </nav>

        <div style="display:flex; flex-wrap:wrap; gap:40px; align-items:center;">
            <div style="flex:1 1 360px; min-width:0;">
                <ul class="tag-list">
                    <li>Para baterías en papel</li>
                    <li class="purple">Reconocimiento por IA</li>
                    <li>De horas a minutos</li>
                </ul>

                <h1>Ya no digitamos. <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">Inteligentizamos</span>.</h1>
                <p class="lead">Cada cartilla en papel cuesta entre 25 y 30 minutos de digitación manual a buen ritmo. Una jornada de 50 personas son más de 20 horas de teclado, y el error humano crece con el cansancio. Con la digitación inteligente fotografías la cartilla desde tu celular, la IA reconoce las marcas y solo arbitras los ítems dudosos — la minoría. Lo demás pasa solo.</p>

                <div class="hero-ctas" style="margin-top:24px;">
                    <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-cta btn-lg">Quiero verlo en mi empresa</a>
                    <a href="https://wa.me/573229074371?text=Hola,%20quiero%20saber%20más%20sobre%20la%20digitación%20inteligente%20de%20PsyRisk" target="_blank" rel="noopener" class="btn btn-primary btn-lg">Hablar por WhatsApp</a>
                </div>
            </div>

            <div style="flex:0 1 340px; max-width:340px; width:100%;">
                <img src="<?= base_url('assets/img/icons/diginteligente.png') ?>"
                     alt="De lo manual a lo inteligente: una foto de la cartilla se vuelve datos precisos con la IA de PsyRisk"
                     loading="lazy"
                     style="width:100%; height:auto; border-radius:18px; box-shadow:0 12px 40px rgba(15,23,42,.16); display:block;">
            </div>
        </div>
    </div>
</section>

<!-- =================== EL PROBLEMA =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">El problema que conoces</span>
            <h2>Aplicar en papel debería terminar cuando termina la jornada</h2>
            <p>Pero no termina. Empieza otra: la de digitar cientos de respuestas, una por una, después de hora. Errores, retrasos, costo escondido.</p>
        </div>

        <div class="country-stats">
            <div class="country-stat">
                <div class="pct">25-30</div>
                <div class="text">Minutos por cartilla a buen ritmo. Lo sabemos porque lo hemos hecho. Multiplicado por 50, 100, 200 personas, son días de teclado.</div>
                <div class="source">Tiempo medido en jornadas reales</div>
            </div>
            <div class="country-stat">
                <div class="pct alt">✕</div>
                <div class="text">Error humano que crece con el cansancio: una equis mal copiada cambia el puntaje de un dominio, y nadie lo nota hasta el reporte final.</div>
                <div class="source">Por eso la doble digitación es la práctica habitual — y dobla el costo</div>
            </div>
            <div class="country-stat">
                <div class="pct">⏳</div>
                <div class="text">Tiempo del psicólogo gastado en digitar cuando podría estar interpretando, priorizando intervenciones y atendiendo al cliente.</div>
                <div class="source">El trabajo profesional cede frente al trabajo mecánico</div>
            </div>
        </div>
    </div>
</section>

<!-- =================== CÓMO FUNCIONA =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Cómo funciona</span>
            <h2>Cuatro pasos. El último ya no es digitar.</h2>
            <p>El psicólogo aplica como siempre. Lo que cambia es lo que pasa después de que el evaluado guarda el lápiz.</p>
        </div>

        <div class="ruta-pillars">
            <article class="ruta-pillar">
                <span class="step-num">1</span>
                <h3>Aplicas en papel como siempre</h3>
                <p>Imprime la Forma A o B oficial y aplícala en jornada presencial. Tu metodología no cambia — solo cambia lo que pasa después.</p>
                <ul>
                    <li>Cartilla oficial, sin adaptaciones</li>
                    <li>Sin tablets ni curva de aprendizaje para el trabajador</li>
                    <li>Mismo respeto al evaluado, misma trazabilidad legal</li>
                </ul>
            </article>

            <article class="ruta-pillar alt">
                <span class="step-num">2</span>
                <h3>Desde tu celular, fotografías cada cartilla</h3>
                <p>Abres la página desde cualquier celular y tomas una foto de cada hoja. No descargas nada, no instalas aplicaciones.</p>
                <ul>
                    <li>Funciona en celulares Android e iPhone recientes</li>
                    <li>Subida en segundos cuando tienes señal</li>
                    <li>Una persona puede fotografiar mientras la jornada avanza</li>
                </ul>
            </article>

            <article class="ruta-pillar">
                <span class="step-num">3</span>
                <h3>La IA reconoce cada marca</h3>
                <p>En segundos, con nuestra digitación inteligente lograrás convertir cada equis, cada círculo, cada celda marcada en una respuesta digital — sin teclear nada.</p>
                <ul>
                    <li>Reconocimiento entrenado para Forma A y B</li>
                    <li>Confianza alta = se confirma sola</li>
                    <li>Solo lo dudoso queda marcado para tu arbitraje</li>
                </ul>
            </article>

            <article class="ruta-pillar alt">
                <span class="step-num">4</span>
                <h3>Solo arbitras lo dudoso. El resto pasa solo.</h3>
                <p>Tú no revisas cartilla por cartilla — la IA confirma sola lo que vio claro. Solo te llega lo poco que quedó dudoso para que decidas con un toque. Los tiempos de entrega se reducirán de semanas a horas.</p>
                <ul>
                    <li>Cero re-digitación manual, cero plantillas Excel</li>
                    <li>Tu juicio profesional decide los casos límite, no el trabajo masivo</li>
                    <li>Reporte oficial generado automáticamente al confirmar</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<!-- =================== BENEFICIOS =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Lo que ganas</span>
            <h2>Cuatro cambios que tu jornada va a sentir</h2>
        </div>

        <div class="cards-grid" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:20px;">
            <article class="service-card">
                <span class="ico">🛡</span>
                <h3>Menos error humano</h3>
                <p>Digitar 50, 100, 200 cartillas a mano agota — y el cansancio mete errores. La IA no se cansa, y tú solo revisas lo dudoso. El error de transcripción se reduce sin doble digitación.</p>
            </article>

            <article class="service-card purple">
                <span class="ico">⏱</span>
                <h3>De 25 minutos a segundos por cartilla</h3>
                <p>Lo que un digitador hace en 25-30 minutos por cartilla a buen ritmo, la IA lo procesa en segundos. Lo cuantificas tú multiplicando por el tamaño de tu próxima jornada.</p>
            </article>

            <article class="service-card">
                <span class="ico">🎯</span>
                <h3>El psicólogo vuelve a interpretar</h3>
                <p>Las horas que se iban en teclado vuelven a la interpretación, la priorización de intervenciones y el contacto con el cliente — el trabajo profesional que sí justifica el honorario.</p>
            </article>

            <article class="service-card purple">
                <span class="ico">📈</span>
                <h3>Escalas sin sumar nómina</h3>
                <p>Una jornada de 50 personas pasa de 20+ horas de digitación a unos minutos de arbitraje. Tu margen por jornada masiva mejora sin contratar más digitadores.</p>
            </article>
        </div>
    </div>
</section>

<!-- =================== CASOS DE USO =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Casos donde marca diferencia</span>
            <h2>Tres escenarios donde la digitación inteligente cambia la cuenta de horas</h2>
            <p>Si reconoces alguno, ya sabes el tipo de jornada que vas a transformar.</p>
        </div>

        <div class="persona-grid">
            <div class="persona-card">
                <span class="role-badge">Jornada masiva</span>
                <h3>120 trabajadores aplicados en un solo día</h3>
                <p class="who">"En una jornada de 120 personas, tabular en Excel nos toma dos semanas. El consultor no descansa hasta entregar."</p>
                <ul class="signals">
                    <li>Una persona fotografía mientras la jornada avanza</li>
                    <li>La IA va procesando en paralelo</li>
                    <li>Arbitraje final de lo dudoso, no de todo</li>
                </ul>
            </div>

            <div class="persona-card alt">
                <span class="role-badge">Aplicación en papel</span>
                <h3>Cartillas físicas que ya tenías acumuladas</h3>
                <p class="who">"Ya hicimos la jornada hace dos meses, nos faltó digitar la mitad y el cliente nos presiona por el reporte."</p>
                <ul class="signals">
                    <li>Fotografías el lote pendiente y avanzas en paralelo</li>
                    <li>La IA digitaliza lo que llevaba semanas estancado</li>
                    <li>Arbitras solo los pocos casos dudosos que quedan</li>
                </ul>
            </div>

            <div class="persona-card">
                <span class="role-badge">Consultoras en crecimiento</span>
                <h3>Más clientes sin sumar digitadores</h3>
                <p class="who">"Nuestro cuello de botella no es vender más jornadas — es entregarlas. Cada nueva jornada es otra semana de teclado."</p>
                <ul class="signals">
                    <li>Capacidad de entrega multiplicada sin nómina nueva</li>
                    <li>El consultor vuelve a interpretar, no a digitar</li>
                    <li>Margen sano en jornadas grandes</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- =================== POR QUÉ DIFERENTES =================== -->
<section>
    <div class="container">
        <div class="split">
            <div class="split-text">
                <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">Por qué somos diferentes</span>
                <h2>No vendemos una herramienta suelta. Vendemos el ciclo completo.</h2>
                <p>PsyRisk integra batería oficial, digitación inteligente, sistema de vigilancia y planes de intervención en una sola ruta. La inteligencia artificial no es un truco aislado — es una pieza más del flujo de cumplimiento que ya usas.</p>
                <p>Somos la <strong>primera plataforma colombiana en integrar reconocimiento por inteligencia artificial con la Batería oficial de Riesgo Psicosocial</strong> dentro del mismo flujo de cumplimiento. La tecnología cambia; el ciclo regulatorio que dominamos es lo que mantiene tu cumplimiento limpio.</p>
                <a href="<?= base_url('servicios/bateria-riesgo') ?>" class="btn btn-primary">Ver el servicio completo</a>
            </div>

            <div style="background:linear-gradient(135deg,var(--color-primary-light),#fff); border:1px solid var(--color-border); border-radius:16px; padding:32px; aspect-ratio:4/3; display:flex; flex-direction:column; justify-content:center; gap:14px;">
                <div style="display:flex; align-items:center; gap:14px;">
                    <span style="font-size:1.6rem;">📄</span>
                    <span style="font-weight:600;">Batería oficial Forma A y B</span>
                </div>
                <div style="display:flex; align-items:center; gap:14px;">
                    <span style="font-size:1.6rem;">📷</span>
                    <span style="font-weight:600;">Digitación inteligente desde el celular</span>
                </div>
                <div style="display:flex; align-items:center; gap:14px;">
                    <span style="font-size:1.6rem;">📊</span>
                    <span style="font-weight:600;">Plataforma SVE y reportes oficiales</span>
                </div>
                <div style="display:flex; align-items:center; gap:14px;">
                    <span style="font-size:1.6rem;">🎯</span>
                    <span style="font-weight:600;">Planes de intervención trazables</span>
                </div>
                <p style="margin:6px 0 0; font-size:.85rem; color:var(--color-muted);">Una ruta. Un proveedor. Un marco regulatorio.</p>
            </div>
        </div>
    </div>
</section>

<!-- =================== PRIVACIDAD =================== -->
<section class="alt">
    <div class="container">
        <div style="max-width:820px; margin:0 auto; background:#fff; padding:32px; border-radius:16px; border:1px solid var(--color-border);">
            <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">Privacidad y datos sensibles</span>
            <h2 style="margin-top:0;">Las fotos contienen información del trabajador. Las tratamos como tal.</h2>
            <p style="line-height:1.7;">PsyRisk procesa cada imagen únicamente para reconocer las marcas. Las fotos se almacenan cifradas durante el tiempo estrictamente necesario para que tú revises y confirmes, y luego se eliminan. Operamos bajo la <a href="<?= base_url('normativa/ley-1581') ?>">Ley 1581 de 2012</a> y nuestra <a href="<?= base_url('privacidad') ?>">Política de Privacidad</a>.</p>
            <ul style="line-height:1.8; padding-left:20px;">
                <li><strong>Cifrado en tránsito y en reposo</strong> — nadie fuera del flujo de la plataforma accede a las imágenes.</li>
                <li><strong>Retención mínima</strong> — la foto vive lo que dura tu revisión, no más.</li>
                <li><strong>Aislamiento por cliente</strong> — la información de un tenant nunca cruza con la de otro.</li>
            </ul>
        </div>
    </div>
</section>

<!-- =================== FAQ =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Preguntas frecuentes</span>
            <h2>Lo que la mayoría pregunta antes de probarla</h2>
        </div>

        <div style="max-width:820px; margin:0 auto; display:flex; flex-direction:column; gap:14px;">
            <details style="background:#fff; padding:20px 24px; border-radius:12px; border:1px solid var(--color-border);">
                <summary style="cursor:pointer; font-weight:600; font-size:1.05rem;">¿Qué pasa si la IA se equivoca al leer una marca?</summary>
                <p style="margin:12px 0 0; line-height:1.6; color:var(--color-text-soft);">La IA marca con confianza alta lo que ve claro y te resalta solo las marcas dudosas. Tú no revisas cada cartilla — revisas únicamente los ítems que la IA no pudo leer con certeza, que son la minoría. Tu juicio profesional decide los casos límite, no el trabajo masivo.</p>
            </details>

            <details style="background:#fff; padding:20px 24px; border-radius:12px; border:1px solid var(--color-border);">
                <summary style="cursor:pointer; font-weight:600; font-size:1.05rem;">¿Necesito internet en la planta?</summary>
                <p style="margin:12px 0 0; line-height:1.6; color:var(--color-text-soft);">No para aplicar. La aplicación es en papel — sin requisitos digitales. Cuando vuelvas a tener señal (al salir del cliente, en el carro, en oficina), fotografías y subes.</p>
            </details>

            <details style="background:#fff; padding:20px 24px; border-radius:12px; border:1px solid var(--color-border);">
                <summary style="cursor:pointer; font-weight:600; font-size:1.05rem;">¿Se almacenan las fotos del trabajador?</summary>
                <p style="margin:12px 0 0; line-height:1.6; color:var(--color-text-soft);">Solo el tiempo necesario para que la revises y confirmes. Después se eliminan automáticamente. Operamos bajo la Ley 1581 de 2012 y los datos sensibles se tratan con el cuidado que la norma exige.</p>
            </details>

            <details style="background:#fff; padding:20px 24px; border-radius:12px; border:1px solid var(--color-border);">
                <summary style="cursor:pointer; font-weight:600; font-size:1.05rem;">¿Cuánto cuesta?</summary>
                <p style="margin:12px 0 0; line-height:1.6; color:var(--color-text-soft);">Depende del volumen de tu jornada. Escríbenos por WhatsApp o desde el formulario de contacto y te enviamos un cálculo personalizado.</p>
            </details>

            <details style="background:#fff; padding:20px 24px; border-radius:12px; border:1px solid var(--color-border);">
                <summary style="cursor:pointer; font-weight:600; font-size:1.05rem;">¿Funciona con la Forma A y la Forma B oficiales?</summary>
                <p style="margin:12px 0 0; line-height:1.6; color:var(--color-text-soft);">Sí, con ambas. El reconocimiento está entrenado para las cartillas oficiales del Ministerio del Trabajo. Imprimes la versión oficial, no una adaptada.</p>
            </details>
        </div>
    </div>
</section>

<!-- =================== INFOGRAFÍA COMPLETA =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">De lo manual a lo inteligente</span>
            <h2>Todo el flujo, en una mirada</h2>
            <p>Si tuvieras que explicarle a un colega de qué se trata, le mostrarías esta imagen.</p>
        </div>

        <div style="max-width:520px; margin:0 auto;">
            <img src="<?= base_url('assets/img/icons/diginteligente.png') ?>"
                 alt="Infografía completa de digitación inteligente PsyRisk: foto, IA y datos. Comparativo antes/ahora con horas de digitación manual reducidas a minutos."
                 loading="lazy"
                 style="width:100%; height:auto; border-radius:20px; box-shadow:0 16px 50px rgba(15,23,42,.18); display:block;">
        </div>
    </div>
</section>

<!-- =================== CTA FINAL =================== -->
<section class="cta-final">
    <div class="container">
        <h2>Tu próxima jornada en papel ya no termina con digitación</h2>
        <p>Cuéntanos cómo aplicas baterías hoy. Te mostramos el flujo aplicado a un caso como el tuyo en menos de 30 minutos.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="https://cycloidtalent.com/contacto" target="_blank" rel="noopener" class="btn btn-cta btn-lg">Quiero verlo en mi empresa</a>
            <a href="https://wa.me/573229074371?text=Hola,%20quiero%20saber%20más%20sobre%20la%20digitación%20inteligente%20de%20PsyRisk" target="_blank" rel="noopener" class="btn btn-outline btn-lg">Hablar por WhatsApp</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
