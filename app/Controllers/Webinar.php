<?php

namespace App\Controllers;

use App\Libraries\EmailService;

class Webinar extends BaseController
{
    public function index()
    {
        return view('pages/webinar/index', [
            'title'           => 'Webinar gratuito: Batería de Riesgo Psicosocial en menos de 1 hora | PsyRisk',
            'metaDescription' => 'Webinar gratuito en línea: cómo aplicar la Batería de Riesgo Psicosocial conforme a la Resolución 2764 en menos de 1 hora. Para empresas, consultoras y áreas SST.',
            'activeNav'       => 'webinar',
            'errors'          => [],
            'old'             => [],
        ]);
    }

    public function registrar()
    {
        if (! empty($this->request->getPost('website'))) {
            return redirect()->to(base_url('webinar'));
        }

        $name        = trim((string) $this->request->getPost('name'));
        $email       = trim((string) $this->request->getPost('email'));
        $phone       = trim((string) $this->request->getPost('phone'));
        $company     = trim((string) $this->request->getPost('company'));
        $companyType = trim((string) $this->request->getPost('company_type'));
        $teamSize    = trim((string) $this->request->getPost('team_size'));

        $errors = [];

        if ($name === '' || mb_strlen($name) > 120) {
            $errors['name'] = 'Tu nombre es obligatorio (máx. 120 caracteres).';
        }
        if ($email === '' || ! filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 190) {
            $errors['email'] = 'Email obligatorio y válido (máx. 190 caracteres).';
        }
        if ($phone !== '' && mb_strlen($phone) > 40) {
            $errors['phone'] = 'Teléfono muy largo.';
        }
        if ($company !== '' && mb_strlen($company) > 180) {
            $errors['company'] = 'Nombre de empresa muy largo.';
        }
        $allowedTypes = ['empresa', 'consultora', 'arl', 'otro'];
        if ($companyType === '' || ! in_array($companyType, $allowedTypes, true)) {
            $companyType = 'otro';
        }

        if (! empty($errors)) {
            return view('pages/webinar/index', [
                'title'           => 'Webinar gratuito: Batería de Riesgo Psicosocial | PsyRisk',
                'metaDescription' => 'Webinar gratuito en línea sobre la batería de riesgo psicosocial.',
                'activeNav'       => 'webinar',
                'errors'          => $errors,
                'old'             => [
                    'name'         => $name,
                    'email'        => $email,
                    'phone'        => $phone,
                    'company'      => $company,
                    'company_type' => $companyType,
                    'team_size'    => $teamSize,
                ],
            ]);
        }

        $db  = \Config\Database::connect();
        $utm = function_exists('marketing_utm_params') ? marketing_utm_params() : [];

        $existing = $db->table('webinar_signups')->where('email', $email)->get()->getRow();

        if ($existing) {
            $insertedId = (int) $existing->id;
            $db->table('webinar_signups')->where('id', $insertedId)->update([
                'name'         => $name,
                'phone'        => $phone !== '' ? $phone : null,
                'company'      => $company !== '' ? $company : null,
                'company_type' => $companyType,
                'team_size'    => $teamSize !== '' ? $teamSize : null,
                'utm_source'   => $utm['utm_source']   ?? $existing->utm_source,
                'utm_medium'   => $utm['utm_medium']   ?? $existing->utm_medium,
                'utm_campaign' => $utm['utm_campaign'] ?? $existing->utm_campaign,
                'ip_address'   => $this->request->getIPAddress(),
                'user_agent'   => mb_substr((string) $this->request->getUserAgent(), 0, 255),
            ]);
        } else {
            $db->table('webinar_signups')->insert([
                'name'         => $name,
                'email'        => $email,
                'phone'        => $phone !== '' ? $phone : null,
                'company'      => $company !== '' ? $company : null,
                'company_type' => $companyType,
                'team_size'    => $teamSize !== '' ? $teamSize : null,
                'utm_source'   => $utm['utm_source']   ?? null,
                'utm_medium'   => $utm['utm_medium']   ?? null,
                'utm_campaign' => $utm['utm_campaign'] ?? null,
                'ip_address'   => $this->request->getIPAddress(),
                'user_agent'   => mb_substr((string) $this->request->getUserAgent(), 0, 255),
                'created_at'   => date('Y-m-d H:i:s'),
            ]);
            $insertedId = (int) $db->insertID();
        }

        $emailService = new EmailService();
        $sent         = $emailService->sendWebinarConfirmation(
            $email,
            $name,
            (string) (env('WEBINAR_ZOOM_URL') ?: ''),
            (string) (env('WEBINAR_NEXT_DATE') ?: ''),
            function_exists('signup_url') ? signup_url() : 'https://psyrisk.cycloidtalent.com/signup'
        );

        if ($sent && $insertedId) {
            $db->table('webinar_signups')
                ->where('id', $insertedId)
                ->update(['email_sent_at' => date('Y-m-d H:i:s')]);
        }

        session()->setFlashdata('webinar_signup', [
            'name'  => $name,
            'email' => $email,
        ]);

        return redirect()->to(base_url('webinar/gracias'));
    }

    public function gracias()
    {
        $signup     = session()->getFlashdata('webinar_signup');
        $zoomUrl    = (string) (env('WEBINAR_ZOOM_URL') ?: '');
        $webinarAt  = (string) (env('WEBINAR_NEXT_DATE') ?: '');
        $pdfPath    = FCPATH . 'assets/files/checklist-resolucion-2764.pdf';
        $pdfPublic  = is_file($pdfPath)
            ? base_url('assets/files/checklist-resolucion-2764.pdf')
            : null;

        return view('pages/webinar/gracias', [
            'title'           => 'Inscripción confirmada — Webinar PsyRisk',
            'metaDescription' => 'Confirmación de inscripción al webinar gratuito sobre la Batería de Riesgo Psicosocial.',
            'activeNav'       => 'webinar',
            'signup'          => $signup,
            'zoomUrl'         => $zoomUrl,
            'webinarAt'       => $webinarAt,
            'pdfPublic'       => $pdfPublic,
        ]);
    }
}
