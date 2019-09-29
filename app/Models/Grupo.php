<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = [
        'grupo',
        'num_estudiante',

       
    ];

     public function asignatura(){

        return $this->belongsToMany('App\Models\Asignatura');
    }


  
}
