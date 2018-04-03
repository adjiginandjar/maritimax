<?php

namespace App\Http\Controllers;

use App\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\CategoryForm;
use Illuminate\Support\Facades\Log;

class CategoryPostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
      $form = $formBuilder->create(CategoryForm::class, [
          'method' => 'POST',
          'url' => route('cats.store')
      ]);

      return view('si.forms.category.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder,Request $request)
    {
      $form = $formBuilder->create(CategoryForm::class);

      if (!$form->isValid()) {
          return redirect()->back()->withErrors($form->getErrors())->withInput();
      }
      //$categoryPost = CategoryPost::create($request->all());

      return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryPost $categoryPost)
    {
        //
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
