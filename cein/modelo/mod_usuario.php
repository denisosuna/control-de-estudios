<?php
  ini_set('display_errors', 1);   //Reportar todos los errores PHP
  error_reporting(E_ALL);         //Reportar todos los errores PHP

  class cuenta_usuario{
    // Atributos
/*
    private $cedula;
    private $contraseña;
    private $nombre;
    private $apellido;
	private $mcedula;
	
	
	



    // Metodos
    function inicializar($pgcon, $cedula, $contraseña, $nombre, $apellido,$mcedula){


      $this->cedula   = $cedula;
      $this->contraseña = $contraseña;
      $this->nombre   = $nombre;
      $this->apellido = $apellido;
	  $this->mcedula = $mcedula;
	  
 
    }

*/
    // Agregar cuenta a la BD
    public function registrar_usuario($pgcon, $cedula, $contraseña, $nombre, $apellido){
		
		$query = "INSERT INTO usuario(cedula, contraseña, nombre, apellido) VALUES('$cedula','$contraseña', '$nombre','$apellido')";
		
	$consulta = pg_query($pgcon,$query) or die("Consulta errónea: ".pg_last_error());
	
		return $consulta; 	
    }
	  

    // Consultar todas las cuentas de las BD
    public function listar_cuentas($pgcon){
      $sql = pg_query($pgcon, "SELECT * FROM usuario " );

      $i = 0;
	 
      // Obtener una fila de resultados como un array enumerado
      while ($fila = pg_fetch_row($sql)) {
        $ress[$i] = $fila;
        $i++;
      }
      return $ress;
    }
	



    //Consultar una cuenta
    public function consultar_un_usuario($pgcon, $cedula){
      $sql = pg_query($pgcon, "SELECT * FROM usuario WHERE cedula='$cedula'");
      $resultado = pg_fetch_assoc($sql);
      return $resultado;
    }


    // Eliminar cuenta
    public function eliminar_usuario($pgcon, $cedula){
      pg_query($pgcon, "DELETE FROM usuario WHERE cedula= '$cedula'");
    }

    // iniciar sesion
    public function iniciar_sesion($pgcon, $cedula, $contraseña, $nombre){
      $sql = pg_query($pgcon, "SELECT * FROM usuario WHERE cedula = '$cedula' AND contraseña = '$contraseña'");
      $resultado = pg_fetch_assoc($sql);  //obtiene una fila de la consulta
      return $resultado;
    }


    // Modificar cuenta usuario
  
  public function modificar_usuario($pgcon, $cedula, $contraseña, $nombre, $apellido,$mcedula){
      pg_query($pgcon, "UPDATE usuario SET  contraseña = '$contraseña', nombre = '$nombre', apellido = '$apellido', cedula = '$cedula' WHERE cedula = '$mcedula'");
    }


  }

		

?>
