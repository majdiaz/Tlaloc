<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidaControllerTecnico extends Controller
{
    public function __invoke(){
        return view('Tecnico.bienvenidaT');
    }
}
