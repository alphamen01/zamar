<?php

namespace App\Http\Controllers\Diagnostico;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Zamar
use App\Repositories\Diagnostico\DiagnosticoRepository;
use App\Http\Requests\Diagnostico\DiagnosticoCreateRequest;
use App\Http\Requests\Diagnostico\DiagnosticoUpdateRequest;


class DiagnosticoController extends Controller
{


    private $DiagnosticoRepository;

    public function __construct(DiagnosticoRepository $DiagnosticoRepository)
    {
        $this->DiagnosticoRepository = $DiagnosticoRepository;
    }

    public function index(Request $request)
    {
        if($request->ajax()) {
            $Diagnostico = $this->DiagnosticoRepository->all();
            return $Diagnostico;
        }else{
            return view('layouts/404');
        }
    }

    public function create()
    {


    }


    public function store(DiagnosticoCreateRequest $request)
    {
        $Diagnostico = $this->DiagnosticoRepository->create($request);
        if ($Diagnostico){
            return response()->json(['success'=>'true']);
        }
        else
        {
          return response()->json(['success'=>'false']);
        }
    }


    public function show($id)
    {

    }

    public function edit($id)
    {
         $Diagnostico = $this->DiagnosticoRepository->find($id);
         return $Diagnostico;
    }

    public function update(DiagnosticoUpdateRequest $request, $id)
    {
        if ($request->ajax())
        {
            $Diagnostico = $this->DiagnosticoRepository->update($request->all(),$id);
            if ($Diagnostico){
                return response()->json(['success'=>'true']);
            }
        }
    }

    public function destroy($id)
    {
        $Diagnostico = $this->DiagnosticoRepository->delete($id);
        if ($Diagnostico){
            return response()->json(['success'=>'true']);
        }

    }
}
