
<?php
error_reporting(0); 

session_start();




$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$enviar=$_REQUEST['enviar'];
$cedula=$_REQUEST['cedula'];
$mcedula=$cedula;




if ($_REQUEST['ingresar']) {
	
	?>
	
<form name="form" action="con_validar-usuario.php" method="post">

<input  type="hidden" name="usuario" value="<?php echo $usuario;?>" >

<input type="hidden" name="contraseña"value="<?php echo $contraseña;?>">

</form>

<script language=javascript>document.form.submit();</script>

<?php

}


elseif( $_REQUEST['registrar']) { 
?>
<?php
header ("location:../../vista/html/usuarios/vis_registro.php");


}
elseif($enviar==Modificar){
?>	


<form name="form" action="../../vista/html/usuarios/administrador/vis_modificar-usuario.php" method="get">

<input  type="hidden" name="usuario" value="<?php echo $cedula;?>" >

<input  type="hidden" name="usuario1" value="<?php echo $mcedula;?>" >


</form>

<script language=javascript>document.form.submit();</script>

	
<?php	
	}elseif($enviar==eliminar){
?>		
		
<form name="form" action="con_eliminar-usuario.php" method="post">

<input  type="hidden" name="usuario" value="<?php echo $cedula;?>" >
<input  type="hidden" name="usuario" value="<?php echo $mcedula;?>" >


</form>

<script language=javascript>document.form.submit();</script>	

<?php		
		}elseif($enviar==ver_registro){
			
?>
	<form name="form" action="con_ver_registro.php" method="post">

   <input  type="hidden" name="usuario" value="<?php echo $cedula;?>" >


</form>

<script language=javascript>document.form.submit();</script>
			
<?php			
			}


?>