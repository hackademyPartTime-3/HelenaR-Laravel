@extends('Layouts.layout')
@section('title', 'Listado de cervecerías')<!--Rellenamos los campos con section y yield es para definirlos-->
@section('pagetitle', 'Cervecería')

@section('content')
<div class="row row-cols-1 row-cols-md-3 row-cols-xld-2 g-4">
  @foreach ($breweries as $brewery )
  <!--en las directivas no existen los echos, tenemos que pintarlo con las llaves {}-->
{{--  <p>{{$brewery[0]}} - {{$brewery[1]}} - {{$brewery[2]}}</p> --}}
  <div class="col d-flex align-items-stretch">
   <div class="card">
     <div class="card-body d-flex row">
       <h5 class="card-title text-center">{{$brewery[1]}}</h5>
       <p class="card-text">{{$brewery[2]}}</p>
      <p class="text-center mt-auto"><a class="btn btn-primary" href="/brewery/{{$brewery[0]}}">Ver màs</a></p>
       
     </div>
   </div>
 </div>  

 
{{--  <x-card title="{{$brewery[1]}}" body="{{$brewery[2]}}" link="/brewery/{{$brewery[0]}}" text >
   <x-slot:text>
      <p class="bg-red">Disclaimer / <b>Exencion de responsabilidad</b></p>
    </x-slot:text>
 </x-card>  --}} 
  @endforeach
</div>
@endsection


  
  
      