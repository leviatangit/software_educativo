<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'secciones';    
    protected $fillable = ['nombre', 'id_year', 'id_profesor', 'promedio', 'registro_activo'];
    public $timestamps = false;

    public function profesor(){
    	return $this->belongsTo( User::class, 'id_profesor' , 'id' );
    }

    public function estudiantes(){
    	return $this->hasMany( Estudiante::class, 'id_seccion' , 'id' );
    }   

    public function year(){
    	return $this->belongsTo( Year::class, 'id_year' , 'id' );
    }       

}
