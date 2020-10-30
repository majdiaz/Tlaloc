<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienvenidaController;
use App\Http\Controllers\SolicitudesController;


Route::get('/',BienvenidaController::class)->name('home');

Route::get('solicitudes', [SolicitudesController::class, 'index']);

Route::get('misSolicitudes', function(){
    return view("solicitudes.misSolicitudes");
});

Route::get('crearSolicitud',[SolicitudesController::class, 'create']);

Route::get('validarSolicitud', function(){
    return view("solicitudes.validarSolicitud");
});