<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= esc($description ?? 'PsyRisk - Batería de Riesgo Psicosocial conforme Resolución 2764 de 2022.') ?>">
    <title><?= esc($title ?? 'PsyRisk - Batería de Riesgo Psicosocial') ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo_psirysk.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/psyrisk.css') ?>">
    <?= $this->renderSection('head') ?>
</head>
<body>
    <?= view('partials/header', ['activeNav' => $activeNav ?? '']) ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= view('partials/footer') ?>
    <?= view('partials/whatsapp') ?>

    <script src="<?= base_url('assets/js/psyrisk.js') ?>"></script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
