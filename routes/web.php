<?php

/*
Route::get('/', 'EstudiantesController@index' );
Route::get('/estudiante' , 'EstudiantesController@index')->name('estudiante.index');
Route::get('modulo/{id}' , 'EstudiantesController@modulos')->name('modulo');
Route::get('modulo/{id}' , 'EstudiantesController@modulos')->name('modulo');
Route::get('descargarModulo/{id}', 'EstudiantesController@downloadModulo' )->name('modulo.descargar');
Route::get('infoComponente', 'ComponentesController@infoComponente');
*/

Route::group(['middleware' => 'auth'], function(){	

	Route::group(['namespace' => 'Administracion'] , function(){

		Route::get('/home', 'HomeController@index');
		Route::get('/dashboard', 'AdministradorController@index')->name('administracion.dashboard');		

		// YEAR 
		Route::get('years', 'YearsController@index')->name('years.index');	
		Route::post('/years', 'YearsController@create')->name('years.create');	
		Route::get('years/{id?}', 'YearsController@show')->name('years.show');	

		// SECCIONES
		Route::get('/year/{year_id}/secciones/', 'SeccionesController@index')->name('seccion.index');		
		Route::get('/seccion/{seccion_id}', 'SeccionesController@show')->name('seccion.show');			
		Route::post('/seccion/asignar', 'SeccionesController@asignar_profesor')->name('seccion.asignar_profesor');
		Route::get('/seccion/remover/{id}', 'SeccionesController@remover_profesor')->name('seccion.remover_profesor');		
		Route::post('/seccion/store', 'SeccionesController@store')->name('seccion.store');			


		// CONFIGURACIÒN
		Route::get('/configuracion', 'ConfigsController@index')->name('config.index');	
		Route::post('/configuracion', 'ConfigsController@save')->name('config.save');	

		// ESTUDIANTES
		Route::get('/year/{year_id}/estudiantes/', 'EstudiantesController@index')->name('estudiantes.index');				
		Route::get('/year/{year_id}/estudiantes/{estudiante_id}', 'EstudiantesController@show')->name('estudiantes.show');
		Route::get('/seccion/{seccion_id}/estudiantes/', 'EstudiantesController@index')->name('estudiantes.seccion.index');				
		// USER
		Route::get('/users/{$id}', 'UsersController@show')->name('users.show');						
		Route::get('/users/create/{rol?}', 'UsersController@create')->name('users.create');				
		Route::get('/users/{id?}', 'UsersController@show')->name('users.show');						
		Route::post('/users', 'UsersController@store')->name('users.store');				
		
	});

	Route::group(['namespace' => 'Estudiantes'] , function(){

		// ESTUDIANTES
		Route::get('/', 'EstudiantesController@index')->name('estudiantes.dashboard');	

		// MODULOS
		Route::get('modulo/{id}' , 'EstudiantesController@modulos')->name('modulo');		
		Route::get('infoComponente', 'ComponentesController@infoComponente');

		/*
		Route::get('/year/{year_id}/estudiantes/', 'EstudiantesController@index')->name('estudiantes.index');				
		Route::get('/year/{year_id}/estudiantes/{estudiante_id}', 'EstudiantesController@show')->name('estudiantes.show');
		Route::get('/seccion/{seccion_id}/estudiantes/', 'EstudiantesController@index')->name('estudiantes.seccion.index');			*/	
		/*
		Route::get('/users/{$id}', 'UsersController@show')->name('users.show');						
		Route::get('/users/create/{rol?}', 'UsersController@create')->name('users.create');				
		Route::post('/users', 'UsersController@store')->name('users.store');				
		*/
		
	});
});



Auth::routes();

