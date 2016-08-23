<?php

 class estudiante{
	 
	  // Atributos

	private $finscripcion; 
    private $cescolar; 
	private $pnombre; 
	private $snombre; 
	private $papellido; 
	private $sapellido; 
	private $fnacimiento; 
	private $lnacimiento; 
	private $Edad; 
	private $direccion; 
	private $telefono; 
	private $pnombrem; 
	private $snombrem; 
	private $papellidom; 
	private $sapellidom; 
	private $cim; 
	private $edocivilm; 
	private $edadm; 
	private $direccionm; 
	private $Grado_de_instruccionm; 
	private $trabajam; 
	private $qtrabajam; 
	private $dtrabajam; 
	private $pnombrep; 
	private $snombrep; 
	private $papellidop; 
	private $sapellidop; 
	private $cipadre; 
	private $edocivilp; 
	private $edadpadre; 
	private $direccionp; 
	private $Grado_de_instruccionp; 
	private $trabajap; 
	private $qtrabajap; 
	private $dtrabajap; 
	private $procedencia; 
	private $otra_procedencia; 
	private $hermano_preescolar; 
	private $cuantos_hermanos; 
	private $nombre_hermano1; 
	private $grupo_hermano1; 
	private $llamar_emergencia; 
	private $tel_emergencia; 
	private $llevar_emergencia; 
	private $fiebre_suministrar; 
	private $asmatico; 
	private $medicamento_asma; 
	private $alergico; 
	private $medicamento_alergia; 
	private $Enfermedades_padecidas; 
	private $tratamiento_especial; 
	private $explica_tratamiento; 
	private $psicologo; 
	private $psicopedagogo; 
	private $neurologo; 
	private $terapia_lenguaje; 
	private $motivo; 
	private $lugar_asistencia; 
	private $activo; 
	private $tranquilo; 
	private $sociable; 
	private $timido; 
	private $comunicativo; 
	private $bcg; 
	private $antipoliomelitica; 
	private $pentavalente; 
	private $antihepatities_a; 
	private $antihepatities_b; 
	private $triple_bacterina; 
	private $Trivalente_Viral; 
	private $antiamarilica; 
	private $anti_influ_b; 
	private $toxoide; 
	private $ritavirus; 
	private $otra_vacun; 
	private $nombre_retira1; 
	private $apellido_retira1; 
	private $ci_retira1; 
	private $parentesco_retira1; 
	private $edad_retira1; 
	private $nombre_retira2; 
	private $apellido_retira2; 
	private $ci_retira2; 
	private $parentesco_retira2; 
	private $edad_retira2; 
	private $nombre_retira3; 
	private $apellido_retira3; 
	private $ci_retira3; 
	private $parentesco_retira3; 
	private $edad_retira3; 
	private $nombre_retira4; 
	private $apellido_retira4; 
	private $ci_retira4; 
	private $parentesco_retira4; 
	private $edad_retira4; 
	private $nombre_transporte; 
	private $apellido_transporte; 
	private $ci_transporte; 
	private $placa_transporte; 
	private $ruta_transporte; 
 
	 
	 
	  // Metodos
	function inicializar($pgcon, $finscripcion, $cescolar, $pnombre, $snombre, $papellido, $sapellido, $fnacimiento, $lnacimiento, $Edad, $direccion, $telefono, $pnombrem, $snombrem, $papellidom, $sapellidom, $cim, $edocivilm, $edadm, $direccionm, $Grado_de_instruccionm, $trabajam, $qtrabajam, $dtrabajam, $pnombrep, $snombrep, $papellidop, $sapellidop, $cipadre, $edocivilp, $edadpadre, $direccionp, $Grado_de_instruccionp, $qtrabajap, $dtrabajap, $procedencia, $otra_procedencia, $hermano_preescolar, $cuantos_hermanos, $nombre_hermano1, $grupo_hermano1, $llamar_emergencia, $tel_emergencia, $llevar_emergencia, $fiebre_suministrar, $asmatico, $medicamento_asma, $alergico, $medicamento_alergia, $Enfermedades_padecidas, $tratamiento_especial, $explica_tratamiento, $psicologo, $psicopedagogo, $neurologo, $terapia_lenguaje, $motivo, $lugar_asistencia, $activo, $tranquilo, $sociable, $timido, $comunicativo, $bcg, $antipoliomelitica, $pentavalente, $antihepatities_a, $antihepatities_b, $triple_bacterina, $Trivalente_Viral, $antiamarilica, $anti_influ_b, $toxoide, $ritavirus, $otra_vacun, $nombre_retira1, $apellido_retira1, $ci_retira1, $parentesco_retira1, $edad_retira1, $nombre_retira2, $apellido_retira2, $ci_retira2, $parentesco_retira2, $edad_retira2, $nombre_retira3, $apellido_retira3, $ci_retira3, $parentesco_retira3, $edad_retira3, $nombre_retira4, $apellido_retira4, $ci_retira4, $parentesco_retira4, $edad_retira4, $nombre_transporte, $apellido_transporte, $ci_transporte, $placa_transporte, $ruta_transporte){
		
		
	$this->finscripcion = $finscripcion; 
	$this->cescolar = $cescolar; 
	$this->pnombre = $pnombre; 
	$this->snombre = $snombre; 
	$this->papellido = $papellido; 
	$this->sapellido = $sapellido; 
	$this->fnacimiento = $fnacimiento; 
	$this->lnacimiento = $lnacimiento; 
	$this->Edad = $Edad; 
	$this->direccion = $direccion; 
	$this->telefono = $telefono; 
	$this->pnombrem = $pnombrem; 
	$this->snombrem = $snombrem; 
	$this->papellidom = $papellidom; 
	$this->sapellidom = $sapellidom; 
	$this->cim = $cim; 
	$this->edocivilm = $edocivilm; 
	$this->edadm = $edadm; 
	$this->direccionm = $direccionm; 
	$this->Grado_de_instruccionm = $Grado_de_instruccionm; 
	$this->trabajam = $trabajam; 
	$this->qtrabajam = $qtrabajam; 
	$this->dtrabajam = $dtrabajam; 
	$this->pnombrep = $pnombrep; 
	$this->snombrep = $snombrep; 
	$this->papellidop = $papellidop; 
	$this->sapellidop = $sapellidop; 
	$this->cipadre = $cipadre; 
	$this->edocivilp = $edocivilp; 
	$this->edadpadre = $edadpadre; 
	$this->direccionp = $direccionp; 
	$this->Grado_de_instruccionp = $Grado_de_instruccionp; 
	$this->qtrabajap = $qtrabajap; 
	$this->dtrabajap = $dtrabajap; 
	$this->procedencia = $procedencia; 
	$this->otra_procedencia = $otra_procedencia; 
	$this->hermano_preescolar = $hermano_preescolar; 
	$this->cuantos_hermanos = $cuantos_hermanos; 
	$this->nombre_hermano1 = $nombre_hermano1; 
	$this->grupo_hermano1 = $grupo_hermano1; 
	$this->llamar_emergencia = $llamar_emergencia; 
	$this->tel_emergencia = $tel_emergencia; 
	$this->llevar_emergencia = $llevar_emergencia; 
	$this->fiebre_suministrar = $fiebre_suministrar; 
	$this->asmatico = $asmatico; 
	$this->medicamento_asma = $medicamento_asma; 
	$this->alergico = $alergico; 
	$this->medicamento_alergia = $medicamento_alergia; 
	$this->Enfermedades_padecidas = $Enfermedades_padecidas; 
	$this->tratamiento_especial = $tratamiento_especial; 
	$this->explica_tratamiento = $explica_tratamiento; 
	$this->psicologo = $psicologo; 
	$this->psicopedagogo = $psicopedagogo; 
	$this->neurologo = $neurologo; 
	$this->terapia_lenguaje = $terapia_lenguaje; 
	$this->motivo = $motivo; 
	$this->lugar_asistencia = $lugar_asistencia; 
	$this->activo = $activo; 
	$this->tranquilo = $tranquilo; 
	$this->sociable = $sociable; 
	$this->timido = $timido; 
	$this->comunicativo = $comunicativo; 
	$this->bcg = $bcg; 
	$this->antipoliomelitica = $antipoliomelitica; 
	$this->pentavalente = $pentavalente; 
	$this->antihepatities_a = $antihepatities_a; 
	$this->antihepatities_b = $antihepatities_b; 
	$this->triple_bacterina = $triple_bacterina; 
	$this->Trivalente_Viral = $Trivalente_Viral; 
	$this->antiamarilica = $antiamarilica; 
	$this->anti_influ_b = $anti_influ_b; 
	$this->toxoide = $toxoide; 
	$this->ritavirus = $ritavirus; 
	$this->otra_vacun = $otra_vacun; 
	$this->nombre_retira1 = $nombre_retira1; 
	$this->apellido_retira1 = $apellido_retira1; 
	$this->ci_retira1 = $ci_retira1; 
	$this->parentesco_retira1 = $parentesco_retira1; 
	$this->edad_retira1 = $edad_retira1; 
	$this->nombre_retira2 = $nombre_retira2; 
	$this->apellido_retira2 = $apellido_retira2; 
	$this->ci_retira2 = $ci_retira2; 
	$this->parentesco_retira2 = $parentesco_retira2; 
	$this->edad_retira2 = $edad_retira2; 
	$this->nombre_retira3 = $nombre_retira3; 
	$this->apellido_retira3 = $apellido_retira3; 
	$this->ci_retira3 = $ci_retira3; 
	$this->parentesco_retira3 = $parentesco_retira3; 
	$this->edad_retira3 = $edad_retira3; 
	$this->nombre_retira4 = $nombre_retira4; 
	$this->apellido_retira4 = $apellido_retira4; 
	$this->ci_retira4 = $ci_retira4; 
	$this->parentesco_retira4 = $parentesco_retira4; 
	$this->edad_retira4 = $edad_retira4; 
	$this->nombre_transporte = $nombre_transporte; 
	$this->apellido_transporte = $apellido_transporte; 
	$this->ci_transporte = $ci_transporte; 
	$this->placa_transporte = $placa_transporte; 
	$this->ruta_transporte = $ruta_transporte; 
		
		
		}
		
		// Agregar estudiante a la BD
    public function agregar_estudiante($pgcon, $finscripcion, $cescolar, $pnombre, $snombre, $papellido, $sapellido, $fnacimiento, $lnacimiento, $Edad, $direccion, $telefono, $pnombrem, $snombrem, $papellidom, $sapellidom, $cim, $edocivilm, $edadm, $direccionm, $Grado_de_instruccionm, $trabajam, $qtrabajam, $dtrabajam, $pnombrep, $snombrep, $papellidop, $sapellidop, $cipadre, $edocivilp, $edadpadre, $direccionp, $Grado_de_instruccionp, $qtrabajap, $dtrabajap, $procedencia, $otra_procedencia, $hermano_preescolar, $cuantos_hermanos, $nombre_hermano1, $grupo_hermano1, $llamar_emergencia, $tel_emergencia, $llevar_emergencia, $fiebre_suministrar, $asmatico, $medicamento_asma, $alergico, $medicamento_alergia, $Enfermedades_padecidas, $tratamiento_especial, $explica_tratamiento, $psicologo, $psicopedagogo, $neurologo, $terapia_lenguaje, $motivo, $lugar_asistencia, $activo, $tranquilo, $sociable, $timido, $comunicativo, $bcg, $antipoliomelitica, $pentavalente, $antihepatities_a, $antihepatities_b, $triple_bacterina, $Trivalente_Viral, $antiamarilica, $anti_influ_b, $toxoide, $ritavirus, $otra_vacun, $nombre_retira1, $apellido_retira1, $ci_retira1, $parentesco_retira1, $edad_retira1, $nombre_retira2, $apellido_retira2, $ci_retira2, $parentesco_retira2, $edad_retira2, $nombre_retira3, $apellido_retira3, $ci_retira3, $parentesco_retira3, $edad_retira3, $nombre_retira4, $apellido_retira4, $ci_retira4, $parentesco_retira4, $edad_retira4, $nombre_transporte, $apellido_transporte, $ci_transporte, $placa_transporte, $ruta_transporte){
		
		$query = "INSERT INTO usuario(cedula, contraseña, nombre, apellido) VALUES('$cedula','$contraseña', '$nombre','$apellido')";
		
	$consulta = pg_query($pgcon,$query) or die("Consulta errónea: ".pg_last_error());
	
		return $consulta; 	
    }
	 

 }
 
 ?>