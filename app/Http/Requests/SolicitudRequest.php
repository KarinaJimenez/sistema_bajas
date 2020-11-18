<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudRequest extends FormRequest
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
            'solicitud' => 'required|unique:solicitudes',
            'users_id' => 'required|exists:users,id',
            'status_id' => 'required|exists:status,id',
        ];
    }

    public function messages() {
        return [
            'solicitud.required' => '* El campo Solicitud es obligatorio',
            'solicitud.unique' => '* Esta Solicitud ya existe',
            'users_id.required' => 'El campo Usuario es obligatorio',
            'users_id.exists' => '* El Usuario no existe',
            'status_id.required' => '* El campo Status es obligatorio',
            'status_id.exists' => '* El Status no existe'
        ];
        
    }
}
