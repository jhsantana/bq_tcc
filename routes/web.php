<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/professores', 'ProfessorController@listar');

Route::get('/professores/detalhes/{matricula}', 'ProfessorController@detalhes');

Route::get('/professores/novo', 'ProfessorController@novo');

Route::post('/professores/cadastrar', 'ProfessorController@cadastrar');

Route::get('/alunos/novo', 'AlunoController@novo');
