@extends('layouts.plantilla')
@section('title','mis solicitudes')
<style>
    * { 
      margin:0;
      padding:0;
    }
    a:link, a:visited, a:hover, a:active {
      color:#000;
      font-size:16px;
    }
    /* body {
      background:#eee;
      font-family:verdana;
    } */
    h1 {
      color:#000;
      font-size:14px;
    }
    p {
      font-size:16px;
    }
    ul {
      list-style-type:none;
    }
    table {
     border-collapse: collapse;
     border: rgb(0, 0, 0) 2px solid;
    }
    td {
        border: rgb(0, 0, 0) 2px solid;
        height: 20%;
    }
    tr {
      text-align: center;
    }
    #cabecera {
      color:#F1A613;
      background-color:#F7EDEB;
      height:10px;
      padding:55px;
      width:890px;
      text-align:center;
    }
    #buscador {
      text-align: left;
      color:#F1A613;
      background-color:#F7EDEB;
      height:10px;
      padding:55px;
      width:890px;
    }
    #contenedor {
      margin:0 auto;
      width:900px;
    }
    #tabla {
      background-color:#999;
      float:left;
      height:380px;
      padding:55px;
      width:890px;
    }
    #pie { 
      background-color:#bbb;
      clear:both;
      color:#900;
      padding:10px;
      text-align:center;
    }
    
  </style>
@section('menu')
    @extends('layouts.navs.menuSecretaria2')
@endsection

@section('content')
    <h1>mis solicitudes "SECRETARIA GENERAL"</h1>
    <div id="contenedor">
        <div id="cabecera">
          <p>Mis solicitudes.</p>
        </div>  
        <div id="buscador" >
          <p>Buscador</p>
          <input>
          <button>buscar</button>
          
        </div>
  
        <div id="tabla">
          <table class="egt"> 
            <tr> 
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