<?php

namespace App\Controllers;

class Precios extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'       => 'Precios · PsyRisk',
            'description' => 'Tarifas claras de PsyRisk: pago por evaluación, sin suscripciones obligatorias. Batería, Clima Organizacional y Servicio Integrado.',
            'activeNav'   => 'precios',
        ];

        return view('pages/precios', $data);
    }
}
