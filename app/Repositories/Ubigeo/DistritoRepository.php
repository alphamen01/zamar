<?php


namespace App\Repositories\Ubigeo;
use App\Models\Ubigeo\DistritoModels;

class DistritoRepository
{
        public function combo($departamento,$provincia){
            $DistritoModels = DistritoModels::select('id_distrito','nombre')->where('id_departamento','=',$departamento)->where('id_provincia','=',$provincia)->get();
            return $DistritoModels;
        }
}
