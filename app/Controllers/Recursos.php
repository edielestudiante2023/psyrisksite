<?php

namespace App\Controllers;

class Recursos extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'       => 'Recursos sobre Riesgo Psicosocial en Colombia · PsyRisk',
            'description' => 'Guías sobre Resolución 2764 de 2022, batería psicosocial, SG-SST, Ley 1581 de habeas data y riesgo psicosocial, verificadas por psicólogos certificados.',
            'keywords'    => 'guías riesgo psicosocial, resolución 2764, normativa psicosocial colombia, recursos SG-SST',
            'activeNav'   => 'recursos',
        ];
        return view('pages/recursos', $data);
    }
}
