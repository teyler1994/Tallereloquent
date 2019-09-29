<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';

    protected $fillable = [
        'nombre',
        'apellido',
        'genero'   
    
    ];

    public function programas(){
        return $this->hasManyThrough('App\Models\Programa','App\Models\Asignatura');
    }
    
    public function horario(){

    	return $this->hasOne('App\Models\Horario');
    }
     public function asignatura(){

    	return $this->hasMany('App\Models\Asignatura');
    }

    
  
}
