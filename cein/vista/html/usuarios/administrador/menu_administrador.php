<?php  session_start(); ?>
<div class="menu_gral">
 <div class="logo">
      <a href="../../qindex.php"><img src="../../../img/logo.jpg" src="../img/logo.jpg" width="200"  height="250"  class="logo"/></a>
    </div><!--fin logo -->

  <ul>
     <li class="menu_cabecera"> <p >Usuario: <?php  echo $_SESSION ["usuario"];  ?> </p></li>
    <li><a href="#">estudiantes</a>
      <ul >
        <li><a href="">inscripcion</a></li>
        <li><a href="">re-inscripcion</a></li>
        <li><a href="">listado de alumnos</a></li>
      </ul>
    </li>
    <li><a href="#">profesores</a>
      <ul>
        <li><a href="#">agregar archivo</a></li>
        <li><a href="#">listado </a></li>
      </ul>
    </li>
     <li><a href="#">Administrador</a>
      <ul>
        <li><a href="usuarios/administrador/vis_visualizar_usuario.php">Listado de usuarios</a></li>
        
      </ul>
    </li>
    
     <li><a href="../../controlador/usuario/logout.php">Salir de Sistema</a></li>
  
   
  </ul>
</div>
