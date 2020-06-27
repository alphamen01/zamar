<?php

namespace App\Http\Requests\Diagnostico;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DiagnosticoUpdateRequest extends FormRequest
{
    public function authorize(){
        return true;
    }
    protected function prepareForValidation():void {
        $this->merge([
          'p_salud' => trim(strip_tags($this->input('p_salud'))),
          'h_alimentos' => trim(strip_tags($this->input('h_alimentos'))),
          'con_sus_aluci' => trim(strip_tags($this->input('con_sus_aluci'))),
          'con_bebidas_alco' => trim(strip_tags($this->input('con_bebidas_alco'))),
          'p_emocionales' => trim(strip_tags($this->input('p_emocionales'))),
          'p_familiares' => trim(strip_tags($this->input('p_familiares'))),
          'p_economico' => trim(strip_tags($this->input('p_economico'))),
          'p_academicos' => trim(strip_tags($this->input('p_academicos')))
        ]);
    }
    public function rules(){
        return [
          'id_estudiante' => ['required'],
          'fecha' => ['required'],
          'p_salud' => ['required'],
          'h_alimentos' => ['required'],
          'con_sus_aluci' => ['required'],
          'con_bebidas_alco' => ['required'],
          'p_emocionales' => ['required'],
          'p_familiares' => ['required'],
          'p_economico', => ['required'],
          'p_academicos' => ['required'],
          'tutor_id_tutor' => ['required']
        ];
    }
    public function messages(){
        return [
          'id_estudiante.required' => ['El campo estudiante es obligatorio'],
          'fecha.required' => ['La fecha es obligatoria'],
          'p_salud.required' => ['El campo problema de salud es obligatorio'],
          'h_alimentos.required' => ['Los campo habitos alimenticios son obligatorio'],
          'con_sus_aluci.required' => ['El campo consumo de sustancias alucinogenas es obligatorio'],
          'con_bebidas_alco.required' => ['El campo consumo de bebidas alcoholicas es obligatorio'],
          'p_emocionales.required' => ['El campo problemas emocionales es obligatorio'],
          'p_familiares.required' => ['El campo problemas familiares es obligatorio'],
          'p_economico.required' => ['El campo problema economico es obligatorio'],
          'p_academicos.required' => ['El campo problemas academicos es obligatorio'],
          'tutor_id_tutor.required' => ['El Tutor es obligatorio']
        ];
    }

}
