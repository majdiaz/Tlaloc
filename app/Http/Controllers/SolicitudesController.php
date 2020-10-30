<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    //metodo para pagina principal
    public function index(){
        return view('solicitudes.solicitudes'); 
    }

    //metodo para formulario
    public function create(){
        return view('solicitudes.crearSolicitud');
    }

    //metodo para obtener algo de la BD
    /*public function show($curso){
        return view('cursos.show');
    }*/
}
