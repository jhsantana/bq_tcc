<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AlunoController extends Controller
{
	public function novo()
	{
		return view('formulario_aluno');
	}
}
