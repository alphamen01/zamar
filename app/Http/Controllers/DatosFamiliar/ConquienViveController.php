<?php

namespace App\Http\Controllers\DatosFamiliar;
use App\Repositories\DatosFamiliar\ConquienViveRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConquienViveController extends Controller
{
    protected $ConquienViveRepository;

    public function  __construct(ConquienViveRepository $ConquienViveRepository){
        $this->ConquienViveRepository = $ConquienViveRepository;
    }

    public function combo(){
        $ConquienVive  = $this->ConquienViveRepository->combo();
        return $ConquienVive;
    }



}
