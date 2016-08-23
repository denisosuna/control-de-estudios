<?php
 $cedula=$_REQUEST["usuario"];
 
   include('../../modelo/mod_connex.php');
  $conexion = new conexion();
  $pgcon = $conexion->conectar();


  include('../../modelo/mod_usuario.php');
  $cuenta = new cuenta_usuario();
$var = $cuenta->eliminar_usuario($pgcon, $cedula);
 

?>