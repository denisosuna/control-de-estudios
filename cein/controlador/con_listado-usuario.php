<?php



  include('../modelo/mod_connex.php');
  $conexion = new conexion();
  $pgcon = $conexion->conectar();


  include('../modelo/mod_usuario.php');
  $cuenta = new cuenta_usuario();
  $var = $cuenta->listar_cuentas($pgcon)

 
  
 

?>