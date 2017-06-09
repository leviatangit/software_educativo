<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';    
    protected $fillable = ['id_user', 'id_seccion', 'promedio', 'aprobado'];
    public $timestamps = false;

    public function user(){
    	return $this->belongsTo( User::class, 'id_user', 'id' );
    }

    public function seccion(){
    	return $this->belongsTo( Seccion::class, 'id_seccion', 'id' );
    }

}
