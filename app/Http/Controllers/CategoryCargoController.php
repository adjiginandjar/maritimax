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
        return CategoryCargo::all();
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
    public function edit(CategoryCargo $categoryCargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryCargo  $categoryCargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryCargo $categoryCargo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryCargo  $categoryCargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryCargo $categoryCargo)
    {
        //
    }
}
