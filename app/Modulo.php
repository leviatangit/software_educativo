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

    
}
