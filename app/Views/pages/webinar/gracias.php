<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <a href="<?= base_url('webinar') ?>">Webinar</a>
            <span class="sep">/</span>
            <span aria-current="page">Confirmación</span>
        </nav>

        <h1>¡Tu lugar está confirmado<?= ! empty($signup['name']) ? ', ' . esc($signup['name']) : '' ?>!</h1>
        <p class="lead">Te enviamos un correo a <?= ! empty($signup['email']) ? '<strong>' . esc($signup['email']) . '</strong>' : 'tu bandeja de entrada' ?> con el enlace de la sesión y el material de apoyo.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="cards-grid" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:20px; max-width:1080px; margin:0 auto;">

            <?php if (! empty($zoomUrl)): ?>
                <article class="service-card">
                    <span class="ico">📅</span>
                    <h3>Únete a la sesión</h3>
                    <p>Cuando comience el webinar, conéctate desde este enlace.</p>
                    <?php if (! empty($webinarAt)): ?>
                        <p style="font-size:.9rem; color:var(--color-muted);"><strong>Fecha:</strong> <?= esc($webinarAt) ?></p>
                    <?php endif; ?>
                    <a href="<?= esc($zoomUrl) ?>" target="_blank" rel="noopener" class="btn btn-primary">Abrir sesión</a>
                </article>
            <?php else: ?>
                <article class="service-card">
                    <span class="ico">📅</span>
                    <h3>Próxima fecha</h3>
                    <p>Te enviaremos por correo la fecha y el enlace de la sesión cuando confirmemos próxima fecha disponible.</p>
                </article>
            <?php endif; ?>

            <article class="service-card purple">
                <span class="ico">📋</span>
                <h3>Checklist Resolución 2764</h3>
                <p>30 puntos para auditar el cumplimiento de tu empresa o de tus clientes.</p>
                <?php if (! empty($pdfPublic)): ?>
                    <a href="<?= esc($pdfPublic) ?>" target="_blank" rel="noopener" class="btn btn-secondary">Descargar PDF</a>
                <?php else: ?>
                    <p style="font-size:.85rem; color:var(--color-muted);">Te lo enviamos por correo en cuanto esté listo.</p>
                <?php endif; ?>
            </article>

            <article class="service-card">
                <span class="ico">🚀</span>
                <h3>Empieza ya</h3>
                <p>Crea tu cuenta gratis y explora la plataforma mientras esperas el webinar.</p>
                <a href="<?= signup_url() ?>" target="_blank" rel="noopener" class="btn btn-cta">Crear cuenta gratis</a>
            </article>
        </div>
    </div>
</section>

<section class="alt">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Mientras esperas</span>
            <h2>Recursos relacionados</h2>
        </div>

        <div class="cards-grid" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:20px;">
            <a href="<?= base_url('normativa/resolucion-2764') ?>" class="service-card" style="text-decoration:none; color:inherit;">
                <h3>Resolución 2764 de 2022</h3>
                <p>Lectura clara de qué exige y qué no exige la norma.</p>
            </a>
            <a href="<?= base_url('servicios/bateria-riesgo') ?>" class="service-card purple" style="text-decoration:none; color:inherit;">
                <h3>Servicio de Batería</h3>
                <p>Cómo aplicamos la batería oficial Forma A y Forma B.</p>
            </a>
            <a href="https://cycloidtalent.com/blog" target="_blank" rel="noopener" class="service-card" style="text-decoration:none; color:inherit;">
                <h3>Blog SG-SST</h3>
                <p>Artículos sobre normativa y buenas prácticas.</p>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
