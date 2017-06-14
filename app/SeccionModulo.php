<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeccionModulo extends Model
{
    protected $table = 'secciones_modulos';
    public $timestamps = false;

    public function evaluacion_modulo(){
    	return $this->hasOne( EvaluacionModulo::class, 'id_seccion_modulo' , 'id' );
    }

    public function evaluaciones(){
        return $this->hasManyThrough( EvaluacionEstudiante::class , EvaluacionModulo::class, 'id_seccion_modulo', 'id_seccion' , 'id');
    }    

    public function calcular(){

    	$aprobada = $this->evaluaciones->where('status','aprobada')->count();
    	$reprobada = $this->evaluaciones->where('status','reprobada')->count();
    	$sin_calificar = $this->evaluaciones->where('calificada',0)->count();

     $resp = [ 'aprobada' => $aprobada , 'reprobada' => $reprobada, 'sin_calificar' => $sin_calificar ];
     return $resp;
    }


    public function modulo(){
    	return $this->belongsTo( Modulo::class, 'id_modulo' , 'id' );
    }

    public function seccion(){
        return $this->belongsTo( Seccion::class, 'id_seccion' , 'id' );
    }


}
