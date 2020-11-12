@extends('layouts.plantilla')
@section('title','Mis Solicitudes')

@section('menu')
    @extends('layouts.navs.menuJefeS')
@endsection
@section('content')    
    <div id="contenedor">
        <div id="cabecera">
          <H1>Mis solicitudes.</H1>          
        </div>  
        <div id="buscador" >          
          <input>
          <button>buscar</button>
          
        </div>
  
        <div id="tabla">
          <table class="egt"> 
            <tr class="titulos"> 
             <td width = 100 >Folio</td>
             <td width = 200>Dep. al que se dirige</td>
             <td width = 300>Descripcion</td>
             <td width = 180>FechaSolicitud</td>
             <td width = 200 >FechaRealizacion</td>
              <td width = 100>Técnico</td>
              <td width = 100>Estatus</td>
              <td width = 100>Verificar</td>
            </tr>
            <tr> 
              <td width = 100 > .</td>
              <td width = 200>. </td>
              <td width = 300>. </td>
              <td width = 180>. </td>
              <td width = 200 > .</td>
              <td width = 100>. </td>
              <td width = 100>. </td>
              <td width = 100> <button>Verificar</button> </td>
             </tr>
          </table>
        </div>
       
        <div id="pie">
          <p>Párrafo en el pie de la página.</p>
        </div>
      </div>
@endsection
