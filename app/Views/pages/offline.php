<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero" style="padding:80px 0;">
    <div class="container" style="max-width:680px; text-align:center;">
        <div style="display:inline-flex; width:96px; height:96px; border-radius:50%; background:var(--color-primary-light); align-items:center; justify-content:center; margin-bottom:24px;">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#3B6FB5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="1" y1="1" x2="23" y2="23"></line>
                <path d="M16.72 11.06A10.94 10.94 0 0 1 19 12.55"></path>
                <path d="M5 12.55a10.94 10.94 0 0 1 5.17-2.39"></path>
                <path d="M10.71 5.05A16 16 0 0 1 22.58 9"></path>
                <path d="M1.42 9a15.91 15.91 0 0 1 4.7-2.88"></path>
                <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                <line x1="12" y1="20" x2="12.01" y2="20"></line>
            </svg>
        </div>
        <h1 style="margin-bottom:16px;">Sin conexión</h1>
        <p style="color:var(--color-text-soft); font-size:1.1rem; margin-bottom:32px;">
            No pudimos cargar esta página porque parece que estás sin internet.
            Las páginas que ya visitaste deberían seguir disponibles.
        </p>
        <div style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap;">
            <button type="button" class="btn btn-primary" onclick="window.location.reload()">Reintentar</button>
            <a href="<?= base_url('/') ?>" class="btn btn-ghost">Ir al inicio</a>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
