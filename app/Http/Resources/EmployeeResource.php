<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Id'   => $this->id,
            'Nombre' => $this->name,
            'Apellido Paterno' => $this->firstName,
            'Apellido Materno' => $this->secondName,
            'Fecha de Nacimiento' => $this->date->birth,
            'Ingreso Anual'       => $this->date->salary
        ];
    }
}
