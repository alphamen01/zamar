<?php


namespace App\Repositories\DatosFamiliar;
use App\Models\DatosFamiliar\FinanciaModels;

class FinanciaRepository
{
        public function combo(){
            $FinanciaModels = FinanciaModels::select('id_financia','nombre')->get();
            return $FinanciaModels;
        }
}
