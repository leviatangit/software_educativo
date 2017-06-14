<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionModulo extends Model
{
    protected $table = 'evaluacion_modulo';
    public $timestamps = false;
    
    public function em_items(){
    		return $this->hasMany( EvamItems::class, 'id_evaluacion_modulo', 'id' );
    }

    public function items(){
       return $this->hasManyThrough( ItemsEvaluacion::class , EvamItems::class, 'id_evaluacion_modulo', 'id_modulo' , 'id');    	
    }


}
