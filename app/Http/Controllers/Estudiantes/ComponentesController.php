<?php

namespace App\Http\Controllers\Estudiantes;

use Illuminate\Http\Request;
use App\Componente;

class ComponentesController extends Controller
{
    public function infoComponente( Request $request ){
    	
    	$componente = Componente::find( $request->all('id') );

    	return \Response::json( $componente );
    }
}
