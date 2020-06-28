<?php

namespace App\Http\Requests\AlumnoFamiliar;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AlumnoFamiliarUpdateRequest extends FormRequest
{
    public function authorize(){
        return true;
    }
    protected function prepareForValidation():void {
        $this->merge([
          'depedencia_ud' => trim(strip_tags($this->input('depedencia_ud'))),
          'movil' => trim(strip_tags($this->input('movil'))),
          'telefono_fijo' => trim(strip_tags($this->input('telefono_fijo'))),
          'email' => trim(strip_tags($this->input('email'))),
          'email_institucion' => trim(strip_tags($this->input('email_institucion'))),
          'facebook' => trim(strip_tags($this->input('facebook'))),
          'twitter' => trim(strip_tags($this->input('twitter'))),
          'instagram' => trim(strip_tags($this->input('instagram'))),
          'tutoria' => trim(strip_tags($this->input('tutoria'))),
          'id_persona_vive' => trim(strip_tags($this->input('id_persona_vive'))),
          'id_ocupacion' => trim(strip_tags($this->input('id_ocupacion'))),
          'id_dependencia' => trim(strip_tags($this->input('id_dependencia'))),
          'id_instruccion' => trim(strip_tags($this->input('id_instruccion'))),
          'id_labora' => trim(strip_tags($this->input('id_labora'))),
          'id_vivienda' => trim(strip_tags($this->input('id_vivienda'))),
          'id_financia' => trim(strip_tags($this->input('id_financia'))),
          'id_conquien_vive' => trim(strip_tags($this->input('id_conquien_vive')))


        ]);
    }
    public function rules(){
        return [
          'depedencia_ud' => ['required'],
          'movil' => ['required'],
          'telefono_fijo' => ['required'],
          'email' => ['required','email'],
          'email_institucion' => ['required','email'],
          'facebook' => ['required'],
          'twitter' => ['required'],
          'instagram' => ['required'],
          'tutoria' => ['required'],
          'id_persona_vive' => ['required'],
          'id_ocupacion' => ['required'],
          'id_dependencia' => ['required'],
          'id_instruccion' => ['required'],
          'id_labora' => ['required'],
          'id_vivienda' => ['required'],
          'id_financia' => ['required'],
          'id_conquien_vive' => ['required']
        ];
    }
    public function messages(){
        return [
          'depedencia_ud.required' => ['Seleccione SI/NO si alguien depende de usted?'],
          'movil.required' => ['Ingrese su nro Celular'],
          'telefono_fijo.required' => ['Ingrese su nro Telefonico'],
          'email.required' => ['Ingrese su email Personal'],
          'email.email' => ['Su email no es valido'],
          'email_institucion.required' => ['Ingrese su email institucional'],
          'email_institucion.email' => ['Su email institucional no es valido'],
          'facebook.required' => ['Ingrese su Facebook'],
          'twitter.required' => ['Ingrese su Twitter'],
          'instagram.required' => ['Ingrese su Instagram'],
          'tutoria.required' => ['Seleccione SI/NO si desea recibir Tutoria?'],
          'id_persona_vive.required' => ['Seleccione el nro Personas vive'],
          'id_ocupacion.required' => ['Seleccione la Ocupación'],
          'id_dependencia.required' => ['Seleccione una opcion'],
          'id_instruccion.required' => ['Seleccione un nivel de instruccion'],
          'id_labora.required' => ['Seleccione una opcion'],
          'id_vivienda.required' => ['Seleccione una opcion'],
          'id_financia.required' => ['Seleccione quien financia sus estudios'],
          'id_conquien_vive.required' => ['Seleccione Con quien Vive'],
        ];
    }

}
