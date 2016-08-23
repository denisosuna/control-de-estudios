<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../../css/estilo_index.css" rel="stylesheet" type="text/css">
    
    <link href="../../css/tema.css" rel="stylesheet" type="text/css"> <!-- estilo del tema -->
    
        <link rel="stylesheet" href="../../css/registro.css">
         <link rel="stylesheet" href="../../css/jquery-ui.css">
 

<script src='../../js/jquery.min.js'></script>
<script src='../../js/jquery-ui.min.js'></script>

<script type="text/javascript" src="../../js/validar-login.js"></script>



    
<title>Ingreso al Sistema </title>

</head>

<body>

   <div class="cabecera2">
    <div class="logo">
      <a href="../../../qindex.php"><img src="img/logo.jpg" height="67"  class="logo_index"/></a>
    </div><!--fin logo -->
    <p class="nom_colegio"> C.E.I.N CYNTHIA ROSENBERG</p>
	  <p class="nom_sistema">sistema de control de estudios</p>
  </div><!--fin cabecera -->
  

<div class="contenedor1">

    
      <div class="contenedor-registrar">


  <div class="formulario-registro">
  <div class="registro-cabecera">
    <h5>Registro de Usuario</h5>
  </div>
  
  
    <div class="formulario-registro">
    
    <form action="../../controlador/usuario/con_registrar-usuario.php" id="registrar" class="registrar"  method="post" name="registrar" onSubmit="return validarPasswd()" >
    
    <table width="453" class="tabla_registro" >
    <tr><td width="190"> <span class="label"><h3>Cedula de Identidad:</h3></span>
      <p>
       <input type="text" placeholder="CI" name="CI" required pattern="[0-9]{7,8}">
      </p>
      </td></tr>
      
     <tr><td> <span class="label"><h3>Contraseña:</h3></span>
      <p>
      <input type="password" id="contraseña" name="contraseña" placeholder="6-10 caracteres" pattern="[A-Za-z0-9]{6,10}" required="required" title="Requisitos mínimos: 
6 a 10 caracteres,sensible a mayuscula y minuscula.
No puede usar caracteres especiales (*/.}{¿'=, etc..).
No use espacios en blanco." />
      
      
       
      </p></td>
      <td width="229"> <span class="label"><h3>Repita contraseña:</h3></span>
      <p>
      
        <input type="password" id="rcontraseña" name="rcontraseña" placeholder="repita Contraseña" pattern="[A-Za-z0-9]{6,10}" required="required" title="repita Contraseña" />
      </p></td></tr>
     
      <tr>
      <td> <span class="label"><h3>Nombre:</h3></span>
      <p>
       <input type="text" placeholder="Nombre" name="Nombre" required pattern="[A-Za-z]{2,30}" ></td>
       <td><span class="label"><h3>Apellido:</h3></</span>
      <p> <input type="text" placeholder="Apellido" name="Apellido" required pattern="[A-Za-z]{2,30}"></p></td></tr>
      <tr><td> <button type="submit" class="boton.registrar" name="ingresar" value="registrar"  >Registrar</button> </td><td> <button  type="reset" id="boton-limpiar" name="limpiar" value="limpiar" >Limpiar</button></td></tr>
    </table>
 
    
      </form>
      
    </div>
 
  </div>
</div>
       
       

</div><!--fin contenedor -->

</body>
</html>