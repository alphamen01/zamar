<?php

namespace App\Http\Controllers\DatosFamiliar;
use App\Repositories\DatosFamiliar\ViviendaRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViviendaController extends Controller
{
    protected $ViviendaRepository;

    public function  __construct(ViviendaRepository $ViviendaRepository){
        $this->ViviendaRepository = $ViviendaRepository;
    }

    public function combo(){
        $Vivienda  = $this->ViviendaRepository->combo();
        return $Vivienda;
    }



}
