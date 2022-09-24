<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Brewery extends Controller
{
    //

    private $breweries = [
        [12345, '1-La Socarrada', ' Artesanal de Játiva (Valencia) debe su nombre al socarrat de la paella.Esta cerveza tiene un sabor ahumado y tostado.'],
        [22345, '2-La Virgen', 'Cerveza artesana en Madrid,una cerveza de baja fermentación que madura durante más de 40 días.'],
        [32345, '3-Birra and blues', 'Destaca por sus tres lúpulos diferentes, que le dan amargor, aromas florales y algo a cítricos.'],
        [45678, '4-Tyris Paquita Brown', 'Son un estilo de cervezas de sabor maltoso que surgió en Gran Bretaña. '],
        [56789, '5-La granja de Goose', 'Cerveza artesana de Segovia, Su nombre es toda una declaración de intenciones "Granuja".'],
        [67890, '6-Cervezas Abadía Española', 'Destaca el poco carbónico ya que se añade de forma natural en una segunda fermentación.'],
        [78901, '7-Kadabra', 'Se trata de una cerveza muy equilibrada, suave pero con notas diversas que aportan sus distintas maltas.'],
    ];


    public function index()
    {
        // tenemos que devolver una ruta con unos datos, copiamos la ruta del web si ya esta definida
        return view('breweries', ['breweries' => $this->breweries]);
    }
    public function detail($id)
    {

        $fila = -1;
        for ($i = 0; $i < sizeof($this->breweries); $i++) {
            if ($id == $this->breweries[$i][0]) {
                $fila = $i;
            }
        }
        return view('brewery', ['brewery' => $this->breweries[$fila]]);
    }
}
