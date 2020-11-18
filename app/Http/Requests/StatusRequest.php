<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
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
            'status' => 'required|unique:status'
        ];
    }
    public function messages(){
        return [
            'status.required' => '* El campo Status es obligatorio',
            'status.unique' => '* Este Status ya existe'
        ];
        
    }
}
