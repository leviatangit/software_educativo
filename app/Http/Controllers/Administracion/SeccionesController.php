<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;

use App\Seccion;
use App\User;
use App\Year;
use App\Modulo;
use App\SeccionModulo;


class SeccionesController extends Controller
{
    public function index( $year_id = null )
    {
        $year = Year::findOrfail( $year_id );
        $secciones = $year->secciones;
    	$profesores = User::where( ['rol' => 'profesor'] , ['status' => 'activo'])->get();
    	return view('administrador.secciones.index', [ 'year' => $year, 'secciones' => $secciones , 'profesores' => $profesores ]);
    }

    public function show( $seccion_id = null ){

        //$productos = Producto::paginate(6);

        $seccion = Seccion::find( $seccion_id );
        //return $seccion->modulo_evaluaciones;

        $profesores = User::where( ['rol' => 'profesor'] , ['status' => 'activo'])->get();
        return view('administrador.secciones.show', [ 'seccion' => $seccion, 'profesores' =>  $profesores ]);
    }

	public function store( Request $request ){
        
        $this->validate( $request , [
            'nombre' , 'required',
            'id_year' , 'required',            
        ]);

        $year = Year::findOrfail( $request->id_year );

        $seccion = new Seccion;;
        $seccion->id_year = $year->id;

        if( $request->id_seccion ){
            $seccion->id_profesor = $request->id_profesor;                    
        }
        $seccion->save();

        $notificacion = ['tipo' => 'success' , 'header' => 'Registro exitoso', 'text' => 'Se ha registrado exitosamente una nueva secciòn para el año academico ' . $year->f_academico() ];
        session()->flash( 'notificacion', $notificacion );
        return redirect()->route('seccion.index', [ $year->id ]);
    }    

/*
    id_seccion  "13"
    id_profesor "2"
*/
	public function asignar_profesor( Request $request ){

        $seccion = Seccion::find( $request->input('id_seccion') );
        $seccion->id_profesor = $request->input('id_profesor');
        $seccion->save();

        $notificacion = ['tipo' => 'success' , 'header' => 'Asignaciòn realizada', 'text' => 'Se le ha asignado al profesor ' . $seccion->profesor->fullName()  .' la secciòn ' . $seccion->nombre];
        session()->flash('notificacion',$notificacion);

        return redirect()->back();
        //return;
    }

    public function remover_profesor( $id ){
        
        $seccion = Seccion::find( $id );
        $profesor = $seccion->profesor->fullName();

        $seccion->id_profesor = null;
        $seccion->save();

        $notificacion = ['tipo' => 'info' , 'header' => 'Removida asignaciòn', 'text' => 'Se ha eliminado la asignaciòn del profesor ' . $profesor . ' a la seccion '.  $seccion->nombre ];
        session()->flash('notificacion',$notificacion);


        return redirect()->back();
    }

    public function modulos( $id_seccion ){
        
        $modulos = Modulo::all();        
        $seccion = Seccion::find( $id_seccion );
        return view('administrador.secciones.modulos', ['modulos' => $modulos, 'seccion' => $seccion ]);
    }


    public function configurar_evaluacion( $id ){
        
        $evaluacion =  SeccionModulo::find($id);
        //return $evaluacion;
        // Diseñar evaluaciòn
        if( $evaluacion->status == 'Default' ){
        return view('administrador.secciones.configuracion_evaluacion', ['evaluacion' => $evaluacion ]);

        }

        else {

        }

        return view('administrador.secciones.modulos', ['modulos' => $modulos, 'seccion' => $seccion ]);
    }


    public function evaluacion_enviar( Request $request, $id ){
        return $request->all();
    }

    public function evaluacion_item( Request $request, $id ){
        return $request->all();
    }


}


