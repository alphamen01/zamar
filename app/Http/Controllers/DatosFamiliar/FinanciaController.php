<?php

namespace App\Http\Controllers\DatosFamiliar;
use App\Repositories\DatosFamiliar\FinanciaRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanciaController extends Controller
{
    protected $FinanciaRepository;

    public function  __construct(FinanciaRepository $FinanciaRepository){
        $this->FinanciaRepository = $FinanciaRepository;
    }

    public function combo(){
        $Financia  = $this->FinanciaRepository->combo();
        return $Financia;
    }



}
