<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',    'url' => base_url('/')],
    ['name' => 'Referidos', 'url' => base_url('referidos')],
]]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <span aria-current="page">Programa de referidos</span>
        </nav>

        <ul class="tag-list">
            <li>Recompensa real</li>
            <li class="purple">Sin letra pequeña</li>
        </ul>

        <h1>Invita a 3 colegas y gana <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">2 meses gratis</span></h1>
        <p class="lead">¿Conoces a otro psicólogo consultor o a una empresa que necesita medir riesgo psicosocial bien? Refiéranse mutuamente: cuando 3 de tus referidos se registren en PsyRisk, te damos 2 meses de plataforma gratis.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Cómo funciona</span>
            <h2>Tres pasos, sin complicaciones</h2>
        </div>

        <div class="ruta-pillars">
            <article class="ruta-pillar">
                <span class="step-num">1</span>
                <h3>Comparte el formulario</h3>
                <p>Llena tus datos y los emails de hasta 3 colegas que crees que se beneficiarían de PsyRisk.</p>
            </article>

            <article class="ruta-pillar alt">
                <span class="step-num">2</span>
                <h3>Ellos reciben tu invitación</h3>
                <p>Cada referido recibe un email personalizado con tu nombre, tu mensaje y un link para crear cuenta gratis.</p>
            </article>

            <article class="ruta-pillar">
                <span class="step-num">3</span>
                <h3>Tú ganas 2 meses gratis</h3>
                <p>Cuando 3 de tus referidos completen el registro y empiecen el trial, acreditamos 2 meses gratis a tu cuenta.</p>
            </article>
        </div>
    </div>
</section>

<section class="alt" id="formulario">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Formulario de referidos</span>
            <h2>Recomienda PsyRisk</h2>
            <p>Tus datos solo se usan para acreditar el premio. No los compartimos con terceros.</p>
        </div>

        <?php if (! empty($flash) && is_array($flash)): ?>
            <div id="gracias" style="max-width:720px; margin:0 auto 24px; padding:18px 22px; border-radius:12px; background:var(--color-primary-light); color:var(--color-primary); border:1px solid var(--color-primary); font-weight:600;">
                <?= esc($flash['message'] ?? '¡Gracias por tus referidos!') ?>
            </div>
        <?php endif; ?>

        <?php if (! empty($errors)): ?>
            <div style="max-width:720px; margin:0 auto 24px; padding:18px 22px; border-radius:12px; background:#FEF2F2; color:var(--color-danger); border:1px solid var(--color-danger);">
                <strong>Revisa el formulario:</strong>
                <ul style="margin:8px 0 0; padding-left:20px;">
                    <?php foreach ($errors as $err): ?>
                        <li><?= esc($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('referidos/registrar') ?>" style="max-width:720px; margin:0 auto; background:#fff; padding:32px; border-radius:16px; border:1px solid var(--color-border);">
            <?= csrf_field() ?>

            <input type="text" name="website" value="" tabindex="-1" autocomplete="off" style="position:absolute; left:-9999px; opacity:0;" aria-hidden="true">

            <fieldset style="border:0; padding:0; margin:0 0 28px;">
                <legend style="font-weight:700; font-size:1.05rem; margin-bottom:14px; color:var(--color-text);">Tus datos</legend>

                <label style="display:block; margin-bottom:14px;">
                    <span style="display:block; font-size:.88rem; color:var(--color-muted); margin-bottom:6px;">Tu nombre</span>
                    <input type="text" name="referrer_name" value="<?= esc($old['referrer_name'] ?? '') ?>" maxlength="120" placeholder="Diana Cuestas" style="width:100%; padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem;">
                </label>

                <label style="display:block;">
                    <span style="display:block; font-size:.88rem; color:var(--color-muted); margin-bottom:6px;">Tu email <span style="color:var(--color-danger);">*</span></span>
                    <input type="email" name="referrer_email" value="<?= esc($old['referrer_email'] ?? '') ?>" required maxlength="190" placeholder="tu@email.com" style="width:100%; padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem;">
                </label>
            </fieldset>

            <fieldset style="border:0; padding:0; margin:0 0 28px;">
                <legend style="font-weight:700; font-size:1.05rem; margin-bottom:14px; color:var(--color-text);">Tus referidos (hasta 3)</legend>

                <?php for ($i = 0; $i < 3; $i++): ?>
                    <?php
                        $oldRef = $old['referrals'][$i] ?? ['name' => '', 'email' => ''];
                    ?>
                    <div style="display:grid; grid-template-columns:1fr 1.4fr; gap:12px; margin-bottom:12px;">
                        <input type="text" name="referrals[<?= $i ?>][name]" value="<?= esc($oldRef['name'] ?? '') ?>" maxlength="120" placeholder="Nombre del referido <?= $i + 1 ?>" style="padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem;">
                        <input type="email" name="referrals[<?= $i ?>][email]" value="<?= esc($oldRef['email'] ?? '') ?>" maxlength="190" placeholder="email@del.referido<?= $i + 1 ?>.com" style="padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem;">
                    </div>
                <?php endfor; ?>

                <p style="font-size:.85rem; color:var(--color-muted); margin:8px 0 0;">Mínimo 1 referido. Para ganar el premio necesitas que 3 se registren en PsyRisk.</p>
            </fieldset>

            <label style="display:block; margin-bottom:24px;">
                <span style="display:block; font-size:.88rem; color:var(--color-muted); margin-bottom:6px;">Mensaje opcional para tus referidos</span>
                <textarea name="message" maxlength="500" rows="3" placeholder="Le he venido sacando provecho a esta plataforma — creo que te puede servir mucho." style="width:100%; padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem; resize:vertical;"><?= esc($old['message'] ?? '') ?></textarea>
            </label>

            <button type="submit" class="btn btn-cta btn-lg" style="width:100%;">Enviar invitaciones</button>

            <p style="font-size:.8rem; color:var(--color-muted); margin:14px 0 0; text-align:center;">
                Al enviar aceptas el tratamiento de tus datos según la <a href="<?= base_url('privacidad') ?>">Política de Privacidad</a> y la Ley 1581 de 2012.
            </p>
        </form>
    </div>
</section>

<section class="cta-final">
    <div class="container">
        <h2>¿Aún no eres usuario de PsyRisk?</h2>
        <p>Crea tu cuenta gratis primero — necesitas tener PsyRisk activo para acreditar el premio del programa de referidos.</p>
        <div class="hero-ctas" style="justify-content:center;">
            <a href="<?= signup_url() ?>" target="_blank" rel="noopener" class="btn btn-cta btn-lg">Crear cuenta gratis</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
