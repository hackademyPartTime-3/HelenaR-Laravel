@extends('Layouts.app')
@section('body')


        <nav class="barra-navegacion navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/"><img src="{{asset('/img/logo.png')}}" height="60" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <a class="nav-link active fs-5" href="{{url("/breweries")}}">Cervecerías</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-5" href="/contact">Contacto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active fs-5" href="/about">Quienes Somos</a>
                  </li> 
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
   
          <x-flash /> {{--  llamamos a flash.blade.php para hacer que el mensaje de comprobacion desaparezca --}}

          <div class="container-fluid pagetitle" style="width: 800px">
               <h1 class="text-center"> @yield('pagetitle') </h1>
           @yield('content') 

         </div> 
       <br>
       <div class="container-fluid">
        <nav class="navbar navbar_footer navbar-expand-lg fixed-bottom"> 
          <p class="w-100 text-center"> &copy; 2022, Breweries Media Network </p>
        </nav>
  </div>
  @endsection