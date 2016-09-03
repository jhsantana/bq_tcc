<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">	
	<title>Cadastro de Professores</title>
</head>
<body>
	<form action="/professores/cadastrar" class="container" method="post">
		<input   type="hidden" name="_token" value="<?php echo csrf_token(); ?>">	 	
		<div class="form-group">
			<label>Matricula</label>
	    	<input type="text" name="matricula" class="form-control"/>
		</div>	
		
		<div class="form-group">
			<label>E-mail</label>
	    	<input type="text" name="email" class="form-control"/>
		</div>	

		<div class="form-group">
			<label>Nome</label>
	    	<input type="text" name="nome" class="form-control"/>
		</div>	

		<div class="form-group">
			<label>Matéria</label>
	    	<input type="text" name="materia" class="form-control"/>
		</div>	

		<div class="form-group">
			<label>Turma</label>
	    	<input type="text" name="turma" class="form-control"/>
		</div>	

		<div class="form-group">
			<label>Status</label>
	    	<input type="text" name="status" class="form-control"/>
		</div>	
	
		  <button type="submit" class="btn btn-primary">Salvar</button>
	</form>
</body>
</html>