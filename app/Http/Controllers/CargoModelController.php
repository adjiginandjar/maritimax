<?php

namespace App\Http\Controllers;

use App\CargoModel;
use Illuminate\Http\Request;

class CargoModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CargoModel::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CargoModel  $cargoModel
     * @return \Illuminate\Http\Response
     */
    public function show(CargoModel $cargoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CargoModel  $cargoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CargoModel $cargoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CargoModel  $cargoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CargoModel $cargoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CargoModel  $cargoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CargoModel $cargoModel)
    {
        //
    }
}
