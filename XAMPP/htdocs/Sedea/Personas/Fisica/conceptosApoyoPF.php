<?php 
require_once('conect.php');



$funcion = new funcion();

$con = $funcion -> conectar();



if(isset($_POST['DatosProyectoPF'])){

$folioImpreso  = sanitizeString($_POST['IfolioImpreso']);
$NombreProyecto = ucfirst(strtolower(sanitizeString($_POST['NombreProyecto'])));
$AntiguedadProyecto =  $_POST['AntiguedadProyecto'];
$TelefonoProyecto = sanitizeString($_POST['TelefonoProyecto']);
$CorreoElectronicoProyecto = ucfirst(strtolower(sanitizeString($_POST['CorreoElectronicoProyecto'])));

$DiaFechaConstitucion = $_POST['DiaFechaConstitucion'];
$MesFechaConstitucion = $_POST['MesFechaConstitucion'];
$AnioFechaConstitucion = $_POST['AnioFechaConstitucion'];


$FechaConstitucion = $DiaFechaConstitucion."/".$MesFechaConstitucion."/".$AnioFechaConstitucion;

$TipoDomicilioProyecto = $_POST['TipoDomicilioProyecto'];
$TipoAsentamientoProyecto  = $_POST['TipoAsentamientoProyecto'];
$NombreAsentamientoProyecto = ucfirst(strtolower(sanitizeString($_POST['NombreAsentamientoProyecto'])));
$TipoVialidadProyecto  = $_POST['TipoVialidadProyecto'];
$NombreVialidadProyecto = ucfirst(strtolower(sanitizeString($_POST['NombreVialidadProyecto'])));
$NombreLocalidadProyecto = ucfirst(strtolower(sanitizeString($_POST['NombreLocalidadProyecto'])));
$NombreMunicipioProyecto = $_POST['NombreMunicipioProyecto'];
$ReferenciaVialidadProyecto = ucfirst(strtolower(sanitizeString($_POST['ReferenciaVialidadProyecto'])));






}

$InsertDatoProyecto = "INSERT INTO personafisicaNP(sfolioImpreso,sNombreProyecto,sAntiguedadProyecto,sTelefonoProyecto,sCorreoElectronicoProyecto,sFechaConstitucion,sTipoDomicilioProyecto,sTipoAsentamientoProyecto,sNombreAsentamientoProyecto,sTipoVialidadProyecto,sNombreVialidadProyecto,sNombreLocalidadProyecto,sNombreMunicipioProyecto,sReferenciaVialidadProyecto) VALUES('{$folioImpreso}','{$NombreProyecto}','{$AntiguedadProyecto}','{$TelefonoProyecto}','{$CorreoElectronicoProyecto}','{$FechaConstitucion}','{$TipoDomicilioProyecto}','{$TipoAsentamientoProyecto}','{$NombreAsentamientoProyecto}','{$TipoVialidadProyecto}','{$NombreVialidadProyecto}','{$NombreLocalidadProyecto}','{$NombreMunicipioProyecto}','{$ReferenciaVialidadProyecto}');";

 $InsertDatoProyecto = utf8_encode($InsertDatoProyecto);

 echo "Datos del Proyecto<br> ".$InsertDatoProyecto;


  if ($con -> query($InsertDatoProyecto)) {
            echo "Datos del Proyecto Registrados <br>";
          } else{
            echo $con -> error, "<br>";
            echo $InsertDatoProyecto, "<br>";
              }




function sanitizeString($var){

  if(get_magic_quotes_gpc())
    $var = stripcslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
  return $var;
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Conceptos de Apoyos</title>
	<meta charset="utf-8">
</head>
<body>


<form method="post" action="requisitosGeneralesPF.php">


<input type="hidden" name="IfolioImpreso" value="<?php echo $folioImpreso; ?>">
<table border="1">
	
	<tr>
		<td>Conceptos de <br>Apoyo Solicitado</td> 
		<td>Unidad de <br>Medida</td>   
		<td>Cantidad <br>Solicitada</td> 
		<td>Apoyo Estatal <br>Solicitado (pesos) </td> 
		<td>Apoyo Municipal <br>Solicitado (pesos) </td> 
		<td>Aportación Beneficiario (pesos)</td> 
		<td>Inversión Total (pesos)</td>  
	</tr>

	<tr>
		<td><input type="text" name="ApoyoSolicitado1" maxlength="35" 	placeholder="Estufa ecológica" required="required"> </td>
		<td><input type="text" name="UniMedida1" maxlength="5" 	placeholder="2" required="required">  </td>
		<td><input type="text" name="CanSolicitada1" maxlength="5" 	placeholder="2" required="required">  </td>
		<td><input type="text" name="ApoyoEstatalSolicitado1" maxlength="20" 	placeholder="$500,000" required="required"> </td>
		<td><input type="text" name="ApoyoMunicipalSolicitado1" maxlength="20"	placeholder="$250,000" required="required"> </td>
		<td><input type="text" name="AportacionBeneficiario1" maxlength="20" 	placeholder="$250,000" required="required"> </td>
		<td><input type="text" name="InversionTotal1" maxlength="20"	placeholder="$1,000,000" required="required"> </td>
	</tr>

	<tr>
		<td><input type="text" name="ApoyoSolicitado2" maxlength="35" 	placeholder="Estufa ecológica" > </td>
		<td><input type="text" name="UniMedida2" maxlength="5" 	placeholder="2" >  </td>
		<td><input type="text" name="CanSolicitada2" maxlength="5" 	placeholder="2" >  </td>
		<td><input type="text" name="ApoyoEstatalSolicitado2" maxlength="20" 	placeholder="$500,000" > </td>
		<td><input type="text" name="ApoyoMunicipalSolicitado2" maxlength="20"	placeholder="$250,000" > </td>
		<td><input type="text" name="AportacionBeneficiario2" maxlength="20" 	placeholder="$250,000" > </td>
		<td><input type="text" name="InversionTotal2" maxlength="20"	placeholder="$1,000,000" > </td>
	</tr>



		<tr>
		<td><input type="text" name="ApoyoSolicitado3" maxlength="35" 	placeholder="Estufa ecológica" > </td>
		<td><input type="text" name="UniMedida3" maxlength="5" 	placeholder="2" >  </td>
		<td><input type="text" name="CanSolicitada3" maxlength="5" 	placeholder="2" >  </td>
		<td><input type="text" name="ApoyoEstatalSolicitado3" maxlength="20" 	placeholder="$500,000" > </td>
		<td><input type="text" name="ApoyoMunicipalSolicitado3" maxlength="20"	placeholder="$250,000" > </td>
		<td><input type="text" name="AportacionBeneficiario3" maxlength="20" 	placeholder="$250,000" > </td>
		<td><input type="text" name="InversionTotal3" maxlength="20"	placeholder="$1,000,000" > </td>
	</tr>

		<tr>
		<td><input type="text" name="ApoyoSolicitado4" maxlength="35" 	placeholder="Estufa ecológica" > </td>
		<td><input type="text" name="UniMedida4" maxlength="5" 	placeholder="2" >  </td>
		<td><input type="text" name="CanSolicitada4" maxlength="5" 	placeholder="2" >  </td>
		<td><input type="text" name="ApoyoEstatalSolicitado4" maxlength="20" 	placeholder="$500,000" > </td>
		<td><input type="text" name="ApoyoMunicipalSolicitado4" maxlength="20"	placeholder="$250,000" > </td>
		<td><input type="text" name="AportacionBeneficiario4" maxlength="20" 	placeholder="$250,000" > </td>
		<td><input type="text" name="InversionTotal4" maxlength="20"	placeholder="$1,000,000" > </td>
	</tr>

		<tr>
		<td><input type="text" name="ApoyoSolicitado5" maxlength="35" 	placeholder="Estufa ecológica" > </td>
		<td><input type="text" name="UniMedida5" maxlength="5" 	placeholder="2" >  </td>
		<td><input type="text" name="CanSolicitada5" maxlength="5" 	placeholder="2" >  </td>
		<td><input type="text" name="ApoyoEstatalSolicitado5" maxlength="20" 	placeholder="$500,000" > </td>
		<td><input type="text" name="ApoyoMunicipalSolicitado5" maxlength="20"	placeholder="$250,000" > </td>
		<td><input type="text" name="AportacionBeneficiario5" maxlength="20" 	placeholder="$250,000" > </td>
		<td><input type="text" name="InversionTotal5" maxlength="20"	placeholder="$1,000,000" > </td>
	</tr>

		<tr>
		<td><input type="text" name="ApoyoSolicitado6" maxlength="35" 	placeholder="Estufa ecológica" > </td>
		<td><input type="text" name="UniMedida6" maxlength="5" 	placeholder="2" >  </td>
		<td><input type="text" name="CanSolicitada6" maxlength="5" 	placeholder="2" >  </td>
		<td><input type="text" name="ApoyoEstatalSolicitado6" maxlength="20" 	placeholder="$500,000" > </td>
		<td><input type="text" name="ApoyoMunicipalSolicitado6" maxlength="20"	placeholder="$250,000" > </td>
		<td><input type="text" name="AportacionBeneficiario6" maxlength="20" 	placeholder="$250,000" > </td>
		<td><input type="text" name="InversionTotal6" maxlength="20"	placeholder="$1,000,000" > </td>
	</tr>



</table>

<input type="submit" name="EnviarConceptosPF" value="Enviar Información">

</form>



<h5>"Este programa es público; ajeno a cualquier partido político. Queda prohibido el uso para fines distinto a los establecidos al Programa"</h5>
</body>
</html>