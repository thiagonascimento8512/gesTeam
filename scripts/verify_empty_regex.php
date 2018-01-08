<?php
  /*==================================================//
 //  VERIFICAÇÃO DOS DADOS FORNECIDOS NO FORMULÁRIO  //
//==================================================*/
	//Array para armazenar as não-validação dos campos
	$erros;
	
	//Armazenará TRUE caso os dados tiverem sido armazenados
	//	sucesso no bando de dados
	//	Obs.: Será útil para carregar ou não os valores nos
	//	campos do formulário
	$save_dados_bd = FALSE;			
				
	//Verifica se o campo está vazio e compara com a Regex
	//Retorna 1 para vazio e 2 para padrão inconsistente
	function VerificaVazioRegex($name_campo, $campo, $reg){
		//Verifica se o campo possui conteúdo para poder verificar a Regex
		if (empty($campo) || $campo == null || $campo == ""){				
			global $erros;
			$erros["$name_campo"] = "não pode ficar vazio.";					
		}				
		else {
			//Verificação da string fornecida com a Regex
			if (!preg_match($reg, $campo)){
				global $erros;
				$erros["$name_campo"] = "possui caracteres, formato ou valor inválidos.";
			}					
		}	
	}
						
?>