<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\CategoryCargo;
use App\CargoModel;
use App\CharterType;
use App\Http\Resources\CargoResource;
use App\Http\Resources\CargosResource;
use App\Http\Resources\ListCargoSearchResource;
use App\Http\Resources\ListCargoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CargoController extends Controller
{



    //static $limit_fot_list = ['length','width','height','curb_weight','load_capacity'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::paginate(10);
        return view('si.pages.list.cargo',compact('cargos'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryCargos = CategoryCargo::all();
        $cargoModels = CargoModel::all();
        $charterTypes = CharterType::all();
        return view('si.pages.form.addcargo',compact('categoryCargos','cargoModels','charterTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      info($request);
      // $request->request->add(["available_capacity"=>$request['load_capacity']]);
      // $cargo = Cargo::Create($request->all());

      return redirect()->route('cargo.index')
                        ->with('success','Creating successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(cargo $cargo)
    {
        return $cargo->load('imageCargos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(cargo $cargo)
    {
      $categoryCargos = CategoryCargo::all();
      $cargoModels = CargoModel::all();
      $charterTypes = CharterType::all();
        return view('si.pages.form.editcargo',compact('categoryCargos','cargoModels','charterTypes','cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cargo $cargo)
    {
      $cargo->update($request->all());

      return redirect()->route('cargo.index')
                        ->with('success','Updating successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(cargo $cargo)
    {

    }


    /**
     * API Controller
     *
     */

    public function getDetail(cargo $cargo)
    {
        return new CargoResource($cargo);
    }

    public function paginate($limit)
    {
        return ListCargoResource::collection(Cargo::paginate($limit));

    }

    public function search(Request $request,Cargo $cargos)
    {
        $limit = 10;
        $query = DB::table('cargos')
                ->join('cargo_models', 'cargos.cargo_model_id', '=', 'cargo_models.id')
                ->join('charter_types', 'cargos.charter_type_id', '=', 'charter_types.id')
                ->join('category_cargos', 'cargos.category_cargo_id', '=', 'category_cargos.id')
                ->select('cargos.*', 'cargo_models.name as cargo_model','charter_types.name as charter_type','category_cargos.name as category_cargo');

        $query->where('booking_status', 'available');
        $query->where('cargos.publish_status', 'publish');
        if($request->has('description')){
          $query->where('description','like','%'.$request->input('description').'%');
        }
        if($request->has('cargo_model_id')){
          $query->where('cargo_model_id', $request->input('cargo_model_id'));
        }
        if($request->has('charter_type_id')){
          $query->where('charter_type_id', $request->input('charter_type_id'));
        }
        if($request->has('available_date')){
          $query->where('available_start', '<=',$request->input('available_date'));
        }
        if($request->has('available_date')){

          $query->where('available_end', '>=',$request->input('available_date'));
        }
        if($request->has('location')){
          $query->where('location', $request->input('location'));
        }
        if($request->has('city')){
          $query->where('city', $request->input('city'));
        }
        if($request->has('available_capacity')){
          $query->where('available_capacity', '>=',$request->input('available_capacity'));
        }
        if($request->has('year_build')){
          $query->where('year_build', $request->input('year_build'));
        }
        if($request->has('booking_type')){
          $query->where('booking_type', $request->input('booking_type'))->get();
        }

        if($request->has('limit')){
          $limit = $request->input('limit');
        }

        $cargos = $query->orderBy('cargos.created_at', 'DESC')->paginate($limit);
        $cargos = ListCargoSearchResource::collection($cargos);
        $cargos->appends($request->toArray());
        return $cargos;

    }
}
