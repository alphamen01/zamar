<?php

namespace App\Repositories\Institucion;
use App\Models\Institucion\InstitucionModels;


class InstitucionRepository
{

	public function all()
    {
		$InstitucionModels = InstitucionModels::select()->get();
		return $InstitucionModels;
	}


	public function combo()
    {
            $InstitucionModels = InstitucionModels::select('id_institucion','nombre_ies')->get();
            return $InstitucionModels;
	}


	public function find($id)
    {
        $InstitucionModels = InstitucionModels::find($id);
        return $InstitucionModels;
	}

	public function create($request){

        $InstitucionModels = new InstitucionModels();
        $InstitucionModels->nombre_ies = $request['nombre_ies'];
        $InstitucionModels->abreviatura = $request['abreviatura'];
        $InstitucionModels->direccion = $request['direccion'];
        $InstitucionModels->id_departamento = $request['id_departamento'];
        $InstitucionModels->id_provincia = $request['id_provincia'];
        $InstitucionModels->id_distrito = $request['id_distrito'];
        $InstitucionModels->telefono = $request['telefono'];
        $InstitucionModels->movil = $request['movil'];
        $InstitucionModels->email = $request['email'];
        $InstitucionModels->sitio_web = $request['sitio_web'];
        $InstitucionModels->codigo_modular = $request['codigo_modular'];
        $InstitucionModels->tipo_gestion = $request['tipo_gestion'];
        $InstitucionModels->dre_gre = $request['dre_gre'];
        $InstitucionModels->resolucion_lic = $request['resolucion_lic'];
        $InstitucionModels->resolucion_renova = $request['resolucion_renova'];
        $InstitucionModels->facebook = $request['facebook'];
        $InstitucionModels->twitter = $request['twitter'];
        $InstitucionModels->imagen = '';
        $InstitucionModels->estado = '';
        $InstitucionModels->user_created = 'Admin';
        $InstitucionModels->date_created = date('Y-m-d H:i:s');
        $InstitucionModels->user_update = NULL;
        $InstitucionModels->date_update = NULL;
        $InstitucionModels->user_deleted = NULL;
        $InstitucionModels->date_deleted = NULL;
        $InstitucionModels->state = NULL;
         $InstitucionModels->save();
         return $InstitucionModels;

	}

	public function update($request,$id)
    {

        $InstitucionModels = InstitucionModels::find($id);
        $InstitucionModels->nombre_ies = $request['nombre_ies'];
        $InstitucionModels->abreviatura = $request['abreviatura'];
        $InstitucionModels->direccion = $request['direccion'];
        $InstitucionModels->id_departamento = $request['id_departamento'];
        $InstitucionModels->id_provincia = $request['id_provincia'];
        $InstitucionModels->id_distrito = $request['id_distrito'];
        $InstitucionModels->telefono = $request['telefono'];
        $InstitucionModels->movil = $request['movil'];
        $InstitucionModels->email = $request['email'];
        $InstitucionModels->sitio_web = $request['sitio_web'];
        $InstitucionModels->codigo_modular = $request['codigo_modular'];
        $InstitucionModels->tipo_gestion = $request['tipo_gestion'];
        $InstitucionModels->dre_gre = $request['dre_gre'];
        $InstitucionModels->resolucion_lic = $request['resolucion_lic'];
        $InstitucionModels->resolucion_renova = $request['resolucion_renova'];
        $InstitucionModels->facebook = $request['facebook'];
        $InstitucionModels->twitter = $request['twitter'];
        $InstitucionModels->imagen = '';
        $InstitucionModels->estado = '';
        $InstitucionModels->user_update = 'Admin';
        $InstitucionModels->date_update = date('Y-m-d H:i:s');
        $InstitucionModels->user_deleted = NULL;
        $InstitucionModels->date_deleted = NULL;
        $InstitucionModels->state = NULL;
		$InstitucionModels->save();
         return $InstitucionModels;
	}

	public function delete($id)
    {
        $InstitucionModels = InstitucionModels::find($id)->delete();
        return $InstitucionModels;

	}




}
