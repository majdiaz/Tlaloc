<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidaControllerJefeServicios extends Controller
{
    public function __invoke(){
        return view('JefeServicios.bienvenida');
    }
}
