/* PsyRisk - Service Worker
 * Estrategia híbrida:
 *  - precache de shell mínimo (offline page, CSS, JS, logo, íconos)
 *  - HTML/navegaciones: network-first con fallback a caché y a /offline
 *  - estáticos (CSS/JS/imagenes/fuentes): cache-first con revalidación en segundo plano
 *  - el formulario de contacto y la ruta de envío NUNCA se cachean
 *
 * Las rutas se resuelven contra el scope del SW, así funciona tanto si
 * la app vive en la raíz (/) como en un subdirectorio (/psyrisksite/public/).
 */

const VERSION = 'psyrisk-v1.0.3';
const PRECACHE = `${VERSION}-precache`;
const RUNTIME_HTML = `${VERSION}-html`;
const RUNTIME_STATIC = `${VERSION}-static`;

// Base derivada del scope del SW: /, /psyrisksite/public/, etc.
const BASE = new URL(self.registration.scope).pathname;
const u = (rel) => BASE + rel.replace(/^\//, '');

const PRECACHE_URLS = [
  u(''),                         // start
  u('offline'),
  u('assets/css/psyrisk.css'),
  u('assets/js/psyrisk.js'),
  u('assets/js/pwa.js'),
  u('assets/img/logo_psirysk.png'),
  u('assets/img/icons/icon-192.png'),
  u('assets/img/icons/icon-512.png'),
  u('manifest.webmanifest')
];

// Rutas que NUNCA debe cachear (siempre red).
const NETWORK_ONLY_SUBPATHS = [
  'contacto/enviar'
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(PRECACHE).then((cache) =>
      cache.addAll(PRECACHE_URLS).catch((err) => {
        console.warn('[SW] Precache parcial:', err);
      })
    ).then(() => self.skipWaiting())
  );
});

self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((keys) =>
      Promise.all(
        keys.filter((k) => !k.startsWith(VERSION)).map((k) => caches.delete(k))
      )
    ).then(() => self.clients.claim())
  );
});

self.addEventListener('message', (event) => {
  if (event.data === 'SKIP_WAITING') self.skipWaiting();
});

self.addEventListener('fetch', (event) => {
  const req = event.request;
  if (req.method !== 'GET') return;

  const url = new URL(req.url);

  // Solo same-origin.
  if (url.origin !== self.location.origin) return;
  // Solo dentro del scope del SW.
  if (!url.pathname.startsWith(BASE)) return;

  // Bypass forzado para rutas dinámicas críticas.
  const sub = url.pathname.slice(BASE.length);
  if (NETWORK_ONLY_SUBPATHS.some((p) => sub.startsWith(p))) return;

  const accept = req.headers.get('accept') || '';
  const isHTML = req.mode === 'navigate' || accept.includes('text/html');

  if (isHTML) {
    event.respondWith(handleHtml(req));
    return;
  }

  if (isStaticAsset(url)) {
    event.respondWith(handleStatic(req));
    return;
  }

  event.respondWith(fetch(req).catch(() => caches.match(req)));
});

function isStaticAsset(url) {
  return /\.(?:css|js|png|jpg|jpeg|gif|svg|webp|ico|woff2?|ttf|eot|webmanifest)$/.test(url.pathname);
}

async function handleHtml(req) {
  const cache = await caches.open(RUNTIME_HTML);
  try {
    const fresh = await fetch(req);
    if (fresh && fresh.ok) cache.put(req, fresh.clone());
    return fresh;
  } catch (e) {
    const cached = await cache.match(req);
    if (cached) return cached;
    const offline = await caches.match(u('offline'));
    if (offline) return offline;
    return new Response('Sin conexión', {
      status: 503,
      headers: { 'Content-Type': 'text/plain; charset=utf-8' }
    });
  }
}

async function handleStatic(req) {
  const cache = await caches.open(RUNTIME_STATIC);
  const cached = await cache.match(req);
  const networkPromise = fetch(req)
    .then((res) => {
      if (res && res.ok) cache.put(req, res.clone());
      return res;
    })
    .catch(() => null);

  return cached || (await networkPromise) || new Response('', { status: 504 });
}
