<?php

namespace App\Http\Controllers\DatosFamiliar;
use App\Repositories\DatosFamiliar\PersonasViveRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonasViveController extends Controller
{
    protected $PersonasViveRepository;

    public function  __construct(PersonasViveRepository $PersonasViveRepository){
        $this->PersonasViveRepository = $PersonasViveRepository;
    }

    public function combo(){
        $PersonasVive  = $this->PersonasViveRepository->combo();
        return $PersonasVive;
    }



}
