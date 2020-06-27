<?php

namespace App\Repositories\Sucursal;
use App\Models\Sucursal\SucursalModels;


class SucursalRepository
{

	public function all()
    {
		$SucursalModels = SucursalModels::select()->get();
		return $SucursalModels;
	}

	public function find($id)
    {
        $SucursalModels = SucursalModels::find($id);
        return $SucursalModels;
	}

	public function create($request)
    {

	    $SucursalModels = new SucursalModels();
        $SucursalModels->id_institucion = $request['id_institucion'];
        $SucursalModels->nombre = $request['nombre'];
        $SucursalModels->direccion = $request['direccion'];
        $SucursalModels->id_departamento = $request['id_departamento'];
        $SucursalModels->id_provincia = $request['id_provincia'];
        $SucursalModels->id_distrito = $request['id_distrito'];
        $SucursalModels->telefono = $request['telefono'];
        $SucursalModels->sitio_web = $request['sitio_web'];
        $SucursalModels->email = $request['email'];
        $SucursalModels->user_created = 'Admin';
        $SucursalModels->date_created = date('Y-m-d H:i:s');
        $SucursalModels->user_update = NULL;
        $SucursalModels->date_update = NULL;
        $SucursalModels->user_deleted = NULL;
        $SucursalModels->date_deleted = NULL;
        $SucursalModels->state = NULL;
        $SucursalModels->save();
         return $SucursalModels;

	}

	public function update($request,$id)
    {
        $SucursalModels = SucursalModels::find($id);
        $SucursalModels->id_institucion = $request['id_institucion'];
        $SucursalModels->nombre = $request['nombre'];
        $SucursalModels->direccion = $request['direccion'];
        $SucursalModels->id_departamento = $request['id_departamento'];
        $SucursalModels->id_provincia = $request['id_provincia'];
        $SucursalModels->id_distrito = $request['id_distrito'];
        $SucursalModels->telefono = $request['telefono'];
        $SucursalModels->sitio_web = $request['sitio_web'];
        $SucursalModels->email = $request['email'];
        $SucursalModels->user_update = 'Admin';
        $SucursalModels->date_update = date('Y-m-d H:i:s');
        $SucursalModels->user_deleted = NULL;
        $SucursalModels->date_deleted = NULL;
        $SucursalModels->state = NULL;
		$SucursalModels->save();
         return $SucursalModels;
	}

	public function delete($id)
    {
        $SucursalModels = SucursalModels::find($id)->delete();
        return $SucursalModels;

	}




}
