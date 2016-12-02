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

/*PAGINAS ESTATICAS*/

Route::get('/', function () {
    return view('index');
});

Route::get('/Solicitudes', function () {
    return view('');
});

Route::get('/Servicios', function () {
    return view('');
});

/*Rutas login Social*/

Route::get('auth/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');

Route::get('auth/google', 'GoogleController@redirectToProvider')->name('google.login');
Route::get('auth/google/callback', 'GoogleController@handleProviderCallback');

/*PAGINAS ESTATICAS*/
