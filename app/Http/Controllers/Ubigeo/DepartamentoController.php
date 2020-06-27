<?php

namespace App\Http\Controllers\Ubigeo;
use App\Repositories\Ubigeo\DepartamentoRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    protected $DepartamentoRepository;

    public function  __construct(DepartamentoRepository $DepartamentoRepository){
        $this->DepartamentoRepository = $DepartamentoRepository;
    }

    public function combo(){
        $Departamento  = $this->DepartamentoRepository->combo();
        return $Departamento;
    }



}
