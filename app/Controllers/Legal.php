<?php

namespace App\Controllers;

class Legal extends BaseController
{
    public function privacidad(): string
    {
        return view('pages/legal/privacidad', [
            'title'       => 'Política de Privacidad · PsyRisk',
            'description' => 'Política de tratamiento de datos personales de PsyRisk conforme a la Ley 1581 de 2012 de Colombia. Derechos del titular y procedimiento para ejercerlos.',
            'activeNav'   => '',
        ]);
    }

    public function terminos(): string
    {
        return view('pages/legal/terminos', [
            'title'       => 'Términos y Condiciones · PsyRisk',
            'description' => 'Términos y condiciones de uso del sitio web PsyRisk de Cycloid Talent. Naturaleza, propiedad intelectual, servicios profesionales y limitación de responsabilidad.',
            'activeNav'   => '',
        ]);
    }
}
