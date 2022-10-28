@extends('Layouts.layout')
@section('title', 'Listado de cervecerías')<!--Rellenamos los campos con section y yield es para definirlos-->
@section('pagetitle', 'Cervecería')

@section('content')
<div class="row row-cols-1 row-cols-md-3 row-cols-xld-2 g-4 justify-content-around">

  @foreach ($breweries as $brewery )


 
  <x-card title="{{$brewery->name}}" 
    body="{{$brewery->description}}" 
    img="{{$brewery->img}}" 
    place="{{$brewery->place}}"
    link="/brewery/{{$brewery->id}}" text >


       
 </x-card>  
  @endforeach
</div> 
<br> 
<div class="container-fluid">
<p class="text-center">
  <a class="btn btn-success" href="{{route ('brewery')}}">Nueva Cervecería</a></p>
</div>
@endsection


  


      