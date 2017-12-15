<?php 
	if(isset($_POST['salvar'])){
		$nome = $_POST['cmp_nome'];
		$email = $_POST['cmp_email'];
		$sexo = $_POST['cmp_sexo'];
		$tel = $_POST['cmp_tel'];
		$nasc = $_POST['cmp_nasc'];
		$senha = $_POST['cmp_senha'];		
		$senha_confirm = $_POST['cmp_senha_confirm'];		
		
		
		
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<title>Novo Cadastro</title>
	<link href="/css/reset.css" rel="stylesheet"/>
	<link href="/css/style.css" rel="stylesheet"/>	
</head>
<body>
	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="cmp_nome">Nome:</label><input type="text" name="cmp_nome" id="cmp_nome"/><br />
		<label for="cmp_email">Email:</label><input type="email" name="cmp_email" id="cmp_email"/><br />
		<label for="cmp_sexo">Sexo:</label>
			<select id="cmp_sexo" name="cmp_sexo">
				<option value="m">Masculino</option>
				<option value="f">Feminino</option>
			</select><br />
		<label for="cmp_tel">Telefone:</label><input type="tel" name="cmp_tel" id="cmp_tel"/><br />
		<label for="cmp_nasc">Data de Nascimento:</label><input type="date" name="cmp_nasc" id="cmp_nasc"/><br />
		<label for="cmp_senha">Senha:</label><input type="password" name="cmp_senha" id="cmp_senha"/><br />
		<label for="cmp_senha_confirm">Confirme sua senha:</label><input type="password" name="cmp_senha_confirm" id="cmp_senha_confirm"/><br />
		<input type="submit" name="salvar" value="Salvar"/>
	</form>
	
</body>
</html>