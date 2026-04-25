<?php

namespace App\Controllers;

class Recursos extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'       => 'Recursos y normativa · PsyRisk',
            'description' => 'Centro de recursos PsyRisk: guías sobre la Resolución 2764, batería psicosocial, SG-SST, Ley 1581 y más.',
            'activeNav'   => 'recursos',
        ];
        return view('pages/recursos', $data);
    }
}
