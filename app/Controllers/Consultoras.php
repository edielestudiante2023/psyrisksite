<?php

namespace App\Controllers;

class Consultoras extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'       => 'Para Psicólogos y Consultoras · PsyRisk',
            'description' => 'Programa para psicólogos consultores y firmas de consultoría que quieren ofrecer batería de riesgo psicosocial con tecnología profesional.',
            'activeNav'   => 'consultoras',
        ];
        return view('pages/consultoras/index', $data);
    }

    public function comoFunciona(): string
    {
        $data = [
            'title'       => 'Cómo funciona · Programa para Consultores · PsyRisk',
            'description' => 'Cómo se incorpora un psicólogo consultor al programa PsyRisk: alta, formación, primera aplicación y soporte continuo.',
            'activeNav'   => 'consultoras',
        ];
        return view('pages/consultoras/como-funciona', $data);
    }

    public function marcaPropia(): string
    {
        $data = [
            'title'       => 'Marca Propia · PsyRisk',
            'description' => 'Plataforma con tu marca: ofrece la batería con tu logo, dominio y firma profesional, sin construir tecnología desde cero.',
            'activeNav'   => 'consultoras',
        ];
        return view('pages/consultoras/marca-propia', $data);
    }

    public function precios(): string
    {
        $data = [
            'title'       => 'Precios para Consultores · PsyRisk',
            'description' => 'Tarifa mayorista por evaluación para psicólogos consultores y firmas de consultoría. Pago según volumen.',
            'activeNav'   => 'consultoras',
        ];
        return view('pages/consultoras/precios', $data);
    }
}
