<?php


namespace App\Repositories\Ubigeo;
use App\Models\Ubigeo\ProvinciaModels;

class ProvinciaRepository
{
        public function combo($departamento){
            $ProvinciaModels = ProvinciaModels::select('id_provincia','nombre')->where('id_departamento',$departamento)->distinct()->get();
            return $ProvinciaModels;
        }
}
