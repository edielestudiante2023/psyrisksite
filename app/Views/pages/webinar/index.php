<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',  'url' => base_url('/')],
    ['name' => 'Webinar', 'url' => base_url('webinar')],
]]) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <span aria-current="page">Webinar gratuito</span>
        </nav>

        <ul class="tag-list">
            <li>Webinar en línea</li>
            <li class="purple">100% gratuito</li>
            <li>Cupos limitados</li>
        </ul>

        <h1>Cómo aplicar la <span style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); -webkit-background-clip: text; background-clip: text; color: transparent;">Batería de Riesgo Psicosocial</span> en menos de 1 hora</h1>
        <p class="lead">Webinar gratuito en línea para empresas, consultoras y áreas SST que necesitan cumplir con la Resolución 2764 sin perder semanas en tabulación manual. Inscríbete y recibe el checklist práctico en tu correo.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="split">
            <div class="split-text">
                <span class="eyebrow" style="display:inline-block; text-transform:uppercase; letter-spacing:.12em; font-size:.8rem; font-weight:600; color:var(--color-secondary); margin-bottom:12px;">Agenda del webinar</span>
                <h2>Lo que vas a llevarte en 60 minutos</h2>
                <p>Sesión práctica con casos reales. Sin teoría innecesaria, directo al cómo.</p>

                <ol style="padding-left:20px; line-height:1.7; color:var(--color-text-soft);">
                    <li><strong>Lo que el Mintrabajo realmente exige</strong> — interpretación práctica de la Resolución 2764 sin la jerga legal.</li>
                    <li><strong>Forma A vs. Forma B en la vida real</strong> — cuándo aplica cada una y cómo segmentar la población.</li>
                    <li><strong>De la encuesta al plan de intervención</strong> — el flujo completo demostrado en plataforma, en vivo.</li>
                    <li><strong>Errores típicos que hacen que la batería no sirva</strong> — y cómo evitarlos antes de empezar.</li>
                    <li><strong>Q&amp;A en vivo</strong> — preguntas abiertas con un psicólogo certificado.</li>
                </ol>

                <p style="margin-top:18px; padding:14px 18px; background:var(--color-primary-light); border-radius:10px; color:var(--color-primary); font-size:.95rem;">
                    🎁 <strong>Bonus:</strong> al inscribirte recibes en tu correo el <em>Checklist Resolución 2764 — 30 puntos para auditar tu cumplimiento</em>.
                </p>
            </div>

            <div style="background:linear-gradient(135deg,var(--color-primary-light),#fff); border:1px solid var(--color-border); border-radius:16px; padding:28px; aspect-ratio:16/10; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center;">
                <div style="font-size:3rem; margin-bottom:8px;">▶</div>
                <h3 style="margin:0 0 8px;">Vista previa del webinar</h3>
                <p style="color:var(--color-muted); margin:0; font-size:.9rem;">El video aparecerá aquí cuando esté disponible.</p>
            </div>
        </div>
    </div>
</section>

<section class="alt" id="formulario">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Inscripción</span>
            <h2>Reserva tu lugar gratis</h2>
            <p>Cupos limitados a 100 asistentes por sesión para garantizar Q&amp;A en vivo de calidad.</p>
        </div>

        <?php if (! empty($errors)): ?>
            <div style="max-width:640px; margin:0 auto 24px; padding:18px 22px; border-radius:12px; background:#FEF2F2; color:var(--color-danger); border:1px solid var(--color-danger);">
                <strong>Revisa el formulario:</strong>
                <ul style="margin:8px 0 0; padding-left:20px;">
                    <?php foreach ($errors as $err): ?>
                        <li><?= esc($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('webinar/registrar') ?>" style="max-width:640px; margin:0 auto; background:#fff; padding:32px; border-radius:16px; border:1px solid var(--color-border);">
            <?= csrf_field() ?>

            <input type="text" name="website" value="" tabindex="-1" autocomplete="off" style="position:absolute; left:-9999px; opacity:0;" aria-hidden="true">

            <label style="display:block; margin-bottom:14px;">
                <span style="display:block; font-size:.88rem; color:var(--color-muted); margin-bottom:6px;">Nombre completo <span style="color:var(--color-danger);">*</span></span>
                <input type="text" name="name" value="<?= esc($old['name'] ?? '') ?>" required maxlength="120" style="width:100%; padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem;">
            </label>

            <label style="display:block; margin-bottom:14px;">
                <span style="display:block; font-size:.88rem; color:var(--color-muted); margin-bottom:6px;">Email corporativo <span style="color:var(--color-danger);">*</span></span>
                <input type="email" name="email" value="<?= esc($old['email'] ?? '') ?>" required maxlength="190" style="width:100%; padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem;">
            </label>

            <label style="display:block; margin-bottom:14px;">
                <span style="display:block; font-size:.88rem; color:var(--color-muted); margin-bottom:6px;">Teléfono (opcional)</span>
                <input type="tel" name="phone" value="<?= esc($old['phone'] ?? '') ?>" maxlength="40" style="width:100%; padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem;">
            </label>

            <label style="display:block; margin-bottom:14px;">
                <span style="display:block; font-size:.88rem; color:var(--color-muted); margin-bottom:6px;">Empresa u organización</span>
                <input type="text" name="company" value="<?= esc($old['company'] ?? '') ?>" maxlength="180" style="width:100%; padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem;">
            </label>

            <label style="display:block; margin-bottom:14px;">
                <span style="display:block; font-size:.88rem; color:var(--color-muted); margin-bottom:6px;">¿Qué tipo de organización representas?</span>
                <select name="company_type" style="width:100%; padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem; background:#fff;">
                    <?php $ct = $old['company_type'] ?? ''; ?>
                    <option value="empresa"    <?= $ct === 'empresa' ? 'selected' : '' ?>>Empresa empleadora</option>
                    <option value="consultora" <?= $ct === 'consultora' ? 'selected' : '' ?>>Consultora / psicólogo independiente</option>
                    <option value="arl"        <?= $ct === 'arl' ? 'selected' : '' ?>>ARL</option>
                    <option value="otro"       <?= $ct === '' || $ct === 'otro' ? 'selected' : '' ?>>Otro</option>
                </select>
            </label>

            <label style="display:block; margin-bottom:24px;">
                <span style="display:block; font-size:.88rem; color:var(--color-muted); margin-bottom:6px;">Tamaño del equipo (opcional)</span>
                <input type="text" name="team_size" value="<?= esc($old['team_size'] ?? '') ?>" maxlength="40" placeholder="Ej: 1-50, 51-150, 500+" style="width:100%; padding:12px 14px; border:1px solid var(--color-border); border-radius:10px; font-size:1rem;">
            </label>

            <button type="submit" class="btn btn-cta btn-lg" style="width:100%;">Reservar mi lugar gratis</button>

            <p style="font-size:.8rem; color:var(--color-muted); margin:14px 0 0; text-align:center;">
                Al inscribirte aceptas el tratamiento de tus datos según la <a href="<?= base_url('privacidad') ?>">Política de Privacidad</a> y la Ley 1581 de 2012.
            </p>
        </form>
    </div>
</section>

<?= $this->endSection() ?>
