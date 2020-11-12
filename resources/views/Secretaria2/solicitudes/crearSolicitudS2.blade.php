@extends('layouts.plantilla')
@section('title','crear solicitudes')

@section('menu')
    @extends('layouts.navs.menuSecretaria2')
@endsection

@section('content')
<div id="contenedor">
    <div id="cabecera">
      <h1>Crear solicitud<h1>
          <br>
    </div>  

    <div>
        <label>Folio</label>  
        <input>
        <br>
        <label>Área solicitante:</label>  
        <input>
        <br>
        <label>Nombre solicitante:</label>  
        <input>
        <br>
        <label>Fecha elaboración:</label>  
        <input>
        <br>
        <label>Departamento:</label>  
        <input>
        <br>
        <label>Descripción:</label>  
        <input>
        <button>Guardar</button>
    </div>
   
    <div id="pie">
      <p>Párrafo en el pie de la página.</p>
    </div>
  </div>
@endsection