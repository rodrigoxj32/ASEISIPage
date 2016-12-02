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


Route::get('home',[
	'uses' => 'UserController@index',
	'as' => 'home'
		]);

/*PAGINAS ESTATICAS*/

// Authentication routes..
Route::get('login', [
	'uses'=>'Auth\AuthController@getLogin',
	'as' => 'login'	
	]);


Route::post('login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', [
	'uses'=>'UserController@create',
	'as' => 'register'	
	]);

Route::post('guardarUsuario',[
        'uses' => 'UserController@store', 
        'as' => 'auth.register'
        ]);

Route::post('register', 'Auth\AuthController@postRegister');


// Password reset routes...
Route::get('reset', [
	'uses'=>'UserController@reset',
	'as' => 'reset'	
	]);

Route::post('resetPassword',[
        'uses' => 'UserController@Resetstore', 
        'as' => 'auth.reset'
        ]);


Route::get('evento',[
	'uses' => 'EventoController@index',
	'as' => 'evento'
		]);