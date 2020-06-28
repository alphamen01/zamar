<?php

namespace App\Repositories\AlumnoFamiliar;
use App\Models\AlumnoFamiliar\AlumnoFamiliarModels;


class AlumnoFamiliarRepository
{

	public function all()
    {
		$AlumnoFamiliarModels = AlumnoFamiliarModels::select('alumno_familiar.id_alumno_familiar','alumno_familiar.id_estudiante','estudiante.nombres as nombres','estudiante.apellidos as apellidos','facultad.nombre as facultad','estudiante.dni as dni','estudiante.carne_universitario as carne_universitario')
		->join('estudiante','estudiante.id_estudiante','=','alumno_familiar.id_estudiante')
		->join('facultad','facultad.id_facultad','=','estudiante.facultad_id_facultad')
		->orderBy('id_alumno_familiar','ASC')
		->get();
		return $AlumnoFamiliarModels;
	}
//detail
	public function find($id)
    {
        $AlumnoFamiliarModels = AlumnoFamiliarModels::select('alumno_familiar.id_alumno_familiar','alumno_familiar.id_estudiante','estudiante.apellidos as apellidos','estudiante.nombres as nombres','estudiante.dni as dni','estudiante.carne_universitario as carne_universitario','estudiante.fecha_nacimiento as fecha_nacimiento','estudiante.lugar_nacimiento as lugar_nacimiento','estudiante.genero as genero','estudiante.estado as estado','estudiante.direccion as direccion','estudiante.distrito as distrito','estudiante.provincia as provincia','estudiante.departamento as departamento','estudiante.referencia as referencia','facultad.nombre as facultad','escuela.nombre as escuela','ciclo.nombre as ciclo','estudiante.modalidad_ingreso as modalidad_ingreso','semestre.nombre as semestre','universidad.nombre as universidad','instruccion.nombre as instruccion','ocupacion.nombre as ocupacion','vivienda.nombre as vivienda','personas_vive.nombre as personas_vive','conquien_vive.nombre as conquien_vive','labora.nombre as labora','dependencia.nombre as dependencia','alumno_familiar.depedencia_ud','financia.nombre as financia','alumno_familiar.movil','alumno_familiar.telefono_fijo','alumno_familiar.email','alumno_familiar.email_institucion','alumno_familiar.facebook','alumno_familiar.twitter','alumno_familiar.instagram','alumno_familiar.tutoria','alumno_familiar.id_instruccion','alumno_familiar.id_persona_vive','alumno_familiar.id_ocupacion','alumno_familiar.id_dependencia','alumno_familiar.id_labora','alumno_familiar.id_vivienda','alumno_familiar.id_financia','alumno_familiar.id_conquien_vive','alumno_familiar.date_create','alumno_familiar.date_update')
				->join('estudiante','estudiante.id_estudiante','=','alumno_familiar.id_estudiante')
				->join('facultad','facultad.id_facultad','=','estudiante.facultad_id_facultad')
				->join('escuela','escuela.id_escuela','=','estudiante.escuela_id_escuela')
				->join('ciclo','ciclo.id_ciclo','=','estudiante.ciclo_id_ciclo')
				->join('semestre','semestre.id_semestre','=','estudiante.semestre_id_semestre')
				->join('universidad','universidad.id_universidad','=','estudiante.universidad_id_universidad')
				->join('instruccion','instruccion.id_instruccion','=','alumno_familiar.id_instruccion')
				->join('ocupacion','ocupacion.id_ocupacion','=','alumno_familiar.id_ocupacion')
				->join('vivienda','vivienda.id_vivienda','=','alumno_familiar.id_vivienda')
				->join('personas_vive','personas_vive.id_persona_vive','=','alumno_familiar.id_persona_vive')
				->join('conquien_vive','conquien_vive.id_conquien_vive','=','alumno_familiar.id_conquien_vive')
				->join('labora','labora.id_labora','=','alumno_familiar.id_labora')
				->join('dependencia','dependencia.id_dependencia','=','alumno_familiar.id_dependencia')
				->join('financia','financia.id_financia','=','alumno_familiar.id_financia')
				->find($id);
        return $AlumnoFamiliarModels;

	}
//editar
	public function actualizar($id)
    {
        $AlumnoFamiliarModels = AlumnoFamiliarModels::select('alumno_familiar.id_alumno_familiar','alumno_familiar.id_estudiante','depedencia_ud','movil','telefono_fijo','alumno_familiar.email','alumno_familiar.email_institucion','alumno_familiar.facebook','alumno_familiar.twitter','alumno_familiar.instagram','tutoria','id_persona_vive','id_ocupacion','id_dependencia','id_instruccion','id_labora','id_vivienda','id_financia','id_conquien_vive','date_create','date_update','estudiante.apellidos as apellidos','estudiante.nombres as nombres','estudiante.dni as dni')
				->join('estudiante','estudiante.id_estudiante','=','alumno_familiar.id_estudiante')
				->find($id);
        return $AlumnoFamiliarModels;


	}

	public function create($request)
    {

	    $AlumnoFamiliarModels = new AlumnoFamiliarModels();
        $AlumnoFamiliarModels->id_alumno_familiar = $request['id_alumno_familiar'];
				$AlumnoFamiliarModels->id_estudiante = $request['id_estudiante'];
				$AlumnoFamiliarModels->depedencia_ud = $request['depedencia_ud'];
        $AlumnoFamiliarModels->movil = $request['movil'];
        $AlumnoFamiliarModels->telefono_fijo = $request['telefono_fijo'];
        $AlumnoFamiliarModels->email = $request['email'];
        $AlumnoFamiliarModels->email_institucion = $request['email_institucion'];
        $AlumnoFamiliarModels->facebook = $request['facebook'];
        $AlumnoFamiliarModels->twitter = $request['twitter'];
        $AlumnoFamiliarModels->instagram = $request['instagram'];
        $AlumnoFamiliarModels->tutoria = $request['tutoria'];
				$AlumnoFamiliarModels->id_persona_vive = $request['id_persona_vive'];
				$AlumnoFamiliarModels->id_ocupacion = $request['id_ocupacion'];
				$AlumnoFamiliarModels->id_dependencia = $request['id_dependencia'];
				$AlumnoFamiliarModels->id_instruccion = $request['id_instruccion'];
				$AlumnoFamiliarModels->id_labora = $request['id_labora'];
				$AlumnoFamiliarModels->id_vivienda = $request['id_vivienda'];
				$AlumnoFamiliarModels->id_financia = $request['id_financia'];
				$AlumnoFamiliarModels->id_conquien_vive = $request['id_conquien_vive'];
        $AlumnoFamiliarModels->date_create = date('Y-m-d H:i:s');
        $AlumnoFamiliarModels->date_update = NULL;
        $AlumnoFamiliarModels->save();
         return $AlumnoFamiliarModels;

	}

	public function update($request,$id)
    {
        $AlumnoFamiliarModels = AlumnoFamiliarModels::find($id);
				//$AlumnoFamiliarModels->id_estudiante = $request['id_estudiante'];
				$AlumnoFamiliarModels->depedencia_ud = $request['depedencia_ud'];
        $AlumnoFamiliarModels->movil = $request['movil'];
        $AlumnoFamiliarModels->telefono_fijo = $request['telefono_fijo'];
        $AlumnoFamiliarModels->email = $request['email'];
        $AlumnoFamiliarModels->email_institucion = $request['email_institucion'];
        $AlumnoFamiliarModels->facebook = $request['facebook'];
        $AlumnoFamiliarModels->twitter = $request['twitter'];
        $AlumnoFamiliarModels->instagram = $request['instagram'];
        $AlumnoFamiliarModels->tutoria = $request['tutoria'];
				$AlumnoFamiliarModels->id_persona_vive = $request['id_persona_vive'];
				$AlumnoFamiliarModels->id_ocupacion = $request['id_ocupacion'];
				$AlumnoFamiliarModels->id_dependencia = $request['id_dependencia'];
				$AlumnoFamiliarModels->id_instruccion = $request['id_instruccion'];
				$AlumnoFamiliarModels->id_labora = $request['id_labora'];
				$AlumnoFamiliarModels->id_vivienda = $request['id_vivienda'];
				$AlumnoFamiliarModels->id_financia = $request['id_financia'];
				$AlumnoFamiliarModels->id_conquien_vive = $request['id_conquien_vive'];
        $AlumnoFamiliarModels->date_update = date('Y-m-d H:i:s');
				$AlumnoFamiliarModels->save();
         return $AlumnoFamiliarModels;
	}

	public function delete($id)
    {
        $AlumnoFamiliarModels = AlumnoFamiliarModels::find($id)->delete();
        return $AlumnoFamiliarModels;

	}




}
