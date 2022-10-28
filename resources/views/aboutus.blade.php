<!--pido que aboutus extiende del layout,luego indicamos que hay varios campos llamados secciones, que nos indique... el texto que querramos, tipo el title, o pagetitle, o content, que ya estan definidos en nuestro layout, luego se compila todo y nos devuelve esta informacion en la web.php con el return view definido previamente, basicamente esta interpretando todo lo que contiene la pagina y rellenandola con la info dado en el layout. De esta forma no repetimos nuestro codigo-->
@extends('Layouts.layout')

@section('title','Quienes somos')

@section('pagetitle', 'Quienes somos')

@section('content')
<div class="inicio container-md mt-5">
    <p>
        La Asociación Española de Cerveceros Artesanos Independientes nace de la necesidad de aunar a los integrantes del sector de la cerveza artesanal en España, que ha experimentado un notable crecimiento en los últimos años.
    El nacimiento del colectivo hay que situarlo en el 7 de junio de 2014, con la intención de definir, promocionar y defender al sector de la cerveza artesana y de sus asociados.
    El compromiso común de los cerveceros artesanales por la calidad de la cerveza, la sostenibilidad y el desarrollo de la economía y cultura de proximidad son los pilares de esta asociación.
    </p>
    </div>
@endsection

@section('pagetitle', 'Quienes somos')

   
    
    

