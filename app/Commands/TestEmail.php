<?php

namespace App\Commands;

use App\Libraries\EmailService;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

/**
 * Verifica la configuración de SendGrid enviando un email de prueba.
 *
 * Uso:
 *   php spark test:email destinatario@dominio.com
 */
class TestEmail extends BaseCommand
{
    protected $group       = 'Testing';
    protected $name        = 'test:email';
    protected $description = 'Envía un email de prueba para verificar la configuración SendGrid.';
    protected $usage       = 'test:email [email_address]';
    protected $arguments   = ['email_address' => 'Email destinatario'];

    public function run(array $params)
    {
        $toEmail = $params[0] ?? CLI::prompt('Email destinatario');

        if (! filter_var($toEmail, FILTER_VALIDATE_EMAIL)) {
            CLI::error('Email inválido: ' . $toEmail);
            return;
        }

        $service = new EmailService();
        if (! $service->isConfigured()) {
            CLI::error('SendGrid no está configurado. Revisa email.SMTPPass en .env (debe empezar con SG.)');
            return;
        }

        CLI::write("Enviando test a: {$toEmail}", 'yellow');

        if ($service->sendTestEmail($toEmail)) {
            CLI::write('✓ Enviado. Revisa la bandeja (incluye spam).', 'green');
        } else {
            CLI::error('✗ Falló. Revisa writable/logs/log-' . date('Y-m-d') . '.log');
        }
    }
}
