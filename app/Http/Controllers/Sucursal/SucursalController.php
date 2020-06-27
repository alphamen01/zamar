<?php

namespace App\Http\Controllers\Sucursal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Zamar
use App\Repositories\Sucursal\SucursalRepository;
use App\Http\Requests\Sucursal\SucursalCreateRequest;
use App\Http\Requests\Sucursal\SucursalUpdateRequest;


class SucursalController extends Controller
{


    private $SucursalRepository;

    public function __construct(SucursalRepository $SucursalRepository)
    {
        $this->SucursalRepository = $SucursalRepository;
    }

    public function index(Request $request)
    {
        if($request->ajax()) {
            $Sucursal = $this->SucursalRepository->all();
            return $Sucursal;
        }else{
            return view('layouts/404');
        }
    }

    public function create()
    {


    }


    public function store(SucursalCreateRequest $request)
    {
        $Sucursal = $this->SucursalRepository->create($request);
        if ($Sucursal){
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
         $Sucursal = $this->SucursalRepository->find($id);
         return $Sucursal;
    }

    public function update(SucursalUpdateRequest $request, $id)
    {
        if ($request->ajax())
        {
            $Sucursal = $this->SucursalRepository->update($request->all(),$id);
            if ($Sucursal){
                return response()->json(['success'=>'true']);
            }
        }
    }

    public function destroy($id)
    {
        $Sucursal = $this->SucursalRepository->delete($id);
        if ($Sucursal){
            return response()->json(['success'=>'true']);
        }

    }
}
