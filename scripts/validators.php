<?php
function ValidarTextoSimples($txt){
	if (is_null($txt) || $txt == null || $txt == '')
		return "Campo em branco";
	else
		return TRUE;
}

?>