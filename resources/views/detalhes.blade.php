<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">	
	<title></title>
</head>
<body>
	<table class="table table-hover"">
		<tr>
		<td> Matricula</td>
		<td> E-mail</td>
		<td> Matéria</td>
		<td> Status</td>
		<td> Turma</td>

		<?php foreach($p as $p): ?>
			<tr>
				<td> <?=$p-> matricula?></td>
				<td> <?=$p-> email?> </td>
				<td> Matérias lesionando: <?=$p-> materia?> </td>
			 	<td> <?=$p-> status ?> </td>
				<td> <?=$p-> turma ?> </td>
			</tr>
		<?php endforeach ?>
		</tr>
	</table>
</body>
</html>