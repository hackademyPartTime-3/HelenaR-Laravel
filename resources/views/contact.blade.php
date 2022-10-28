
@extends('layouts.layout')
@section('pagetitle', 'Contacto')
@section('content')

<div class="contacto">

<form method="post" action="">

    @csrf<!--tiene que estar en cualquier punto dentro del formulario, es para que nos recupere la pagina o no se nos expire(error 419)-->


  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Indica tu nombre" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email de contacto</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
  </div>
  <div class="mb-3">
    <label for="subject" class="form-label">Asunto</label>
    <input type="text" class="form-control" id="subject"  name="subject" placeholder="Deja tu comentario" required>
  </div>
  <div class="mb-3">
    <textarea class="form-control" id="body"  name="body" rows="3" required></textarea>
  </div>
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-success">Enviar consulta</button>
  </div>
</form>
</div>


@endsection




   
    
    

