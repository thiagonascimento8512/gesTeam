window.onload = init();

function init(){
	var el = document.getElementById("salvar");
	
}

var num = "0123456789";

function teste(){
	alert('fd');
}

function confirmarTecla(e){
	var el = document.getElementById(e);
	var tecla = event.key;
	var check = el.value;
	
	if (num.indexOf(tecla) != -1){
	} else {
		el.value = "d";
	}			
}		