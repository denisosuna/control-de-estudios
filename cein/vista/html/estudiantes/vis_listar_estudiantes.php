
<?php

  session_start();
  if ( isset ($_SESSION ["usuario"])){
	  
   //break;
  }
  else{

    header ("Location:../../../qindex.php");
	exit; 
  }
 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../../css/principal.css" rel="stylesheet" type="text/css"><!-- estilo unico de esta pagina -->
<link href="../../css/tema.css" rel="stylesheet" type="text/css"> <!-- estilo del tema -->
<link href="../../css/menu.css" rel="stylesheet" type="text/css"><!-- estilo del menu -->
<link href="../../css/contenido.css" rel="stylesheet" type="text/css"><!-- estilo del menu -->

<script type="text/javascript" src="../../js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="../../js/jquery-ui.js"></script>






<title>Sistema de Control de Estudios</title>
</head>

<body>


  <div class="cabecera">
   
    <p class="nom_colegio"> C.E.I.N CYNTHIA ROSENBERG</p>
	  <p class="nom_sistema">sistema de control de estudios</p>
  </div><!--fin cabecera -->


<div class="contenedor">
  <a href="../vis_principal.php"><img src="../../img/logo.jpg"   class="logo_total"/></a>
  <?php
    include("../menu.php");
  ?>
  
  <div class="contenido">
  
     <form name="visualizar" method="get"  action="../../../../controlador/usuario/con_accion-usuario.php" >

        <?php

          //include '../../../../controlador/usuario/con_listado-usuario.php';
          echo "<h2 align='center'>Listado de usuarios</h2><br/>";
          echo "<table >";
          echo "<thead>";
          echo "<tr>";
          echo "<th></th>";
          echo "<th>nombre</th>";
          echo "<th>apellido</th>";
          echo "<th>Cedula</th>";
          echo "<th>Contraseña</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";

          for ($i = 0; $i < count($var); $i++){
			  
            echo "<tr>";  //Filas
            echo "<td>";
            echo "<p>";
            echo "<input type='radio' name='cedula' id=".$var[$i][2]." value=".$var[$i][2]." class=''> ";
            echo "<label for='".$var[$i][2]."'></label>";
            echo "</p>";
            echo "</td>";
            echo "<td><div class='text_td'>" . $var[$i][0] . "</div></td>";
            echo "<td><div class='text_td'>" . $var[$i][1] . "</div></td>";
            echo "<td><div class='text_td'>" . $var[$i][2] . "</div></td>";
            echo "<td><div class='text_td'>" . $var[$i][3] . "</div></td>";  

          }
          echo "</tr>";
		
          echo "<tbody>";
		  echo"<tfoot >";
		    echo "<tr>";
		  echo "<td  colspan='5'  >";
		  echo " <div class='botones'>";
		  
		  echo " <input class='button' type='submit' name='enviar' id='enviar' value='Modificar'  ></div>";
		      echo "<div class='botones'> <input class='button ' type='submit' name='enviar' id='enviar' value='Eliminar' ></div>";

	echo "<div class='botones'>";
echo " <input class='button ' type='submit' name='enviar' id='enviar' value='Ver registro' ></div></td>";
		  
           
		  echo "</tr>";	
          echo "</table>";


        ?>

</form>
  
</div><!--fin contenido -->
</div><!--fin contenedor -->

</body>
</html>
