@extends('layouts.plantilla')
@section('title','Mis Solicitudes')

@section('menu')
    @extends('layouts.navs.menuSecretaria1')
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
             <td width = 300 >Dep. al que se dirige</td>
             <td width = 500>Descripcion</td>
             <td width = 200>Fecha</td>
             <td width = 200>Tecnico</td>
             <td width = 300>Estatus</td>
            </tr>
            <tr> 
              <td width = 300 > .</td>
              <td width = 500>. </td>
              <td width = 200>. </td>
              <td width = 200>. </td>
              <td width = 300>.</td>
             </tr>
          </table>
        </div>
       
        <div id="pie">
          <p>Párrafo en el pie de la página.</p>
        </div>
      </div>
@endsection