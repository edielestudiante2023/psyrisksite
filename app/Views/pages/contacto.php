<?= $this->extend('layouts/main') ?>

<?= $this->section('jsonld') ?>
<?= view('partials/jsonld-breadcrumb', ['items' => [
    ['name' => 'Inicio',   'url' => base_url('/')],
    ['name' => 'Contacto', 'url' => base_url('contacto')],
]]) ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"ContactPage","name":"Contacto · PsyRisk","url":"<?= base_url('contacto') ?>","description":"Habla con un asesor de PsyRisk para solicitar demo, cotización o resolver dudas sobre la batería de riesgo psicosocial, vigilancia epidemiológica o capacitaciones."}</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Migas de pan">
            <a href="<?= base_url('/') ?>">Inicio</a>
            <span class="sep">/</span>
            <span aria-current="page">Contacto</span>
        </nav>

        <h1>Hablemos</h1>
        <p class="lead">Cuéntanos qué necesitas. Te respondemos en menos de 24 horas hábiles con cotización, agenda de demo o aclaración de dudas.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="split">
            <div class="split-text">
                <h2>Información de contacto</h2>
                <p>Cycloid Talent · marca PsyRisk</p>

                <div style="display:flex; flex-direction:column; gap:18px; margin-top:24px;">
                    <div style="display:flex; gap:14px; align-items:flex-start;">
                        <span style="width:40px; height:40px; background:var(--color-primary-light); color:var(--color-primary); border-radius:var(--radius-md); display:inline-flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </span>
                        <div>
                            <strong>Correo electrónico</strong>
                            <div><a href="mailto:diana.cuestas@cycloidtalent.com">diana.cuestas@cycloidtalent.com</a></div>
                        </div>
                    </div>
                    <div style="display:flex; gap:14px; align-items:flex-start;">
                        <span style="width:40px; height:40px; background:var(--color-secondary-light); color:var(--color-secondary); border-radius:var(--radius-md); display:inline-flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </span>
                        <div>
                            <strong>Teléfono / WhatsApp</strong>
                            <div><a href="tel:+573229074371">+57 322 907 4371</a></div>
                        </div>
                    </div>
                    <div style="display:flex; gap:14px; align-items:flex-start;">
                        <span style="width:40px; height:40px; background:var(--color-primary-light); color:var(--color-primary); border-radius:var(--radius-md); display:inline-flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </span>
                        <div>
                            <strong>Oficina</strong>
                            <div>Tv. 24B #17-209<br>Soacha, Cundinamarca, Colombia</div>
                        </div>
                    </div>
                    <div style="display:flex; gap:14px; align-items:flex-start;">
                        <span style="width:40px; height:40px; background:var(--color-secondary-light); color:var(--color-secondary); border-radius:var(--radius-md); display:inline-flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </span>
                        <div>
                            <strong>Horario de atención</strong>
                            <div>Lunes a viernes · 8:00 a.m. – 6:00 p.m.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-card">
                <?php if (! empty($errors)): ?>
                    <div class="alert alert-error">
                        <strong>Por favor revisa los campos marcados:</strong>
                        <ul style="margin:8px 0 0; padding-left:1.2em;">
                            <?php foreach ($errors as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('contacto/enviar') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="nombre">Nombre completo <span class="req">*</span></label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required maxlength="120" value="<?= esc($old['nombre'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico <span class="req">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" required maxlength="160" value="<?= esc($old['email'] ?? '') ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="telefono">Teléfono / WhatsApp</label>
                            <input type="tel" id="telefono" name="telefono" class="form-control" maxlength="40" value="<?= esc($old['telefono'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label for="empresa">Empresa</label>
                            <input type="text" id="empresa" name="empresa" class="form-control" maxlength="160" value="<?= esc($old['empresa'] ?? '') ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="asunto">¿En qué te podemos ayudar? <span class="req">*</span></label>
                        <select id="asunto" name="asunto" class="form-control" required>
                            <option value="">Selecciona una opción</option>
                            <option value="demo" <?= ($old['asunto'] ?? '') === 'demo' ? 'selected' : '' ?>>Quiero una demo gratuita</option>
                            <option value="cotizacion" <?= ($old['asunto'] ?? '') === 'cotizacion' ? 'selected' : '' ?>>Necesito cotización</option>
                            <option value="consultoras" <?= ($old['asunto'] ?? '') === 'consultoras' ? 'selected' : '' ?>>Soy psicólogo consultor</option>
                            <option value="otro" <?= ($old['asunto'] ?? '') === 'otro' ? 'selected' : '' ?>>Otra consulta</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mensaje">Tu mensaje <span class="req">*</span></label>
                        <textarea id="mensaje" name="mensaje" class="form-control" required minlength="10" maxlength="2000" placeholder="Cuéntanos brevemente qué necesitas: tamaño de tu empresa, sector y plazo aproximado."><?= esc($old['mensaje'] ?? '') ?></textarea>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="autoriza" name="autoriza" value="1" required>
                        <label for="autoriza">
                            Autorizo el tratamiento de mis datos personales conforme a la <a href="<?= base_url('privacidad') ?>">Política de Privacidad</a> y la Ley 1581 de 2012. <span class="req">*</span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
