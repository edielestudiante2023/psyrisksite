<?php

namespace App\Controllers;

class Nosotros extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'       => 'Nosotros · PsyRisk - Marca de Cycloid Talent en Colombia',
            'description' => 'PsyRisk es una marca de Cycloid Talent (Soacha, Cundinamarca). Equipo de psicólogos certificados especializados en riesgo psicosocial y SG-SST.',
            'keywords'    => 'PsyRisk, Cycloid Talent, psicólogos certificados Colombia, consultoría riesgo psicosocial',
            'activeNav'   => 'nosotros',
        ];

        return view('pages/nosotros', $data);
    }
}
