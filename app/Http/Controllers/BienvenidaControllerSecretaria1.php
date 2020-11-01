<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidaControllerSecretaria1 extends Controller
{
    public function __invoke(){
        return view('Secretaria1.bienvenidaS1');
    }
}
