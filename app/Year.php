<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Year;

class Year extends Model
{
    protected $table = 'year_academico';    
    protected $fillable = ['desde', 'hasta'];
    public $timestamps = false;

    public function f_academico(){
    		return $this->desde . ' - ' . $this->hasta;
    }

    public function secciones(){
    		return $this->hasMany( Seccion::class, 'id_year', 'id' );
    }    

    public function hasActive(){
        $year = Year::where('activo',1)->get();        
        return count( $year ) ? $year->first() : false;
    }

    public function activar( $id = false ){

        Year::where('activo', 1)->update(['activo' => 0]);
        
        if( $id ){
            $this->activo = 1;
            $this->save();
        }
    }

    public function seccionesSinProf(){        
        $secciones = $this->hasActive()->secciones->where('id_profesor', '=' , null );
        return count( $secciones ) ? $secciones->all() : false;
    }       

    public function seccionesActivas(){

        if ( Year::first() && $this->hasActive() && $this->seccionesSinProf()  ){
            return $this->seccionesSinProf();
        }        
        return false;
    }

    public function estudiantes(){
        return $this->hasManyThrough( Estudiante::class , Seccion::class, 'id_year', 'id_seccion' , 'id');
    }    


/*
    public function estudiantes(){
    		return $this->hasManyThorch( Seccion::class, 'id_year', 'id' );
    }      
*/  
}
