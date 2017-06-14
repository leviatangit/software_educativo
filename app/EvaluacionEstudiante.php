<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionEstudiante extends Model
{
    protected $table = 'estudiante_evaluacion';
    public $timestamps = false;

    public function estudiante(){
    	return $this->belongsTo( Estudiante::class, 'id_estudiante' , 'id' );
    }
    
    public function evaluacion_modulo(){
    	return $this->belongsTo( EvaluacionModulo::class , 'id_seccion_modulo' , 'id' );
    }


}
