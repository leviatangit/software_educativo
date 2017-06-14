<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemsEvaluacion extends Model
{
    protected $table = 'items_evaluacion';
    public $timestamps = false;

    public function opciones(){
    	return $this->hasMany( Opcion::class, 'id_item_evaluacion', 'id' );
    }

}
