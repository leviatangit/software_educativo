<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvamItems extends Model
{
    protected $table = 'evaluacion_items';
    public $timestamps = false;

    public function evaluacion_modulo(){
    	return $this->belongsTo( EvaluacionModulo::class ,'id_seccion_modulo' , 'id' );
    }
    public function item_evaluacion(){
    	return $this->belongsTo( EvamItems::class , 'id_item_modulo' , 'id' );
    }

}
