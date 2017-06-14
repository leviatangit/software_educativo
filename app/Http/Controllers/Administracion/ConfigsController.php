<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Configuracion;
use App\Year;

class ConfigsController extends Controller
{
    public function index(){   

        if( Year::count() > 0  ) {

    	$configuracion = Configuracion::all();    	
    	return view('administrador.configuracion.index',[
            
            'configuracion' => $configuracion, 
            'years' => Year::all()

            ]);
        }        

        $notificacion = ['tipo' => 'info' , 'header' => 'No ay nada que configurar', 'text' => 'Tiene que registrar un año primero'];
        session()->flash('notificacion',$notificacion);
        return redirect()->route('years.create');

    }

    public function save( Request $request ){    	


        if( $request->id_year_activo != "" ){
            $id_year = $request->id_year_activo;  
            Year::find( $id_year )->activar(true);            
        }
        else{

        }

    	$registros = Configuracion::find(1);
    	$registros->value = $request->habilitar_registros  ;
    	$registros->save();

        $notificacion = ['tipo' => 'success' , 'header' => 'Configuraciòn guardada', 'text' => 'Se ha guardado la configuraciòn'];
        session()->flash('notificacion',$notificacion);
    	return redirect()->route('administracion.dashboard');
    }

}
