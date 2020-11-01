<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesControllerSecretaria1 extends Controller
{
    //metodo para pagina principal
    public function index(){
        return view('Secretaria1.solicitudes.solicitudesS1'); 
    }

    //metodo para formulario
    public function create(){
        return view('Secretaria1.solicitudes.crearSolicitudS1');
    }

    //metodo para obtener algo de la BD
    public function show(){
        return view('Secretaria1.solicitudes.misSolicitudesS1');
    }
        
}
