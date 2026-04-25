<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'       => 'PsyRisk - Batería de Riesgo Psicosocial',
            'description' => 'Evalúa, monitorea y gestiona el riesgo psicosocial de tu empresa con tecnología, automatización y cumplimiento de la Resolución 2764 de 2022.',
            'activeNav'   => 'home',
        ];

        return view('pages/home', $data);
    }
}
