<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesControllerSecretaria2 extends Controller
{   

//metodo para formulario
public function create(){
    return view('Secretaria2.solicitudes.crearSolicitudS2');
}

//metodo para obtener algo de la BD
public function show(){
    return view('Secretaria2.solicitudes.misSolicitudesS2');
}
}
