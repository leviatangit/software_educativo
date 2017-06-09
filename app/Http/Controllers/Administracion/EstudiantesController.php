<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Modulo;
use App\Seccion;

class EstudiantesController extends Controller
{
    public function index( $id_seccion ){
    	
        $secciones = Seccion::all();
        $seccion = Seccion::findOrfail( $id_seccion );
        $year = $seccion->year;
    	return view('administrador.estudiantes.index' , ['secciones' => $secciones , 'seccion' => $seccion , 'year' => $year ]);
    }

    public function modulos( $id ){

        $modulo = Modulo::find( $id );
        $modulos = Modulo::all();
        $romano = [1 => 'I' , 'II', 'III' , 'IV' , 'V' , 'VI' , 'VII' , 'VIII' , 'IX' , 'X'];
        $moduloNumero = 'Modulo ' . $romano[ $id ];
    	return view( 'estudiantes.modulos' , ['title' => 'Modulo de estudio' , 'modulos' => $modulos , 'moduloNumero' => $moduloNumero  , 'titulo_pagina' => 'Modulo', 'modulo' => $modulo ]);
    }


 

}


