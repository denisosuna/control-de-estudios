<?php
 
  error_reporting(0);
  session_start();
  if ( isset ($_SESSION ["usuario"])){
    header ("Location: ../vista/vis_principal.php");
	exit; 
  }
  else{

  }

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="vista/css/estilo_index.css" rel="stylesheet" type="text/css">
    
    <link href="vista/css/tema.css" rel="stylesheet" type="text/css"> <!-- estilo del tema -->
     
        <link rel="stylesheet" href="vista/css/login.css">
    
          <link rel="stylesheet" href="vista/css/jquery-ui.css">
  
             <script src='vista/js/jquery.min.js'></script>
               <script src='vista/js/jquery-ui.min.js'></script>
     
    
<title>Ingreso al Sistema </title>

</head>

<body>

   <div class="cabecera">
    <div class="logo_index">
      <a href="qindex.php"><img src="vista/img/logo.jpg" height="70"  class="logo_index"/></a>
    </div><!--fin logo -->
    <p class="nom_colegio"> C.E.I.N CYNTHIA ROSENBERG</p>
	  <p class="nom_sistema">sistema de control de estudios</p>
  </div><!--fin cabecera -->
  

<div class="contenedor1">

    
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

<div class="login">

  <div class="login-form">
  <div class="login-header">
    <h5>Ingreso al Sistema</h5>
  </div>
    <div class="login-form">
    <form action="controlador/usuario/con_accion-usuario.php" method="post">
      <h3>Cedula de Identidad:</h3>
      <input type="text" placeholder="Usuario" name="usuario" required pattern="[0-9]{6,8}">
      <br>
      <h3>Contraseña:</h3>
      <input type="password" placeholder="Contraseña" name="contraseña" required pattern="[A-Za-z0-9]{6,10}">
      <br>
      
      <button type="submit" class="login-button" name="ingresar" value="Ingresar">ingresar</button>
      
      
      <button type="submit" class="boton-registrar" name="registrar" value="registrar" formnovalidate="formnovalidate" >registrar</button>
      
      
      </form>
      <br>
    </div>
 
  </div>
</div>



   

</div><!--fin contenedor -->

</body>
</html>