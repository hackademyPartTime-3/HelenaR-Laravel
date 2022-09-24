@extends('Layouts.layout')
@section('title', 'Mi cervecería')<!--Rellenamos los campos con section y yield es para definirlos-->
@section('pagetitle', 'Cervecería')

@section('content')
<div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center" style="max-width: 50rem">
   <div class="col">
   <div class="card">
     <div class="card-body d-flex row">
       <h5 class="card-title">{{$brewery[1]}}</h5>
       <p class="card-text">{{$brewery[2]}}</p> 
     </div>
   </div>
 </div>    
  
</div>

{{-- <x-card title="{{$brewery[1]}}" body="{{$brewery[2]}}" link="/brewery/{{$brewery[0]}}" text /> --}}
<br>
<x-message type="success" message="Click para volver al listado" />
<br>
<p class="text-center"><a class="btn btn-warning href="/breweries">Volver</a></p>

@endsection



   
    
   