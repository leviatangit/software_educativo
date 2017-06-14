<?php

namespace App\Http\Controllers\Estudiantes;

use Illuminate\Http\Request;

class DescargasController extends Controller
{
    public function descargar( Request $request ){
    		return $request->all();
    }
}
