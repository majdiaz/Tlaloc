@extends('layouts.plantilla')
@section('title','Bienvenida')
<style>
    * { 
      margin:0;
      padding:0;
    }
    a:link, a:visited, a:hover, a:active {
      color:#000;
      font-size:16px;
    }
    body {
      background:#eee;
      font-family:verdana;
    }
    h1 {
      color:#c0c;
      font-size:24px;
    }
    p {
      font-size:16px;
    }
    ul {
      list-style-type:none;
    }
    #cabecera {
      color:#F1A613;
      aling:"center";
      background-color:#F7EDEB;
      padding:55px;
    }
    #contenedor {
      margin:0 auto;
      width:800px;
    }
    #contenido {
      background-color:#ddd;
      float:left;
      height:500px;
      padding:10px;
      width:370px;
    }
    #menu {
      background-color:#999;
      float:left;
      height:480px;
      padding:20px;
      width:370px;
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
    @extends('layouts.navs.menuJefeS')
@endsection

@section('content')
    <h1>Bienvenido Jefe de servicios</h1>
    <h1>Bienvenida TECNICO</h1>
    <div id="contenedor">
        <div id="cabecera">
          <p>Bienvenidos.</p>
        </div>
        <div id="menu">
          <ul>
            <p><h1>Un texto generico</h1>.</p>
   
          </ul>
        </div>
        <div id="contenido">
       
          <img src="https://lh3.googleusercontent.com/proxy/ECPva-dbzXrs-OTJcQkeUhq49jeBrNxxXc9unpu44LwS9TblZQHqGrStSX5nqKKrr1-kzJWLQax_Hzrqj7ER5xtJogMlvrNYsRziarY_2Q">
        </div>
        <div id="pie">
          <p>Párrafo en el pie de la página.</p>
        </div>
      </div>
@endsection
