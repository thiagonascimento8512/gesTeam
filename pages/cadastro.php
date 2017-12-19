<?php 
	if(isset($_POST['salvar'])){
		$nome = $_POST['cmp_nome'];
		$email = $_POST['cmp_email'];
		$sexo = $_POST['cmp_sexo'];
		$tel = $_POST['cmp_cel'];
		$nasc = $_POST['cmp_nasc'];
		$senha = $_POST['cmp_senha'];		
		$senha_confirm = $_POST['cmp_senha_confirm'];		
		
		echo "Você inseriu as seguintes informações: <br />";
		echo "Nome: $nome"."<br />";
		echo "Email: $email"."<br />";
		echo "Sexo: $sexo"."<br />";
		echo "Telefone: $tel"."<br />";
		echo "Data de Nascimento: $nasc"."<br />";
		echo "Senha: ".$senha."<br />";		
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<title>Novo Cadastro</title>
	<link href="/css/reset.css" rel="stylesheet"/>
	<link href="/css/style.css" rel="stylesheet"/>
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../scripts/balloon.js" type="text/javascript"></script>
	<script>
		window.onload = function(){			
	  		var password = document.getElementById("cmp_senha"),
	  		confirm_password = document.getElementById("cmp_senha_confirm");	
			confirm_password.onchange = verificaSenha;
			confirm_password.onkeyup = verificaSenha;			
		}
		
		function verificaSenha(){
			var password = document.getElementById("cmp_senha"),
		  		confirm_password = document.getElementById("cmp_senha_confirm");	
			if (password.value == confirm_password.value)
				$("#salvar").removeAttr("disabled");	
			else				
				$("#salvar").attr("disabled","disabled");	
		}		
		
	</script>
</head>
<body>
	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="cmp_nome">Nome:</label>
		<input type="text" name="cmp_nome" id="cmp_nome" autofocus="autofocus" required="required"
		pattern="^[a-zA-Zá-üÁ-Ü ]+$"/><br />
		
		<label for="cmp_email">Email:</label>
		<input type="email" name="cmp_email" id="cmp_email" required="required"
		pattern="[a-zA-Z0-9_.-]+@[a-zA-Z0-9_.-]+\.[a-zA-Z0-9_.-]{2,4}$"/><br />
		
		<label for="cmp_sexo">Sexo:</label>
		<select id="cmp_sexo" name="cmp_sexo" required="required">
			<option value="m">Masculino</option>
			<option value="f">Feminino</option>
		</select><br />
		
		<label for="cmp_tel">Telefone:</label>
		<input type="tel" name="cmp_cel" id="cmp_cel" required="required"/><br />
		
		<label for="cmp_nasc">Data de Nascimento:</label>
		<input type="date" name="cmp_nasc" id="cmp_nasc" required="required"/><br />
		
		<label for="cmp_senha">Senha:</label>
		<input type="password" name="cmp_senha" id="cmp_senha" required="required"/><br />
		
		<label for="cmp_senha_confirm">Confirme sua senha:</label>
		<input type="password" name="cmp_senha_confirm" id="cmp_senha_confirm" required="required"/><br />
		
		<input type="submit" id="salvar" name="salvar" value="Salvar" disabled="disabled" />
	</form>
	<script>		
		$('#cmp_nome').balloon(
			contents:'Thiago',
			position:'right'
		);	
	</script>
</body>
</html>