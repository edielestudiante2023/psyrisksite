<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'       => 'Batería de Riesgo Psicosocial Colombia · Resolución 2764 · PsyRisk',
            'description' => 'Aplicación digital de la batería de riesgo psicosocial conforme Resolución 2764 de 2022. Tabulación automática, vigilancia epidemiológica y plan de intervención.',
            'keywords'    => 'batería de riesgo psicosocial, resolución 2764, evaluación psicosocial, riesgo psicosocial Colombia, SG-SST',
            'activeNav'   => 'home',
            'ogImage'     => base_url('assets/img/og/home.png'),
            'ogImageAlt'  => 'PsyRisk · Plataforma de riesgo psicosocial conforme a Resolución 2764',
        ];

        return view('pages/home', $data);
    }
}
