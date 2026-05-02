<?php

namespace App\Controllers;

class DigitacionInteligente extends BaseController
{
    public function index()
    {
        return view('pages/digitacion-inteligente/index', [
            'title'           => 'Digitación inteligente: foto + IA para baterías en papel | PsyRisk',
            'metaDescription' => 'Aplicas la batería en papel cuando toca y desde tu celular fotografías cada cartilla. Nuestra IA reconoce las marcas y elimina horas de digitación manual. Para empresas y consultoras.',
            'activeNav'       => 'digitacion',
        ]);
    }
}
