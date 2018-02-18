<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\Http\Resources\CargoResource;
use App\Http\Resources\CargosResource;
use App\Http\Resources\ListCargoResource;
use Illuminate\Http\Request;

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
        return Cargo::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paginate($limit)
    {
        return ListCargoResource::collection(Cargo::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cargo = Cargo::create($request->all());

      return response()->json($cargo, 201);
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
        return $cargo;
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

      return response()->json($cargo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(cargo $cargo)
    {
        $cargo->delete();

        return response()->json(null,204);
    }
}
