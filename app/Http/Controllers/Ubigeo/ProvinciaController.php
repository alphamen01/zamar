<?php

namespace App\Http\Controllers\Ubigeo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Ubigeo\ProvinciaRepository;


class ProvinciaController extends Controller
{
    protected $ProvinciaRepository;

    public function  __construct(ProvinciaRepository $ProvinciaRepository){
        $this->ProvinciaRepository = $ProvinciaRepository;
    }

    public function combo($departamento){
        $Provincia  = $this->ProvinciaRepository->combo($departamento);
        return $Provincia;
    }
}
