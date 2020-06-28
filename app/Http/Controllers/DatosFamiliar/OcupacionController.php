<?php

namespace App\Http\Controllers\DatosFamiliar;
use App\Repositories\DatosFamiliar\OcupacionRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OcupacionController extends Controller
{
    protected $OcupacionRepository;

    public function  __construct(OcupacionRepository $OcupacionRepository){
        $this->OcupacionRepository = $OcupacionRepository;
    }

    public function combo(){
        $Ocupacion  = $this->OcupacionRepository->combo();
        return $Ocupacion;
    }



}
