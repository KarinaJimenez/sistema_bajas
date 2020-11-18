<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnosRequest extends FormRequest
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
            'codigo' => 'required|numeric|unique:alumnos',
            'nombre' => 'required',
            'aPaterno' => 'required',
            'aMaterno' => 'required',
            'telefono' => 'required|numeric',
            'ciclos_id' => 'required|exists:ciclos,id',
            'carreras_id' => 'required|exists:carreras,id',
            'solicitudes_id' => 'required|exists:solicitudes,id'
        ];
    }
    public function messages(){
        return [
            'codigo.required'   => '* El campo Codigo es obligatorio',
            'codigo.unique'     => '* Este Codigo ya existe',
            'codigo.numeric'    => '* El campo Codigo debe ser numerico',
            'nombre.required'   => '* El campo Nombre es obligatorio',
            'aPaterno.required' => '* El campo Primer Apellido es obligatorio',
            'aMaterno.required' => '* El campo Segundo Apellido es obligatorio',
            'telefono.numeric'  => '* El campo Telefono debe ser numerico',
            'telefono.required' => '* El campo Telefono es obligatorio',
            'ciclos_id.required'=> '* El campo Ciclos es obligatorio',
            'ciclos_id.exists'  => '* El Ciclo no existe',
            'carreras_id.required' => '* El campo Carreras es obligatorio',
            'carreras_id.exists' => '* La Carrera no existe',
            'solicitudes_id.required' => '* El campo Solicitudes es obligatorio',
            'solicitudes_id.exists' => '* La solicitud no existe'
        ];
    }
}
