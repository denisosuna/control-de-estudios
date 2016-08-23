<?php

  session_start();
  if ( isset ($_SESSION ["usuario"])){
	 $cedula=$_REQUEST["usuario"];
	 $cedula1=$_REQUEST["usuario1"];
  
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

<link href="../../../css/usuarios/administrador/modificar_usuario.css" rel="stylesheet"  type="text/css"><!-- estilo unico de esta pagina -->
<link href="../../../css/tema.css"      rel="stylesheet"  type="text/css"> <!-- estilo del tema -->
<link href="../../../css/menu.css"      rel="stylesheet"  type="text/css"><!-- estilo del menu -->

<script type="text/javascript" src="../../../js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="../../../js/jquery-ui.js"></script>
<script type="text/javascript" src="../../../js/validar-login.js"></script>



<title>Sistema de Control de Estudios</title>


</head>

<body>


  <div class="cabecera">
   <a ><img src="../../../img/logo.jpg" class="logo_total" /></a>
    <p class="nom_colegio"> C.E.I.N CYNTHIA ROSENBERG</p>
	  <p class="nom_sistema">sistema de control de estudios</p>
  </div><!--fin cabecera -->


<div class="contenedor">

  <?php
    include("menu_administrador.php");
	
    
  ?>
  <div class="contenido">

  <?php include ('../../../../controlador/usuario/con_consultar-usuario.php'); ?>

      <div class="contenedor-registrar">


  <div class="formulario-registro">
  <div class="registro-cabecera">
    <h5>Modificar Usuario</h5>
  </div>
  
  
    <div class="formulario-registro">
    
    <form action="../../../../controlador/usuario/con_modificar-usuario.php" id="registrar" class="registrar"  method="GET" name="registrar" onSubmit="return validarPasswd()" >
    
    <table  class="tabla_registro" >
   
      <tr><td width="190"> 
    
      <span class="label"><h3>Cedula de Identidad:</h3></span>
     
      <p><input type="text" placeholder="CI" name="CI" required pattern="[0-9]{7,8}" value="<?php echo $cedula; ?>"><input type="hidden" name="CI1" value="<?php echo $cedula1; ?>" /></p>
      
      </td></tr>
      
     <tr><td> 
     
     <span class="label"><h3>Contraseña:</h3></span>
     <p><input type="password" id="contraseña" name="contraseña" placeholder="6-10 caracteres" pattern="[A-Za-z0-9]{6,10}" required="required" title="Requisitos mínimos: 
6 a 10 caracteres,sensible a mayuscula y minuscula.
No puede usar caracteres especiales (*/.}{¿'=, etc..).
No use espacios en blanco." value="<?php echo $var['contraseña']; ?>"/></p>
     
       
       </td><td width="229"> <span class="label"><h3>Repita contraseña:</h3></span>
      
      <p><input type="password" id="rcontraseña" name="rcontraseña" placeholder="repita Contraseña" pattern="[A-Za-z0-9]{6,10}" required="required" title="repita Contraseña" value="<?php echo $var['contraseña']; ?>"  /></p>
      </td></tr>
     
      <tr><td> 
      <span class="label"><h3>Nombre:</h3></span>
      <p><input type="text" placeholder="Nombre" name="Nombre" required pattern="[A-Za-z]{2,30}" value="<?php echo $var['nombre']; ?>" ></p>
       </td><td>
       <span class="label"><h3>Apellido:</h3></</span>
     <p> <input type="text" placeholder="Apellido" name="Apellido" required pattern="[A-Za-z]{2,30}" value="<?php echo $var['apellido']; ?>"></p>
      </td></tr>
      <tr><td>
     <button type="submit" class="boton.registrar" name="ingresar" value="registrar"  >Registrar</button>    </td>
       <td> <button  type="reset" id="boton-limpiar" name="limpiar" value="limpiar" >Limpiar</button>
    </td></tr>
   
    </table>
 
    
      </form>
      
    </div>
    </div>
  </div>

</div><!--fin contenido -->
  
  
</div><!--fin contenedor -->

</body>
</html>

