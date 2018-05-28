<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroUsuario extends FormRequest
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
            'name' => 'required|min:3|max:20',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:6|max:20',
            'confirm_password'=> 'required|same:password' 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo es requerido',
            'password.required' => 'La contraseña es requerida',
            'confirm_password.required' => 'Confirmar contraseña es requerido',
            'name.min' => 'El nombre tiene que tener 3 caracteres minimo',
            'email.email' => 'El correo no es valido',
            'password.min' => 'La contraseña tiene que tener 6 caracteres minimo',
            'confirm_password.same' => 'Las contraseñas no coinciden',
            'name.max' => 'El nombre tiene que tener 20 caracteres maximo',
            'email.unique' => 'El correo ya ha sido registrado',
            'password.max' => 'La contraseña tiene que tener 20 caracteres maximo',
        ];

    }

}
