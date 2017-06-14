<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Year;
use App\Seccion;
use App\EvamItems;
use App\SeccionModulo;
use App\EvaluacionModulo;
use App\EvaluacionEstudiante;
use DB;

class YearsController extends Controller
{

    public function __construct(){
        $this->middleware('area');

    }

    public function index()
    {
        $years = Year::orderBy('activo','desc')->get();    
        return view('administrador.years.index' , ['years' => $years]);
    }

    public function estudiantes( $id = null )
    {
        $year = Year::find($id);
        return view('administrador.years.estudiantes' , [ 'years' => Year::all(), 'year' => $year ]);
    }

    public function create( Request $request )
    {
        $this->validate( $request , [
            'desde' => 'required|integer|min:1|unique:year_academico,desde'
        ]); 

        if( $request->activo == "1" && Year::all()->count() > 0 ){
            Year::where('activo', 1)->update(['activo' => 0]);
        }

        $year = new Year;
        $year->desde = $request->desde;
        $year->hasta = $request->desde + 1;
        $year->activo = $request->activo;        
        $year->save();

        // Crear secciones
        $secciones_name = ['A','B','C','D'];  
              
        for( $i = 0; $i <= 3; $i++ ){            
            $seccion = new Seccion;
            $seccion->nombre = $secciones_name[$i];
            $seccion->id_year = $year->id;
            $seccion->registro_activo = $request->activo;            
            $seccion->save();

            // Crear Secciones Modulos
            for( $x = 1; $x <= 6; $x++ ){
                $sm = new SeccionModulo;
                $sm->id_modulo = $x;
                $sm->id_seccion = $seccion->id;
                if( $x == 1 ) {                    
                    $sm->evaluacion_activa = 1;                    
                }                
                $sm->save();
/*
                if( $x == 1 ){
                    $em = new EvaluacionModulo;
                    $em->id_seccion_modulo = $sm->id;
                    $em->nota = 33;
                    $em->status  = 'activa';
                    $em->save();                    

                    for( $y = 1; $y <= 5; $y++ ){
                       $ei = new EvamItems;
                       $ei->id_evaluacion_modulo = $em->id;
                       $ei->id_item_evaluacion = $y;
                       $ei->save();
                    }
                }
*/
            }
        }

        $notificacion = ['tipo' => 'success' , 'header' => 'Registro exitoso', 'text' => 'Se ha registrado exitosamente el año academico '.  $year->f_academico() ];

        session()->flash( 'notificacion', $notificacion );
        return redirect()->route('years.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $year = Year::findOrfail( $id );
        $evaluaciones = EvaluacionEstudiante::all();
        return view('administrador.years.show' , [ 'year' => $year, 'evaluaciones' => $evaluaciones ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
