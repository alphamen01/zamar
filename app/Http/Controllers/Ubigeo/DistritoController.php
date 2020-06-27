<?php

namespace App\Http\Controllers\Ubigeo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Ubigeo\DistritoRepository;

class DistritoController extends Controller
{
    protected $DistritoRepository;

    public function  __construct(DistritoRepository $DistritoRepository){
        $this->DistritoRepository = $DistritoRepository;
    }

    public function combo($departamento,$provincia){
        $Distrito  = $this->DistritoRepository->combo($departamento,$provincia);
        return $Distrito;
    }
}
