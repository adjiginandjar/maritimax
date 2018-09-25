<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CitiesResource;
use App\Cities;

class CitiesController extends Controller
{
  public function autocomplete(Request $request,Cities $cities)
  {
   /*  $cities = $cities->newQuery();
    if($request->has('keyword')){
      $cities->where('name','like', '%'.$request->input('keyword').'%')->get();
    } */
    return CitiesResource::collection($cities->get());
    //return $cities->get();
  }
}
