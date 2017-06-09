<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Year;
use App\Seccion;
use DB;

class YearsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Year::orderBy('activo','desc')->get();    
        return view('administrador.years.index' , ['years' => $years]);
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
        }

        session('meesage','asmdklamsdlasmdlamsdad');
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
        return view('administrador.years.show' , [ 'year' => $year ]);
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
