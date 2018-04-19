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
/**
* Cargo API Controller
*
*/
Route::get('cargos/', 'CargoController@index');
Route::get('cargos/paginate/{limit}', 'CargoController@paginate');
Route::get('cargo/{cargo}', 'CargoController@getDetail');
Route::get('cargos/{cargo}', 'CargoController@show');
Route::post('cargos', 'CargoController@store');
Route::put('cargos/{cargo}', 'CargoController@update');
Route::delete('cargos/{cargo}', 'CargoController@delete');

/**
* Article API Controller
*
*/
Route::get('posts/', 'PostController@index');
Route::get('posts/paginate/{limit}', 'PostController@paginate');
Route::get('posts/{post}', 'PostController@getDetail');
Route::get('posts/{post}', 'PostController@show');
Route::post('posts', 'PostController@store');
Route::put('posts/{post}', 'PostController@update');
Route::delete('posts/{post}', 'PostController@delete');
