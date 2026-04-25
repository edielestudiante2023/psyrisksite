/* PsyRisk - PWA bootstrapping
 * - Registra el service worker
 * - Maneja actualizaciones (toast "nueva versión disponible")
 * - Captura beforeinstallprompt y muestra botón "Instalar app"
 */
(function () {
    'use strict';

    if (!('serviceWorker' in navigator)) return;

    // Calcula base del aplicativo desde la URL del propio script (assets/js/pwa.js).
    var script = document.currentScript || (function () {
        var s = document.getElementsByTagName('script');
        return s[s.length - 1];
    })();
    var swBase = (script ? script.src : window.location.href).replace(/assets\/js\/pwa\.js.*$/, '');
    var SW_URL = swBase + 'sw.js';
    var SW_SCOPE = new URL(swBase, window.location.href).pathname;

    var deferredInstallPrompt = null;

    window.addEventListener('load', function () {
        navigator.serviceWorker.register(SW_URL, { scope: SW_SCOPE })
            .then(function (reg) {
                if (reg.waiting) notifyUpdate(reg);

                reg.addEventListener('updatefound', function () {
                    var sw = reg.installing;
                    if (!sw) return;
                    sw.addEventListener('statechange', function () {
                        if (sw.state === 'installed' && navigator.serviceWorker.controller) {
                            notifyUpdate(reg);
                        }
                    });
                });
            })
            .catch(function (err) {
                console.warn('[PWA] No se pudo registrar el SW:', err);
            });

        // Recargar cuando el SW nuevo toma control.
        var refreshing = false;
        navigator.serviceWorker.addEventListener('controllerchange', function () {
            if (refreshing) return;
            refreshing = true;
            window.location.reload();
        });
    });

    // -------- Botón "Instalar app" --------
    window.addEventListener('beforeinstallprompt', function (e) {
        e.preventDefault();
        deferredInstallPrompt = e;
        showInstallButton();
    });

    window.addEventListener('appinstalled', function () {
        hideInstallButton();
        deferredInstallPrompt = null;
    });

    function showInstallButton() {
        if (document.getElementById('pwa-install-btn')) return;
        var btn = document.createElement('button');
        btn.id = 'pwa-install-btn';
        btn.type = 'button';
        btn.textContent = 'Instalar app';
        btn.setAttribute('aria-label', 'Instalar PsyRisk como aplicación');
        btn.style.cssText = [
            'position:fixed', 'bottom:24px', 'left:24px', 'z-index:9998',
            'background:#3B6FB5', 'color:#fff', 'border:0',
            'padding:12px 18px', 'border-radius:999px',
            'box-shadow:0 6px 18px rgba(15,27,45,.18)',
            'font-weight:600', 'cursor:pointer', 'font-size:.95rem'
        ].join(';');
        btn.addEventListener('click', function () {
            if (!deferredInstallPrompt) return;
            deferredInstallPrompt.prompt();
            deferredInstallPrompt.userChoice.then(function () {
                deferredInstallPrompt = null;
                hideInstallButton();
            });
        });
        document.body.appendChild(btn);
    }

    function hideInstallButton() {
        var btn = document.getElementById('pwa-install-btn');
        if (btn && btn.parentNode) btn.parentNode.removeChild(btn);
    }

    // -------- Toast de actualización --------
    function notifyUpdate(reg) {
        if (document.getElementById('pwa-update-toast')) return;
        var toast = document.createElement('div');
        toast.id = 'pwa-update-toast';
        toast.style.cssText = [
            'position:fixed', 'bottom:24px', 'right:24px', 'z-index:9999',
            'background:#0F1B2D', 'color:#fff',
            'padding:14px 18px', 'border-radius:12px',
            'box-shadow:0 8px 24px rgba(15,27,45,.25)',
            'display:flex', 'align-items:center', 'gap:12px',
            'font-size:.95rem', 'max-width:340px'
        ].join(';');
        toast.innerHTML =
            '<span>Hay una nueva versión disponible.</span>' +
            '<button type="button" id="pwa-update-btn" style="background:#3B6FB5;color:#fff;border:0;padding:8px 14px;border-radius:8px;cursor:pointer;font-weight:600">Actualizar</button>';
        document.body.appendChild(toast);

        document.getElementById('pwa-update-btn').addEventListener('click', function () {
            if (reg.waiting) reg.waiting.postMessage('SKIP_WAITING');
        });
    }
})();
