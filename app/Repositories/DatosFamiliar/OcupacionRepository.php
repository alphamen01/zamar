<?php


namespace App\Repositories\DatosFamiliar;
use App\Models\DatosFamiliar\OcupacionModels;

class OcupacionRepository
{
        public function combo(){
            $OcupacionModels = OcupacionModels::select('id_ocupacion','nombre')->get();
            return $OcupacionModels;
        }
}
