<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Horario;

class EstudianteController extends Controller
{

	public function consultarprograma(){
     	$estudiante = Estudiante::with('programas')->get();
     	return $estudiante;
     }
   /* public function index()
    {
     $estudiante = Estudiante::find(10);
     return csrf_token();
    }*/

     public function store(Request $request){
          
      $estudiante = new Estudiante;
      $estudiante->nombre = 'teyler';
      $estudiante->apellido = 'guzman';
      $estudiante->telefono = '2744514';

      $estudiante->save();

      $horarios = new Horario;
      $horarios->dia = 'lunes';
      $horarios->hora_inicio = '2019-25-01';
      $horarios->hora_fin = '2019-30-11';

      $estudiante->horario()->save($horarios);
     }

     

}
