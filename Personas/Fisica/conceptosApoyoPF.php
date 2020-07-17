<?php 

require_once('conexionPF.php');

if(isset($_POST['EnviarConceptosPF'])){



  #recepcion de datos de PersonaFisica.php
  $dirReg 						=					sanitizeString($_POST['dirReg']);
  $municipio 					= 	 				sanitizeString($_POST['municipio']);
  $nombre 						= 	 				sanitizeString($_POST['nombre']);
  $genero 						= 	 				sanitizeString($_POST['genero']);
  $fechaNacimiento 				= 				    sanitizeString($_POST['fechaNacimiento']);
  $nacionalidad 				= 	 				sanitizeString($_POST['nacionalidad']);
  $EstadoCivil 					=	 	 			sanitizeString($_POST['EstadoCivil']);
  $estadoNacimiento  			= 			 		sanitizeString($_POST['estadoNacimiento']);
  $telefono 					= 	 				sanitizeString($_POST['telefono']);
  $correo 						= 	 				sanitizeString($_POST['correo']);
  $tipoIdentificacion 			= 				 	sanitizeString($_POST['tipoIdentificacion']);
  $numIdentificacion 			= 			 		sanitizeString($_POST['numIdentificacion']);
  $curp 						= 					sanitizeString($_POST['curp']);
  $tipoDomicilio 				= 	 				sanitizeString($_POST['tipoDomicilio']);
  $tipoAsentamiento 			= 	 				sanitizeString($_POST['tipoAsentamiento']);
  $nombreAsentamiento 			= 				 	sanitizeString($_POST['nombreAsentamiento']);
  $tipoVialidad 				= 		 			sanitizeString($_POST['tipoVialidad']);
  $nombreVialidad 				= 			 		sanitizeString($_POST['nombreVialidad']);
  $nombreLocalidad 				= 	 				sanitizeString($_POST['nombreLocalidad']);
  $nombreMunicipio 				= 			 		sanitizeString($_POST['nombreMunicipio']);
  $refVial 						= 	 				sanitizeString($_POST['refVial']);
  $actEco 						= 	 				sanitizeString($_POST['actEco']);

#recepcion de datos de proyecto
$NombreProyecto					=			 		sanitizeString($_POST['NombreProyecto']);
$AntiguedadProyecto				=				 	sanitizeString($_POST['AntiguedadProyecto']);
$TelefonoProyecto				=					sanitizeString($_POST['TelefonoProyecto']);
$CorreoElectronicoProyecto 		=					sanitizeString($_POST['CorreoElectronicoProyecto']);
$FechaConstitucion				=				 	sanitizeString($_POST['FechaConstitucion']);
$TipoDomicilioProyecto			=					sanitizeString($_POST['TipoDomicilioProyecto']);
$TipoAsentamientoProyecto		=					sanitizeString($_POST['TipoAsentamientoProyecto']);
$NombreAsentamientoProyecto 	=					sanitizeString($_POST['NombreAsentamientoProyecto']);
$TipoVialidadProyecto			=					sanitizeString($_POST['TipoVialidadProyecto']);
$NombreVialidadProyecto  		=				 	sanitizeString($_POST['NombreVialidadProyecto']);
$NombreLocalidadProyecto  		=				 	sanitizeString($_POST['NombreLocalidadProyecto']);
$NombreMunicipioProyecto		=   				sanitizeString($_POST['NombreMunicipioProyecto']);
$ReferenciaVialidadProyecto		=					sanitizeString($_POST['ReferenciaVialidadProyecto']);
  



}





?>



<!DOCTYPE html>
<html>
<head>
	<title>Conceptos de Apoyos Persona Física</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloFisica.css">
</head>
<body>

<div class="conceptoApoyo">

<form method="post" action="requisitosGeneralesPF.php">


<input type ="hidden" name ="dirReg" value="<?php echo $dirReg; ?>">
<input type ="hidden" name ="municipio" value="<?php echo $municipio; ?>">
<input type ="hidden" name ="nombre" value="<?php echo $nombre; ?>">
<input type ="hidden" name ="genero" value="<?php echo $genero; ?>">
<input type ="hidden" name ="fechaNacimiento" value="<?php echo $fechaNacimiento; ?>">
<input type ="hidden" name ="nacionalidad" value="<?php echo $nacionalidad; ?>">
<input type ="hidden" name ="EstadoCivil" value="<?php echo $EstadoCivil; ?>">
<input type ="hidden" name ="estadoNacimiento" value="<?php echo $estadoNacimiento; ?>">
<input type ="hidden" name ="telefono" value="<?php echo $telefono; ?>">
<input type ="hidden" name ="correo" value="<?php echo $correo; ?>">
<input type ="hidden" name ="tipoIdentificacion" value="<?php echo $tipoIdentificacion; ?>">
<input type ="hidden" name ="numIdentificacion" value="<?php echo $numIdentificacion; ?>">
<input type ="hidden" name ="curp" value="<?php echo $curp; ?>">
<input type ="hidden" name ="tipoDomicilio" value="<?php echo $tipoDomicilio; ?>">
<input type ="hidden" name ="tipoAsentamiento" value="<?php echo $tipoAsentamiento; ?>">
<input type ="hidden" name ="nombreAsentamiento" value="<?php echo $nombreAsentamiento; ?>">
<input type ="hidden" name ="tipoVialidad" value="<?php echo $tipoVialidad; ?>">
<input type ="hidden" name ="nombreVialidad" value="<?php echo $nombreVialidad; ?>">
<input type ="hidden" name ="nombreLocalidad" value="<?php echo $nombreLocalidad; ?>">
<input type ="hidden" name ="nombreMunicipio" value="<?php echo $nombreMunicipio; ?>">
<input type ="hidden" name ="refVial" value="<?php echo $refVial; ?>">
<input type ="hidden" name ="actEco" value="<?php echo $actEco; ?>">


<input type ="hidden" name ="NombreProyecto" value="<?php echo $NombreProyecto;  ?>">
<input type ="hidden" name ="AntiguedadProyecto" value="<?php echo $AntiguedadProyecto;  ?>">
<input type ="hidden" name ="TelefonoProyecto" value="<?php echo $TelefonoProyecto;  ?>">
<input type ="hidden" name ="CorreoElectronicoProyecto" value="<?php echo $CorreoElectronicoProyecto;  ?>">
<input type ="hidden" name ="FechaConstitucion" value="<?php echo $FechaConstitucion;  ?>">
<input type ="hidden" name ="TipoDomicilioProyecto" value="<?php echo $TipoDomicilioProyecto;  ?>">
<input type ="hidden" name ="TipoAsentamientoProyecto" value="<?php echo $TipoAsentamientoProyecto;  ?>">
<input type ="hidden" name ="NombreAsentamientoProyecto" value="<?php echo $NombreAsentamientoProyecto; ?>">
<input type ="hidden" name ="TipoVialidadProyecto" value="<?php echo $TipoVialidadProyecto;  ?>">
<input type ="hidden" name ="NombreVialidadProyecto" value="<?php echo $NombreVialidadProyecto; ?>">
<input type ="hidden" name ="NombreLocalidadProyecto" value="<?php echo $NombreLocalidadProyecto;  ?>">
<input type ="hidden" name ="NombreMunicipioProyecto" value="<?php echo $NombreMunicipioProyecto;  ?>">
<input type ="hidden" name ="ReferenciaVialidadProyecto" value="<?php echo $ReferenciaVialidadProyecto;  ?>">



<h1>Conceptos de Apoyo para Persona Física</h1>

<div class="nota">
<h3>Nota: Checa que todos los campos solo contengan digitos, excepto conceptos de
apoyo solicitado</h3> 
<br>
 <input type="checkbox" name="check" required="required">

</div>

<br>
<table border="1">
	
	<tr>
		<td><b>Conceptos de <br>Apoyo Solicitado</b></td> 
		<td class="UnidadMedida"><b>Unidad de <br>Medida</b></td>   
		<td class="UnidadMedida"><b>Cantidad <br>Solicitada</b></td> 
		<td class="ApoyoEstatal"><b>Apoyo Estatal <br>Solicitado (pesos)</b> </td> 
		<td class="ApoyoMunicipal"><b>Apoyo Municipal <br>Solicitado (pesos)</b> </td> 
		<td class="AportaciónBeneficiario"><b>Aportación Beneficiario (pesos)</b></td> 
	
	</tr>

	<tr>
		<td><input type="text" name="ApoyoSolicitado1" maxlength="35" 	placeholder=" Estufa ecológica" required="required"> </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida1" maxlength="5" 	placeholder="      2" required="required">  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada1" maxlength="5" 	placeholder="      2" required="required">  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado1" maxlength="10" 	placeholder="   $500,000" required="required"> </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado1" maxlength="10"	placeholder="   $250,000" required="required"> </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario1" maxlength="10" 	placeholder="    $250,000" required="required"> </td>
		
	</tr>

	<tr>
		<td><input type="text" name="ApoyoSolicitado2" maxlength="35" 	placeholder=" Estufa ecológica" > </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida2" maxlength="5" 	placeholder="      2" >  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada2" maxlength="5" 	placeholder="      2" >  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado2" maxlength="10" 	placeholder="   $500,000" > </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado2" maxlength="10"	placeholder="   $250,000" > </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario2" maxlength="10" 	placeholder="    $250,000" > </td>
	
		
	</tr>



		<tr>
		<td><input type="text" name="ApoyoSolicitado3" maxlength="35" 	placeholder=" Estufa ecológica" > </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida3" maxlength="5" 	placeholder="      2" >  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada3" maxlength="5" 	placeholder="      2" >  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado3" maxlength="10" 	placeholder="   $500,000" > </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado3" maxlength="10"	placeholder="   $250,000" > </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario3" maxlength="10" 	placeholder="    $250,000" > </td>
		
	</tr>

		<tr>
		<td><input type="text" name="ApoyoSolicitado4" maxlength="35" 	placeholder=" Estufa ecológica" > </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida4" maxlength="5" 	placeholder="      2" >  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada4" maxlength="5" 	placeholder="      2" >  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado4" maxlength="10" 	placeholder="   $500,000" > </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado4" maxlength="10"	placeholder="   $250,000" > </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario4" maxlength="10" 	placeholder="    $250,000" > </td>
		
	</tr>

		<tr>
		<td><input type="text" name="ApoyoSolicitado5" maxlength="35" 	placeholder=" Estufa ecológica" > </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida5" maxlength="5" 	placeholder="      2" >  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada5" maxlength="5" 	placeholder="      2" >  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado5" maxlength="10" 	placeholder="   $500,000" > </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado5" maxlength="10"	placeholder="   $250,000" > </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario5" maxlength="10" 	placeholder="    $250,000" > </td>
		
	</tr>

		<tr>
		<td><input type="text" name="ApoyoSolicitado6" maxlength="35" 	placeholder=" Estufa ecológica" > </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida6" maxlength="5" 	placeholder="      2" >  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada6" maxlength="5" 	placeholder="      2" >  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado6" maxlength="10" 	placeholder="   $500,000" > </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado6" maxlength="10"	placeholder="   $250,000" > </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario6" maxlength="10" 	placeholder="    $250,000" > </td>
		
	</tr>



</table>


<input type="submit" name="EnviarConceptosPF" value="Siguiente" class="boton" id="ubicacionConceptos">

</form>

<a href="eleccionpf.php"><button class="boton" id="ubicacionConceptos"> Regresar  </button></a>
<br>
<a href="http://localhost/sedea/index.php"><button class="boton" id="ubicacionConceptos">Menú Principal</button></a>


<h5>"Este programa es público; ajeno a cualquier partido político. Queda prohibido el uso para fines distinto a los establecidos al Programa"</h5>

</div>
</body>
</html>