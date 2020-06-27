<?php

namespace App\Http\Controllers\AlumnoFamiliar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Zamar
use App\Repositories\AlumnoFamiliar\AlumnoFamiliarRepository;
//use App\Http\Requests\AlumnoFamiliar\AlumnoFamiliarCreateRequest;
//use App\Http\Requests\AlumnoFamiliar\AlumnoFamiliarUpdateRequest;


class AlumnoFamiliarController extends Controller
{


    private $AlumnoFamiliarRepository;

    public function __construct(AlumnoFamiliarRepository $AlumnoFamiliarRepository)
    {
        $this->AlumnoFamiliarRepository = $AlumnoFamiliarRepository;
    }

    public function index(Request $request)
    {
        if($request->ajax()) {
            $AlumnoFamiliar = $this->AlumnoFamiliarRepository->all();
            return $AlumnoFamiliar;
        }else{
            return view('layouts/404');
        }
    }

    public function create()
    {


    }


    public function store(AlumnoFamiliarCreateRequest $request)
    {
        $AlumnoFamiliar = $this->AlumnoFamiliarRepository->create($request);
        if ($AlumnoFamiliar){
            return response()->json(['success'=>'true']);
        }
        else
        {
          return response()->json(['success'=>'false']);
        }
    }


    public function show($id)
    {
      $AlumnoFamiliar = $this->AlumnoFamiliarRepository->find($id);
       return $AlumnoFamiliar;
    }

    public function edit($id)
    {
         $AlumnoFamiliar = $this->AlumnoFamiliarRepository->find($id);
         return $AlumnoFamiliar;
    }

    public function update(AlumnoFamiliarUpdateRequest $request, $id)
    {
        if ($request->ajax())
        {
            $AlumnoFamiliar = $this->AlumnoFamiliarRepository->update($request->all(),$id);
            if ($AlumnoFamiliar){
                return response()->json(['success'=>'true']);
            }
        }
    }

    public function destroy($id)
    {
        $AlumnoFamiliar = $this->AlumnoFamiliarRepository->delete($id);
        if ($AlumnoFamiliar){
            return response()->json(['success'=>'true']);
        }

    }
}
