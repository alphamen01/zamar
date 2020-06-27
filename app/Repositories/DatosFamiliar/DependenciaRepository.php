<?php


namespace App\Repositories\DatosFamiliar;
use App\Models\DatosFamiliar\DependenciaModels;

class DependenciaRepository
{
        public function combo(){
            $DependenciaModels = DependenciaModels::select('id_dependencia','nombre')->get();
            return $DependenciaModels;
        }
}
