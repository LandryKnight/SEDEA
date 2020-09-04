<?php 

require_once('uconexionPF.php');


global $Folio;
if(isset($_POST['DatosProyectoPF'])){


  $Folio                		=             		sanitizeString($_POST['folio']);
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

$DiaFechaConstitucion			= 					($_POST['DiaFechaConstitucion']);
$MesFechaConstitucion			=					($_POST['MesFechaConstitucion']);
$AnioFechaConstitucion			=					($_POST['AnioFechaConstitucion']);

$FechaConstitucion				=				 	$DiaFechaConstitucion."/".$MesFechaConstitucion."/".$AnioFechaConstitucion;


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
	<link rel="stylesheet" type="text/css" href="uestiloFisica.css">
<body>




<div class="conceptoApoyo">

<form method="post" action="urequisitosGeneralesPF.php">


<input type ="hidden" name ="folio" value="<?php echo $Folio; ?>"> 
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

<?php 



 $select = "SELECT * FROM personafisicaconceptoapoyo WHERE folioImpreso =  '{$Folio}'";
  $select = utf8_decode($select);

  $result = queryMySql("$select");

  if(!$result) die("No se pudo extraer los datos de la tabla");
	$filas = $result -> num_rows;



echo "<table border='2'><th><b>Conceptos de <br>Apoyo Solicitado</b></th><th class='UnidadMedida'><b>Unidad de <br>Medida</b> </th>
<th  class='UnidadMedida'><b>Cantidad <br>Solicitada</b></th><th  class='ApoyoEstatal'><b>Apoyo Estatal <br>Solicitado (pesos)</b></th><th  class='ApoyoMunicipal'><b>Apoyo Municipal <br>Solicitado (pesos)</b></th>
<th  class='AportaciónBeneficiario'><b>Aportación Beneficiario (pesos)</b></th></tr>";




for ($i=0; $i<$filas; $i++) {
$dato = $result -> fetch_array(MYSQLI_NUM);

echo "<tr>"; 
for($j=2; $j<8; $j++)
{


if($i == 0){


if($j == 2){
	echo "<td>"."<input type='text' name='ApoyoSolicitado1' maxlength='35'  value='$dato[$j]'>"."</td>";
}
if($j == 3){
	echo "<td class='UnidadMedida'>"."<input type='text' name='UniMedida1' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 4){
	echo "<td class='UnidadMedida'>"."<input type='text' name='CanSolicitada1' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 5){
	echo "<td class='ApoyoEstatal'>"."<input type='text' name='ApoyoEstatalSolicitado1' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 6){
	echo "<td class='ApoyoMunicipal'>"."<input type='text' name='ApoyoMunicipalSolicitado1' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 7){
	echo "<td class='AportaciónBeneficiario'>"."<input type='text' name='AportacionBeneficiario1' maxlength='10' value='$dato[$j]'>"."</td>";
}



}
if($i == 1){
	if($j == 2){
	echo "<td>"."<input type='text' name='ApoyoSolicitado2' maxlength='35'  value='$dato[$j]'>"."</td>";
}
if($j == 3){
	echo "<td class='UnidadMedida'>"."<input type='text' name='UniMedida2' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 4){
	echo "<td class='UnidadMedida'>"."<input type='text' name='CanSolicitada2' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 5){
	echo "<td class='ApoyoEstatal'>"."<input type='text' name='ApoyoEstatalSolicitado2' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 6){
	echo "<td class='ApoyoMunicipal'>"."<input type='text' name='ApoyoMunicipalSolicitado2' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 7){
	echo "<td class='AportaciónBeneficiario'>"."<input type='text' name='AportacionBeneficiario2' maxlength='10' value='$dato[$j]'>"."</td>";
}





}
if($i == 2){

if($j == 2){
	echo "<td>"."<input type='text' name='ApoyoSolicitado3' maxlength='35'  value='$dato[$j]'>"."</td>";
}
if($j == 3){
	echo "<td class='UnidadMedida'>"."<input type='text' name='UniMedida3' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 4){
	echo "<td class='UnidadMedida'>"."<input type='text' name='CanSolicitada3' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 5){
	echo "<td class='ApoyoEstatal'>"."<input type='text' name='ApoyoEstatalSolicitado3' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 6){
	echo "<td class='ApoyoMunicipal'>"."<input type='text' name='ApoyoMunicipalSolicitado3' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 7){
	echo "<td class='AportaciónBeneficiario'>"."<input type='text' name='AportacionBeneficiario3' maxlength='10' value='$dato[$j]'>"."</td>";
}




}
if($i == 3){
	if($j == 2){
	echo "<td>"."<input type='text' name='ApoyoSolicitado4' maxlength='35'  value='$dato[$j]'>"."</td>";
}
if($j == 3){
	echo "<td class='UnidadMedida'>"."<input type='text' name='UniMedida4' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 4){
	echo "<td class='UnidadMedida'>"."<input type='text' name='CanSolicitada4' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 5){
	echo "<td class='ApoyoEstatal'>"."<input type='text' name='ApoyoEstatalSolicitado4' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 6){
	echo "<td class='ApoyoMunicipal'>"."<input type='text' name='ApoyoMunicipalSolicitado4' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 7){
	echo "<td class='AportaciónBeneficiario'>"."<input type='text' name='AportacionBeneficiario4' maxlength='10' value='$dato[$j]'>"."</td>";
}




}
if($i == 4){

	if($j == 2){
	echo "<td>"."<input type='text' name='ApoyoSolicitado5' maxlength='35'  value='$dato[$j]'>"."</td>";
}
if($j == 3){
	echo "<td class='UnidadMedida'>"."<input type='text' name='UniMedida5' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 4){
	echo "<td class='UnidadMedida'>"."<input type='text' name='CanSolicitada5' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 5){
	echo "<td class='ApoyoEstatal'>"."<input type='text' name='ApoyoEstatalSolicitado5' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 6){
	echo "<td class='ApoyoMunicipal'>"."<input type='text' name='ApoyoMunicipalSolicitado5' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 7){
	echo "<td class='AportaciónBeneficiario'>"."<input type='text' name='AportacionBeneficiario5' maxlength='10' value='$dato[$j]'>"."</td>";
}



}
if($i == 5){

	if($j == 2){
	echo "<td>"."<input type='text' name='ApoyoSolicitado6' maxlength='35'  value='$dato[$j]'>"."</td>";
}
if($j == 3){
	echo "<td class='UnidadMedida'>"."<input type='text' name='UniMedida6' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 4){
	echo "<td class='UnidadMedida'>"."<input type='text' name='CanSolicitada6' maxlength='5' value='$dato[$j]'>"."</td>";
}
if($j == 5){
	echo "<td class='ApoyoEstatal'>"."<input type='text' name='ApoyoEstatalSolicitado6' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 6){
	echo "<td class='ApoyoMunicipal'>"."<input type='text' name='ApoyoMunicipalSolicitado6' maxlength='10' value='$dato[$j]'>"."</td>";
}
if($j == 7){
	echo "<td class='AportaciónBeneficiario'>"."<input type='text' name='AportacionBeneficiario6' maxlength='10' value='$dato[$j]'>"."</td>";
}




}






}





echo "</tr>";

	
		}

		echo "</table>";









 ?>






<input type ="hidden" name ="filas" value="<?php echo $filas;  ?>">

<input type="submit" name="EnviarConceptosPF" value="Siguiente" class="boton" id="ubicacionConceptos">

</form>


<br>
<a href="/sedea/index.php"><button class="boton" id="ubicacionConceptos">Menú Principal</button></a>


<h5>"Este programa es público; ajeno a cualquier partido político. Queda prohibido el uso para fines distinto a los establecidos al Programa"</h5>

</div>
</body>
</html>