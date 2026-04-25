<?php

namespace App\Controllers;

class Precios extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'       => 'Precios Batería de Riesgo Psicosocial · Tarifas Empresas Colombia · PsyRisk',
            'description' => 'Tarifas de batería de riesgo psicosocial desde $1.100.000 COP. Pago por evaluación, sin suscripción. Empresas de 1 a 50 trabajadores y volumen mayor.',
            'keywords'    => 'precio batería riesgo psicosocial, tarifa evaluación psicosocial, costo batería psicosocial colombia',
            'activeNav'   => 'precios',
        ];

        return view('pages/precios', $data);
    }
}
