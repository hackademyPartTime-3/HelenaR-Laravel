@extends('Layouts.layout')
@section('title', 'Portal de Cervecerías')<!--Rellenamos los campos con section y yield es para definirlos-->
@section('pagetitle', 'Portal Cervecería')

@section('content')
<div id="divQuote" class="w-100 p-2 text-center"><img src="{{('/img/beerload2.gif')}}" height="100"></div>
<br>
<div class="inicio container-md mt-5">
<p>
    La Asociación Española de Cerveceros Artesanos Independientes nace de la necesidad de aunar a los integrantes del sector de la cerveza artesanal en España, que ha experimentado un notable crecimiento en los últimos años.
El nacimiento del colectivo hay que situarlo en el 7 de junio de 2014, con la intención de definir, promocionar y defender al sector de la cerveza artesana y de sus asociados.
El compromiso común de los cerveceros artesanales por la calidad de la cerveza, la sostenibilidad y el desarrollo de la economía y cultura de proximidad son los pilares de esta asociación.
</p>
</div>

<script>
    setTimeout(() => {
            loadQuote();
        },3000);
    function loadQuote(){
         let quote = 'Frase de prueba';
         let endPoint = 'https://api.chucknorris.io/jokes/random';

         let xhr = new XMLHttpRequest ();
         xhr.addEventListener ("readystatechange", function (){
            if (this.readyState === 4){
                let resp = JSON.parse(this.responseText);
           if ( resp['value']) {
                quote=resp['value'];
                document.getElementById  ('divQuote').innerHTML = '<p>' + quote + '</p>';
           }
            }
           
         });
        xhr.open('GET', endPoint);
        xhr.send ();
    }
</script>
@endsection
    
 