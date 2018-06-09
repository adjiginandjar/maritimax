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
Route::get('/si', 'CargoController@index')->middleware('auth');
/**
*
* SI Category Cargo
*/
Route::resource('/si/categorycargo', 'CategoryCargoController')->middleware('auth');
Route::resource('/si/categorypost', 'CategoryPostController')->middleware('auth');
Route::resource('/si/cargomodel', 'CargoModelController')->middleware('auth');
Route::resource('/si/cargo', 'CargoController')->middleware('auth');
Route::resource('/si/post', 'PostController')->middleware('auth');
Route::resource('/si/booking', 'BookingController')->middleware('auth');
Route::resource('/si/contactus', 'ContactUsController')->middleware('auth');

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
Route::get('/si/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/si/login', 'Auth\LoginController@login');
Route::post('/si/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/si/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/si/register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('/si/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/si/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/si/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/si/password/reset', 'Auth\ResetPasswordController@reset');
// Route::resource('/si/login','LoginController');
// Route::get( '/si/login','app\Http\Controllers\Auth\LoginController')->name('login');
// Route::post('/si/logout','App\Http\Controllers\Auth\LoginController')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');
