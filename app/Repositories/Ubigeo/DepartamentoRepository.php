<?php


namespace App\Repositories\Ubigeo;
use App\Models\Ubigeo\DepartamentoModels;

class DepartamentoRepository
{
        public function combo(){
            $DepartamentoModels = DepartamentoModels::select('id_departamento','nombre')->get();
            return $DepartamentoModels;
        }
}
