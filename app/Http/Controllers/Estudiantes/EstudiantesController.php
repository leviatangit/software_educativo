<?php

namespace App\Http\Controllers\Estudiantes;

use Illuminate\Http\Request;
use App\Modulo;
use App\Componente;
use App\Juego;



class EstudiantesController extends Controller
{
    public function index(){
    	
    	$modulos = Modulo::all();
    	$componentes = Componente::all();
    	$juegos = Juego::all();

    	return view('estudiantes.dashboard', ['title' => 'Inicio' , 'titulo_pagina' => 'Inicio', 'modulos' => $modulos, 'componentes' => $componentes, 'juegos' => $juegos ]);
    }

    public function modulos( $id ){

        $modulo = Modulo::find( $id );

        $modulos = Modulo::all();

        $romano = [1 => 'I' , 'II', 'III' , 'IV' , 'V' , 'VI' , 'VII' , 'VIII' , 'IX' , 'X'];

        $moduloNumero = 'Modulo ' . $romano[ $id ];

    	return view( 'estudiantes.modulos' , ['title' => 'Modulo de estudio' , 'modulos' => $modulos , 'moduloNumero' => $moduloNumero  , 'titulo_pagina' => 'Modulo', 'modulo' => $modulo ]);
    }


 

}


