<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cargos/', 'CargoController@index');
Route::get('cargos/paginate/{limit}', 'CargoController@paginate');
Route::get('cargos/{cargo}', 'CargoController@show');
Route::post('cargos', 'CargoController@store');
Route::put('cargos/{cargo}', 'ArticleController@update');
Route::delete('cargos/{cargo}', 'ArticleController@delete');
