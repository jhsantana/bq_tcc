<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\DB;

use App\Professor;

class ProfessorController extends Controller
{
	public function listar()
	{
		$professores = DB::select('select * from professores');
		return view('professores')->with('professores', $professores);
	}

	public function detalhes()
	{
		$matricula = Request::route('matricula');
		//$professores = DB::select('select * from professores where matricula = ?', [$matricula]);

		$professor = DB::table('professores')
		                    ->where('matricula', $matricula)
		                    ->get();
		return view('detalhes')->with('p', $professor);
	}    

	public function novo()
	{
		return view('formulario');
	}

	public function cadastrar()
	{
		$request = Request::all();
		$Professor = new Professor($request);
		$Professor->save();

	}
}
