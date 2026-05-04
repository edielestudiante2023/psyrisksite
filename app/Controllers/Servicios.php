<?php

namespace App\Controllers;

class Servicios extends BaseController
{
    public function bateriaRiesgo(): string
    {
        return view('pages/servicios/bateria-riesgo', [
            'title'       => 'Batería de Riesgo Psicosocial · Forma A y B Resolución 2764 · PsyRisk',
            'description' => 'Aplica la Batería de Riesgo Psicosocial Forma A y B 100% digital. Tabulación automática, informe oficial, SVE y plan de intervención conforme Resolución 2764.',
            'keywords'    => 'batería de riesgo psicosocial, forma A forma B, resolución 2764, batería psicosocial colombia, evaluación riesgo psicosocial',
            'activeNav'   => 'servicios',
        ]);
    }

    public function climaOrganizacional(): string
    {
        return view('pages/servicios/clima-organizacional', [
            'title'       => 'Clima Organizacional · El complemento estratégico de la Batería Psicosocial · PsyRisk',
            'description' => 'Diagnóstico de clima organizacional con 10 dimensiones, 40 ítems en escala Likert e Índice Global de Clima 0–100. Lo que la Batería no puede ver: identificación, propósito, justicia, talento y cultura.',
            'keywords'    => 'clima organizacional, encuesta de clima laboral, diagnóstico clima empresa, clima laboral colombia, complemento batería psicosocial',
            'activeNav'   => 'servicios',
        ]);
    }

    public function fichaTecnicaClima(): string
    {
        return view('pages/servicios/ficha-tecnica-clima', [
            'title'       => 'Ficha Técnica · Clima Organizacional · PsyRisk',
            'description' => 'Ficha técnica del instrumento de Clima Organizacional: marco teórico, 10 dimensiones, 40 ítems, escala Likert 5 puntos, Índice Global de Clima 0–100 y baremos.',
            'keywords'    => 'ficha técnica clima organizacional, dimensiones clima laboral, baremos clima, índice global de clima',
            'activeNav'   => 'servicios',
        ]);
    }

    public function vigilanciaEpidemiologica(): string
    {
        return view('pages/servicios/vigilancia-epidemiologica', [
            'title'       => 'Vigilancia Epidemiológica Psicosocial · SVE · PsyRisk',
            'description' => 'Sistema de Vigilancia Epidemiológica del riesgo psicosocial: monitoreo continuo, alertas tempranas, indicadores trazables y cumplimiento Resolución 2764.',
            'keywords'    => 'vigilancia epidemiológica, SVE psicosocial, sistema vigilancia riesgo psicosocial, monitoreo psicosocial',
            'activeNav'   => 'servicios',
        ]);
    }

    public function planesIntervencion(): string
    {
        return view('pages/servicios/planes-intervencion', [
            'title'       => 'Planes de Intervención Psicosocial · Acciones Trazables · PsyRisk',
            'description' => 'Planes de intervención psicosocial priorizados por dominio con responsables, plazos, evidencia documental y verificación. Convertimos hallazgos en acción.',
            'keywords'    => 'plan de intervención psicosocial, intervención riesgo psicosocial, plan acción SG-SST',
            'activeNav'   => 'servicios',
        ]);
    }

    public function capacitaciones(): string
    {
        return view('pages/servicios/capacitaciones', [
            'title'       => 'Capacitaciones en Bienestar Laboral y Liderazgo Saludable · PsyRisk',
            'description' => 'Capacitaciones en liderazgo saludable, manejo del estrés, prevención del agotamiento laboral, comunicación asertiva y bienestar emocional con medición de impacto.',
            'keywords'    => 'capacitaciones bienestar laboral, capacitación liderazgo saludable, manejo del estrés, prevención burnout',
            'activeNav'   => 'servicios',
        ]);
    }
}
