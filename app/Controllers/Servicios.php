<?php

namespace App\Controllers;

class Servicios extends BaseController
{
    public function bateriaRiesgo(): string
    {
        $data = [
            'title'       => 'Batería de Riesgo Psicosocial · PsyRisk',
            'description' => 'Aplicación digital de la Batería de Riesgo Psicosocial conforme Resolución 2764 de 2022. Forma A y B oficiales, tabulación automática y reportes ejecutivos.',
            'activeNav'   => 'servicios',
        ];

        return view('pages/servicios/bateria-riesgo', $data);
    }

    public function climaOrganizacional(): string
    {
        $data = [
            'title'       => 'Clima Organizacional · PsyRisk',
            'description' => 'Diagnóstico de clima organizacional con segmentación por área, cargo y antigüedad. Indicadores accionables, capacitaciones de bienestar y dashboard interactivo.',
            'activeNav'   => 'servicios',
        ];

        return view('pages/servicios/clima-organizacional', $data);
    }

    public function vigilanciaEpidemiologica(): string
    {
        $data = [
            'title'       => 'Vigilancia Epidemiológica · PsyRisk',
            'description' => 'Sistema de Vigilancia Epidemiológica (SVE) del riesgo psicosocial: monitoreo continuo, alertas tempranas, indicadores trazables y cumplimiento de la Resolución 2764.',
            'activeNav'   => 'servicios',
        ];

        return view('pages/servicios/vigilancia-epidemiologica', $data);
    }

    public function planesIntervencion(): string
    {
        $data = [
            'title'       => 'Planes de Intervención · PsyRisk',
            'description' => 'Planes de intervención psicosocial priorizados por dominio, con responsables, plazos, evidencia y trazabilidad. Convierte hallazgos en acción real.',
            'activeNav'   => 'servicios',
        ];

        return view('pages/servicios/planes-intervencion', $data);
    }

    public function capacitaciones(): string
    {
        $data = [
            'title'       => 'Capacitaciones · PsyRisk',
            'description' => 'Capacitaciones en liderazgo saludable, gestión del estrés, prevención del agotamiento laboral y bienestar. Formato presencial o virtual con medición de impacto.',
            'activeNav'   => 'servicios',
        ];

        return view('pages/servicios/capacitaciones', $data);
    }
}
