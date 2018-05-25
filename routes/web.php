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
    return view('welcome');
});
Route::get('/si', function () {
    return view('si/layouts/baselayout');
});
Route::get('/categorycargo', function () {
    return view('si/pages/categorycargo');
});
Route::get('/cargo', function () {
    return view('si/pages/cargo');
});

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
Route::get('callback/google', 'Auth\LoginController@handleProviderCallback');
