<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;

use App\Seccion;
use App\User;
use App\Year;

class SeccionesController extends Controller
{
    public function index( $year_id = null )
    {
        $year = Year::findOrfail( $year_id );
        $secciones = $year->secciones;
    	$profesores = User::where( ['rol' => 'profesor'] , ['status' => 'activo'])->get();
    	return view('administrador.secciones.index', [ 'year' => $year, 'secciones' => $secciones , 'profesores' => $profesores ]);
    }

    public function show( $year_id = null, $seccion_id = null ){
        return $seccion_id;
    }

	public function store( Request $request ){

        $this->validate( $request , [
            'nombre' , 'required',
            'id_year' , 'required|integer',            
            'id_profesor' , 'required|sometimes'
        ]);

        Seccion::create( $request->all() );

        return 'creado';
        return $request->all();
    }    

/*
    id_seccion  "13"
    id_profesor "2"
*/
	public function asignar_profesor( Request $request ){
        
        $seccion = Seccion::find( $request->input('id_seccion') );
        $seccion->id_profesor = $request->input('id_profesor');
        $seccion->save();

        return redirect()->back();
        //return;
    }

    public function remover_profesor( $id ){
        
        $seccion = Seccion::find( $id );
        $seccion->id_profesor = null;
        $seccion->save();

        return redirect()->back();
    }



}
