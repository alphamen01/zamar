<?php

namespace App\Http\Controllers\DatosFamiliar;
use App\Repositories\DatosFamiliar\DependenciaRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DependenciaController extends Controller
{
    protected $DependenciaRepository;

    public function  __construct(DependenciaRepository $DependenciaRepository){
        $this->DependenciaRepository = $DependenciaRepository;
    }

    public function combo(){
        $Dependencia  = $this->DependenciaRepository->combo();
        return $Dependencia;
    }



}
