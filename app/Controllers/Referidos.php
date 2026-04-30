<?php

namespace App\Controllers;

use Config\Services;

class Referidos extends BaseController
{
    public function index()
    {
        return view('pages/referidos/index', [
            'title'           => 'Programa de Referidos | PsyRisk',
            'metaDescription' => 'Invita a 3 colegas y obtén 2 meses gratis de PsyRisk. Programa de referidos para psicólogos consultores y empresas.',
            'activeNav'       => 'referidos',
            'errors'          => [],
            'old'             => [],
            'flash'           => session()->getFlashdata('referidos_flash'),
        ]);
    }

    public function registrar()
    {
        if (! empty($this->request->getPost('website'))) {
            return redirect()->to(base_url('referidos'));
        }

        $referrerEmail = trim((string) $this->request->getPost('referrer_email'));
        $referrerName  = trim((string) $this->request->getPost('referrer_name'));
        $message       = trim((string) $this->request->getPost('message'));
        $referrals     = $this->request->getPost('referrals') ?? [];

        $errors = [];

        if ($referrerEmail === '' || ! filter_var($referrerEmail, FILTER_VALIDATE_EMAIL)) {
            $errors['referrer_email'] = 'Tu email es obligatorio y debe ser válido.';
        } elseif (mb_strlen($referrerEmail) > 190) {
            $errors['referrer_email'] = 'Tu email es muy largo.';
        }

        if (mb_strlen($referrerName) > 120) {
            $errors['referrer_name'] = 'Tu nombre es muy largo.';
        }

        if (mb_strlen($message) > 500) {
            $errors['message'] = 'El mensaje no puede tener más de 500 caracteres.';
        }

        $valid = [];
        if (is_array($referrals)) {
            foreach ($referrals as $i => $r) {
                $email = trim((string) ($r['email'] ?? ''));
                $name  = trim((string) ($r['name'] ?? ''));
                if ($email === '') {
                    continue;
                }
                if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors["referrals.$i.email"] = 'El email del referido #' . ($i + 1) . ' no es válido.';
                    continue;
                }
                if (strcasecmp($email, $referrerEmail) === 0) {
                    $errors["referrals.$i.email"] = 'No puedes referirte a ti mismo.';
                    continue;
                }
                $valid[] = ['email' => $email, 'name' => $name];
            }
        }

        if (empty($valid) && empty($errors)) {
            $errors['referrals'] = 'Agrega al menos un referido válido (nombre y email).';
        }

        if (! empty($errors)) {
            return view('pages/referidos/index', [
                'title'           => 'Programa de Referidos | PsyRisk',
                'metaDescription' => 'Invita a 3 colegas y obtén 2 meses gratis de PsyRisk.',
                'activeNav'       => 'referidos',
                'errors'          => $errors,
                'old'             => [
                    'referrer_email' => $referrerEmail,
                    'referrer_name'  => $referrerName,
                    'message'        => $message,
                    'referrals'      => is_array($referrals) ? $referrals : [],
                ],
                'flash'           => null,
            ]);
        }

        $db  = \Config\Database::connect();
        $utm = function_exists('marketing_utm_params') ? marketing_utm_params() : [];

        $registered = 0;
        foreach ($valid as $r) {
            $token      = bin2hex(random_bytes(16));
            $signupLink = $this->buildReferralSignupUrl($token);

            $db->table('referrals')->insert([
                'referrer_email' => $referrerEmail,
                'referrer_name'  => $referrerName !== '' ? $referrerName : null,
                'referred_email' => $r['email'],
                'referred_name'  => $r['name']    !== '' ? $r['name']    : null,
                'message'        => $message      !== '' ? $message      : null,
                'token'          => $token,
                'status'         => 'pending',
                'utm_source'     => $utm['utm_source']   ?? null,
                'utm_medium'     => $utm['utm_medium']   ?? null,
                'utm_campaign'   => $utm['utm_campaign'] ?? null,
                'ip_address'     => $this->request->getIPAddress(),
                'user_agent'     => mb_substr((string) $this->request->getUserAgent(), 0, 255),
                'created_at'     => date('Y-m-d H:i:s'),
            ]);

            $insertedId = $db->insertID();
            $sent       = $this->sendReferralInvite(
                $r['email'],
                $r['name'],
                $referrerEmail,
                $referrerName,
                $message,
                $signupLink
            );

            if ($sent && $insertedId) {
                $db->table('referrals')
                    ->where('id', $insertedId)
                    ->update(['email_sent_at' => date('Y-m-d H:i:s')]);
            }

            $registered++;
        }

        session()->setFlashdata('referidos_flash', [
            'type'    => 'success',
            'message' => '¡Gracias! Enviamos invitación a ' . $registered . ' colega(s). Te avisaremos cuando se registren.',
        ]);

        return redirect()->to(base_url('referidos') . '#gracias');
    }

    private function buildReferralSignupUrl(string $token): string
    {
        $params = function_exists('marketing_utm_params') ? marketing_utm_params() : [];
        $params['utm_source']   = 'psyrisksite';
        $params['utm_medium']   = 'referral';
        $params['utm_campaign'] = 'programa-referidos';
        $params['ref']          = $token;

        return 'https://psyrisk.cycloidtalent.com/signup?' . http_build_query($params);
    }

    private function sendReferralInvite(
        string $toEmail,
        string $toName,
        string $fromEmail,
        string $fromName,
        string $message,
        string $link
    ): bool {
        try {
            $emailService = Services::email();

            $emailService->setTo($toEmail);
            $emailService->setSubject(
                ($fromName !== '' ? $fromName : $fromEmail) . ' te invita a probar PsyRisk gratis'
            );

            $body = view('emails/referral_invite', [
                'toName'     => $toName !== '' ? $toName : 'Hola',
                'fromName'   => $fromName !== '' ? $fromName : 'Un colega',
                'fromEmail'  => $fromEmail,
                'message'    => $message,
                'signupLink' => $link,
            ]);

            $emailService->setMessage($body);
            $emailService->setMailType('html');

            return (bool) $emailService->send(false);
        } catch (\Throwable $e) {
            log_message('error', 'Referral email failed: ' . $e->getMessage());

            return false;
        }
    }
}
