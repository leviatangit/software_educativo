<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Modulo;
class ModulosController extends Controller
{
	public function index(){
		$modulos = Modulo::all();
		return view('administrador.modulos.index', ['modulos' => $modulos]);
	}	

	public function modulos( $id_modulo = null ){

		$modulo = Modulo::find( $id_modulo );
		return view('administrador.modulos.evaluaciones', ['modulo' => $modulo]);
	}


}
