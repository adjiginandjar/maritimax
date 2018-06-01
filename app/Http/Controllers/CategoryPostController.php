<?php

namespace App\Http\Controllers;

use App\CategoryPost;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categoryPosts = CategoryPost::paginate(5);
      return  view('si.pages.list.categorypost',compact('categoryPosts'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('si.pages.form.addcategorypost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $categoryPost = CategoryPost::create($request->all());

      return redirect()->route('categorypost.index')
                        ->with('success','Creating successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryPost $categorypost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPost $categorypost)
    {
        return view('si.pages.form.editcategorypost',compact('categorypost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryPost $categorypost)
    {
      $categorypost->update($request->all());

      return redirect()->route('categorypost.index')
                        ->with('success','Updating successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryPost $categoryPost)
    {
        //
    }
}
