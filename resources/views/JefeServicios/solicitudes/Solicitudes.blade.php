@extends('layouts.plantilla')
@section('title','Solicitudes')
@section('menu')
    @extends('layouts.navs.menuJefeS')
@endsection
@section('content')
<div id="contenedor">
    <div id="cabecera">
      <h1>Lista de solicitudes<h1>
    </div>  
    <div id="buscador" >            
      <input>
      <button>buscar</button>            
    </div>

    <div id="tabla">
      <table class="egt"> 
        <tr class="titulos"> 
         <td width = 100 >Solicitante</td>
         <td width = 100>Dep. solicita</td>
         <td width = 130>Dep. al que se dirige</td>
         <td width = 170>Descripcion</td>
         <td width = 100>Técnico</td>
         <td width = 90>Estatus</td>
         <td width = 80>Fecha</td>
         <td width = 80 >Atender</td>
        </tr>
        <tr> 
          <td width = 100 > .</td>
          <td width = 100>. </td>
          <td width = 130>. </td>
          <td width = 170>. </td>
          <td width = 100>. </td>
          <td width = 90>. </td>
          <td width = 80 >. </td>
          <td width = 80>.</td>
         </tr>
      </table>
    </div>
   
    <div id="pie">
      <p>Párrafo en el pie de la página.</p>
    </div>
  </div>
@endsection
