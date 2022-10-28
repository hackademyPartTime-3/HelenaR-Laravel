<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;
use App\Http\Requests\BreweryRequest;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(BreweryRequest $request)

    {
        if (Mail::to('helena19.rodrigues@gmail.com')->send(new ContactNotification(
            $request->name,
            $request->email,
            $request->subject,
            $request->body

        ))) {
            //return back()->with('success', 'Hemos recibido correctamente su sugerencia. Nos pondremos en contacto en breve');
            return back()->with('error', 'Ha ocurrido un error, pruebe mas tarde ');
        } else {
            return back()->with('error', 'Ha ocurrido un error, pruebe mas tarde ');
        }


        /* return "formulario procesado" . $request->input('name'); */
    }
}
