<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- =================== PAGE HERO =================== -->
<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <a href="<?= base_url('/#servicios') ?>">Servicios</a>
            <span class="sep">/</span>
            <span aria-current="page">Vigilancia Epidemiológica</span>
        </nav>

        <ul class="tag-list">
            <li>SVE Psicosocial</li>
            <li class="purple">Monitoreo continuo</li>
            <li>Alertas tempranas</li>
            <li class="purple">Trazabilidad total</li>
        </ul>

        <h1>Después de la batería empieza el verdadero trabajo: <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">la vigilancia</span></h1>
        <p class="lead">El Sistema de Vigilancia Epidemiológica (SVE) Psicosocial transforma una evaluación puntual en un proceso vivo. PsyRisk mantiene activos los indicadores, dispara alertas cuando un dominio se desvía y documenta cada acción para auditoría.</p>

        <div class="hero-ctas">
            <a href="#" class="btn btn-primary btn-lg">Activar SVE en mi empresa</a>
            <a href="#como-funciona" class="btn btn-outline btn-lg">Cómo funciona</a>
        </div>
    </div>
</section>

<!-- =================== KPI EN VIVO =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Tablero del SVE</span>
            <h2>Indicadores que tu empresa puede consultar a cualquier hora</h2>
            <p>Datos actualizados, no PDFs estáticos. El SVE es un órgano vital, no un trámite.</p>
        </div>

        <div class="kpi-grid">
            <div class="kpi-tile">
                <div class="kpi-label">Tasa de exposición</div>
                <div class="kpi-value">14.2%</div>
                <div class="kpi-trend down">↘ -2.1 vs trim. anterior</div>
                <svg class="spark" viewBox="0 0 100 30" preserveAspectRatio="none">
                    <polyline fill="none" stroke="var(--color-success)" stroke-width="2" points="0,8 14,12 28,10 42,16 56,14 70,20 84,24 100,22"/>
                </svg>
            </div>

            <div class="kpi-tile alt">
                <div class="kpi-label">Casos sospechosos</div>
                <div class="kpi-value">7</div>
                <div class="kpi-trend up">↗ +3 esta semana</div>
                <svg class="spark" viewBox="0 0 100 30" preserveAspectRatio="none">
                    <polyline fill="none" stroke="var(--color-secondary)" stroke-width="2" points="0,22 14,18 28,20 42,12 56,14 70,8 84,10 100,4"/>
                </svg>
            </div>

            <div class="kpi-tile">
                <div class="kpi-label">Planes en ejecución</div>
                <div class="kpi-value">12</div>
                <div class="kpi-trend flat">→ sin cambio</div>
                <svg class="spark" viewBox="0 0 100 30" preserveAspectRatio="none">
                    <polyline fill="none" stroke="var(--color-primary)" stroke-width="2" points="0,16 14,15 28,16 42,14 56,15 70,16 84,15 100,16"/>
                </svg>
            </div>

            <div class="kpi-tile alt">
                <div class="kpi-label">Cierre de planes</div>
                <div class="kpi-value">82%</div>
                <div class="kpi-trend down">↘ Meta 90%</div>
                <svg class="spark" viewBox="0 0 100 30" preserveAspectRatio="none">
                    <polyline fill="none" stroke="var(--color-secondary)" stroke-width="2" points="0,18 14,16 28,12 42,10 56,8 70,7 84,6 100,5"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- =================== SPLIT: ALERT FEED =================== -->
<section class="alt">
    <div class="container">
        <div class="split">
            <div class="split-text">
                <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">Alertas tempranas</span>
                <h2>Detecta antes de que se enferme alguien</h2>
                <p>El SVE de PsyRisk dispara notificaciones cuando un dominio supera su umbral, cuando una sub-área cambia bruscamente o cuando un plan no se ejecuta a tiempo. Cada alerta llega al responsable correcto con el contexto necesario para actuar.</p>
                <p>Las alertas se documentan automáticamente: <strong>quién la recibió, cuándo, qué hizo y con qué resultado</strong>. Esa traza es lo que el Ministerio del Trabajo pide y rara vez encuentra.</p>
                <a href="#" class="btn btn-primary">Ver políticas de alerta</a>
            </div>

            <div class="alert-feed">
                <div class="feed-head">
                    <h4>Feed de alertas · últimos 7 días</h4>
                    <span class="live-dot">EN VIVO</span>
                </div>

                <div class="alert-row">
                    <span class="severity high"></span>
                    <div class="body">
                        <div class="title">Liderazgo en planta sube a nivel alto</div>
                        <div class="meta">Sede Soacha · 32 personas afectadas · Plan #18 disparado</div>
                    </div>
                    <span class="time">hace 2h</span>
                </div>

                <div class="alert-row">
                    <span class="severity med"></span>
                    <div class="body">
                        <div class="title">Plan de intervención #15 próximo a vencer</div>
                        <div class="meta">Responsable: Coord. Bienestar · Vence en 3 días</div>
                    </div>
                    <span class="time">ayer</span>
                </div>

                <div class="alert-row">
                    <span class="severity low"></span>
                    <div class="body">
                        <div class="title">Recompensa baja a nivel medio</div>
                        <div class="meta">Área comercial · mejora sostenida tras intervención</div>
                    </div>
                    <span class="time">hace 3 días</span>
                </div>

                <div class="alert-row">
                    <span class="severity high"></span>
                    <div class="body">
                        <div class="title">3 incapacidades por estrés en mismo equipo</div>
                        <div class="meta">Equipo soporte técnico · revisar carga laboral</div>
                    </div>
                    <span class="time">hace 5 días</span>
                </div>

                <div class="alert-row">
                    <span class="severity med"></span>
                    <div class="body">
                        <div class="title">Pulso trimestral abierto</div>
                        <div class="meta">Participación 67% · cerrar en 2 días</div>
                    </div>
                    <span class="time">hace 6 días</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== UMBRALES =================== -->
<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Cómo definimos riesgo</span>
            <h2>Umbrales claros, no juicios subjetivos</h2>
            <p>Cada dominio se mide contra los puntos de corte oficiales del Ministerio. Cuando el indicador cruza un umbral, el sistema reacciona.</p>
        </div>

        <div class="thr-wrap">
            <h4>Dominio: <strong style="color:var(--color-primary);">Liderazgo y relaciones sociales</strong></h4>
            <div class="thr-bar">
                <span class="marker" data-label="Tu empresa: 38" style="left: 45%;"></span>
            </div>
            <div class="thr-legend">
                <span>Sin riesgo (0-12)</span>
                <span>Bajo (12-30)</span>
                <span>Medio (30-50)</span>
                <span>Alto (50-70)</span>
                <span>Muy alto (70-100)</span>
            </div>
        </div>

        <div style="margin-top:20px; display:grid; grid-template-columns:repeat(3,1fr); gap:14px;">
            <div style="background:#fff; border:1px solid var(--color-border); border-radius:var(--radius-md); padding:18px;">
                <div style="font-size:.78rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:6px;">Umbral verde</div>
                <strong style="color:var(--color-success);">Riesgo controlado</strong>
                <p style="font-size:.88rem; margin:4px 0 0;">Mantiene el plan vigente y reporta avances trimestrales.</p>
            </div>
            <div style="background:#fff; border:1px solid var(--color-border); border-radius:var(--radius-md); padding:18px;">
                <div style="font-size:.78rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:6px;">Umbral amarillo</div>
                <strong style="color:var(--color-warning);">Atención focalizada</strong>
                <p style="font-size:.88rem; margin:4px 0 0;">Activa intervención específica y aumenta frecuencia de medición.</p>
            </div>
            <div style="background:#fff; border:1px solid var(--color-border); border-radius:var(--radius-md); padding:18px;">
                <div style="font-size:.78rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:6px;">Umbral rojo</div>
                <strong style="color:var(--color-danger);">Acción inmediata</strong>
                <p style="font-size:.88rem; margin:4px 0 0;">Notificación a alta dirección y plan correctivo en 72 horas.</p>
            </div>
        </div>
    </div>
</section>

<!-- =================== FLUJO HORIZONTAL =================== -->
<section id="como-funciona" class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Cómo funciona el SVE</span>
            <h2>Cuatro etapas que se repiten en ciclos cortos</h2>
            <p>El SVE no es un informe — es un proceso permanente. Así se ve un trimestre típico.</p>
        </div>

        <div class="flow-h">
            <div class="node">
                <h4>1. Captura</h4>
                <p>Pulsos cortos, integración con sistemas de talento humano y reportes del responsable.</p>
            </div>
            <div class="arrow">→</div>
            <div class="node alt">
                <h4>2. Análisis</h4>
                <p>Comparación contra umbrales, tendencias y benchmarks por sector.</p>
            </div>
            <div class="arrow">→</div>
            <div class="node">
                <h4>3. Alerta</h4>
                <p>Notificación al responsable con recomendaciones de acción.</p>
            </div>
        </div>

        <div class="flow-h" style="margin-top:18px;">
            <div class="node alt">
                <h4>4. Intervención</h4>
                <p>Plan ejecutado por la empresa con apoyo del psicólogo PsyRisk.</p>
            </div>
            <div class="arrow">→</div>
            <div class="node">
                <h4>5. Cierre</h4>
                <p>Verificación del impacto y nueva línea base documentada.</p>
            </div>
            <div class="arrow">→</div>
            <div class="node alt">
                <h4>6. Reporte</h4>
                <p>Informe trimestral entregable a Mintrabajo y comité paritario.</p>
            </div>
        </div>
    </div>
</section>

<!-- =================== AMPARO LEGAL =================== -->
<section>
    <div class="container">
        <div class="split flip">
            <div class="split-text">
                <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">Amparo legal</span>
                <h2>El SVE es un requisito, no una mejora opcional</h2>
                <p>La <strong>Resolución 2764 de 2022</strong> y el <strong>Decreto 1072 de 2015</strong> obligan a las empresas colombianas a implementar un SVE para los riesgos identificados, incluyendo el psicosocial. La omisión expone a sanciones de hasta 500 SMMLV.</p>
                <p>PsyRisk no solo ofrece la plataforma: documenta cada acción del SVE con fecha, responsable y evidencia. Si te visita el Ministerio, todo está listo en menos de 5 minutos.</p>
                <a href="<?= base_url('normativa/resolucion-2764') ?>" class="btn btn-outline">Leer la Resolución 2764</a>
            </div>

            <div class="split-visual">
                <div style="display:flex; flex-direction:column; gap:12px;">
                    <div style="background:#fff; padding:18px; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); display:flex; gap:14px; align-items:flex-start;">
                        <span style="width:40px; height:40px; background:var(--color-primary-light); color:var(--color-primary); border-radius:50%; display:inline-flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </span>
                        <div>
                            <strong style="color:var(--color-text); font-size:.95rem;">Resolución 2764 / 2022</strong>
                            <div style="font-size:.85rem; color:var(--color-text-soft);">Obliga a establecer y mantener un SVE para riesgos psicosociales identificados.</div>
                        </div>
                    </div>
                    <div style="background:#fff; padding:18px; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); display:flex; gap:14px; align-items:flex-start;">
                        <span style="width:40px; height:40px; background:var(--color-secondary-light); color:var(--color-secondary); border-radius:50%; display:inline-flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                        </span>
                        <div>
                            <strong style="color:var(--color-text); font-size:.95rem;">Decreto 1072 / 2015</strong>
                            <div style="font-size:.85rem; color:var(--color-text-soft);">SG-SST: el SVE es parte integral del sistema de gestión de la seguridad y salud.</div>
                        </div>
                    </div>
                    <div style="background:#fff; padding:18px; border-radius:var(--radius-md); box-shadow:var(--shadow-sm); display:flex; gap:14px; align-items:flex-start;">
                        <span style="width:40px; height:40px; background:var(--color-primary-light); color:var(--color-primary); border-radius:50%; display:inline-flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </span>
                        <div>
                            <strong style="color:var(--color-text); font-size:.95rem;">Resolución 0312 / 2019</strong>
                            <div style="font-size:.85rem; color:var(--color-text-soft);">Estándares mínimos del SG-SST: trazabilidad documental obligatoria.</div>
                        </div>
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
                <h3>Activa el SVE de tu empresa este mes</h3>
                <p>Incluido sin costo adicional en los planes Batería y Servicio Integrado.</p>
            </div>
            <a href="<?= base_url('precios') ?>" class="btn btn-primary btn-lg">Ver precios</a>
        </div>
    </div>
</section>

<!-- =================== FAQ =================== -->
<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Preguntas frecuentes</span>
            <h2>Lo que más nos preguntan sobre el SVE</h2>
        </div>

        <div class="faq">
            <details>
                <summary>¿El SVE reemplaza la batería?</summary>
                <div class="answer">
                    <p>No. La batería es la <strong>línea base</strong> que identifica los riesgos. El SVE es el <strong>proceso continuo</strong> que los vigila después. Son complementarios y la normativa exige ambos.</p>
                </div>
            </details>
            <details>
                <summary>¿Cada cuánto se generan los reportes del SVE?</summary>
                <div class="answer">
                    <p>De forma trimestral por defecto. Para empresas con riesgo alto, ofrecemos cadencia mensual sin costo adicional. Las alertas críticas son inmediatas.</p>
                </div>
            </details>
            <details>
                <summary>¿Quién recibe las alertas?</summary>
                <div class="answer">
                    <p>Tu empresa define la matriz de escalamiento: usualmente la coordinación de talento humano para alertas amarillas, y el comité paritario o gerencia para alertas rojas. PsyRisk solo asegura que la alerta llegue al destinatario correcto y quede documentada.</p>
                </div>
            </details>
            <details>
                <summary>¿Necesito personal técnico para usar la plataforma?</summary>
                <div class="answer">
                    <p>No. La plataforma es operada por tu equipo de talento humano. PsyRisk hace la implementación, capacita al equipo y deja un manual operativo. La interpretación clínica la hace el psicólogo PsyRisk asignado.</p>
                </div>
            </details>
            <details>
                <summary>¿El SVE me sirve si todavía no tengo la batería?</summary>
                <div class="answer">
                    <p>El SVE arranca con datos. Si todavía no has aplicado la batería, lo recomendable es empezar con ella para tener la línea base — luego activamos el SVE sobre los hallazgos. Lo común es contratar el plan integrado y ahorrar en ambos.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- =================== CTA FINAL =================== -->
<section class="cta-final">
    <div class="container">
        <h2>Conviértelo en un proceso vivo, no en un PDF olvidado</h2>
        <p>Las empresas que sostienen el SVE reducen ausentismo psicosocial, retienen talento y pasan auditorías sin sobresaltos. Empieza hoy.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="#" class="btn btn-primary btn-lg">Activar SVE</a>
            <a href="<?= base_url('servicios/planes-intervencion') ?>" class="btn btn-outline btn-lg">Ver Planes de Intervención</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
