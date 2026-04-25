<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <span aria-current="page">Nosotros</span>
        </nav>

        <ul class="tag-list">
            <li>Marca de Cycloid Talent</li>
            <li class="purple">Soacha, Cundinamarca</li>
            <li>Equipo de psicólogos certificados</li>
        </ul>

        <h1>Nacimos para que las empresas <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">cumplan sin sufrir</span></h1>
        <p class="lead">PsyRisk es la plataforma de Cycloid Talent para evaluar, vigilar y gestionar el riesgo psicosocial. Nace de la incomodidad de ver a tantas empresas hacer la batería como un trámite — y de ver a tantos colaboradores quedar mal atendidos.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="split">
            <div class="split-text">
                <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">Nuestra historia</span>
                <h2>Salud mental laboral con rigor profesional</h2>
                <p>PsyRisk surge dentro de Cycloid Talent al detectar un patrón repetido en el mercado colombiano: empresas que aplicaban la batería de riesgo psicosocial por cumplir, recibían un PDF que nadie leía, y un año después repetían el ejercicio sin haber cambiado nada.</p>
                <p>Nos propusimos cambiar esa lógica. Combinamos psicología, tecnología y diseño normativo para que el riesgo psicosocial deje de ser un trámite y se convierta en información útil para tomar decisiones.</p>
                <p>Hoy acompañamos empresas de manufactura, salud, servicios profesionales, atención al cliente y muchos sectores más en Colombia.</p>
            </div>

            <div class="split-visual">
                <div style="display:flex; flex-direction:column; gap:14px;">
                    <div style="background:#fff; padding:18px; border-radius:var(--radius-md); box-shadow:var(--shadow-sm);">
                        <div style="font-size:.78rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:6px;">Marca matriz</div>
                        <strong style="color:var(--color-primary); font-size:1.05rem;">Cycloid Talent</strong>
                        <div style="font-size:.85rem; color:var(--color-text-soft); margin-top:4px;">Consultoría en talento humano y SST</div>
                    </div>
                    <div style="background:#fff; padding:18px; border-radius:var(--radius-md); box-shadow:var(--shadow-sm);">
                        <div style="font-size:.78rem; color:var(--color-muted); text-transform:uppercase; letter-spacing:.08em; margin-bottom:6px;">Sede principal</div>
                        <strong style="color:var(--color-text); font-size:1rem;">Tv. 24B #17-209</strong>
                        <div style="font-size:.85rem; color:var(--color-text-soft); margin-top:4px;">Soacha, Cundinamarca, Colombia</div>
                    </div>
                    <div style="background:linear-gradient(135deg, var(--color-primary), var(--color-secondary)); padding:18px; border-radius:var(--radius-md); color:#fff;">
                        <div style="font-size:.78rem; opacity:.85; text-transform:uppercase; letter-spacing:.08em; margin-bottom:6px;">Cobertura</div>
                        <strong style="font-size:1rem;">Toda Colombia (virtual y presencial)</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Lo que nos mueve</span>
            <h2>Cuatro principios que guían cada proyecto</h2>
        </div>

        <div class="values-grid">
            <div class="value-item">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </span>
                <div>
                    <h4>Cumplimiento sin teatro</h4>
                    <p>Cumplir la norma con rigor profesional, no con apariencia. Documentamos todo lo que el Ministerio puede pedir.</p>
                </div>
            </div>
            <div class="value-item">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
                </span>
                <div>
                    <h4>Datos accionables</h4>
                    <p>Si la información no se puede usar para tomar una decisión concreta, no sirve. Diseñamos cada reporte pensando en eso.</p>
                </div>
            </div>
            <div class="value-item">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </span>
                <div>
                    <h4>Cuidado real del trabajador</h4>
                    <p>Anonimato genuino, agrupación segura y un equipo clínico que sostiene los hallazgos con responsabilidad ética.</p>
                </div>
            </div>
            <div class="value-item">
                <span class="ico">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                </span>
                <div>
                    <h4>Tecnología sin humo</h4>
                    <p>Solo construimos lo que aporta. Cada función del tablero existe porque resuelve un problema real, no porque suene bien.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">El equipo</span>
            <h2>Psicólogos certificados y desarrolladores trabajando en lo mismo</h2>
            <p>Combinamos formación clínica con experiencia tecnológica. Lo que ves funciona porque las dos cabezas están en la misma mesa.</p>
        </div>

        <div class="team-grid">
            <div class="team-card">
                <div class="avatar">DC</div>
                <h4>Diana Cuestas</h4>
                <div class="role">Directora · Cycloid Talent</div>
                <p>Lidera la estrategia comercial y de relación con clientes corporativos.</p>
            </div>
            <div class="team-card">
                <div class="avatar">EQ</div>
                <h4>Equipo clínico</h4>
                <div class="role">Psicólogos certificados en SST</div>
                <p>Aplican, interpretan y firman los informes oficiales bajo licencia profesional vigente.</p>
            </div>
            <div class="team-card">
                <div class="avatar">TI</div>
                <h4>Equipo de tecnología</h4>
                <div class="role">Desarrollo y plataforma</div>
                <p>Construye y sostiene la plataforma con foco en seguridad, rendimiento y experiencia.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-final">
    <div class="container">
        <h2>¿Tu empresa quiere hacerlo bien?</h2>
        <p>Solicita una conversación con nuestro equipo. 30 minutos para entender tu contexto y proponer la ruta más sencilla.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="<?= base_url('contacto') ?>" class="btn btn-primary btn-lg">Hablar con nosotros</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
