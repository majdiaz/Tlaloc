@extends('layouts.plantilla')
@section('title','Solicitudes')

@section('menu')
    @extends('layouts.navs.menuTecnico')
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
         <td width = 100>Dep. al que se dirige</td>
         <td width = 120>Descripcion</td>
         <td width = 80>Estatus</td>
         <td width = 80>Fecha</td>
         <td width = 80 >Atender</td>
        </tr>
        <tr> 
          <td width = 80 > .</td>
          <td width = 300>. </td>
          <td width = 500>. </td>
          <td width = 100>. </td>
          <td width = 100>. </td>
          <td width = 80>. </td>
          <td width = 80 >. </td>
         </tr>
      </table>
    </div>
   
    <div id="pie">
      <p>Párrafo en el pie de la página.</p>
    </div>
  </div>
@endsection
