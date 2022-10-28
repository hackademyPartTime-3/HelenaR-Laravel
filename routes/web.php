<?php

use App\Http\Controllers\Brewery;
use App\Http\Controllers\BreweryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



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

Route::get('/breweries', [BreweryController::class, 'index'])->name('breweries');
/* Route::get('/breweries', 'Brewery@index')->name('breweries'); */

// Detalles de la cerveceria

Route::get('/brewery/{id}', [BreweryController::class, 'show']);
Route::get('/brewery', [BreweryController::class, 'create'])->name('brewery');
Route::post('/brewery', [BreweryController::class, 'store']);

Route::get('/editbrewery/{id}', [BreweryController::class, 'edit']);
Route::post('/editbrewery', [BreweryController::class, 'update'])->name('editbrewery');

Route::post('/deletebrewery', [BreweryController::class, 'delete']);


Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'store']);

/* Route::post('breweries',[BreweryController::class,'store']); */

Route::get('/about', function () {
    return view('aboutus');
})->name('main');

Route::get('/landing', function () {
    return redirect()->route('main');
});
