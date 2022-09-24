<?php

use App\Http\Controllers\Brewery;
use Illuminate\Support\Facades\Route;

/* function getBreweries()
{
    $breweries = [
        [12345, 'La Socarrada', ' Artesanal de Játiva (Valencia) debe su nombre al socarrat de la paella.Esta cerveza tiene un sabor ahumado y tostado.'],
        [22345, 'La Virgen', 'Cerveza artesana en Madrid,una cerveza de baja fermentación que madura durante más de 40 días.'],
        [32345, 'Birra and blues', 'Destaca por sus tres lúpulos diferentes, que le dan amargor, aromas florales y algo a cítricos.'],
        [45678, 'Tyris Paquita Brown', 'Son un estilo de cervezas de sabor maltoso que surgió en Gran Bretaña. '],
        [56789, 'La granja de Goose', 'Cerveza artesana de Segovia, Su nombre es toda una declaración de intenciones "Granuja".'],
        [67890, 'Cervezas Abadía Española', 'Destaca el poco carbónico ya que se añade de forma natural en una segunda fermentación.'],
        [78901, ' Kadabra', 'Se trata de una cerveza muy equilibrada, suave pero con notas diversas que aportan sus distintas maltas.'],
    ];
    return $breweries;
} */


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
})->name('inicio');

/* Route::get('/breweries', function () {
    $breweries = getBreweries();



    return view('breweries', ['breweries' => $breweries]); // estamos pasando datos a un sitio, es decir los datos del array.
})->name('breweries'); */

Route::get('/breweries', [Brewery::class, 'index'])->name('breweries');
// la segunda opcion de instanciar una clase definida en el controller es de la version 8.
/* Route::get('/breweries', 'Brewery@index')->name('breweries'); */
// Detalles de la cerveceria

Route::get('/brewery/{id}', [Brewery::class, 'detail']); // nueva forma desde controller
/* Route::get('/brewery/{id}', function ($id) {
    $breweries = getBreweries();

    $fila = -1;
    for ($i = 0; $i < sizeof($breweries); $i++) {
        if ($id == $breweries[$i][0]) {
            $fila = $i;
        }
    }
    return view('brewery', ['brewery' => $breweries[$fila]]);
}); */

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('aboutus');
})->name('main');

Route::get('/landing', function () {
    return redirect()->route('main');
});
