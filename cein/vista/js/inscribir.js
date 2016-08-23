 function trabajo(){
      var estado = document.getElementById("ck_trabajop");
	  var estado2 = document.getElementById("ck_trabajom");
      if(estado.checked){
        $(".oculto").fadeIn();
	
      }
      else{
        $(".oculto").fadeOut();
      }
	  
	   if(estado2.checked){
        $(".oculto2").fadeIn();
	
      }
      else{
        $(".oculto2").fadeOut();
      }
	  
	  
	  
    }
	
	// en el input type number el --onblur="div_auto()"--
// funciona cuendo se hace foco en el elemnto y luego fuere de el.

  function div_auto(){
    $(".remover").remove() // eliminar todos los elementos que contengan la clase remover
	
    var cantidad = document.getElementById("cantidad_her").value; // obtener el valor

    for(var i = 0; i < cantidad; i++){
      var input = $("input type=\"text\" class=\"remover \" name=\" hermanos_"+i+" \"/>"); // def del element
	  $("#div_hermanos").append(input); //lo agrega al doom
        
	
    }
  }
  //la clase "remover" la autilizo como auxiliar identificador, para eliminarlo despues...
