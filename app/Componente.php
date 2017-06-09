<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
    protected $table = 'componentes';
    protected $fillable = ['nombre','contenido','id_imagen'];


    public function imagen(){    	
    	return $this->belongsTo( Imagen::class, 'id_imagen', 'id' );
    }
}
