<?php
	$g_link = false;
	
	function GetMyConnection(){
		global $g_link;		
		if ($g_link == TRUE){
			return $g_link;
		}		
		$g_link = mysqli_connect('127.0.0.1', 'root', 'thiago', 'manker')
		or die('Não foi possível estabelecer a conexão com o banco de dados!');
		
		return $g_link;
	}
	
	function CleanUpDB(){
		global $g_link;
		if ($g_link != false)
			mysqli_close($g_link);
		$g_link = false;		
	}
?>