<?php

namespace App\Repositories\Diagnostico;
use App\Models\Diagnostico\DiagnosticoModels;


class DiagnosticoRepository
{

	public function all()
    {
		$DiagnosticoModels = DiagnosticoModels::select()->get();
		return $DiagnosticoModels;
	}

	public function find($id)
    {
        $DiagnosticoModels = DiagnosticoModels::find($id);
        return $DiagnosticoModels;
	}

	public function create($request)
    {

	    $DiagnosticoModels = new DiagnosticoModels();
        $DiagnosticoModels->id_estudiante = $request['id_estudiante'];
        $DiagnosticoModels->fecha = $request['fecha'];
        $DiagnosticoModels->p_salud = $request['p_salud'];
        $DiagnosticoModels->h_alimentos = $request['h_alimentos'];
        $DiagnosticoModels->con_sus_aluci = $request['con_sus_aluci'];
        $DiagnosticoModels->con_bebidas_alco = $request['con_bebidas_alco'];
        $DiagnosticoModels->p_emocionales = $request['p_emocionales'];
        $DiagnosticoModels->p_familiares = $request['p_familiares'];
        $DiagnosticoModels->p_economico = $request['p_economico'];
				$DiagnosticoModels->p_academicos = $request['p_academicos'];
				$DiagnosticoModels->tutor_id_tutor = $request['tutor_id_tutor'];
        $DiagnosticoModels->date_create = date('Y-m-d H:i:s');
        $DiagnosticoModels->date_update = NULL;
        $DiagnosticoModels->save();
         return $DiagnosticoModels;

	}

	public function update($request,$id)
    {
        $DiagnosticoModels = DiagnosticoModels::find($id);
        $DiagnosticoModels->id_estudiante = $request['id_estudiante'];
        $DiagnosticoModels->fecha = $request['fecha'];
        $DiagnosticoModels->p_salud = $request['p_salud'];
        $DiagnosticoModels->h_alimentos = $request['h_alimentos'];
        $DiagnosticoModels->con_sus_aluci = $request['con_sus_aluci'];
        $DiagnosticoModels->con_bebidas_alco = $request['con_bebidas_alco'];
        $DiagnosticoModels->p_emocionales = $request['p_emocionales'];
        $DiagnosticoModels->p_familiares = $request['p_familiares'];
        $DiagnosticoModels->p_economico = $request['p_economico'];
				$DiagnosticoModels->p_academicos = $request['p_academicos'];
				$DiagnosticoModels->tutor_id_tutor = $request['tutor_id_tutor'];
				$DiagnosticoModels->estado = $request['estado'];
        $DiagnosticoModels->date_update = date('Y-m-d H:i:s');

		$DiagnosticoModels->save();
         return $DiagnosticoModels;
	}

	public function delete($id)
    {
        $DiagnosticoModels = DiagnosticoModels::find($id)->delete();
        return $DiagnosticoModels;

	}




}
