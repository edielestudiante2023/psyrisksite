# Integración psyrisksite → psyrisk SaaS (signup)

Esta nota documenta lo que **psyrisksite envía** al hacer click en "Crear cuenta gratis" y lo que el lado **psyrisk SaaS** debe leer y persistir para atribución.

## Qué envía psyrisksite

Cada CTA "Crear cuenta gratis" del sitio comercial llama a `signup_url($plan = null)` (helper en `app/Helpers/marketing_helper.php`). El resultado es una URL de la forma:

```
https://psyrisk.cycloidtalent.com/signup
    ?utm_source={fuente}
    &utm_medium={medio}
    &utm_campaign={campaña}     # opcional
    &utm_term={término}         # opcional
    &utm_content={contenido}    # opcional
    &plan={inicial|profesional|empresarial}   # opcional, solo desde /precios
```

### Reglas de propagación de UTMs (lado psyrisksite)

1. Si la URL del visitante en psyrisksite trae `utm_*`, esos valores se propagan tal cual al signup.
2. Si no trae UTMs pero existe la cookie `psyrisk_first_touch_utm` (90 días, set por el filter `UtmFirstTouch` en el primer hit con UTMs), se usan los valores de la cookie.
3. Fallback: `utm_source=psyrisksite` y `utm_medium=organic`.

Todos los valores se sanitizan (alfanuméricos + `._-` + espacios, máx 64 caracteres).

### Slugs de plan que envía psyrisksite

Solo desde `/precios`, las cards mandan uno de estos tres valores en `?plan=`:

| Slug         | Card de precios.php                          |
|--------------|----------------------------------------------|
| `inicial`    | Batería Psicosocial — $1.100.000             |
| `profesional`| Servicio Integrado — $2.070.000 (popular)    |
| `empresarial`| Clima Organizacional — $1.200.000            |

> **Nota**: Las cards de `/precios` venden **servicios de consultoría puntual**, no los planes mensuales del SaaS multi-tenant del brief original ($79.000 / $199.000 / $499.000). Si el `SignupController` del SaaS espera otros slugs (`basico` / `pro` / `enterprise`, etc.), el equipo del SaaS puede mapearlos en su lado o avisar para ajustar el helper en psyrisksite.

## Qué debe hacer psyrisk SaaS

### Tabla `tenant_signups` — columnas requeridas

Si las columnas no existen, agregar migración:

```sql
ALTER TABLE tenant_signups
    ADD COLUMN signup_source     VARCHAR(64)  DEFAULT NULL,
    ADD COLUMN signup_medium     VARCHAR(64)  DEFAULT NULL,
    ADD COLUMN signup_campaign   VARCHAR(64)  DEFAULT NULL,
    ADD COLUMN signup_term       VARCHAR(64)  DEFAULT NULL,
    ADD COLUMN signup_content    VARCHAR(64)  DEFAULT NULL,
    ADD COLUMN plan_preselected  VARCHAR(32)  DEFAULT NULL;
```

### En `SignupController` del SaaS

- En el `GET /signup`: leer `$_GET['utm_*']` y `$_GET['plan']`, persistirlos en sesión o en hidden fields del form.
- En el `POST /signup` (submit): guardar esos valores en las columnas `signup_source` / `signup_medium` / `signup_campaign` / etc. de la nueva fila en `tenant_signups`.
- Si llega `?plan=inicial|profesional|empresarial`, pre-seleccionarlo en el `<select>` del form.

## Criterio de aceptación end-to-end

1. Visitante entra a `https://psyrisksite.cycloidtalent.com/?utm_source=google&utm_campaign=bateria-2764`.
2. El filter `UtmFirstTouch` setea cookie `psyrisk_first_touch_utm` con esos valores.
3. Visitante navega a `/precios` (sin UTMs en la nueva URL).
4. Hace click en "Empezar gratis →" del Servicio Integrado.
5. Aterriza en `https://psyrisk.cycloidtalent.com/signup?utm_source=google&utm_medium=psyrisksite&utm_campaign=bateria-2764&plan=profesional`.
   - Nota: `utm_medium` se rellena con `psyrisksite` solo si **no** vino `utm_medium` de origen. Si la fuente original (Google Ads, etc.) ya envió `utm_medium=cpc`, ese valor se preserva.
6. Visitante completa el form. La fila en `tenant_signups` queda con `signup_source='google'`, `signup_campaign='bateria-2764'`, `plan_preselected='profesional'`.

## Archivos relevantes (lado psyrisksite)

- `app/Helpers/marketing_helper.php` — función `signup_url($plan)`.
- `app/Filters/UtmFirstTouch.php` — captura first-touch en cookie.
- `app/Config/Filters.php` — filter registrado en `globals.before`.
- `app/Controllers/BaseController.php` — helper `marketing` cargado globalmente.
