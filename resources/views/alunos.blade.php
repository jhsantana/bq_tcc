<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">	
	<title>Listagem de Alunos</title>
</head>
<body>
	<table class="table">
		@foreach($alunos as $a)
		<tr>
			<td>{{$a->matricula}}</td>
			<td>{{$a->nome}}</td>
			<td>{{$a->materia}}</td>
			<td>{{$a->email}}</td>
			<td>{{$a->status}}</td>	
			<td> <a href="/alunos/detalhes/{{$a->matricula}}"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
		
		</tr>
		@endforeach
	</table>

</body>
</html>