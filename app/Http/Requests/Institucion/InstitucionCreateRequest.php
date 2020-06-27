<?php

namespace App\Http\Requests\Institucion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InstitucionCreateRequest extends FormRequest{

    public function authorize(){
        return true;
    }
    protected function prepareForValidation():void {
        $this->merge([
             'nombre_ies' => trim(strip_tags($this->input('nombre_ies'))),
            'abreviatura' => trim(strip_tags($this->input('abreviatura'))),
            'direccion' => trim(strip_tags($this->input('direccion'))),
            'telefono' => trim(strip_tags($this->input('telefono'))),
            'movil' => trim(strip_tags($this->input('movil'))),
            'email' => trim(strip_tags($this->input('email'))),
            'sitio_web' => trim(strip_tags($this->input('sitio_web'))),
            'codigo_modular' => trim(strip_tags($this->input('codigo_modular'))),
            'tipo_gestion' => trim(strip_tags($this->input('tipo_gestion'))),
            'dre_gre' => trim(strip_tags($this->input('dre_gre'))),
            'resolucion_lic' => trim(strip_tags($this->input('resolucion_lic'))),
            'resolucion_renova' => trim(strip_tags($this->input('resolucion_renova'))),
            'facebook' => trim(strip_tags($this->input('facebook'))),
            'twitter' => trim(strip_tags($this->input('twitter')))
        ]);
    }
    public function rules(){
            return [
            'nombre_ies' => ['required','max:200', Rule::unique('institucion')],
            'abreviatura' => ['required', 'max:45'],
            'direccion' => ['required','max:200'],
            'id_departamento' => ['required'],
            'id_provincia' => ['required'],
            'id_distrito' => ['required'],
            'telefono' => ['required','max:50'],
            'movil' => ['required','max:50'],
            'email' => ['required', 'email', 'max:50'],
            'sitio_web' => ['max:50'],
            'codigo_modular' => ['required', 'max:50'],
            'tipo_gestion' => ['max:50'],
            'dre_gre' => ['max:50'],
            'resolucion_lic' => ['max:50'],
            'resolucion_renova' => ['max:50'],
            'facebook' => ['max:100'],
            'twitter' => ['max:100']
        ];
    }
    public function messages(){
        return [
            'nombre_ies.required' => ['El Nombre IES es obligatorio'],
            'nombre_ies.unique' => ['El Nombre IES ya existe'],
            'abreviatura.required' => ['La abreviatura es obligatorio'],
            'abreviatura.max' => ['El Nombre debe contener 45 caracteres como máximo.'],
            'direccion.required' => ['La dirección es obligatorio'],
            'id_departamento.required' => ['El Departamento es obligatorio'],
            'id_provincia.required' => ['La Provincia es obligatorio'],
            'id_distrito.required' => ['El Distrito es obligatorio'],
            'telefono.required' => ['El teléfono es obligatorio'],
            'telefono.max' => ['El teléfono debe contener 50 caracteres como máximo.'],
            'movil.required' => ['El Móvil es obligatorio'],
            'movil.max' => ['El Móvil debe contener 50 caracteres como máximo.'],
            'email.required' => ['El Email es obligatorio'],
            'email.email' => ['El Email no valido'],
            'email.max' => ['El Email debe contener 50 caracteres como máximo.'],
            'sitio_web.max' => ['El Sitio web debe contener 50 caracteres como máximo.'],
            'codigo_modular.required' => ['El Código Modular es obligatorio'],
            'codigo_modular.max' => ['El Código Modular debe contener 50 caracteres como máximo.'],
            'tipo_gestion.max' => ['El Email debe contener 50 caracteres como máximo.'],
            'dre_gre.max' => ['El Email debe contener 50 caracteres como máximo.'],
            'resolucion_lic.max' => ['La resolución de licenciamiento debe contener 50 caracteres como máximo.'],
            'resolucion_renova.max' => ['La resolución de renovación debe contener 50 caracteres como máximo.'],
            'facebook.max' => ['El Facebook debe contener 100 caracteres como máximo.'],
            'twitter.max' => ['El Twitter debe contener 100 caracteres como máximo.'],
        ];
    }


}
