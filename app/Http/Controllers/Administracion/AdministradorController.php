<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Year;
use App\EvaluacionEstudiante;

class AdministradorController extends Controller
{
    public function index()
    {    	    

    	$year_active = Year::first() ? Year::first()->hasActive() ? Year::first()->hasActive() : Year::first() : false ;

        $evaluaciones = EvaluacionEstudiante::all();
        
        if( $year_active ){

          return view('administrador.dashboard' , [ 'year' => $year_active, 'evaluaciones' => $evaluaciones ]);
    	}

    	else {
     	  return view('administrador.dashboard_empty');    		
    	}

    	//return redirect()->route('years.show', ['year' => $year_active]);
    	//return view('administrador.dashboard');
    }    


}
