<?php
	if(isset($_POST['login'])){
		//Variáveis de conexão com o banco de dados		
		require_once("../scripts/connectvars.php");
		
		//Verificação dos campos
		require_once("../scripts/verify_empty_regex.php");
		
		//------------------== EMAIL ==--------------------------		
		//==================REQUISITOS===========================
		#1 - Retirar os caracteres em branco das bordas
		#3 - Verificar se a string fornecida encontra-se 
		//   de acordo com a regex:
		$regex_email = '/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9_.-]+\.[a-zA-Z0-9_.-]{2,4}$/';
		//====================Início=========================
		//Retira os caracteres em branco das bordas
		$email = trim($_POST['cmp_email']);				
		$new_email = mysqli_real_escape_string(GetMyConnection(), $email);
		VerificaVazioRegex("Email", $email, $regex_email);						
		//----------------=Fim - Email=---------------------------
		
		
		//------------------== SENHA ==---------------------------
		$regex_senha = '/^[^ ]{8,}$/';
		$senha = trim($_POST['cmp_senha']);
		$new_password = mysqli_real_escape_string(GetMyConnection(), $senha);
		VerificaVazioRegex("Senha", $new_password, $regex_senha);
		//--------------------------------------------------------
		
		if(empty($erros)){
			$new_senha = sha1($new_password);
			
			$verify_email_senha = "SELECT email FROM users WHERE email = '$email' AND senha = '$new_senha' AND user_status = 2";
						
			$verify_email_senha_result = mysqli_query(GetMyConnection(), $verify_email_senha)
			or die ("Erro na verificação do dados!");
			
			CleanUpDB();
			
			$linha_verify_email_senha = mysqli_fetch_assoc($verify_email_senha_result);
			
			if (empty($linha_verify_email_senha))
				echo "Dados inválidos!";			
			else
				echo "Login realizado com sucesso!";
		} else {
			echo "Dados inválidos";
		}
		
		
		
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>	
	<title>Login</title>
	<style>
		
	</style>
	<script>
		
	</script>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="cmp_email">Email:</label>
		<input
			type="email"
			name="cmp_email"
			id="cmp_email"
			required="required"
			pattern="^[a-zA-Z0-9_.-]+@[a-zA-Z0-9_.-]+\.[a-zA-Z0-9_.-]{2,4}$"
		/>
		
		<label for="cmp_senha">Senha:</label>
		<input
			type="password"
			name="cmp_senha"
			id="cmp_senha"
			required="required"			
		/>
		
		<input 
			type="submit"
			id="login"
			name="login"
			value="Login"
		/>
		
	</form>	
</body>
</html>