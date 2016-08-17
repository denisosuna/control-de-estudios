
<?php

  /* nombres de usuario
   * Esta expresión valida que tengas al menos 3 caracteres y máximo 20.
   * Solo permite caractres desde A hasta Z (ingles) y numeros.
   */

  function validar_login($string, $string2){
    $regexpr = "/^[0-9]{6,8}$/";
	 $regexpr2 = "/^[A-Za-z0-9]{6,10}$/";
    if( preg_match($regexpr, $string) && preg_match($regexpr2, $string2)){
      return true;
    }
    else{
      return false;
    }
  }
    
  

?>
