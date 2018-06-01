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
      $cargoModels = CargoModel::paginate(5);
      return  view('si.pages.list.cargomodel',compact('cargoModels'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('si.pages.form.addcargomodel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cargoModel = CargoModel::create($request->all());

      return redirect()->route('cargomodel.index')
                        ->with('success','Creating successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CargoModel  $cargoModel
     * @return \Illuminate\Http\Response
     */
    public function show(CargoModel $cargomodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CargoModel  $cargoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CargoModel $cargomodel)
    {
        return view('si.pages.form.editcargomodel',compact('cargomodel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CargoModel  $cargoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CargoModel $cargomodel)
    {
      $cargomodel->update($request->all());

      return redirect()->route('cargomodel.index')
                        ->with('success','Updating successfully.');
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

    public function indexAPI()
    {
        return CargoModel::all();
    }
}
