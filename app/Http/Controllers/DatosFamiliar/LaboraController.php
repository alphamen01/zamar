<?php

namespace App\Http\Controllers\DatosFamiliar;
use App\Repositories\DatosFamiliar\LaboraRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaboraController extends Controller
{
    protected $LaboraRepository;

    public function  __construct(LaboraRepository $LaboraRepository){
        $this->LaboraRepository = $LaboraRepository;
    }

    public function combo(){
        $Labora  = $this->LaboraRepository->combo();
        return $Labora;
    }



}
