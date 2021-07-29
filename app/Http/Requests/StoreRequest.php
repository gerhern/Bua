<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            //
            'name' => 'required | string',
            'firstName' => 'required | string',
            'secondName' => 'required | string',
            'birthday' => 'required | date',
            'annualInn' => 'required | numeric'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Nombre de empleado es obligatorio',
            'firstName.required' => 'Apellido paterno de empleado es obligatorio',
            'secondName.required' => 'Apellido materno de empleado es obligatorio',
            'birthday.required' => 'Fecha de nacimiento de empleado es obligatoria',
            'annualInn.required' => 'Los ingresos anuales del empleado son obligatorios',


            'name.string' => 'Tipo de dato invalido',
            'firstName.string' => 'Tipo de dato invalido',
            'secondName.string' => 'Tipo de dato invalido',
            'birthday.date' => 'Tipo de dato invalido',
            'annualInn.numeric' => 'Tipo de dato invalido'
        ];
    }
}
