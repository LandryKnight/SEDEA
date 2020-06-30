
<?php  
require_once('ConexionPF.php');

global $folioImpreso;

if (isset($_POST['EnviarConceptosPF'])){

#recepcion de datos de PersonaFisica.php
 


  $dirReg 						=					$_POST['dirReg'];
  $municipio 					= 	 				$_POST['municipio'];
  $nombre 						= 	 				$_POST['nombre'];
  $genero 						= 	 				$_POST['genero'];
  $fechaNacimiento 				= 				    $_POST['fechaNacimiento'];
  $nacionalidad 				= 	 				$_POST['nacionalidad'];
  $EstadoCivil 					=	 	 			$_POST['EstadoCivil'];
  $estadoNacimiento  			= 			 		$_POST['estadoNacimiento'];
  $telefono 					= 	 				$_POST['telefono'];
  $correo 						= 	 				$_POST['correo'];
  $tipoIdentificacion 			= 				 	$_POST['tipoIdentificacion'];
  $numIdentificacion 			= 			 		$_POST['numIdentificacion'];
  $curp 						= 					$_POST['curp'];
  $tipoDomicilio 				= 	 				$_POST['tipoDomicilio'];
  $tipoAsentamiento 			= 	 				$_POST['tipoAsentamiento'];
  $nombreAsentamiento 			= 				 	$_POST['nombreAsentamiento'];
  $tipoVialidad 				= 		 			$_POST['tipoVialidad'];
  $nombreVialidad 				= 			 		$_POST['nombreVialidad'];
  $nombreLocalidad 				= 	 				$_POST['nombreLocalidad'];
  $nombreMunicipio 				= 			 		$_POST['nombreMunicipio'];
  $refVial 						= 	 				$_POST['refVial'];
  $actEco 						= 	 				$_POST['actEco'];

#recepcion de datos de proyecto
$NombreProyecto					=			 		$_POST['NombreProyecto'];
$AntiguedadProyecto				=				 	$_POST['AntiguedadProyecto'];
$TelefonoProyecto				=					$_POST['TelefonoProyecto'];
$CorreoElectronicoProyecto 		=					$_POST['CorreoElectronicoProyecto'];
$FechaConstitucion				=				 	$_POST['FechaConstitucion'];
$TipoDomicilioProyecto			=					$_POST['TipoDomicilioProyecto'];
$TipoAsentamientoProyecto		=					$_POST['TipoAsentamientoProyecto'];
$NombreAsentamientoProyecto 	=					$_POST['NombreAsentamientoProyecto'];
$TipoVialidadProyecto			=					$_POST['TipoVialidadProyecto'];
$NombreVialidadProyecto  		=				 	$_POST['NombreVialidadProyecto'];
$NombreLocalidadProyecto  		=				 	$_POST['NombreLocalidadProyecto'];
$NombreMunicipioProyecto		=   				$_POST['NombreMunicipioProyecto'];
$ReferenciaVialidadProyecto		=					$_POST['ReferenciaVialidadProyecto'];


#recepcion de datos concepto de apoyo
$ApoyoSolicitado1 				= 					ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1						=					sanitizeString($_POST['UniMedida1']);
$CanSolicitada1					=					sanitizeString($_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1		=					sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1		=					sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1		=					sanitizeString($_POST['AportacionBeneficiario1']);

						
$ApoyoSolicitado2				=					ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado2'])));
$UniMedida2						=					sanitizeString($_POST['UniMedida2']);
$CanSolicitada2					=					sanitizeString($_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2		=					sanitizeString($_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2		=					sanitizeString($_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2		=					sanitizeString($_POST['AportacionBeneficiario2']);



$ApoyoSolicitado3				=					ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado3'])));
$UniMedida3						=					sanitizeString($_POST['UniMedida3']);
$CanSolicitada3					=					sanitizeString($_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3		=					sanitizeString($_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3		=					sanitizeString($_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3		=					sanitizeString($_POST['AportacionBeneficiario3']);


				
$ApoyoSolicitado4				=					ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado4'])));
$UniMedida4						=					sanitizeString($_POST['UniMedida4']);
$CanSolicitada4					=					sanitizeString($_POST['CanSolicitada4']);
$ApoyoEstatalSolicitado4		=					sanitizeString($_POST['ApoyoEstatalSolicitado4']);
$ApoyoMunicipalSolicitado4		=					sanitizeString($_POST['ApoyoMunicipalSolicitado4']);
$AportacionBeneficiario4		=					sanitizeString($_POST['AportacionBeneficiario4']);


$ApoyoSolicitado5				=					ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado5'])));
$UniMedida5						=					sanitizeString($_POST['UniMedida5']);
$CanSolicitada5					=					sanitizeString($_POST['CanSolicitada5']);
$ApoyoEstatalSolicitado5		=					sanitizeString($_POST['ApoyoEstatalSolicitado5']);
$ApoyoMunicipalSolicitado5		=					sanitizeString($_POST['ApoyoMunicipalSolicitado5']);
$AportacionBeneficiario5		=					sanitizeString($_POST['AportacionBeneficiario5']);

						
$ApoyoSolicitado6				=					ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado6'])));
$UniMedida6						=					sanitizeString($_POST['UniMedida6']);
$CanSolicitada6					=					sanitizeString($_POST['CanSolicitada6']);
$ApoyoEstatalSolicitado6		=					sanitizeString($_POST['ApoyoEstatalSolicitado6']);
$ApoyoMunicipalSolicitado6		=					sanitizeString($_POST['ApoyoMunicipalSolicitado6']);
$AportacionBeneficiario6		=					sanitizeString($_POST['AportacionBeneficiario6']);



	


}




  $folioImpreso = substr($curp, 0,1).strlen($municipio).substr($curp, 1,2).strlen($genero).substr($curp, 2,3).strlen($dirReg).strlen($nombre);





?>


<!DOCTYPE html>
<html>
<head>
	<title>Requisitos Generales de Documentos para Persona Física</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<div class="requisitos">

<h1>Requisitos Generales de Documentos para Persona Física</h1>


<form action="observaciones.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="IfolioImpreso" value="<?php echo $folioImpreso; ?>">	
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



<input type ="hidden" name ="ApoyoSolicitado1" value="<?php echo $ApoyoSolicitado1; ?>">
<input type ="hidden" name ="UniMedida1" value="<?php echo $UniMedida1; ?>">
<input type ="hidden" name ="CanSolicitada1" value="<?php echo $CanSolicitada1; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado1" value="<?php echo $ApoyoEstatalSolicitado1; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado1" value="<?php echo $ApoyoMunicipalSolicitado1; ?>">
<input type ="hidden" name ="AportacionBeneficiario1" value="<?php echo $AportacionBeneficiario1; ?>">
<input type ="hidden" name ="InversionTotal1" value="<?php echo $InversionTotal1; ?>">
							
							
<input type ="hidden" name ="ApoyoSolicitado2" value="<?php echo $ApoyoSolicitado2; ?>">
<input type ="hidden" name ="UniMedida2" value="<?php echo $UniMedida2; ?>">
<input type ="hidden" name ="CanSolicitada2" value="<?php echo $CanSolicitada2; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado2" value="<?php echo $ApoyoEstatalSolicitado2; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado2" value="<?php echo $ApoyoMunicipalSolicitado2; ?>">
<input type ="hidden" name ="AportacionBeneficiario2" value="<?php echo $AportacionBeneficiario2; ?>">
<input type ="hidden" name ="InversionTotal2" value="<?php echo $InversionTotal2; ?>">
							
							
<input type ="hidden" name ="ApoyoSolicitado3" value="<?php echo $ApoyoSolicitado3; ?>">
<input type ="hidden" name ="UniMedida3" value="<?php echo $UniMedida3; ?>">
<input type ="hidden" name ="CanSolicitada3" value="<?php echo $CanSolicitada3; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado3" value="<?php echo $ApoyoEstatalSolicitado3; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado3" value="<?php echo $ApoyoMunicipalSolicitado3; ?>">
<input type ="hidden" name ="AportacionBeneficiario3" value="<?php echo $AportacionBeneficiario3; ?>">
<input type ="hidden" name ="InversionTotal3" value="<?php echo $InversionTotal3; ?>">
							
							
<input type ="hidden" name ="ApoyoSolicitado4" value="<?php echo $ApoyoSolicitado4; ?>">
<input type ="hidden" name ="UniMedida4" value="<?php echo $UniMedida4; ?>">
<input type ="hidden" name ="CanSolicitada4" value="<?php echo $CanSolicitada4; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado4" value="<?php echo $ApoyoEstatalSolicitado4; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado4" value="<?php echo $ApoyoMunicipalSolicitado4; ?>">
<input type ="hidden" name ="AportacionBeneficiario4" value="<?php echo $AportacionBeneficiario4; ?>">
<input type ="hidden" name ="InversionTotal4" value="<?php echo $InversionTotal4; ?>">
							
							
<input type ="hidden" name ="ApoyoSolicitado5" value="<?php echo $ApoyoSolicitado5; ?>">
<input type ="hidden" name ="UniMedida5" value="<?php echo $UniMedida5; ?>">
<input type ="hidden" name ="CanSolicitada5" value="<?php echo $CanSolicitada5; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado5" value="<?php echo $ApoyoEstatalSolicitado5; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado5" value="<?php echo $ApoyoMunicipalSolicitado5; ?>">
<input type ="hidden" name ="AportacionBeneficiario5" value="<?php echo $AportacionBeneficiario5; ?>">
<input type ="hidden" name ="InversionTotal5" value="<?php echo $InversionTotal5; ?>">
							
							
<input type ="hidden" name ="ApoyoSolicitado6" value="<?php echo $ApoyoSolicitado6; ?>">
<input type ="hidden" name ="UniMedida6" value="<?php echo $UniMedida6; ?>">
<input type ="hidden" name ="CanSolicitada6" value="<?php echo $CanSolicitada6; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado6" value="<?php echo $ApoyoEstatalSolicitado6; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado6" value="<?php echo $ApoyoMunicipalSolicitado6; ?>">
<input type ="hidden" name ="AportacionBeneficiario6" value="<?php echo $AportacionBeneficiario6; ?>">
<input type ="hidden" name ="InversionTotal6" value="<?php echo $InversionTotal6; ?>">




<h2>Declaraciones del Solicitante:</h2>

<div class="declaraciones">
<p>a) Que no realizo actividades productivas ni comerciales ilícitas. </p>
<p>b) Que no se aplicaran los incentivos únicamente para los fines autorizados, y en caso de no realizarlo se entregara el recurso, así como los productos financieros.</p>

<p>c) Que no he recibido o estoy recibiendo apoyo alguno para el mismo concepto en otro programa, que implique duplicidad de incentivos.</p>

<p>d) Que los datos aquí expuestos son verídicos y me comprometo a cumplir con los ordenamientos establecidos en la mecánica operativa establecida.</p>

<p>e) Expreso mi total y cabal compromiso, para realizar las inversiones y/o trabajos que corresponden para ejecutar las acciones del proyecto que requieran.</p>

<p>f) Que estoy cierto que la entrega de esta solicitud, así como la de los documentos solicitados, no implica aceptación u obligación del pago de los incentivos solicitados.</p>
</div>









<br>
<h3>Documentos admitidos solo en formato PDF.</h3> 

<div class="documentos">


<p>Selecciona la Identificación Oficial expedida por el <b>IFE o INE</b>: </p>

<input type="file" name="archivo[]"  required="required" >
	

</div>
<div class="documentos">
<p>Selecciona la  <b>CURP</b> Clave Única de Registro de Población:</p>
 <input type="file" name="archivo[]"  required="required">
</div>


<div class="documentos">
<p> Selecciona el <b>Comprobante de domicilio</b> o <br> Constancia de Residencia firmado por la autoridad competente:</p>
<input type="file" name="archivo[]" required="required" >
</div>

<div class="documentos">
<p>Selecciona el <b>Croquis</b> de bien a adquirir:</p>
 <input type="file" name="archivo[]" required="required" >
 </div>



<input type="submit" name="RequisitosG" value="Subir Documentos" class="boton">
</form>






</form>
<br>



<a href="http://localhost/sedea/Personas/Fisica/conceptosApoyoPF.php"><button class="boton"> Regresar  </button></a>
<br><a href="http://localhost/sedea/inicio.php"><button class="boton">Menú Principal</button></a>


<h5>Autorizo que mis datos personales sean empleados para el trámite de la solución. Otorgo el consentimiento para que sean transferidos en caso de ser necesario y dar el cumplimiento conforme a lo previsto en los artículos 16 fracción II,59 y 61 de la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de Querétaro; así como a las obligaciones de transparencia y acceso a la información pública de conformidad con la Ley del Estado de Querétaro.
"En cumplimiento a las Leyes de Protección de Datos Personales, Usted puede consultar el aviso de privacidad a través del portal de internet http://sedea.queretaro.gob.mx"
La entrega de la presente solicitud, así como de la documentación solicitada, no implica aceptación u obligación del pago de los incentivos.
</h5>



</div>	





</body>
</html>
