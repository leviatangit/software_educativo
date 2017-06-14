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

	Route::group(['namespace' => 'Administracion'], function(){

		Route::get('/home', 'HomeController@index');

		Route::get('/dashboard', 'AdministradorController@index')->name('administracion.dashboard');		

		// YEAR 
		Route::get('years', 'YearsController@index')->name('years.index');	
		Route::post('/years', 'YearsController@create')->name('years.create')->middleware('director');	
		Route::get('years/{id?}', 'YearsController@show')->name('years.show');	

		// SECCIONES
		Route::get('/year/{year_id}/secciones/', 'SeccionesController@index')->name('seccion.index');		
		Route::get('/seccion/{seccion_id}', 'SeccionesController@show')->name('seccion.show');			
		Route::get('/seccion/{seccion_id}/modulos', 'SeccionesController@modulos')->name('seccion.modulos');
		Route::post('/seccion/asignar', 'SeccionesController@asignar_profesor')->name('seccion.asignar_profesor');

		Route::get('seccion/configurar_evaluacion/{id}', 'SeccionesController@configurar_evaluacion')->name('seccion.configurar_evaluacion');
		Route::post('evaluacion/{id}/enviar', 'SeccionesController@evaluacion_enviar')->name('evaluacion.enviar');
		Route::post('evaluacion/{id}/enviar_item', 'SeccionesController@evaluacion_enviar_item')->name('evaluacion.enviar_item');

		Route::get('/seccion/remover/{id}', 'SeccionesController@remover_profesor')->name('seccion.remover_profesor');


		Route::post('/seccion/store', 'SeccionesController@store')->name('seccion.store');			

		Route::get('/seccion/{seccion_id}/evaluaciones', 'SeccionesController@evaluaciones')->name('seccion.evaluaciones');

		// CONFIGURACIÒN
		Route::get('/configuracion', 'ConfigsController@index')->name('config.index');	
		Route::post('/configuracion', 'ConfigsController@save')->name('config.save');	

		// ESTUDIANTES
	Route::get('/year/{year_id}/estudiantes', 'YearsController@estudiantes')->name('estudiantes.index');	
	Route::get('/year/{year_id}/estudiantes/{estudiante_id}', 'EstudiantesController@show')->name('estudiantes.show');
	Route::get('/seccion/{seccion_id}/estudiantes/', 'EstudiantesController@index')->name('estudiantes.seccion.index');
	Route::get('/estudiantes/{id}', 'EstudiantesController@index')->name('estudiantes.show');	
	Route::get('/estudiantes/{id}/evaluaciones', 'EstudiantesController@evaluaciones')->name('estudiantes.evaluaciones');			

		// USER
		Route::get('/users', 'UsersController@index')->name('users.index');						
		Route::get('/users/create/{rol?}', 'UsersController@create')->name('users.create');				
		Route::get('/users/{id?}', 'UsersController@show')->name('users.show');						
		Route::post('/users', 'UsersController@store')->name('users.store');	
		Route::post('/users/estudiante', 'UsersController@store_estudiante')->name('users.store_estudiante');	


		// MODULOS
		Route::get('/modulos', 'ModulosController@index')->name('modulos.index');	
		Route::get('/modulos/{id_modulo?}evaluaciones', 'ModulosController@evaluaciones')->name('modulos.evaluaciones');
		
	});

	Route::group(['namespace' => 'Estudiantes'] , function(){

		// ESTUDIANTES
		Route::get('/estudiante', 'EstudiantesController@index')->name('estudiantes.dashboard');	

		// MODULOS
		Route::get('modulo/{id}' , 'EstudiantesController@modulos')->name('modulo');		
		Route::get('modulo/{id}/evaluacion' , 'ModulosController@realizar_evaluacion')->name('modulo.evaluacion');	
		Route::post('modulo/{id}/evaluacion' , 'ModulosController@evaluacion_store')->name('modulo.evaluacion_store');		
		//DESCARGAR
		Route::get('infoComponente', 'ComponentesController@infoComponente');
		Route::post('descargar/componente', 'DescargasController@descargar')->name('descargar.componente');	
	});
});



Auth::routes();

