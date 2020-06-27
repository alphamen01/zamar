<?php


namespace App\Repositories\DatosFamiliar;
use App\Models\DatosFamiliar\PersonasViveModels;

class PersonasViveRepository
{
        public function combo(){
            $PersonasViveModels = PersonasViveModels::select('id_persona_vive','nombre')->get();
            return $PersonasViveModels;
        }
}
