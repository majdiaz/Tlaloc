<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidaControllerSecretaria2 extends Controller
{
    public function __invoke(){
        return view('Secretaria2.bienvenidaS2');
    }
}
