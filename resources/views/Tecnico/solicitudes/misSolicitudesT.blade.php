@extends('layouts.plantilla')
@section('title','Mis asignaciones')
@section('menu')
    @extends('layouts.navs.menuTecnico')    
@endsection

@section('content')
        <div id="contenedor">
          <div id="cabecera">
            <h1>Mis Asignaciones.<h1>
          </div>  
          <div id="buscador" >            
            <input>
            <button>buscar</button>            
          </div>
    
          <div id="tabla">
            <table class="egt"> 
              <tr class="titulos"> 
               <td width = 80 >Folio</td>
               <td width = 200>Departamento</td>
               <td width = 300>Descripción</td>
               <td width = 100>Fecha de solicitud</td>
               <td width = 100>Fecha de asignación</td>
               <td width = 80>Estatus</td>
              </tr>
              <tr> 
                <td width = 80 > .</td>
                <td width = 300>. </td>
                <td width = 500>. </td>
                <td width = 100>. </td>
                <td width = 100>. </td>
                <td width = 80>. </td>
               </tr>
            </table>
          </div>
         
          <div id="pie">
            <p>Párrafo en el pie de la página.</p>
          </div>
        </div>

@endsection