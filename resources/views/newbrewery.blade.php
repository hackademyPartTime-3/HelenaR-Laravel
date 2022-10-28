@extends('Layouts.layout')
@section('title', 'Mi cervecería')<!--Rellenamos los campos con section y yield es para definirlos-->
@section('pagetitle', 'Cervecería')

@section('content')
<br>
<form enctype="multipart/form-data" method="POST" action="">
  @csrf
  
  <x-editcard/>
    <br>
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-success">Guadar</button>
</div>
</form>
<div id="mensaje" style="display: none"></div>
<!-- <x-message type="success" message="Click para volver al listado" />-->
<br> 
<p class="text-center"><a class="btn btn-warning" href="{{route ('breweries')}}">Volver</a></p>

@endsection





