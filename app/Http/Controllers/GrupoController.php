<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use App\Models\Grupo;

class GrupoController extends Controller
{
    public function index(){
   	  return csrf_token();
   }

    public function store(){

   	$asignatura = Asignatura::find(1);
   	$asignatura->grupos()->sync(array(2,4,6));
   }


   /*public function store(){
      
      $grupo = new Grupo;
      $grupo->grupo = 'ciencia';
      $grupo->num_estudiante = '10';
      $grupo->save();

      $asignatura = Asignatura::find(1);
      $asignatura->grupos()->attach(1);

   }*/

}
