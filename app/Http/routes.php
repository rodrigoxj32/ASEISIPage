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

/*Route::get('auth/login', [
	'uses'=>'Auth\AuthController@getLogin',
	'as' => 'login'	
	]);*/

/*Route::get('logout', [
	'uses'=>'Auth\AuthController@getLogout',
	'as' => 'logout'	
	]);*/


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

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');