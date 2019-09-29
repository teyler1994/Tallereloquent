<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';

    protected $fillable = [
        'programa',
        'facultad',
        'asignatua_id',
    
    ];



    public function asignatura(){

    	return $this->BelongTo('App\Models\Asignatura');
    }

   
}
