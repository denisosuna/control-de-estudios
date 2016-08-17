<?php
session_start();
//Matamos la sesion
session_destroy();
header("Location: ../../qindex.php");
exit; 
?>
