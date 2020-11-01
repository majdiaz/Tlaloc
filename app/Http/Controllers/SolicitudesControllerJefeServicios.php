<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesControllerJefeServicios extends Controller
{
    //metodo para pagina principal
    public function index(){
        return view('JefeServicios.solicitudes.Solicitudes'); 
    }

    //metodo para formulario
    public function create(){
        return view('JefeServicios.solicitudes.crearSolicitud');
    }

    //metodo para obtener algo de la BD
    public function showMS(){
        return view('JefeServicios.solicitudes.misSolicitudes');
    }
    
    public function showVS(){
        return view('JefeServicios.solicitudes.validarSolicitud');
    }
}
