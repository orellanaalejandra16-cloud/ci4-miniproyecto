<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $renderer = service('renderer');

        $datos = [
                'titulo' => 'Proyecto con CodeIgniter 4',
                'mensaje' => 'Hola¡ Vista renderizada con View renderer.',
           ];
            return $renderer ->setData($datos)->render('home');
    }
}
