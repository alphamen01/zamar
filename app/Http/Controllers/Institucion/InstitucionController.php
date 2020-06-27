<?php

namespace App\Http\Controllers\Institucion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Zamar
use App\Repositories\Institucion\InstitucionRepository;
use App\Http\Requests\Institucion\InstitucionCreateRequest;
use App\Http\Requests\Institucion\InstitucionUpdateRequest;


class InstitucionController extends Controller
{


    public function __construct(InstitucionRepository $InstitucionRepository)
    {
        $this->InstitucionRepository = $InstitucionRepository;
    }

    public function index(Request $request)
    {
        if($request->ajax()) {
            $Institucion = $this->InstitucionRepository->all();
            return $Institucion;
        }else{
            return view('layouts/404');
        }
    }

    public function create()
    {


    }

     public function combo(){
        $Institucion  = $this->InstitucionRepository->combo();
        return $Institucion;
    }


    public function store(InstitucionCreateRequest $request)
    {
        $Instituto = $this->InstitucionRepository->create($request);
        if ($Instituto){
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
         $Instituto = $this->InstitucionRepository->find($id);
         return $Instituto;
    }

    public function update(InstitucionUpdateRequest $request, $id)
    {
        if ($request->ajax())
        {
            $Instituto = $this->InstitucionRepository->update($request->all(),$id);
            if ($Instituto){
                return response()->json(['success'=>'true']);
            }
        }
    }

    public function destroy($id)
    {
        $Instituto = $this->InstitucionRepository->delete($id);
        if ($Instituto){
            return response()->json(['success'=>'true']);
        }

    }
}
