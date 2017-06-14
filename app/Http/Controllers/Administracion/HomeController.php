<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol = Auth::user()->rol;

        if( $rol == 'director' ){
            return redirect()->route('administracion.dashboard');            
        }
        if( $rol == 'profesor'){
            return redirect()->route('profesor.dashboard');            
        }        
        if( $rol == 'estudiante' ){
            return redirect()->route('estudiantes.dashboard');
        }

    }
}
