
<?php
/*
  session_start();
  if ( isset ($_SESSION ["usuario"])){

   //break;
  }
  else{

    header ("Location:../../../qindex.php");
	exit;
  }
 */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../../css/principal.css" rel="stylesheet" type="text/css"><!-- estilo unico de esta pagina -->
<link href="../../css/tema.css" rel="stylesheet" type="text/css"> <!-- estilo del tema -->
<link href="../../css/menu.css" rel="stylesheet" type="text/css"><!-- estilo del menu -->
<link href="../../css/contenido.css" rel="stylesheet" type="text/css"><!-- estilo del menu-->

<script type="text/javascript" src="../../js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="../../js/jquery-ui.js"></script>




<!-- oculto --->

<style media="screen">
  .oculto .oculto2 {
    display: none;
  }
</style>

<title>Sistema de Control de Estudios</title>
</head>

<body>


  <div class="cabecera">

    <p class="nom_colegio"> C.E.I.N CYNTHIA ROSENBERG</p>
	  <p class="nom_sistema">sistema de control de estudios</p>
  </div><!--fin cabecera -->


<div class="contenedor">
  <a href="../vis_principal.php"><img src="../../img/logo.jpg"   class="logo_total"/></a>
  <?php
    include("../menu.php");
  ?>

  <div class="contenido">

 <form id="formulario" method="post" action="prueba.php">
	<fieldset><legend >Ficha de inscripción </legend>
    <fieldset>
		<legend>Datos del estudiante </legend>
         <label>Fecha de inscripcion:
		<input name="finscripcion" type="date" /></label><br />
        <label>Cedula escolar:
		<input name="cescolar" type="text"  /></label><br />

		<label>Primer Nombre:
		<input name="pnombre" type="text"   /></label>
		<label>Segundo Nombre:
		<input name="snombre" type="text"  /></label>
		<label>Primer Apellido:
		<input name="papellido" type="text" /></label>
		<label>Segundo Apellido:
		<input name="sapellido" type="text"  /></label>

        <label>Fecha de nacimiento:
		<input name="fnacimiento" type="date" /></label>
         <label>Lugar de nacimiento:
		<input name="lnacimiento" type="text" /></label>
         <label>Edad:
		<input name="Edad" type="text" /></label><br />
         <label  >Dirección:
		<input  style="width:495px; " name="direccion" type="text" /></label>
           <label>Telefono:
		<input name="telefono" type="text" /></label>
		</fieldset>
        <fieldset>
		<legend>Datos de la madre </legend>

		<label>Primer Nombre:
		<input name="pnombrem" type="text" /></label>
		<label>Segundo Nombre:
		<input name="snombrem" type="text" /></label>
		<label>Primer Apellido:
		<input name="papellidom" type="text" /></label>
		<label>Segundo Apellido:
		<input name="sapellidom" type="text" /></label>
         <label>Cedula :
		<input name="cim" type="text" /></label>
           <label>Estado civil:
		<input name="edocivilm" type="text" /></label>
         <label>Edad:
		<input name="edadm" type="text" /></label><br />
         <label  >Dirección:
		<input  style="width:495px; " name="direccionm" type="text" /></label>
           <label>Telefono:
		<input name="telefono" type="text" /></label>
        <label>Grado de instrucción:
		<select name="Grado_de_instruccionm">
		  <option value="Sin_instruccion">Sin instrucción</option>
		  <option value="Prim_completa">Primaria completa</option>
		  <option value="Prim_no_completa">Primaria no completa</option>
		  <option value="Secun_completa">Secundaria completa</option>
		  <option value="Secun_no_completa">Secundaria no completa</option>
		  <option value="Superior_completa">Superior completa</option>
          <option value="Superior_no_completa">Superior no completa</option>
		</select></label>
        <label>¿Trabaja?
        <input type="checkbox" style="width:175px;" id="ck_trabajom" onchange="trabajo()"  name="trabajam" checked="CHECKED"  /></label>
        
        
          <label class="oculto2">¿En que trabaja?
        <input class="oculto2" type="text" name="qtrabajam"  /></label>
         <label class="oculto2">¿donde trabaja?
        <input class="oculto2" type="text" name="dtrabajam"  /></label>
       </fieldset>

         <fieldset>
		<legend>Datos del padre </legend>

		<label>Primer Nombre:
		<input name="pnombrep" type="text" /></label>
		<label>Segundo Nombre:
		<input name="snombrep" type="text" /></label>
		<label>Primer Apellido:
		<input name="papellidop" type="text" /></label>
		<label>Segundo Apellido:
		<input name="sapellidop" type="text" /></label>
         <label>Cedula :
		<input name="cipadre" type="text" /></label>
           <label>Estado civil:
		<input name="edocivilp" type="text" /></label>
         <label>Edad:
		<input name="edadpadre" type="text" /></label><br />
         <label  >Dirección:
		<input  style="width:495px; " name="direccionp" type="text" /></label>
           <label>Telefono:
		<input name="telefono" type="text" /></label>
        <label>Grado de instrucción:
		<select name="Grado_de_instruccionp">
		  <option value="Sin_instruccion">Sin instrucción</option>
		  <option value="Prim_completa">Primaria completa</option>
		  <option value="Prim_no_completa">Primaria no completa</option>
		  <option value="Secun_completa">Secundaria completa</option>
		  <option value="Secun_no_completa">Secundaria no completa</option>
		  <option value="Superior_completa">Superior completa</option>
          <option value="Superior_no_completa">Superior no completa</option>
		</select></label>



        <label style="">¿Trabaja?
        <input type="checkbox" style="width:175px;" id="ck_trabajop" onchange="trabajo()" name="trabajap" checked="CHECKED"  /></label>

        <label class="oculto">¿En que trabaja?
        <input class="oculto" type="text" name="qtrabajap"  /></label>
        <label class="oculto">¿donde trabaja?
        <input class="oculto" type="text" name="dtrabajap"  /></label>


<script type="text/javascript">
    function trabajo(){
      var estado = document.getElementById("ck_trabajop");
	  var estado2 = document.getElementById("ck_trabajom");
      if(estado.checked){
        $(".oculto").fadeIn();
	
      }
      else{
        $(".oculto").fadeOut();
      }
	  
	   if(estado2.checked){
        $(".oculto2").fadeIn();
	
      }
      else{
        $(".oculto2").fadeOut();
      }
	  
	  
	  
    }
</script>

<!------------------------>


        </fieldset>













<!-- #modificado, mostrar input segun el entero - Requiere Jquery-->
       <fieldset><legend>Procedencia de Estudiante</legend>

       <label style="width:185px;">Este Preescolar: <input type="radio"  name="procedencia" value="este_preescolar" /></label>
       <label>Del hogar:<input type="radio" name="procedencia" value="del_hogar" /></label>
       <label>Otra:<input type="radio" name="procedencia" value="otra_procedencia" /></label>
       <label>Otra:<input type="text" name="otra_procedencia" /></label><br/>
       <label style="width:255px;">Hermanos en el preescolar <input type="checkbox" name="hermano_preescolar" value="hermano_preescolar" /></label>

        <label>¿Cuantos?<input type="number" style="width:80px;" id="cantidad_her" name="cuantos_hermanos" onblur="div_auto()" min="0" max="3"/></label><br/><!-- #onchange == en cada cambio -->
        <div style="max-height:300px;
        display:block;" id="div_hermanos">
        
  
        </div>

<script type="text/javascript">
// en el input type number el --onblur="div_auto()"--
// funciona cuendo se hace foco en el elemnto y luego fuere de el.

  function div_auto(){
    $(".remover").remove() // eliminar todos los elementos que contengan la clase remover
	
    var cantidad = document.getElementById("cantidad_her").value; // obtener el valor

    for(var i = 0; i < cantidad; i++){
      var input = $("input type=\"text\" class=\"remover \" name=\" hermanos_"+i+" \"/>"); // def del element
	  $("#div_hermanos").append(input); //lo agrega al doom
        
	
    }
  }
  //la clase "remover" la autilizo como auxiliar identificador, para eliminarlo despues...

</script>
<!-- #modificado, mostrar input segun el entero - Requiere Jquery-->


      </fieldset>

       <fieldset>	<legend>En caso de emergencia</legend>

       <label>Llamar a:
       <input type="text" name="llamar_emergencia" /> </label>
         <label>Telefono:
       <input type="text" name="tel_emergencia" /></label>
             <label>Llevar a:
       <input type="text" name="llevar_emergencia" /></label>
          <label>Fiebre alta suministrar:
       <input type="text" name="fiebre_suministrar" /></label>
       </fieldset>

       <fieldset><legend>Información de salud</legend>

       <label>¿Es asmatico?:
       <input type="checkbox" style="width:160px;"  name="asmatico" value="asmatico" /> </label>
            <label>Medicamento asma:
       <input type="text" name="medicamento_asma" /> </label>

       <label>¿Es alergico?:
       <input type="checkbox" style="width:160px;"    name="alergico" value="alergico" /> </label>

       <label>¿Que medicamento?:
       <input type="text" name="medicamento_alergia" /> </label><br  />

        <label>Enfermedades padecidas:
       <input type="text" style="width:670px; " name="Enfermedades_padecidas" /> </label><br  />
        <label>¿Tratamiento especial?:
         <input type="checkbox" name="tratamiento_especial" value="tratamiento_espe" /> </label>
        <label>Explique:
       <input type="text" style="width:490px;" name="explica_tratamiento" /> </label><br  />
       <label><strong>Asiste a</strong>:<br  />

       <label style="width:150px;">Psicologo:
        <input type="checkbox"   name="psicologo" value="psicologo" /> </label>
        <label>Psicopedagogo:
        <input type="checkbox"  name="psicopedagogo" value="psicopedagogo"/> </label>
         <label style="width:150px;"  >Neurologo:
        <input type="checkbox" class="check"  name="neurologo" value="neurologo"/> </label>
           <label>Terapista de lenguaje:
        <input type="checkbox"  name="terapia_lenguaje" value="terapia_lenguaje"/> </label><br  />
        <label>Motivo:
           <input type="text" style="width:320px;" name="motivo" /> </label>
                  <label>Lugar:
           <input type="text" style="width:320px;" name="lugar_asistencia" /> </label><br  />
            <label><strong>Es:</strong>:<br  />

       <label style="width:120px;">Activo:
        <input type="checkbox" style="text-align:left;"   name="activo" value="activo" /> </label>
        <label>Tranquilo:
        <input type="checkbox"  name="tranquilo" value="tranquilo"/> </label>
         <label style="width:120px;"  >Sociable:
        <input type="checkbox"   name="sociable" value="sociable"/> </label>
           <label style="width:120px;">Timido:
        <input type="checkbox"  name="timido" value="timido"/> </label>
              <label style="width:120px;">Comunicativo:
        <input type="checkbox"  name="comunicativo" value="comunicativo"/> </label><br/>


            <label><strong>Vacunas:</strong>:<br  />

         <label style="width:120px;">BCG:
        <input type="checkbox"   name="bcg" value="bcg" /> </label>
        <label>Antipoliomelitica:
        <input type="checkbox"  name="antipoliomelitica" value="antipoliomelitica"/> </label>
         <label style="width:120px;"  >Pentavalente:
        <input type="checkbox"  name="pentavalente" value="pentavalente"/> </label>
           <label style="width:120px;">Antihepatities A:
        <input type="checkbox"  name="antihepatities_a" value="antihepatities_a"/> </label>
              <label style="width:130px;">Antihepatities B :
        <input type="checkbox"  name="antihepatities_b" value="antihepatities_b"/> </label> <br/>

             <label style="width:120px;">Triple Bacterina:
        <input type="checkbox"   name="triple_bacterina" value="triple_bacterina" /> </label>
        <label>Trivalente Viral:
        <input type="checkbox"  name="Trivalente Viral" value="antipolimielitis"/> </label>
         <label style="width:120px;"  >Antiamarilica:
        <input type="checkbox"  name="antiamarilica" value="antiamarilica"/> </label>
           <label style="width:250px;">Antihaemophilus Influenzae tipo b:
        <input type="checkbox"  name="anti_influ_b" value="anti_influ_b"/> </label>
        <br/>

        <label>Toxoide:
        <input type="checkbox"  name="toxoide" value="toxoide"/> </label>
         <label style="width:120px;"  >Ritavirus:
        <input type="checkbox"  name="ritavirus" value="ritavirus"/> </label>
           <label style="width:380px;">Otras Vacunas:
        <input type="text" style="width:360px;" name="otra_vacun" /> </label>
        <br/>
        </fieldset>
        <fieldset> <legend>Autorizados a retirar estudiante</legend>
        <label style="width:120px;">Nombre:
		<input name="nombre_retira1" type="text" style="width:100px;"   /></label>
		<label style="width:120px;">Apellido:
		<input name="apellido_retira1" style="width:100px;" type="text"  /></label>
		<label>CI:
		<input name="ci_retira1" type="text" /></label>
		<label>Parentesco:
		<input name="parentesco_retira1" type="text"  /></label>
        <label style="width:80px;">Edad:
		<input name="edad_retira1" style="width:65px;" type="text"  /></label><br/>

            <label style="width:120px;">Nombre:
		<input name="nombre_retira2" type="text" style="width:100px;"   /></label>
		<label style="width:120px;">Apellido:
		<input name="apellido_retira2" style="width:100px;" type="text"  /></label>
		<label>CI:
		<input name="ci_retira2" type="text" /></label>
		<label>Parentesco:
		<input name="parentesco_retira2" type="text"  /></label>
        <label style="width:80px;">Edad:
		<input name="edad_retira2" style="width:65px;" type="text"  /></label><br/>

            <label style="width:120px;">Nombre:
		<input name="nombre_retira3" type="text" style="width:100px;"   /></label>
		<label style="width:120px;">Apellido:
		<input name="apellido_retira3" style="width:100px;" type="text"  /></label>
		<label>CI:
		<input name="ci_retira3" type="text" /></label>
		<label>Parentesco:
		<input name="parentesco_retira3" type="text"  /></label>
        <label style="width:80px;">Edad:
		<input name="edad_retira3" style="width:65px;" type="text"  /></label><br/>

            <label style="width:120px;">Nombre:
		<input name="nombre_retira4" type="text" style="width:100px;"   /></label>
		<label style="width:120px;">Apellido:
		<input name="apellido_retira4" style="width:100px;" type="text"  /></label>
		<label>CI:
		<input name="ci_retira4" type="text" /></label>
		<label>Parentesco:
		<input name="parentesco_retira4" type="text"  /></label>
        <label style="width:80px;">Edad:
		<input name="edad_retira4" style="width:65px;" type="text"  /></label><br/>
        </fieldset>
        <fieldset><legend>Datos de Transporte</legend>
         <label >Nombre:
		<input name="nombre_transporte" type="text"   /></label>
		<label >Apellido:
		<input name="apellido_transporte"  type="text"  /></label>
		<label>CI:
		<input name="ci_transporte" type="text" /></label>
		<label>Telefono:
		<input name="telefono" type="text"  /></label><br/>
        <label style="width:165px;">Placa:
		<input name="placa_transporte" style="width:150px;" type="text"  /></label>

        <label style="width:450px;">Ruta:
		<input name="ruta_transporte" style="width:495px;" type="text"  /></label><br/>






       </label>

       </fieldset>




		<br  />
		<input type="submit" value="enviar" title="Enviar" class="enviar"  onclick="return confirm('¿Seguro que quiere proceder con la inscripción?')" />
	</fieldset>
</form>

</div><!--fin contenido -->
</div><!--fin contenedor -->

</body>
</html>
