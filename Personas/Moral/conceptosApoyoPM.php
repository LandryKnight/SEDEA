<?php 


if(isset($_POST['DatosProyectoPM'])){


 #Persona Moral
$FolioImpreso                       = strtoupper(sanitizeString($_POST['FolioImpreso']));
$VentanillaDireccionRegional        = ($_POST['VentanillaDireccionRegional']);
$VentanillaMunicipio                = ($_POST['VentanillaMunicipio']);

#Organizacion
$NombreOrganizacion                 = ucfirst(strtolower(sanitizeString($_POST['NombreOrganizacion'])));
$TipoOrganizacion                   = ucfirst(strtolower(sanitizeString($_POST['TipoOrganizacion'])));
$NumeroTelefonoOrganizacion         = sanitizeString($_POST['NumeroTelefonoOrganizacion']);
$CorreoElectronicoOrganizacion      = strtolower(sanitizeString($_POST['CorreoElectronicoOrganizacion']));
$FechaConstitucion            		= ($_POST['FechaConstitucion']); 
$TipoDomicilioOrganizacion          = ($_POST['TipoDomicilioOrganizacion']);
$TipoAsentamientoOrganizacion       = ($_POST['TipoAsentamientoOrganizacion']);
$NombreAsentamientoOrganizacion     = sanitizeString(($_POST['NombreAsentamientoOrganizacion']));
$TipoVialidadOrganizacion           = ($_POST['TipoVialidadOrganizacion']);
$NombreVialidadOrganizacion         = ucfirst(sanitizeString($_POST['NombreVialidadOrganizacion']));
$NombreLocalidadOrganizacion        = ucfirst(sanitizeString($_POST['NombreLocalidadOrganizacion']));
$NombreMunicipioOrganizacion        = ($_POST['NombreMunicipioOrganizacion']);
$ReferenciaVialidadOrganizacion     = ucfirst(sanitizeString($_POST['ReferenciaVialidadOrganizacion']));
$TipoActividadEconomicaOrganizacion = ($_POST['TipoActividadEconomicaOrganizacion']);


#Datos Personales Representante 
$NombreRepresentante                = sanitizeString($_POST['NombreRepresentante']); 
$GeneroRepresentante                = ($_POST['GeneroRepresentante']);
$FechaNacimientoRepresentante      	= sanitizeString($_POST['FechaNacimientoRepresentante']);  
$NacionalidadRepresentante          = ($_POST['NacionalidadRepresentante']);
$EstadoCivilRepresentante           = ($_POST['EstadoCivilRepresentante']);
$EstadoNacimientoRepresentante      = ($_POST['EstadoNacimientoRepresentante']);
$TelefonoRepresentante              = sanitizeString(($_POST['TelefonoRepresentante']));
$CorreoElectronicoRepresentante     = strtolower(sanitizeString($_POST['CorreoElectronicoRepresentante']));
$TipoIdentificacionRepresentante    = ($_POST['TipoIdentificacionRepresentante']);
$NumeroIdentificacionRepresentante  = sanitizeString($_POST['NumeroIdentificacionRepresentante']);
$CurpRepresentante                  = strtoupper(sanitizeString($_POST['CurpRepresentante']));
$TipoDomicilioRepresentante         = ($_POST['TipoDomicilioRepresentante']);
$TipoAsentamientoRepresentante      = ($_POST['TipoAsentamientoRepresentante']);
$NombreAsentamientoRepresentante    = ucfirst(strtolower(sanitizeString($_POST['NombreAsentamientoRepresentante'])));
$TipoVialidadRepresentante          = ($_POST['TipoVialidadRepresentante']);
$NombreVialidadRepresentante        = ucfirst(strtolower(sanitizeString($_POST['NombreVialidadRepresentante'])));
$NombreLocalidadRepresentante       = ucfirst(strtolower(sanitizeString($_POST['NombreLocalidadRepresentante'])));
$NombreMunicipioRepresentante       = ($_POST['NombreMunicipioRepresentante']);
$ReferenciaVialidadRepresentante    = ucfirst(strtolower(sanitizeString($_POST['ReferenciaVialidadRepresentante'])));








#Datos Proyecto Persona Moral 
$NombreProyecto 				= 	ucfirst(strtolower(sanitizeString($_POST['NombreProyecto'])));
$AntiguedadProyecto 			=  	$_POST['AntiguedadProyecto'];
$TelefonoProyecto 				=  	sanitizeString($_POST['TelefonoProyecto']);
$CorreoElectronicoProyecto 		=	strtolower(sanitizeString($_POST['CorreoElectronicoProyecto']));

$DiaFechaConstitucion 			= $_POST['DiaFechaConstitucion'];
$MesFechaConstitucion 			= $_POST['MesFechaConstitucion'];
$AnioFechaConstitucion 			= $_POST['AnioFechaConstitucion'];


$FechaConstitucion 				= $DiaFechaConstitucion."/".$MesFechaConstitucion."/".$AnioFechaConstitucion;

$TipoDomicilioProyecto 			= 	$_POST['TipoDomicilioProyecto'];
$TipoAsentamientoProyecto  		= 	$_POST['TipoAsentamientoProyecto'];
$NombreAsentamientoProyecto 	= 	ucfirst(strtolower(sanitizeString( $_POST['NombreAsentamientoProyecto'])));
$TipoVialidadProyecto  			= 	$_POST['TipoVialidadProyecto'];
$NombreVialidadProyecto 		=  	ucfirst(strtolower(sanitizeString($_POST['NombreVialidadProyecto'])));
$NombreLocalidadProyecto 		=  	ucfirst(strtolower(sanitizeString($_POST['NombreLocalidadProyecto'])));
$NombreMunicipioProyecto 		= 	$_POST['NombreMunicipioProyecto'];
$ReferenciaVialidadProyecto 	= 	ucfirst(strtolower(sanitizeString($_POST['ReferenciaVialidadProyecto'])));

 }


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Conceptos de Apoyos Persona Moral</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>


<div class="conceptoApoyo">
<form method="Post" action="requisitosGeneralesPM.php">

<h1>Conceptos de Apoyo para Persona Moral</h1>
<h3>Nota: Checa que todos los campos solo contengan digitos excepto conceptos de
apoyo solicitado</h3> <br> <input type="checkbox" name="check" required="required">
<table border="1">
	
	<tr>
		<td> <b>Conceptos de <br>Apoyo Solicitado</b> </td> 
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

<input type="Submit" name="EnviarConceptosPM"  class="boton" value="Enviar Información">

</form>



<h5>"Este programa es público; ajeno a cualquier partido político. Queda prohibido el uso para fines distinto a los establecidos al Programa"</h5>


</body>
</html>