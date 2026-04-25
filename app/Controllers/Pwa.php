<?php

namespace App\Controllers;

class Pwa extends BaseController
{
    public function offline(): string
    {
        $data = [
            'title'       => 'Sin conexión - PsyRisk',
            'description' => 'No hay conexión a internet. Reintenta cuando estés en línea.',
            'activeNav'   => '',
        ];

        return view('pages/offline', $data);
    }
}
