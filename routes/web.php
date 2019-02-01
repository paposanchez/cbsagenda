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
// ruta para login
Auth::routes();

//ruta home/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function()
{
    return view('home', array('nombre' => 'Javi'));
});


Route::resource('clave', 'ClavesController');

//Route::resource('cuerpo', 'CuerpoController');
Route::resource('cia', 'CompaniaController');
Route::resource('agenda', 'AgendaController');
Route::resource('agendacia', 'AgendaciaController');
Route::post('agendacia/{id}/create','CompaniaController@create'); 
Route::get('comuna','ComunaController@index');
 
Route::get('/agenda/{id}','AgendaController@show');  
Route::get('/agenda/comunas/','AgendaController@comunas');  
Route::get('/agenda/claves/','AgendaController@clave'); 
Route::get('/agenda/cuerpo/','AgendaController@cuerpo'); 

Route::get('/cia/crear/{id}','CompaniaController@crearcia'); 

Route::get('/home', 'HomeController@index')->name('home');

//Rutas con login y permisos

Route::middleware('auth')->group(function(){
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');


		// rutas para cuerpos
	
	Route::post('cuerpo/store', 'CuerpoController@store')->name('cuerpo.store')
		->middleware('permission:cuerpo.create');
	Route::get('cuerpo', 'CuerpoController@index')->name('cuerpo.index')
		->middleware('permission:Cuerpo.index');
	Route::get('cuerpo/create', 'CuerpoController@create')->name('cuerpo.create')
		->middleware('permission:Cuerpo.create');
	Route::put('cuerpo/{cuerpo}', 'CuerpoController@update')->name('cuerpo.update')
		->middleware('permission:cuerpo.edit');
	Route::get('cuerpo/{cuerpo}', 'CuerpoController@show')->name('products.show')
		->middleware('permission:cuerpo.show');
	Route::delete('cuerpo/{cuerpo}', 'CuerpoController@destroy')->name('cuerpo.destroy')
		->middleware('permission:cuerpo.destroy');
	Route::get('cuerpo/{cuerpo}/edit', 'CuerpoController@edit')->name('cuerpo.edit')
		->middleware('permission:cuerpo.edit');



		




});

// compañias fono
		Route::get('cia/fono/{cuerpo}', 'CompaniaController@fono');
		Route::post('cia/{id}/fono','CompaniaController@fono'); 
		
Route::get('agenda/clave', function () {
    return view('agenda.clave');
});



Route::get('/home', 'HomeController@index')->name('home');
