var num = "0123456789";
		
		function verifica(s){
			var el = document.getElementById(s);
			var previous_value;
			if (el.value == null)
				previous_value = '';
			else
				previous_value = el.value;
						
			var tecla = pegaTecla();
			if (num.indexOf(tecla) == -1){
				el.value = previous_value.substr(1,(previous_value.length - 1));
			} else {
				el.value = previous_value;
			}
		}
				
		function inicializa(){
		    document.addEventListener('keyup', pegaTecla);
		}

		function pegaTecla(){
		  var tecla = event.key;
		  return tecla;
		}
		