<?php

namespace App\Controllers;

class Normativa extends BaseController
{
    public function resolucion2764(): string
    {
        return view('pages/normativa/resolucion-2764', [
            'title'       => 'Resolución 2764 de 2022 · PsyRisk',
            'description' => 'Qué dice la Resolución 2764 de 2022 sobre la batería de riesgo psicosocial y cómo cumplirla.',
            'activeNav'   => 'recursos',
        ]);
    }

    public function bateriaPsicosocial(): string
    {
        return view('pages/normativa/bateria-psicosocial', [
            'title'       => 'Batería Psicosocial Colombia · PsyRisk',
            'description' => 'Qué es la batería psicosocial colombiana, sus formas A y B, dimensiones y cómo se aplica.',
            'activeNav'   => 'recursos',
        ]);
    }

    public function riesgoPsicosocial(): string
    {
        return view('pages/normativa/riesgo-psicosocial', [
            'title'       => 'Riesgo Psicosocial · PsyRisk',
            'description' => 'Qué es el riesgo psicosocial, factores intra y extralaborales y por qué evaluarlo en tu empresa.',
            'activeNav'   => 'recursos',
        ]);
    }

    public function sgSst(): string
    {
        return view('pages/normativa/sg-sst', [
            'title'       => 'SG-SST Colombia · PsyRisk',
            'description' => 'Sistema de Gestión de Seguridad y Salud en el Trabajo en Colombia: marco, estándares mínimos y conexión con riesgo psicosocial.',
            'activeNav'   => 'recursos',
        ]);
    }

    public function ley1581(): string
    {
        return view('pages/normativa/ley-1581', [
            'title'       => 'Ley 1581 de 2012 · PsyRisk',
            'description' => 'Ley de Protección de Datos Personales en Colombia y cómo PsyRisk garantiza el habeas data en evaluaciones psicosociales.',
            'activeNav'   => 'recursos',
        ]);
    }
}
