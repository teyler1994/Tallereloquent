<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/estudiante', 'EstudianteController@index');

 Route::post('/estudiante', 'EstudianteController@store');

 Route::get('/asignatura', 'AsignaturaController@index');

 Route::post('/asignatura', 'AsignaturaController@store');

 Route::get('/grupo', 'GrupoController@index');

 Route::post('/grupo', 'GrupoController@store');

 Route::get('/estudiante', 'EstudianteController@consultarprograma');

 Route::get('/mensaje', 'ComentarioController@index');

 Route::post('/mensaje', 'ComentarioController@store');

 Route::get('/mensajeasignatura', 'ComentarioController@indexasignatura');

 Route::post('/mensajeasignatura', 'ComentarioController@storeasignatura');

 Route::get('/mensajeprograma', 'ComentarioController@indexprograma');

 Route::post('/mensajeprograma', 'ComentarioController@storeprograma');