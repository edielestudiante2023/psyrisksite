<?php
/**
 * @var string $toName
 * @var string $fromName
 * @var string $fromEmail
 * @var string $message
 * @var string $signupLink
 */
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Invitación a PsyRisk</title>
</head>
<body style="margin:0; padding:0; background:#F5F7FA; font-family:Inter,Arial,sans-serif; color:#1F2937;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#F5F7FA; padding:32px 16px;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px; background:#FFFFFF; border-radius:16px; overflow:hidden; box-shadow:0 4px 18px rgba(0,0,0,0.06);">
                    <tr>
                        <td style="background:linear-gradient(135deg,#3B6FB5,#A14BA1); padding:32px 32px 28px; color:#FFFFFF;">
                            <h1 style="margin:0; font-size:1.6rem; line-height:1.2;">PsyRisk</h1>
                            <p style="margin:6px 0 0; font-size:.92rem; opacity:.9;">Plataforma de Riesgo Psicosocial — Resolución 2764</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px;">
                            <p style="margin:0 0 18px; font-size:1rem; line-height:1.55;">
                                <?= esc($toName) ?>,
                            </p>
                            <p style="margin:0 0 18px; font-size:1rem; line-height:1.55;">
                                <strong><?= esc($fromName) ?></strong> (<?= esc($fromEmail) ?>) te recomienda probar <strong>PsyRisk</strong>, la plataforma colombiana para aplicar la batería de riesgo psicosocial conforme a la Resolución 2764 de 2022.
                            </p>

                            <?php if (! empty($message)): ?>
                                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="margin:0 0 22px;">
                                    <tr>
                                        <td style="background:#F5F7FA; border-left:4px solid #3B6FB5; padding:16px 18px; border-radius:0 10px 10px 0; font-style:italic; color:#4B5563;">
                                            "<?= esc($message) ?>"
                                        </td>
                                    </tr>
                                </table>
                            <?php endif; ?>

                            <p style="margin:0 0 22px; font-size:1rem; line-height:1.55;">
                                Crea tu cuenta gratis (14 días, sin tarjeta) y explora la plataforma con tus propios clientes:
                            </p>

                            <table role="presentation" cellpadding="0" cellspacing="0" style="margin:0 0 28px;">
                                <tr>
                                    <td style="background:#16A34A; border-radius:10px;">
                                        <a href="<?= esc($signupLink) ?>" style="display:inline-block; padding:14px 28px; color:#FFFFFF; font-weight:600; text-decoration:none; font-size:1rem;">Crear cuenta gratis →</a>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin:0 0 8px; font-size:.85rem; color:#6B7280;">
                                Si el botón no funciona, copia este enlace en tu navegador:
                            </p>
                            <p style="margin:0 0 22px; font-size:.82rem; color:#3B6FB5; word-break:break-all;">
                                <?= esc($signupLink) ?>
                            </p>

                            <hr style="border:0; border-top:1px solid #E5E7EB; margin:24px 0;">

                            <p style="margin:0 0 6px; font-size:.85rem; color:#6B7280;">
                                ¿No conoces a <?= esc($fromName) ?> o no esperabas este correo? Ignóralo — no recibirás más mensajes nuestros sin que tú lo solicites.
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
