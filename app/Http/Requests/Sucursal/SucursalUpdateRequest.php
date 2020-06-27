<?php

namespace App\Http\Requests\Sucursal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SucursalUpdateRequest extends FormRequest
{
    public function authorize(){
        return true;
    }
    protected function prepareForValidation():void {
        $this->merge([
            'nombre' => trim(strip_tags($this->input('nombre'))),
            'direccion' => trim(strip_tags($this->input('direccion'))),
            'telefono' => trim(strip_tags($this->input('telefono'))),
            'sitio_web' => trim(strip_tags($this->input('sitio_web'))),
            'email' => trim(strip_tags($this->input('email')))
        ]);
    }
    public function rules(){
        return [
            'id_institucion' => ['required'],
            'nombre' => ['required','max:200', Rule::unique('sucursal')->ignore(request::get('id_sucursal'),'id_sucursal')],
            'id_departamento' => ['required'],
            'id_provincia' => ['required'],
            'id_distrito' => ['required'],
            'direccion' => ['required','max:200'],
            'telefono' => ['required','max:45'],
            'sitio_web' => ['max:50'],
            'email' => ['required', 'email', 'max:45']
        ];
    }
    public function messages(){
        return [
            'id_institucion.required' => ['La Institución es obligatorio'],
            'nombre.unique' => ['El Nombre ya existe'],
            'nombre.required' => ['El Nombre es obligatorio'],
            'nombre.max' => ['El Nombre debe contener 200 caracteres como máximo.'],
            'id_departamento.required' => ['El Departamento es obligatorio'],
            'id_provincia.required' => ['La Provincia es obligatorio'],
            'id_distrito.required' => ['El Distrito es obligatorio'],
            'direccion.required' => ['la dirección es obligatorio'],
            'direccion.max' => ['El Nombre debe contener 200 caracteres como máximo.'],
            'telefono.required' => ['El teléfono es obligatorio'],
            'telefono.max' => ['El teléfono debe contener 45 caracteres como máximo.'],
            'sitio_web.max' => ['El Sitio web debe contener 50 caracteres como máximo.'],
            'email.required' => ['El Email es obligatorio'],
            'email.email' => ['El Email no valido'],
            'email.max' => ['El Email debe contener 45 caracteres como máximo.']
        ];
    }

}
