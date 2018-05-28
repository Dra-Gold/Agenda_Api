<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvent extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:3|max:25',
            'fecha'=> 'required',
            'horai'=> 'required',
            'horat'=> 'required' ,
            'direccion'=> 'required',
            'lat'=> 'required',
            'lng'=> 'required',
            'user_id'=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es requerido',
            'fecha.required' => 'La fecha es requerido',
            'horai.required' => 'La hora de inicio es requerida',
            'horat.required' => 'La hora de termino es requerida',
            'direccion.required' => 'La dirrecion es  requerida',
            'lat.required' => 'La latitud es requerida',
            'lng.required' => 'la longitud es requerida',
            'user_id.required' => 'El id del usuario es  requerido',
        ];
    }
}
