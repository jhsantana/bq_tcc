<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\DB;

use App\Aluno;

class AlunoController extends Controller
{
	public function novo()
	{
		return view('formulario_aluno');
	}

	public function listar()
	{
		$alunos = DB::select('select * from alunos');

		return view('alunos')->with('alunos', $alunos);
	}

	public function cadastrar()
	{
		$request = Request::all();
		$Aluno = new Aluno($request);
		$Aluno->save();	
		return redirect('alunos');
	}
}
