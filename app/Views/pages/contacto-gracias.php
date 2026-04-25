<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-hero" style="text-align:center;">
    <div class="container" style="max-width:680px;">
        <div style="width:80px; height:80px; border-radius:50%; background:linear-gradient(135deg, var(--color-success), #16A34A); color:#fff; display:inline-flex; align-items:center; justify-content:center; margin-bottom:20px;">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <h1>¡Gracias por escribirnos!</h1>
        <p class="lead">Recibimos tu mensaje. Un asesor de PsyRisk te contactará en menos de <strong>24 horas hábiles</strong>.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="<?= base_url('/') ?>" class="btn btn-primary btn-lg">Volver al inicio</a>
            <a href="<?= base_url('recursos') ?>" class="btn btn-outline btn-lg">Mientras tanto, lee nuestros recursos</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
