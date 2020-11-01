<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesControllerTecnico extends Controller
{
     //metodo para pagina principal
     public function index(){
        return view('Tecnico.solicitudes.misSolicitudesT'); 
    }

    //metodo para formulario
    public function create(){
        return view('Tecnico.solicitudes.solicitarInsumo');
    }

    //metodo para obtener algo de la BD
    public function show(){
        return view('Tecnico.solicitudes.solicitudesT');
    }
}
