<?php

class conexion{
    private $usuario;
    private $clave;
    private $servidor;
    private $basedato;
    private $puerto;
    private $pgcon=null;
    
 function conexion(){
   $usuario = $this->usuario = 'postgres';
   $clave   = $this->clave='1234';
   $servidor= $this->servidor ='localhost';
   $basedato= $this->basedato = 'cein';
   $puerto  = $this->puerto = 5432;
   $pgcon   = $this->pgcon='';
   
    }
    
    
 public function conectar(){
    $this->pgcon = pg_connect("host=".$this->servidor." port="
        .$this->puerto." password="
        .$this->clave." user="
        .$this->usuario." dbname="
        .$this->basedato." ") or die("ERROR DE CONEXION");
      
	   $pgcon = $this->pgcon;
        
        return $this->pgcon;
    } 
 } 
 
 //$var = new conexion();  // Crear el objeto para llamar atributos o metodos.
//$var->conectar(); // Llamar atributo o metodo

?> 