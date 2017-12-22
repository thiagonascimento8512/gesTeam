<?php
	$g_link = false;
	
	function GetMyConnection(){
		global $g_link;		
		if ($g_link == TRUE){
			return $g_link;
		}
		$g_link = mysql_connect('localhost', 'root', 'thiago')
		or die('Não foi possível estabelecer a conexão com o banco de dados!');
		
		//Seleciona o banco de dados
		mysql_select_db('manker', $g_link) or die('Erro ao conectar ao banco de dados!');		
		
		return $g_link;
	}
	
	function CleanUpDB(){
		global $g_link;
		if ($g_link != false)
			mysql_close($g_link);
		$g_link = false;		
	}
?>