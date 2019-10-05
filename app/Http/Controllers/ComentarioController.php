<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Asignatura;
use App\Models\Programa;

class ComentarioController extends Controller
{
    public function index(){

    	 $estudiante = Estudiante::find(1);
          /*return csrf_token();*/
    	return $estudiante->comentarios;

    } 

    public function store()
    {
     $estudiante = new Estudiante;

     $estudiante->nombre = 'Teyler';
     $estudiante->apellido = 'Guzman';
     $estudiante->telefono = '315425';

     $estudiante->save();

     $estudiante->comentarios()->createMany([
            
           ['mensajes' => 'comentar1'],
           ['mensajes' => 'comentar2'],
           ['mensajes' => 'comentar3']

     ]);

    }
    public function indexasignatura(){

    	 $asignatura = Asignatura::find(1);
         /* return csrf_token(); */
    	return $asignatura->comentarios;

    } 

    public function storeasignatura()
    {
     $asignatura = new Asignatura;

     $asignatura->nombre = 'Matematicas';
     $asignatura->credito = '3';
     $asignatura->estudiante_id = 1;

     $asignatura->save();

     $asignatura->comentarios()->createMany([
            
           ['mensajes' => 'comentar4'],
           ['mensajes' => 'comentar5'],
           ['mensajes' => 'comentar6']

     ]);

    }

     public function indexprograma(){

    	 $programa = Programa::find(1);
          /* return csrf_token(); */
    	return $programa->comentarios;

    } 

      public function storeprograma()
    {
     $programa = new Programa;

     $programa->programa = 'Ingenieria';
     $programa->facultad = 'Sistema';
     $programa->asignatura_id = 1;

     $programa->save();

     $programa->comentarios()->createMany([
            
           ['mensajes' => 'comentar7'],
           ['mensajes' => 'comentar8'],
           ['mensajes' => 'comentar9']

     ]);

    }

    
}
