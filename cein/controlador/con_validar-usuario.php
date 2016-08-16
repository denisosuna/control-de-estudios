<?php

  error_reporting(0);
  
  include('val.php');
  session_start();
  
  if ( isset ($_SESSION ["usuario"])){
    header ('Location: ../vista/vis_principal.php');
  }
  
  else{


if (validar_login($_POST['usuario'], $_POST['contraseña'])){
	  
    $cedula = $_POST['usuario'];
    $contraseña =$_POST['contraseña'];

    include('../modelo/mod_connex.php');
    $conexion = new conexion();
    $pgcon = $conexion->conectar();

    include('../modelo/mod_usuario.php');
    $cuenta = new cuenta_usuario();
    $var = $cuenta->iniciar_sesion($pgcon, $cedula, $contraseña, $nombre);
	

    if ($var["cedula"] != NULL ){
		
      $_SESSION["usuario"] = $var['nombre'];
      // Si la consulta coincide, redireccciona
       header ("Location: ../vista/vis_principal.php");
	 
		
		 
    }else{
		 echo'<script type="text/javascript">
                alert("Usuario o Contraseña Incorrecta");
                window.location="../vista/qindex.php";
                </script>';
				
		
		}
  
   
   
  }
  
 
  else{
	 
     echo'<script type="text/javascript">
                alert("Formato de datos incorrecto, Verifique");
                window.location="../vista/qindex.php";
                </script>';
  }


  }
?>
