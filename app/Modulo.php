<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table = 'modulos';

    protected $fillable = ['titulo','descripcion','img_nombre'];

    public function temas(){    	
    	return $this->hasMany( Tema::class, 'id_modulo', 'id' );
    }

    public function imagen(){    	
    	return $this->belongsTo( Imagen::class, 'id_imagen', 'id' );
    }

    public function secciones(){    	
    	return $this->hasMany( SeccionModulo::class, 'id_modulo', 'id' );
    }

    public function items(){        
        return $this->hasMany( ItemsEvaluacion::class, 'id_modulo', 'id' );
    }

    public function active_evaluacion(){

        if( \Auth::user()->estudiante != null ){

            $id_seccion = \Auth::user()->estudiante->seccion->id;
            return count( $this->secciones->where('id_seccion', $id_seccion)->where('evaluacion_activa',1) );
        }

        return false;
    }


    public function isActive( $id_seccion ){

    		if( count($this->secciones->where('id_seccion', $id_seccion )->get() )){
    			return true;
    		};    		
    		return false;
    }

    
}
