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

Route::get('auth/google', 'GoogleController@redirectToProvider')->name('google.login');
Route::get('auth/google/callback', 'GoogleController@handleProviderCallback');

Route::get('auth/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');

Route::post('login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');




/*RUTAS PARA EVENTO*/
Route::get('/evento',[
	'uses' => 'EventoController@show',
	'as' => 'eventoIndex'
		]);


Route::get('verEvento/{evento}/ver', [
    'uses' => 'EventoController@verEvento',
    'as'    => 'verEvento'
    ]);


Route::post('/guardarComentario',[
        'uses' => 'ComentarioController@store',
        'as' => 'guardarComentario'
        ]);


Route::get('/publicidad',[
	'uses' => 'EventoController@show2',
	'as' => 'publicidadIndex'
		]);

/*FIN DE RUTA PARA EVENTOS*/



/*RUTAS PARA DOCUMENTOS*/

Route::get('/verDocumento',[
	'uses' => 'DocumentosController@index',
	'as' => 'documentoIndex'
		]);

/*FIN DE RUTAS PARA DOCUMENTOS*/



/*INICIO DE RUTAS PARA EVENTO TIEMPO*/

Route::get('/tiempo',[
	'uses' => 'TiempoController@index',
	'as' => 'tiempoIndex'
		]);

/*FIN DE RUTAS PARA EVENTO TIEMPO*/




Route::group(['middleware'=>['auth','Administrador']],function(){

/* INICIO RUTAS DE ADMINISTRACION DE USUARIOS*/
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

Route::get('verUsuarios', [
	'uses'=>'UserController@show',
	'as' => 'verUsuarios'
	]);

Route::get('eliminarUsuario/{id}/destroy',[
    'uses' => 'UserController@destroy',
    'as' => 'eliminarUsuario'
    ]);

Route::post('resetPassword',[
        'uses' => 'UserController@Resetstore',
        'as' => 'auth.reset'
        ]);
/* FIN RUTAS DE ADMINISTRACION DE USUARIOS*/


/*INICIO RUTAS ADMINISTRACION DE EVENTOS Y PUBLICIDAD*/

Route::get('/createBlog',[	
	'uses' => 'EventoController@index',
	'as' => 'eventoCreate'
		]);
Route::post('/guardarBlog',[
        'uses' => 'EventoController@store',
        'as' => 'guardarBlog'
        ]);

Route::get('eliminarComentario/{id}/destroy',[
        'uses' => 'ComentarioController@destroy',
        'as' => 'eliminarComentario'
        ]);
Route::get('eliminarEvento/{id}/destroy',[
        'uses' => 'EventoController@destroy',
        'as' => 'eliminarEvento'
        ]);

/*FIN RUTAS ADMINISTRACION DE EVENTOS Y PUBLICIDAD*/


/*INICIO RUTAS ADMINISTRACION DOCUMENTOS*/
	Route::get('/crearDocumento',[
	'uses' => 'DocumentosController@show',
	'as' => 'documentosCreate'
		]);

	Route::post('/guardarDocumento',[
    'uses' => 'DocumentosController@store',
 	'as' => 'guardarDocumento'
        ]);

	Route::get('eliminarDocumento/{id}/destroy',[
        'uses' => 'DocumentosController@destroy',
        'as' => 'eliminarDocumento'
        ]);

	Route::get('editar/{id}/edit', [
		'uses' => 'DocumentosController@edit',
	    'as' => 'editarDocumento'
	        ]);

	Route::put('cambiar/{id}', [
	    'uses' => 'DocumentosController@update',
	    'as' => 'updateDocumento'
	        ]);

/*FIN RUTAS ADMINISTRACION DOCUMENTOS*/



/*INICIO RUTAS ADMINISTRACION DE EVENTO DE TIEMPO*/

Route::get('/createTiempo',[
	'uses' => 'TiempoController@create',
	'as' => 'tiempoCreate'
		]);

Route::post('/guardarTiempo',[
    'uses' => 'TiempoController@store',
    'as' => 'guardarTiempo'
    ]);

Route::get('eliminarTiempo/{id}/destroy',[
    'uses' => 'TiempoController@destroy',
    'as' => 'eliminarTiempo'
    ]);

Route::get('editarTiempo/{id}/edit', [
	'uses' => 'TiempoController@edit',
    'as' => 'editarTiempo'
        ]);

Route::put('cambiarTiempo/{id}', [
    'uses' => 'TiempoController@update',
    'as' => 'updateTiempo'
	]);

/*FIN RUTAS ADMINISTRACION DE EVENTO DE TIEMPO*/
});