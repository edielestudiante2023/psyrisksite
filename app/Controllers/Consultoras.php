<?php

namespace App\Controllers;

class Consultoras extends BaseController
{
    public function index(): string
    {
        return view('pages/consultoras/index', [
            'title'       => 'Plataforma para Psicólogos Consultores · PsyRisk',
            'description' => 'Programa para psicólogos consultores y firmas en Colombia. Ofrece batería de riesgo psicosocial con tecnología profesional, marca propia disponible y tarifa mayorista.',
            'keywords'    => 'plataforma consultores psicólogos, software batería psicosocial, marca blanca psicología',
            'activeNav'   => 'consultoras',
        ]);
    }

    public function comoFunciona(): string
    {
        return view('pages/consultoras/como-funciona', [
            'title'       => 'Cómo Funciona el Programa de Consultores · PsyRisk',
            'description' => 'Cinco pasos desde la postulación hasta tu primer cliente cerrado: postulación, entrevista, vinculación, capacitación y primera aplicación con acompañamiento.',
            'keywords'    => 'programa consultores PsyRisk, vincularse PsyRisk, consultor psicología Colombia',
            'activeNav'   => 'consultoras',
        ]);
    }

    public function marcaPropia(): string
    {
        return view('pages/consultoras/marca-propia', [
            'title'       => 'Plataforma con Marca Propia para Consultores · PsyRisk',
            'description' => 'Plataforma de batería de riesgo psicosocial con tu logo, dominio y firma profesional. Tu cliente nunca ve la marca PsyRisk. Configuración en 2 a 3 semanas.',
            'keywords'    => 'plataforma marca propia, software marca blanca psicología, white label batería psicosocial',
            'activeNav'   => 'consultoras',
        ]);
    }

    public function precios(): string
    {
        return view('pages/consultoras/precios', [
            'title'       => 'Precios para Consultores · Tarifa Mayorista · PsyRisk',
            'description' => 'Tarifa mayorista por aplicación de batería para psicólogos consultores. Volumen anual con descuentos progresivos. Margen 100% tuyo sobre lo que cobres a tu cliente.',
            'keywords'    => 'tarifa consultores, precio mayorista batería, costo consultor psicólogo',
            'activeNav'   => 'consultoras',
        ]);
    }
}
