<?php  session_start(); ?>
<div class="menu_gral">
 <div class="logo">
      <a href="index.php"><img src="img/logo.jpg" width="200"  height="250"  class="logo"/></a>
    </div><!--fin logo -->

  <ul>
     <li class="menu_cabecera"> <p >Usuario: <?php  echo $_SESSION ["usuario"];  ?> </p></li>
    <li><a href="#">estudiantes</a>
      <ul >
        <li><a href="../vista/vis_inscribir.php">inscripcion</a></li>
        <li><a href="../vista/vis_visualizar.php">re-inscripcion</a></li>
        <li><a href="../vista/vis_visualizar.php">listado de alumnos</a></li>
      </ul>
    </li>
    <li><a href="#">profesores</a>
      <ul>
        <li><a href="#">agregar archivo</a></li>
        <li><a href="#">listado </a></li>
      </ul>
    </li>
    
     <li><a href="../controlador/logout.php">Salir de Sistema</a></li>
  
   
  </ul>
</div>
