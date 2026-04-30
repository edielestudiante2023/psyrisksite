<?php

namespace App\Libraries;

/**
 * EmailService — envía correos vía SendGrid API con click tracking desactivado.
 *
 * Por qué API HTTP y no SMTP: SendGrid SMTP reescribe automáticamente todos los
 * <a href> a urlXX.tudominio.com/ls/click?... y si ese subdominio de tracking
 * no tiene SSL bien configurado, los botones del correo llegan a NET::ERR_CERT.
 * El SDK permite desactivar click tracking por email; SMTP no.
 *
 * Patrón replicado del proyecto hermano `psyrisk` (Cycloid Talent).
 */
class EmailService
{
    protected string $fromEmail;
    protected string $fromName;
    protected string $apiKey;

    public function __construct()
    {
        $this->fromEmail = (string) (env('email.fromEmail') ?: 'no-reply@cycloidtalent.com');
        $this->fromName  = (string) (env('email.fromName')  ?: 'PsyRisk');
        $this->apiKey    = (string) env('email.SMTPPass'); // API key de SendGrid (nombre legacy)
    }

    /**
     * Indica si el servicio tiene una API key configurada.
     * Útil para que los controllers eviten intentar enviar cuando claramente
     * no hay setup, y reporten al usuario un mensaje preciso.
     */
    public function isConfigured(): bool
    {
        return $this->apiKey !== '' && str_starts_with($this->apiKey, 'SG.');
    }

    /**
     * Envío central. Todos los métodos públicos pasan por aquí.
     */
    protected function sendViaSendGrid(string $toEmail, string $subject, string $htmlContent, array $options = []): bool
    {
        if (! $this->isConfigured()) {
            log_message('warning', "EmailService: API key no configurada. Skip envío a {$toEmail}");
            return false;
        }

        try {
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom(
                $options['fromEmail'] ?? $this->fromEmail,
                $options['fromName']  ?? $this->fromName
            );
            $email->setSubject($subject);
            $email->addTo($toEmail);
            $email->addContent('text/html', $htmlContent);

            if (! empty($options['cc']) && is_array($options['cc'])) {
                foreach ($options['cc'] as $cc) {
                    $email->addCc($cc);
                }
            }

            // Desactivar click tracking → preserva los <a href> originales.
            $trackingSettings = new \SendGrid\Mail\TrackingSettings();
            $clickTracking    = new \SendGrid\Mail\ClickTracking();
            $clickTracking->setEnable(false);
            $clickTracking->setEnableText(false);
            $trackingSettings->setClickTracking($clickTracking);
            $email->setTrackingSettings($trackingSettings);

            $sendgrid = new \SendGrid($this->apiKey);
            $response = $sendgrid->send($email);

            $status = $response->statusCode();
            if ($status >= 200 && $status < 300) {
                log_message('info', "Email enviado a {$toEmail} — Asunto: {$subject}");
                return true;
            }

            log_message('error', "Email a {$toEmail} falló (HTTP {$status}): " . $response->body());
            return false;
        } catch (\Throwable $e) {
            log_message('error', "Excepción enviando email a {$toEmail}: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Email de prueba — usado por `php spark test:email <correo>`.
     */
    public function sendTestEmail(string $toEmail): bool
    {
        $html = view('emails/test_email', [
            'testDate' => date('Y-m-d H:i:s'),
        ]);
        return $this->sendViaSendGrid($toEmail, 'Test de configuración SendGrid · PsyRisk', $html);
    }

    /**
     * Invitación a un referido (programa de referidos /referidos).
     */
    public function sendReferralInvite(
        string $toEmail,
        string $toName,
        string $fromName,
        string $fromEmail,
        string $message,
        string $signupLink
    ): bool {
        $html = view('emails/referral_invite', [
            'toName'     => $toName !== '' ? $toName : 'Hola',
            'fromName'   => $fromName !== '' ? $fromName : 'Un colega',
            'fromEmail'  => $fromEmail,
            'message'    => $message,
            'signupLink' => $signupLink,
        ]);
        $subject = ($fromName !== '' ? $fromName : $fromEmail) . ' te invita a probar PsyRisk gratis';
        return $this->sendViaSendGrid($toEmail, $subject, $html);
    }

    /**
     * Confirmación de inscripción al webinar (/webinar).
     */
    public function sendWebinarConfirmation(
        string $toEmail,
        string $name,
        string $zoomUrl,
        string $webinarAt,
        string $signupUrl
    ): bool {
        $html = view('emails/webinar_confirmation', [
            'name'      => $name,
            'zoomUrl'   => $zoomUrl,
            'webinarAt' => $webinarAt,
            'signupUrl' => $signupUrl,
        ]);
        return $this->sendViaSendGrid($toEmail, 'Confirmamos tu lugar — Webinar PsyRisk', $html);
    }
}
