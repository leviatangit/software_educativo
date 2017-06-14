<?php

namespace App\Http\Controllers\Estudiantes;

use Illuminate\Http\Request;
use App\Modulo;
use App\EvaluacionEstudiante;

		

class ModulosController extends Controller
{
	public function realizar_evaluacion( $id = null ){

		$modulo = Modulo::find($id);
		$id_seccion = \Auth::user()->estudiante->seccion->id;

		return view('estudiantes.evaluacion.show' , [ 'title' => 'Evaluaciòn ', 'titulo_pagina' => 'Modulo', 'Modulo' => 'Evaluacion' ,  'modulo' => $modulo ]);
	}

	public function evaluacion_store( Request $request, $id ){

		$ee = new EvaluacionEstudiante;
		$ee->id_evaluacion_modulo = $id;		
		$ee->id_estudiante = \Auth::user()->estudiante->id;
		$ee->nota = 1;
		$ee->cant_correctas = 1;
		$ee->cant_incorrectas = 1;		
		$ee->save();
        $notificacion = ['tipo' => 'success' , 'header' => 'Evaluaciòn terminada', 'text' => 'Ha culminado la evaluaciòn'];
        session()->flash( 'notificacion', $notificacion );

		return redirect('/');

	}

	
}
