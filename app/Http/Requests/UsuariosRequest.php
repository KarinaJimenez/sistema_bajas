<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
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
            'name' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ];
    }
    public function messages(){
        return [
            'name.required' => '* El campo usuario es obligatorio',
            'name.unique' => '* Este Usuario ya existe',
            'email.required' => '* El campo Email es obligatorio',
            'password.required' => '* El campo Password es obligatorio'
            

        ];
        
    }
}
