<?php
/**
 * @var string $name
 * @var string $zoomUrl
 * @var string $webinarAt
 * @var string $signupUrl
 */
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de inscripción — Webinar PsyRisk</title>
</head>
<body style="margin:0; padding:0; background:#F5F7FA; font-family:Inter,Arial,sans-serif; color:#1F2937;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#F5F7FA; padding:32px 16px;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px; background:#FFFFFF; border-radius:16px; overflow:hidden; box-shadow:0 4px 18px rgba(0,0,0,0.06);">
                    <tr>
                        <td style="background:linear-gradient(135deg,#3B6FB5,#A14BA1); padding:32px; color:#FFFFFF;">
                            <h1 style="margin:0; font-size:1.5rem;">PsyRisk · Webinar gratuito</h1>
                            <p style="margin:8px 0 0; opacity:.9;">Cómo aplicar la Batería de Riesgo Psicosocial</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px;">
                            <p style="margin:0 0 18px; font-size:1.05rem;">¡Hola, <?= esc($name) ?>!</p>

                            <p style="margin:0 0 18px; font-size:1rem; line-height:1.55;">
                                Tu inscripción al webinar <em>"Cómo aplicar la Batería de Riesgo Psicosocial en menos de 1 hora"</em> está confirmada.
                            </p>

                            <?php if (! empty($webinarAt)): ?>
                                <p style="margin:0 0 18px; font-size:1rem; line-height:1.55;"><strong>📅 Fecha y hora:</strong> <?= esc($webinarAt) ?></p>
                            <?php endif; ?>

                            <?php if (! empty($zoomUrl)): ?>
                                <p style="margin:0 0 18px; font-size:1rem; line-height:1.55;"><strong>🔗 Enlace para conectarte:</strong></p>
                                <table role="presentation" cellpadding="0" cellspacing="0" style="margin:0 0 22px;">
                                    <tr>
                                        <td style="background:#3B6FB5; border-radius:10px;">
                                            <a href="<?= esc($zoomUrl) ?>" style="display:inline-block; padding:14px 28px; color:#FFFFFF; font-weight:600; text-decoration:none;">Abrir sesión del webinar →</a>
                                        </td>
                                    </tr>
                                </table>
                            <?php else: ?>
                                <p style="margin:0 0 18px; font-size:1rem; line-height:1.55; color:#6B7280;">
                                    Te confirmaremos por este mismo correo la fecha exacta y el enlace de la sesión cuando lo activemos.
                                </p>
                            <?php endif; ?>

                            <hr style="border:0; border-top:1px solid #E5E7EB; margin:24px 0;">

                            <h3 style="margin:0 0 12px; font-size:1.1rem;">Mientras esperas</h3>
                            <p style="margin:0 0 18px; font-size:1rem; line-height:1.55;">
                                Crea tu cuenta gratis y empieza a explorar la plataforma con tus propios casos. 14 días sin tarjeta.
                            </p>
                            <table role="presentation" cellpadding="0" cellspacing="0" style="margin:0 0 18px;">
                                <tr>
                                    <td style="background:#16A34A; border-radius:10px;">
                                        <a href="<?= esc($signupUrl) ?>" style="display:inline-block; padding:14px 28px; color:#FFFFFF; font-weight:600; text-decoration:none;">Crear cuenta gratis</a>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin:24px 0 0; font-size:.85rem; color:#6B7280;">
                                Si no te inscribiste tú mismo, ignora este correo y no te enviaremos nada más.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background:#F5F7FA; padding:18px 32px; font-size:.78rem; color:#6B7280; text-align:center;">
                            PsyRisk · CYCLOID TALENT SAS · NIT 901.653.912-2<br>
                            Tv. 24B #17-209, Soacha, Cundinamarca, Colombia
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
