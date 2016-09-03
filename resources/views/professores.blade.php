<!DOCTYPE html>
<html>
<head>
	<title>Lista de Professores</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<table class="table">		
			<tr bgcolor="#6699ff">
				<td> ID</td>
				<td> Matricula</td>
				<td> Nome</td>
				<td> Materia</td>
				<td> Turma</td>
				<td> E-mail</td>
				<td> Status</td>
				<td></td>

			<?php foreach($professores as $p): ?>
				<tr class="{{$p->status == 'Active' ? '' : 'danger'}}" >
					<td><?=$p-> id ?></td>
					<td><?=$p-> matricula ?></td>
					<td><?=$p-> nome ?></td>
					<td><?=$p-> materia ?></td>
					<td><?=$p-> turma ?></td>
					<td><?=$p-> email ?></td>
					<td><?=$p->status ?></td>
					<td> <a href="/professores/detalhes/<?=$p->matricula?>"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
				</tr>
			<?php endforeach ?>
			</tr>
		</table>
	</div>
</body>
</html>


