<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;

Route::get('/', function () {
    return view('redirect');
});
Route::get('/google', function () {
    return view('redirect');
});


/**
*
* SI
*/
Route::get('/si', 'CargoController@index');
/**
*
* SI Category Cargo
*/
Route::resource('/si/categorycargo', 'CategoryCargoController');
Route::resource('/si/categorypost', 'CategoryPostController');
Route::resource('/si/cargomodel', 'CargoModelController');
Route::resource('/si/cargo', 'CargoController');
Route::resource('/si/post', 'PostController');
Route::resource('/si/booking', 'BookingController');

// Route::get('/si/categorycargo', 'CategoryCargoController@index');
// Route::get('/si/categorycargo/add', 'CategoryCargoController@create');
// Route::get('/si/categorycargo/edit/{$categoryCargo}', 'CategoryCargoController@edit');
// Route::post('/si/categorycargo/save', 'CategoryCargoController@store');

Route::get('/tuts', function () {
    return view('si/layouts/example');
});

Route::get('cat/create', [
    'uses' => 'CategoryPostController@create',
    'as' => 'category.create'
]);

Route::post('cats', [
    'uses' => 'CategoryPostController@store',
    'as' => 'cats.store'
]);

Route::get('redirect/google', 'Auth\LoginController@redirectToProvider');

Route::get('/email','UserController@testEmail');

// Route::get('callback/google', 'Auth\LoginController@handleProviderCallback');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
