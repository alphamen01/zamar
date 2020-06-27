<?php


namespace App\Repositories\DatosFamiliar;
use App\Models\DatosFamiliar\LaboraModels;

class LaboraRepository
{
        public function combo(){
            $LaboraModels = LaboraModels::select('id_labora','nombre')->get();
            return $LaboraModels;
        }
}
