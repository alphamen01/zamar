<?php


namespace App\Repositories\DatosFamiliar;
use App\Models\DatosFamiliar\ConquienViveModels;

class ConquienViveRepository
{
        public function combo(){
            $ConquienViveModels = ConquienViveModels::select('id_conquien_vive','nombre')->get();
            return $ConquienViveModels;
        }
}
