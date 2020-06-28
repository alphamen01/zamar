<?php

namespace App\Http\Controllers\DatosFamiliar;
use App\Repositories\DatosFamiliar\InstruccionRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstruccionController extends Controller
{
    protected $InstruccionRepository;

    public function  __construct(InstruccionRepository $InstruccionRepository){
        $this->InstruccionRepository = $InstruccionRepository;
    }

    public function combo(){
        $Instruccion  = $this->InstruccionRepository->combo();
        return $Instruccion;
    }



}
