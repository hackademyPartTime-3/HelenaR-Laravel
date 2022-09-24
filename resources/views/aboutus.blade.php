<!--pido que aboutus extiende del layout,luego indicamos que hay varios campos llamados secciones, que nos indique... el texto que querramos, tipo el title, o pagetitle, o content, que ya estan definidos en nuestro layout, luego se compila todo y nos devuelve esta informacion en la web.php con el return view definido previamente, basicamente esta interpretando todo lo que contiene la pagina y rellenandola con la info dado en el layout. De esta forma no repetimos nuestro codigo-->
@extends('Layouts.layout')

@section('title','Quienes somos')

@section('pagetitle', 'Quienes somos')

@section('content')
Here’s what you need to know before getting started with the navbar:

Navbars require a wrapping .navbar with .navbar-expand{-sm|-md|-lg|-xl|-xxl} for responsive collapsing and color scheme classes.
Navbars and their contents are fluid by default. Change the container to limit their horizontal width in different ways.
Use our spacing and flex utility classes for controlling spacing and alignment within navbars.
Navbars are responsive by default, but you can easily modify them to change that. Responsive behavior depends on our Collapse JavaScript plugin.
Ensure accessibility by using a <nav> element or, if using a more generic element such as a <div>, add a role="navigation" to every navbar to explicitly identify it as a landmark region for users of assistive technologies.
@endsection

@section('pagetitle', 'Quienes somos')

   
    
    

