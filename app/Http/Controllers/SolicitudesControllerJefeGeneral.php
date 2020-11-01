<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesControllerJefeGeneral extends Controller
{   
    //metodo para formulario
    public function create(){
        return view('JefeGeneral.solicitudes.crearSolicitud');
    }
    
    public function show(){
        return view('JefeGeneral.solicitudes.Solicitudes'); 
    }    
}
