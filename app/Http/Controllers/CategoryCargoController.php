<?php

namespace App\Http\Controllers;

use App\CategoryCargo;
use Illuminate\Http\Request;

class CategoryCargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryCargos = CategoryCargo::paginate(5);
        return  view('si.pages.list.categorycargo',compact('categoryCargos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('si.pages.form.addcategorycargo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $categoryCargo = CategoryCargo::create($request->all());

      return redirect()->route('categorycargo.index')
                        ->with('success','Creating successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryCargo  $categoryCargo
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryCargo $categoryCargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryCargo  $categoryCargo
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryCargo $categorycargo)
    {
        return view('si.pages.form.editcategorycargo',compact('categorycargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryCargo  $categoryCargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryCargo $categorycargo)
    {
        $categorycargo->update($request->all());

        return redirect()->route('categorycargo.index')
                          ->with('success','Updating successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryCargo  $categoryCargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryCargo $categorycargo)
    {
        //
    }

    /**
     * API Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAPI()
    {
        return CategoryCargo::all();
    }
}
