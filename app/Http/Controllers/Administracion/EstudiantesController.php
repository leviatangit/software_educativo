<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Modulo;
use App\Seccion;
use App\Year;

class EstudiantesController extends Controller
{
    public function index( $id_year = false ){

        // $year = Year::first() ? Year::first()->hasActive()   ;
        if( $id_year ){
            $year = Year::find( $id_year );
        }

        else {
            $year = Year::first()->hasActive();
        }

        $years = Year::all();

    	return view('administrador.estudiantes.index' , [ 'year' => $year ]);
    }

    public function modulos( $id ){

        $modulo = Modulo::find( $id );
        $modulos = Modulo::all();
        $romano = [1 => 'I' , 'II', 'III' , 'IV' , 'V' , 'VI' , 'VII' , 'VIII' , 'IX' , 'X'];
        $moduloNumero = 'Modulo ' . $romano[ $id ];
    	return view( 'estudiantes.modulos' , ['title' => 'Modulo de estudio' , 'modulos' => $modulos , 'moduloNumero' => $moduloNumero  , 'titulo_pagina' => 'Modulo', 'modulo' => $modulo ]);
    }

    public function evaluaciones( $id_estudiante ){
        return $id_estudiante;
    }
 

}


