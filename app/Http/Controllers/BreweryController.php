<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BreweryRequest;

class BreweryController extends Controller
{
    //

    /* private $breweries = [
        [12345, '1-La Socarrada', ' Artesanal de Játiva (Valencia) debe su nombre al socarrat de la paella.Esta cerveza tiene un sabor ahumado y tostado.'],
        [22345, '2-La Virgen', 'Cerveza artesana en Madrid,una cerveza de baja fermentación que madura durante más de 40 días.'],
        [32345, '3-Birra and blues', 'Destaca por sus tres lúpulos diferentes, que le dan amargor, aromas florales y algo a cítricos.'],
        [45678, '4-Tyris Paquita Brown', 'Son un estilo de cervezas de sabor maltoso que surgió en Gran Bretaña. '],
        [56789, '5-La granja de Goose', 'Cerveza artesana de Segovia, Su nombre es toda una declaración de intenciones "Granuja".'],
        [67890, '6-Cervezas Abadía Española', 'Destaca el poco carbónico ya que se añade de forma natural en una segunda fermentación.'],
        [78901, '7-Kadabra', 'Se trata de una cerveza muy equilibrada, suave pero con notas diversas que aportan sus distintas maltas.']
    ]; */


    public function index()
    {
        $breweries = DB::table('breweries')->get();
        //dd($breweries);
        return view('breweries', ['breweries' => $breweries]);
    }
    public function show($id)
    {
        $brewery = DB::table('breweries')->find($id);
        if ($brewery->img == "") {
            $brewery->img = asset('/img/beer1.jpg');
        }
        return view('brewery', ['brewery' => $brewery]);
    }

    public function create()
    {
        return view('newbrewery');
    }

    public function store(BreweryRequest $request)
    {
        /*  dd($request); */
        $path = $request->file('img')->store('public/multimedia');

        $urlweb = Storage::url($path);

        DB::table('breweries')->insert([
            'name' => $request->title,
            'description' => $request->body,
            'place' => $request->place,
            'img' => $urlweb
        ]);
        return redirect()->route('breweries')->with('success', 'Se ha guardado la cerveceria');
    }

    public function edit($id)
    {
        $brewery = DB::table('breweries')->find($id);

        return view('editbrewery', ['brewery' => $brewery]);
    }

    public function update(BreweryRequest $request)
    {
        $urlweb = "";

        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('public/multimedia');
            $urlweb = Storage::url($path);
        }

        DB::table('breweries')->where('id', '=', $request->id)
            ->update([
                'name' => $request->title,
                'description' => $request->body,
                'place' => $request->place,
                'img' => $urlweb
            ]);
        return redirect()->route('breweries')->with('success', 'Se ha actualizado la cerveceria');
    }

    public function delete(Request $request)
    {

        DB::table('breweries')->delete($request->id);
        return redirect()->route('breweries')->with('success', 'Se ha eliminado la cerveceria');
    }
}
