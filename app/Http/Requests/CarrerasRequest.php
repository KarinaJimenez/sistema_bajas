<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarrerasRequest extends FormRequest
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
            'carrera' => 'required|max:45|unique:carreras',
            'ciclos_id' => 'required|exists:ciclos,id'
        ];
    }
    public function messages(){
        return [ 
            'carrera.required' => '* El campo Carrera es obligatorio',
            'carrera.unique' => '* Esta Carrera ya existe',
            'ciclos_id.required' => '* El campo ciclo es obligatorio',
            'ciclos_id.exists' => '* El Ciclo no existe'
        ];
    }

}
