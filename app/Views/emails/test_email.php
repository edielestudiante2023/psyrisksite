<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test SendGrid — PsyRisk</title>
</head>
<body style="margin:0; padding:0; background:#F5F7FA; font-family:Inter,Arial,sans-serif; color:#1F2937;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#F5F7FA; padding:32px 16px;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px; background:#FFFFFF; border-radius:16px; overflow:hidden; box-shadow:0 4px 18px rgba(0,0,0,0.06);">
                    <tr>
                        <td style="background:linear-gradient(135deg,#3B6FB5,#A14BA1); padding:32px; color:#FFFFFF; text-align:center;">
                            <h1 style="margin:0; font-size:1.5rem;">✓ SendGrid configurado</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px; line-height:1.55;">
                            <p style="margin:0 0 16px;">Este correo confirma que la integración SendGrid de <strong>psyrisksite</strong> está funcionando.</p>
                            <ul style="margin:0 0 16px; padding-left:20px; color:#4B5563;">
                                <li><strong>Fecha y hora:</strong> <?= esc($testDate ?? '') ?></li>
                                <li><strong>Entorno:</strong> <?= defined('ENVIRONMENT') ? esc(ENVIRONMENT) : 'desconocido' ?></li>
                            </ul>
                            <p style="margin:0; color:#6B7280; font-size:.85rem;">Si recibiste este correo, los formularios de <code>/referidos</code> y <code>/webinar</code> ya pueden enviar emails reales.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background:#F5F7FA; padding:18px 32px; font-size:.78rem; color:#6B7280; text-align:center;">
                            PsyRisk · CYCLOID TALENT SAS · NIT 901.653.912-2
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
