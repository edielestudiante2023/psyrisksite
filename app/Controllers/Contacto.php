<?php

namespace App\Controllers;

use App\Models\ContactoModel;

class Contacto extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'       => 'Contacto · Solicita Demo o Cotización · PsyRisk',
            'description' => 'Habla con un asesor de PsyRisk para solicitar demo gratuita, cotización de batería de riesgo psicosocial o resolver dudas. Respuesta en menos de 24 horas hábiles.',
            'keywords'    => 'contacto PsyRisk, cotización batería psicosocial, demo evaluación psicosocial',
            'activeNav'   => 'contacto',
            'errors'      => session()->getFlashdata('errors') ?? [],
            'old'         => session()->getFlashdata('old') ?? [],
        ];

        return view('pages/contacto', $data);
    }

    public function enviar()
    {
        $rules = [
            'nombre'      => 'required|min_length[2]|max_length[120]',
            'email'       => 'required|valid_email|max_length[160]',
            'telefono'    => 'permit_empty|max_length[40]',
            'empresa'     => 'permit_empty|max_length[160]',
            'asunto'      => 'required|in_list[demo,cotizacion,consultoras,otro]',
            'mensaje'     => 'required|min_length[10]|max_length[2000]',
            'autoriza'    => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->to('/contacto')
                ->with('errors', $this->validator->getErrors())
                ->with('old', $this->request->getPost());
        }

        $model = new ContactoModel();
        $model->insert([
            'nombre'   => $this->request->getPost('nombre'),
            'email'    => $this->request->getPost('email'),
            'telefono' => $this->request->getPost('telefono'),
            'empresa'  => $this->request->getPost('empresa'),
            'asunto'   => $this->request->getPost('asunto'),
            'mensaje'  => $this->request->getPost('mensaje'),
            'ip'       => $this->request->getIPAddress(),
        ]);

        return redirect()->to('/contacto/gracias');
    }

    public function gracias(): string
    {
        $data = [
            'title'       => 'Gracias por escribirnos · PsyRisk',
            'description' => 'Recibimos tu mensaje. Un asesor de PsyRisk se pondrá en contacto contigo en menos de 24 horas hábiles.',
            'activeNav'   => 'contacto',
        ];

        return view('pages/contacto-gracias', $data);
    }
}
