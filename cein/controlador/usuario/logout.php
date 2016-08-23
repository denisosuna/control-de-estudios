<?php
session_start();
session_unset();
//Matamos la sesion
session_destroy();
header("Location: ../../qindex.php");
exit; 
?> 
