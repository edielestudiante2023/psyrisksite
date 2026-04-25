<?php

namespace App\Controllers;

class Normativa extends BaseController
{
    public function resolucion2764(): string
    {
        return view('pages/normativa/resolucion-2764', [
            'title'       => 'Resolución 2764 de 2022 · Guía Explicada · PsyRisk',
            'description' => 'Resolución 2764 de 2022 del Ministerio del Trabajo: qué cambió frente a la 2646, periodicidad, sanciones y cómo cumplirla en tu empresa colombiana.',
            'keywords'    => 'resolución 2764 de 2022, resolución 2764 batería psicosocial, mintrabajo 2764, normativa psicosocial Colombia',
            'activeNav'   => 'recursos',
        ]);
    }

    public function bateriaPsicosocial(): string
    {
        return view('pages/normativa/bateria-psicosocial', [
            'title'       => 'Batería Psicosocial Colombia · Forma A y B · PsyRisk',
            'description' => 'Qué es la batería psicosocial colombiana, diferencias entre Forma A y B, dimensiones intra y extralaborales, niveles de riesgo y entregables del informe.',
            'keywords'    => 'batería psicosocial Colombia, forma A forma B, dimensiones psicosocial, niveles de riesgo psicosocial',
            'activeNav'   => 'recursos',
        ]);
    }

    public function riesgoPsicosocial(): string
    {
        return view('pages/normativa/riesgo-psicosocial', [
            'title'       => 'Riesgo Psicosocial · Qué es y Por Qué Importa · PsyRisk',
            'description' => 'Riesgo psicosocial: definición, factores intra y extralaborales, consecuencias para la empresa (rotación, ausentismo, demandas) y cómo se gestiona profesionalmente.',
            'keywords'    => 'riesgo psicosocial, factores intralaborales, factores extralaborales, gestión riesgo psicosocial',
            'activeNav'   => 'recursos',
        ]);
    }

    public function sgSst(): string
    {
        return view('pages/normativa/sg-sst', [
            'title'       => 'SG-SST Colombia · Sistema de Gestión SST · PsyRisk',
            'description' => 'SG-SST en Colombia: marco legal del Decreto 1072, estándares mínimos según Resolución 0312, evidencia documental y conexión con la batería de riesgo psicosocial.',
            'keywords'    => 'SG-SST Colombia, decreto 1072, resolución 0312, estándares mínimos SST',
            'activeNav'   => 'recursos',
        ]);
    }

    public function ley1581(): string
    {
        return view('pages/normativa/ley-1581', [
            'title'       => 'Ley 1581 de 2012 · Habeas Data en Evaluaciones · PsyRisk',
            'description' => 'Ley 1581 de 2012 colombiana: protección de datos personales, datos sensibles, derechos del titular y aplicación específica en la batería de riesgo psicosocial.',
            'keywords'    => 'ley 1581 de 2012, habeas data Colombia, protección datos personales, datos sensibles psicosocial',
            'activeNav'   => 'recursos',
        ]);
    }
}
