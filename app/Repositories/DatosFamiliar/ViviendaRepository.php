<?php


namespace App\Repositories\DatosFamiliar;
use App\Models\DatosFamiliar\ViviendaModels;

class ViviendaRepository
{
        public function combo(){
            $ViviendaModels = ViviendaModels::select('id_vivienda','nombre')->get();
            return $ViviendaModels;
        }
}
