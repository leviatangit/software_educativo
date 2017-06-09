<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Configuracion;

class ConfigsController extends Controller
{
    public function index(){   

    	$configuracion = Configuracion::all();    	
    	return view('administrador.configuracion.index',['configuracion' => $configuracion]);
    }

    public function save( Request $request ){    	
    	
    	$request->habilitar_registros; 

    	$registros = Configuracion::find(1);
    	$registros->value = $request->habilitar_registros;
    	$registros->save();

    	return redirect()->route('administracion.dashboard');
    }

}
