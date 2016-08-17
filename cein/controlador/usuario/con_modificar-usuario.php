<?php



  $cedula = $_REQUEST['CI'];
  $contraseña = $_REQUEST['contraseña'];
  $nombre =  $_REQUEST['Nombre'];
  $apellido = $_REQUEST['Apellido'];
  $mcedula=$_REQUEST['CI1'];



  include('../../modelo/mod_connex.php');
  $conexion = new conexion();
  $pgcon = $conexion->conectar();


  include('../../modelo/mod_usuario.php');
  $cuenta = new cuenta_usuario();
  $var = $cuenta->modificar_usuario($pgcon, $cedula, $contraseña, $nombre, $apellido,$mcedula);



 header ("Location: ../../vista/html/vis_principal_admin.php");




?>