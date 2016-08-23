
<?php

  session_start();
  if ( isset ($_SESSION ["usuario"])){
	  
   //break;
  }
  else{

    header ("Location:../../qindex.php");
	exit; 
  }
 

?>
 



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../css/principal.css" rel="stylesheet" type="text/css"><!-- estilo unico de esta pagina -->
<link href="../css/tema.css" rel="stylesheet" type="text/css"> <!-- estilo del tema -->
<link href="../css/menu.css" rel="stylesheet" type="text/css"><!-- estilo del menu -->
<link href="../css/contenido.css" rel="stylesheet" type="text/css"><!-- estilo del menu -->

<script type="text/javascript" src="../js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>


<title>Sistema de Control de Estudios</title>
</head>

<body>

  <div class="cabecera">
 

    <p class="nom_colegio"> C.E.I.N CYNTHIA ROSENBERG</p>
	  <p class="nom_sistema">sistema de control de estudios</p>
  </div><!--fin cabecera -->


<div class="contenedor">
<a ><img src="../img/logo.jpg" class="logo_total" /></a>
  <?php
  
    include("menu.php");   
  ?>
  <div class="contenido"> 
 
  
  <p align="center"> <?php echo $_SESSION ["usuario"];?> Bienvenido al sistema </p>
  
  
  </div> <!--fin contenido -->
  
</div><!--fin contenedor -->

</body>
</html>
