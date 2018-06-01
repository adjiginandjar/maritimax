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

// Route::middleware('auth:api')->get('/user/google', function (Request $request) {
//     return $request->user();
// });
/**
* Cargo API Controller
*
*/
Route::get('cargos/paginate/{limit}', 'CargoController@paginate');
Route::get('cargos/filter', 'CargoController@search');
Route::get('cargo/{cargo}', 'CargoController@getDetail');

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

/**
*
* User API Controller
*/
Route::post('user/register','UserController@store');
Route::post('user/register/google','UserController@storeGoogle');
Route::get('user/fetchgoogle','UserController@getUser');
Route::post('user/forgot-password','UserController@forgotPassword');
Route::post('user/reset-password','UserController@resetPassword');
// Route::get('callback/google', 'Auth\LoginController@handleProviderCallback');


/**
* Booking API Controller
*
*/

Route::post('booking/process', 'BookingController@store')->middleware('auth:api');
Route::get('user/booking', 'BookingController@getListBooking')->middleware('auth:api');


/**
* Category Cargo
*
*/
Route::get('category-cargo', 'CategoryCargoController@indexAPI');
/**
* Model Cargo
*
*/
Route::get('model-cargo', 'CargoModelController@index');
/**
* Charter Type
*
*/
Route::get('charter-type', 'CharterTypeController@index');

/**
*
* Cities
*/
Route::get('cities', 'CitiesController@autocomplete');
