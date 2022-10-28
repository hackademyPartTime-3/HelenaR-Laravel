@extends('Layouts.layout')
@section('title', 'Mi cervecería')<!--Rellenamos los campos con section y yield es para definirlos-->
@section('pagetitle', 'Cervecería')

@section('content')
<br>
 
 <x-card title="{{$brewery->name}}" 
  body="{{$brewery->description}}" 
  img="{{$brewery->img}}" 
  place="{{$brewery->place}}">
</x-card> 


<br>
<!-- <x-message type="success" message="Click para volver al listado" />-->

<div class="d-flex justify-content-around">

  <a class="btn btn-success" href="{{ url ('/editbrewery/') . '/' .$brewery->id }}">Modificar</a>

  <form method="POST" action="{{url('/deletebrewery')}}">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$brewery->id }}">
    <button type="submit" class="btn btn-danger">Eliminar</button>
  </form>
  
  <a class="btn btn-warning me-4" href="{{ route ('breweries') }}">Volver</a>
 
</div>

@endsection



   
    
   