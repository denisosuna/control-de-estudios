<?php

  $cedula = $_REQUEST['CI'];
  $contraseña = $_REQUEST['contraseña'];
  $nombre = $_REQUEST['Nombre'];
  $apellido =  $_REQUEST['Apellido'];


  include('../../modelo/mod_connex.php');
  $conexion = new conexion();
  $pgcon = $conexion->conectar();


  include('../../modelo/mod_usuario.php');
  $cuenta = new cuenta_usuario();
  $var = $cuenta->registrar_usuario($pgcon, $cedula, $contraseña, $nombre, $apellido);

 
  
  header('Status: 301 Moved Permanently', false, 301);
  header('Location: ../../vista/html/usuarios/registrado.php');
  exit();

?>


