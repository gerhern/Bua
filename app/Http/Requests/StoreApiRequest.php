<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApiRequest extends FormRequest
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

    public function rules()
    {
        return [
            //Reglas de validacion de los datos enviados mediante api
            'name'       => 'required',
            'firstName'  => 'required',
            'secondName' => 'required',
            'birthday'   => 'required',
            'annualInn'  => 'required'
        ];
    }

    
    function messages()
    {
        return [
            'name.required' => 'Nombre de empleado es obligatorio',
            'firstName.required' => 'Apellido paterno de empleado es obligatorio',
            'secondName.required' => 'Apellido materno de empleado es obligatorio',
            'birthday.required' => 'Fecha de nacimiento de empleado es obligatoria',
            'annualInn.required' => 'Los ingresos anuales del empleado son obligatorios',
        ];
    }
}