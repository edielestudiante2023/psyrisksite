<?php

namespace App\Controllers;

class Nosotros extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'       => 'Nosotros · PsyRisk',
            'description' => 'PsyRisk es una marca de Cycloid Talent. Conoce nuestra misión, equipo y por qué nace la plataforma.',
            'activeNav'   => 'nosotros',
        ];

        return view('pages/nosotros', $data);
    }
}
