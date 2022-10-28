<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BreweryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        /*  'name' => $request->title,
            'description' => $request->body,
            'place' => $request->place,*/
        return [
            'title'         => 'required|max:100',
            'body'  => 'required|min:5',
            'place'        => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title' => [
                'required' => 'Este campo es obligatorio',
                'min' => 'El nombre de la cervecería tiene que tener mas de 5 caracteres.'
            ],
            'body' => [
                'required' => 'Este campo es obligatorio',
                'min' => 'El campo tiene que tener más de 10 caracteres.'
            ],

            'place' => [
                'required' => 'Este campo es obligatorio',
                'max' => 'El campo no puede tener mas de 40 posiciones'
            ]
        ];
    }
}
