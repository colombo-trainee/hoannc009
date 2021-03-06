<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/category', function () {
    return view('frontend.category');
});
Route::get('/detail', function () {
    return view('frontend.detail');
});
Route::get('/face', function () {
    return view('auth.face');
});
//Route::get('/register', function () {
//    return view('frontend.register');
//});
//Route::post('/register',['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', [ 'uses' => 'Auth\AuthController@logout']);
//Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
//Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('auth/redirect/{social}', 'Auth\AuthController@redirect');
Route::get('auth/callback/{social}', 'Auth\AuthController@callback');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/**
 * Backend
*/

Route::get('/admin', function () {
    return view('backend.dashboard');
});