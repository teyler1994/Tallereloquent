<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use App\Models\Programa;
class AsignaturaController extends Controller
{
    public function index()
    {

     $asignatura = Asignatura::find(15);
     return csrf_token();
    }

 /*  public function store(Request $request){
 
     $asignatura = Asignatura::find(1);
     $asignatura->programa()->saveMany([

      new Programa(['programa' => 'ingles' , 'facultad' => 'ingenieria']),
      
      new Programa(['programa' => 'matematicas' , 'facultad' => 'contaduria']),

      new Programa(['programa' => 'sociales' , 'facultad' => 'derecho']),
     ]);

   } */



  /* public function store(){
     $asignatura = Asignatura::find(1);
     $asignatura->programa()->createMany([

                
                 ['programa' => 'medicina' , 'facultad' => 'biologia'],
      
                 ['programa' => 'etica' , 'facultad' => 'valores'],
                 ['programa' => 'religion' , 'facultad' => 'teologia'],
     ]);

   }*/

  
}
