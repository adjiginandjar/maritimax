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

Route::middleware(['auth:api','cors'])->get('/user', function (Request $request) {
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
Route::post('posts', 'PostController@store');
Route::put('posts/{post}', 'PostController@update');
Route::delete('posts/{post}', 'PostController@delete');

Route::post('/si/posts/unpublish', 'PostController@unpublish');

/**
*
* User API Controller
*/
Route::post('user/register','UserController@store');
Route::post('user/register/google','UserController@storeGoogle');
Route::get('user/fetchgoogle','UserController@getUser');
Route::post('user/forgot-password','UserController@forgotPassword');
Route::post('user/reset-password','UserController@resetPassword');
Route::post('user/change-password','UserController@changePassword')->middleware('auth:api');
// Route::get('callback/google', 'Auth\LoginController@handleProviderCallback');


/**
* Booking API Controller
*
*/

Route::post('booking/process', 'BookingController@store')->middleware('auth:api');
Route::get('user/booking', 'BookingController@getListBooking')->middleware('auth:api');
Route::get('booking/check', 'BookingController@isBooked')->middleware('auth:api');

Route::post('/si/booking/approve', 'BookingController@apporve');
Route::post('/si/booking/reject', 'BookingController@reject');

/**
* Contact Us API Controller
*
*/
Route::post('booking/request', 'ContactUsController@store');


/**
* Category Cargo
*
*/
Route::get('category-cargo', 'CategoryCargoController@indexAPI');
/**
* Model Cargo
*
*/
Route::get('model-cargo', 'CargoModelController@indexAPI');
/**
* Charter Type
*
*/
Route::get('charter-type', 'CharterTypeController@indexAPI');

/**
*
* Cities
*/
Route::get('cities', 'CitiesController@autocomplete');

/**
* Upload Controller
*
*/

Route::post('upload/single', 'UploadController@uploadSingle');


/**
 * SI Controller Cargo
 */

 Route::post('/si/cargo/unpublish', 'CargoController@unpublish');
 Route::post('/si/cargo/publish', 'CargoController@publish');
