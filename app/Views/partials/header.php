<?php $active = $activeNav ?? ''; ?>
<header class="site-header">
    <div class="container">
        <a href="<?= base_url('/') ?>" class="brand" aria-label="PsyRisk - Inicio">
            <img src="<?= base_url('assets/img/logo_psirysk.png') ?>" alt="PsyRisk">
            <span class="brand-text">
                <span class="brand-name">PsyRisk</span>
                <span class="brand-tag">Batería de Riesgo Psicosocial</span>
            </span>
        </a>

        <button class="menu-toggle" aria-label="Abrir menú" aria-expanded="false" aria-controls="main-nav">
            <span></span><span></span><span></span>
        </button>

        <nav class="main-nav" id="main-nav" aria-label="Menú principal">
            <div class="nav-item has-dropdown <?= $active === 'servicios' ? 'active' : '' ?>">
                <button type="button" aria-haspopup="true">
                    Servicios
                    <svg class="caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="dropdown" role="menu">
                    <a href="<?= base_url('servicios/bateria-riesgo') ?>"><strong>Batería de Riesgo Psicosocial</strong><small>Evaluación conforme Resolución 2764</small></a>
                    <a href="<?= base_url('servicios/vigilancia-epidemiologica') ?>"><strong>Vigilancia Epidemiológica</strong><small>Seguimiento continuo del riesgo</small></a>
                    <a href="<?= base_url('servicios/planes-intervencion') ?>"><strong>Planes de Intervención</strong><small>Estrategias priorizadas por riesgo</small></a>
                    <a href="<?= base_url('servicios/clima-organizacional') ?>"><strong>Clima Organizacional</strong><small>Diagnóstico de percepción laboral</small></a>
                    <a href="<?= base_url('servicios/capacitaciones') ?>"><strong>Capacitaciones</strong><small>Liderazgo, estrés y burnout</small></a>
                </div>
            </div>

            <div class="nav-item <?= $active === 'precios' ? 'active' : '' ?>">
                <a href="<?= base_url('precios') ?>">Precios</a>
            </div>

            <div class="nav-item has-dropdown <?= $active === 'recursos' ? 'active' : '' ?>">
                <button type="button" aria-haspopup="true">
                    Recursos
                    <svg class="caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="dropdown" role="menu">
                    <a href="<?= base_url('normativa/resolucion-2764') ?>"><strong>Resolución 2764 de 2022</strong></a>
                    <a href="<?= base_url('normativa/bateria-psicosocial-colombia') ?>"><strong>Batería Psicosocial Colombia</strong></a>
                    <a href="<?= base_url('normativa/riesgo-psicosocial') ?>"><strong>Riesgo Psicosocial</strong></a>
                    <a href="<?= base_url('normativa/sg-sst') ?>"><strong>SG-SST Colombia</strong></a>
                    <a href="<?= base_url('normativa/ley-1581') ?>"><strong>Ley 1581 de 2012</strong></a>
                    <a href="<?= base_url('recursos') ?>"><strong>Ver todos los recursos →</strong></a>
                </div>
            </div>

            <div class="nav-item has-dropdown <?= $active === 'consultoras' ? 'active' : '' ?>">
                <button type="button" aria-haspopup="true">
                    Consultoras
                    <svg class="caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="dropdown" role="menu">
                    <a href="<?= base_url('consultoras') ?>"><strong>Para Psicólogos y Consultoras</strong></a>
                    <a href="<?= base_url('consultoras/como-funciona') ?>"><strong>Cómo Funciona</strong></a>
                    <a href="<?= base_url('consultoras/marca-propia') ?>"><strong>Marca Propia</strong></a>
                    <a href="<?= base_url('consultoras/precios') ?>"><strong>Precios para Consultoras</strong></a>
                </div>
            </div>

            <div class="nav-item <?= $active === 'nosotros' ? 'active' : '' ?>">
                <a href="<?= base_url('nosotros') ?>">Nosotros</a>
            </div>
        </nav>

        <div class="header-actions">
            <a href="#" class="btn btn-ghost">Iniciar sesión</a>
            <a href="#" class="btn btn-primary">Solicitar Demo</a>
        </div>
    </div>
</header>
