
<?php
error_reporting(0);

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$enviar=$_REQUEST['enviar'];
$cedula=$_REQUEST['cedula'];





if ($_REQUEST['ingresar']) {
	
	?>
	
<form name="form" action="../controlador/con_validar-usuario.php" method="post">

<input  type="hidden" name="usuario" value="<?php echo $usuario;?>" >

<input type="hidden" name="contraseña"value="<?php echo $contraseña;?>">

</form>

<script language=javascript>document.form.submit();</script>

<?php

}


elseif( $_REQUEST['registrar']) { 
?>
<?php
header ("location:../vista/vis_registro.php");


}
elseif($enviar==Modificar){
?>	

<form name="form" action="../controlador/con_modificar-usuario.php" method="post">

<input  type="hidden" name="usuario" value="<?php echo $cedula;?>" >



</form>

<script language=javascript>document.form.submit();</script>

	
<?php	
	}elseif($enviar==eliminar){
?>		
		
<form name="form" action="../controlador/con_eliminar-usuario.php" method="post">

<input  type="hidden" name="usuario" value="<?php echo $cedula;?>" >



</form>

<script language=javascript>document.form.submit();</script>	

<?php		
		}elseif($enviar==ver_registro){
			
?>
	<form name="form" action="../controlador/con_ver_registro.php" method="post">

   <input  type="hidden" name="usuario" value="<?php echo $cedula;?>" >


</form>

<script language=javascript>document.form.submit();</script>
			
<?php			
			}


?>