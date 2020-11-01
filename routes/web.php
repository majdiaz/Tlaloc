<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienvenidaControllerJefeServicios;
use App\Http\Controllers\SolicitudesControllerJefeServicios;

use App\Http\Controllers\BienvenidaControllerJefeGeneral;
use App\Http\Controllers\SolicitudesControllerJefeGeneral;

use App\Http\Controllers\BienvenidaControllerSecretaria1;
use App\Http\Controllers\SolicitudesControllerSecretaria1;

use App\Http\Controllers\BienvenidaControllerSecretaria2;
use App\Http\Controllers\SolicitudesControllerSecretaria2;

use App\Http\Controllers\BienvenidaControllerTecnico;
use App\Http\Controllers\SolicitudesControllerTecnico;

 //Rutas para el jefe de departamento de servicios
Route::get('bienvenida',BienvenidaControllerJefeServicios::class)->name('home');
Route::get('solicitudes', [SolicitudesControllerJefeServicios::class, 'index']);
Route::get('misSolicitudes', [SolicitudesControllerJefeServicios::class, 'showMS']);
Route::get('crearSolicitud',[SolicitudesControllerJefeServicios::class, 'create']);
Route::get('validarSolicitud', [SolicitudesControllerJefeServicios::class, 'showVS']);

//Rutas para jefe general
Route::get('bienvenidaJG',BienvenidaControllerJefeGeneral::class);
Route::get('solicitudesJG',[SolicitudesControllerJefeGeneral::class, 'show']);
Route::get('crearSolicitudJG',[SolicitudesControllerJefeGeneral::class, 'create']);

//Rutas para Secretaria con Privilegios
Route::get('bienvenidaS1',BienvenidaControllerSecretaria1::class);
Route::get('misSolicitudesS1',[SolicitudesControllerSecretaria1::class,'show']);
Route::get('solicitudesS1',[SolicitudesControllerSecretaria1::class,'index']);
Route::get('crearSolicitudS1',[SolicitudesControllerSecretaria1::class, 'create']);

//Rutas para secretaria general
Route::get('bienvenidaS2',BienvenidaControllerSecretaria2::class);
Route::get('misSolicitudesS2',[SolicitudesControllerSecretaria2::class,'show']);
Route::get('crearSolicitudS2',[SolicitudesControllerSecretaria2::class, 'create']);

//Rutas para Técnico
Route::get('bienvenidaT',BienvenidaControllerTecnico::class);
Route::get('misSolicitudesT',[SolicitudesControllerTecnico::class,'index']);
Route::get('solicitarInsumo',[SolicitudesControllerTecnico::class, 'create']);
Route::get('solicitudesT',[SolicitudesControllerTecnico::class,'show']);