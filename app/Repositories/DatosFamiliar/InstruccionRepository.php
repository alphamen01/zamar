<?php


namespace App\Repositories\DatosFamiliar;
use App\Models\DatosFamiliar\InstruccionModels;

class InstruccionRepository
{
        public function combo(){
            $InstruccionModels = InstruccionModels::select('id_instruccion','nombre')->get();
            return $InstruccionModels;
        }
}
