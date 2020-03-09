
<?php  
require_once('ConexionPF.php');

global $folioImpreso;

if (isset($_POST['EnviarConceptosPF'])){

#recepcion de datos de PersonaFisica.php
  $folioImpreso  = 				sanitizeString($_POST['IfolioImpreso']);
  $dirReg = 					$_POST['dirReg'];
  $municipio = 	 				$_POST['municipio'];
  $nombre = 	 				$_POST['nombre'];
  $genero = 	 				$_POST['genero'];
  $fechaNacimiento = 		    $_POST['fechaNacimiento'];
  $nacionalidad = 	 			$_POST['nacionalidad'];
  $EstadoCivil = 	 			$_POST['EstadoCivil'];
  $estadoNacimiento  = 	 		$_POST['estadoNacimiento'];
  $telefono = 	 				$_POST['telefono'];
  $correo = 	 				$_POST['correo'];
  $tipoIdentificacion = 	 	$_POST['tipoIdentificacion'];
  $numIdentificacion = 	 		$_POST['numIdentificacion'];
  $curp = 						$_POST['curp'];
  $tipoDomicilio = 	 			$_POST['tipoDomicilio'];
  $tipoAsentamiento = 	 		$_POST['tipoAsentamiento'];
  $nombreAsentamiento = 	 	$_POST['nombreAsentamiento'];
  $tipoVialidad = 	 			$_POST['tipoVialidad'];
  $nombreVialidad = 	 		$_POST['nombreVialidad'];
  $nombreLocalidad = 	 		$_POST['nombreLocalidad'];
  $nombreMunicipio = 	 		$_POST['nombreMunicipio'];
  $refVial = 	 				$_POST['refVial'];
  $actEco = 	 				$_POST['actEco'];

#recepcion de datos de proyecto
$NombreProyecto		=	 		$_POST['NombreProyecto'];
$AntiguedadProyecto		=	 	$_POST['AntiguedadProyecto'];
$TelefonoProyecto		=		$_POST['TelefonoProyecto'];
$CorreoElectronicoProyecto =	$_POST['CorreoElectronicoProyecto'];
$FechaConstitucion		=	 	$_POST['FechaConstitucion'];
$TipoDomicilioProyecto		=	$_POST['TipoDomicilioProyecto'];
$TipoAsentamientoProyecto	=	$_POST['TipoAsentamientoProyecto'];
$NombreAsentamientoProyecto =	$_POST['NombreAsentamientoProyecto'];
$TipoVialidadProyecto		=	$_POST['TipoVialidadProyecto'];
$NombreVialidadProyecto  =	 	$_POST['NombreVialidadProyecto'];
$NombreLocalidadProyecto  =	 	$_POST['NombreLocalidadProyecto'];
$NombreMunicipioProyecto	=   $_POST['NombreMunicipioProyecto'];
$ReferenciaVialidadProyecto	=	$_POST['ReferenciaVialidadProyecto'];


#recepcion de datos concepto de apoyo
$ApoyoSolicitado1 = 			ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1	=					sanitizeString(	$_POST['UniMedida1']);
$CanSolicitada1	=				sanitizeString(	$_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1	=	sanitizeString(	$_POST['AportacionBeneficiario1']);
$InversionTotal1	=			$ApoyoEstatalSolicitado1 + $ApoyoMunicipalSolicitado1 + $AportacionBeneficiario1;
						
$ApoyoSolicitado2	=			sanitizeString(	$_POST['ApoyoSolicitado2']);
$UniMedida2	=					sanitizeString(	$_POST['UniMedida2']);
$CanSolicitada2	=				sanitizeString(	$_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2	=	sanitizeString(	$_POST['AportacionBeneficiario2']);
if (is_numeric(!is_null($ApoyoEstatalSolicitado2)) & is_numeric(!is_null($ApoyoEstatalSolicitado2)) & is_numeric(!is_null($ApoyoEstatalSolicitado2)) ) {
	$InversionTotal2	=			$ApoyoEstatalSolicitado2 + $ApoyoMunicipalSolicitado2 + $AportacionBeneficiario2;
}


$ApoyoSolicitado3	=			sanitizeString(	$_POST['ApoyoSolicitado3']);
$UniMedida3	=					sanitizeString(	$_POST['UniMedida3']);
$CanSolicitada3	=				sanitizeString(	$_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3	=	sanitizeString(	$_POST['AportacionBeneficiario3']);

if (is_numeric(!is_null($ApoyoEstatalSolicitado3)) & is_numeric(!is_null($ApoyoEstatalSolicitado3)) & is_numeric(!is_null($ApoyoEstatalSolicitado3)) ) {
	$InversionTotal3	=			$ApoyoEstatalSolicitado3 + $ApoyoMunicipalSolicitado3 + $AportacionBeneficiario3;
}
				
$ApoyoSolicitado4	=			sanitizeString(	$_POST['ApoyoSolicitado4']);
$UniMedida4	=					sanitizeString(	$_POST['UniMedida4']);
$CanSolicitada4	=				sanitizeString(	$_POST['CanSolicitada4']);
$ApoyoEstatalSolicitado4	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado4']);
$ApoyoMunicipalSolicitado4	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado4']);
$AportacionBeneficiario4	=	sanitizeString(	$_POST['AportacionBeneficiario4']);

if (is_numeric(!is_null($ApoyoEstatalSolicitado4)) & is_numeric(!is_null($ApoyoEstatalSolicitado4)) & is_numeric(!is_null($ApoyoEstatalSolicitado4)) ) {
	$InversionTotal4	=			$ApoyoEstatalSolicitado4 + $ApoyoMunicipalSolicitado4 + $AportacionBeneficiario4;
}

$ApoyoSolicitado5	=			sanitizeString(	$_POST['ApoyoSolicitado5']);
$UniMedida5	=					sanitizeString(	$_POST['UniMedida5']);
$CanSolicitada5	=				sanitizeString(	$_POST['CanSolicitada5']);
$ApoyoEstatalSolicitado5	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado5']);
$ApoyoMunicipalSolicitado5	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado5']);
$AportacionBeneficiario5	=	sanitizeString(	$_POST['AportacionBeneficiario5']);

if (is_numeric(!is_null($ApoyoEstatalSolicitado5)) & is_numeric(!is_null($ApoyoEstatalSolicitado5)) & is_numeric(!is_null($ApoyoEstatalSolicitado5)) ) {
	$InversionTotal5	=			$ApoyoEstatalSolicitado5 + $ApoyoMunicipalSolicitado5 + $AportacionBeneficiario5;
}
						
$ApoyoSolicitado6	=			sanitizeString(	$_POST['ApoyoSolicitado6']);
$UniMedida6	=					sanitizeString(	$_POST['UniMedida6']);
$CanSolicitada6	=				sanitizeString(	$_POST['CanSolicitada6']);
$ApoyoEstatalSolicitado6	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado6']);
$ApoyoMunicipalSolicitado6	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado6']);
$AportacionBeneficiario6	=	sanitizeString(	$_POST['AportacionBeneficiario6']);

if (is_numeric(!is_null($ApoyoEstatalSolicitado6)) & is_numeric(!is_null($ApoyoEstatalSolicitado6)) & is_numeric(!is_null($ApoyoEstatalSolicitado6)) ) {
	$InversionTotal6	=			$ApoyoEstatalSolicitado6 + $ApoyoMunicipalSolicitado6 + $AportacionBeneficiario6;
}

	


}

/*	




				
						




if (!is_null($ApoyoSolicitado2) ){
	if (!is_null($UniMedida2) && is_numeric($UniMedida2)) {
		if (!is_null($CanSolicitada2) && is_numeric($CanSolicitada2)) {
			if(!is_null($ApoyoEstatalSolicitado2) && is_numeric($ApoyoEstatalSolicitado2)){
				if (!is_null($ApoyoMunicipalSolicitado2) && is_numeric($ApoyoMunicipalSolicitado2)) {
					if (!is_null($AportacionBeneficiario2) && is_numeric($AportacionBeneficiario2)) {

						$insert2 = "INSERT INTO personafisicaConceptoApoyo VALUES('{$folioImpreso}','{$ApoyoSolicitado2}','{$UniMedida2}','{$CanSolicitada2}','{$ApoyoEstatalSolicitado2}','{$ApoyoMunicipalSolicitado2}','{$AportacionBeneficiario2}','{$InversionTotal2}',curdate());";

						
					}else{
						echo "el 2do campo de aportación del beneficiario esta vacío o no es numérico";

					}
				}else{
					echo "el 2do campo de apoyo municipal esta vacío o no es numérico";
				}

			}else{
				echo "el 2do campo de apoyo estatal solicitado esta vacío o no es numérico";

			}
			
		}else {
			echo "el 2do campo de cantidad solicitada esta vacío o no es numérico";

		}

	}else {
		echo "el 2do campo de unidad de medida esta vacío o no es numérico";

	}


} else{
	echo "el 2do campo de apoyo solicitado esta vacío o no es numérico";

}




	
if (!is_null($ApoyoSolicitado3) ){
	if (!is_null($UniMedida3) && is_numeric($UniMedida3)) {
		if (!is_null($CanSolicitada3) && is_numeric($CanSolicitada3)) {
			if(!is_null($ApoyoEstatalSolicitado3) && is_numeric($ApoyoEstatalSolicitado3)){
				if (!is_null($ApoyoMunicipalSolicitado3) && is_numeric($ApoyoMunicipalSolicitado3)) {
					if (!is_null($AportacionBeneficiario3) && is_numeric($AportacionBeneficiario3)) {

						$insert3 = "INSERT INTO personafisicaCA(sfolioImpreso,ApoyoSolicitado,UniMedida ,CanSolicitada,ApoyoEstatalSolicitado,ApoyoMunicipalSolicitado,AportacionBeneficiario,InversionTotal) VALUES('{$folioImpreso}','{$ApoyoSolicitado3}','{$UniMedida3}','{$CanSolicitada3}','{$ApoyoEstatalSolicitado3}','{$ApoyoMunicipalSolicitado3}','{$AportacionBeneficiario3}','{$InversionTotal3}');";

						
					}else{
						echo "el 3er campo de aportación del beneficiario esta vacío o no es numérico";

					}
				}else{
					echo "el 3er campo de apoyo municipal esta vacío o no es numérico";
				}

			}else{
				echo "el 3er campo de apoyo estatal solicitado esta vacío o no es numérico";

			}
			
		}else {
			echo "el 3er campo de cantidad solicitada esta vacío o no es numérico";

		}

	}else {
		echo "el 3er campo de unidad de medida esta vacío o no es numérico";

	


} else{
	echo "el 3er campo de apoyo solicitado esta vacío o no es numérico";

}

					
		
if (!is_null($ApoyoSolicitado4) ){
	if (!is_null($UniMedida4) && is_numeric($UniMedida4)) {
		if (!is_null($CanSolicitada4) && is_numeric($CanSolicitada4)) {
			if(!is_null($ApoyoEstatalSolicitado4) && is_numeric($ApoyoEstatalSolicitado4)){
				if (!is_null($ApoyoMunicipalSolicitado4) && is_numeric($ApoyoMunicipalSolicitado4)) {
					if (!is_null($AportacionBeneficiario4) && is_numeric($AportacionBeneficiario4)) {

						$insert4 = "INSERT INTO personafisicaCA(sfolioImpreso,ApoyoSolicitado,UniMedida ,CanSolicitada,ApoyoEstatalSolicitado,ApoyoMunicipalSolicitado,AportacionBeneficiario,InversionTotal) VALUES('{$folioImpreso}','{$ApoyoSolicitado4}','{$UniMedida4}','{$CanSolicitada4}','{$ApoyoEstatalSolicitado4}','{$ApoyoMunicipalSolicitado4}','{$AportacionBeneficiario4}','{$InversionTotal4}');";

						
					}else{
						echo "el 4to campo de aportación del beneficiario esta vacío o no es numérico";

					}
				}else{
					echo "el 4to campo de apoyo municipal esta vacío o no es numérico";
				}

			}else{
				echo "el 4to campo de apoyo estatal solicitado esta vacío o no es numérico";

			}
			
		}else {
			echo "el 4to campo de cantidad solicitada esta vacío o no es numérico";

		}

	}else {
		echo "el 4to campo de unidad de medida esta vacío o no es numérico";

	}


} else{
	echo "el 4to campo de apoyo solicitado esta vacío o no es numérico";

}				
	
if (!is_null($ApoyoSolicitado5) ){
	if (!is_null($UniMedida5) && is_numeric($UniMedida5)) {
		if (!is_null($CanSolicitada5) && is_numeric($CanSolicitada5)) {
			if(!is_null($ApoyoEstatalSolicitado5) && is_numeric($ApoyoEstatalSolicitado5)){
				if (!is_null($ApoyoMunicipalSolicitado5) && is_numeric($ApoyoMunicipalSolicitado5)) {
					if (!is_null($AportacionBeneficiario5) && is_numeric($AportacionBeneficiario5)) {

						$insert5 = "INSERT INTO personafisicaCA(sfolioImpreso,ApoyoSolicitado,UniMedida ,CanSolicitada,ApoyoEstatalSolicitado,ApoyoMunicipalSolicitado,AportacionBeneficiario,InversionTotal) VALUES('{$folioImpreso}','{$ApoyoSolicitado5}','{$UniMedida5}','{$CanSolicitada5}','{$ApoyoEstatalSolicitado5}','{$ApoyoMunicipalSolicitado5}','{$AportacionBeneficiario5}','{$InversionTotal5}');";

						
					}else{
						echo "el 5to campo de aportación del beneficiario esta vacío o no es numérico";

					}
				}else{
					echo "el 5to campo de apoyo municipal esta vacío o no es numérico";
				}

			}else{
				echo "el 5to campo de apoyo estatal solicitado esta vacío o no es numérico";

			}
			
		}else {
			echo "el 5to campo de cantidad solicitada esta vacío o no es numérico";

		}

	}else {
		echo "el 5to campo de unidad de medida esta vacío o no es numérico";

	}


} else{
	echo "el 5to campo de apoyo solicitado esta vacío o no es numérico";

}				
						
				
						

if (!is_null($ApoyoSolicitado6) ){
	if (!is_null($UniMedida6) && is_numeric($UniMedida6)) {
		if (!is_null($CanSolicitada6) && is_numeric($CanSolicitada6)) {
			if(!is_null($ApoyoEstatalSolicitado6) && is_numeric($ApoyoEstatalSolicitado6)){
				if (!is_null($ApoyoMunicipalSolicitado6) && is_numeric($ApoyoMunicipalSolicitado6)) {
					if (!is_null($AportacionBeneficiario6) && is_numeric($AportacionBeneficiario6)) {

						$insert6 = "INSERT INTO personafisicaCA(sfolioImpreso,ApoyoSolicitado,UniMedida ,CanSolicitada,ApoyoEstatalSolicitado,ApoyoMunicipalSolicitado,AportacionBeneficiario,InversionTotal) VALUES('{$folioImpreso}','{$ApoyoSolicitado6}','{$UniMedida6}','{$CanSolicitada6}','{$ApoyoEstatalSolicitado6}','{$ApoyoMunicipalSolicitado6}','{$AportacionBeneficiario6}','{$InversionTotal6}');";

						
					}else{
						echo "el 6to campo de aportación del beneficiario esta vacío o no es numérico";

					}
				}else{
					echo "el 6to campo de apoyo municipal esta vacío o no es numérico";
				}

			}else{
				echo "el 6to campo de apoyo estatal solicitado esta vacío o no es numérico";

			}
			
		}else {
			echo "el 6to campo de cantidad solicitada esta vacío o no es numérico";

		}

	}else {
		echo "el 6to campo de unidad de medida esta vacío o no es numérico";

	}


} else{
	echo "el 6to campo de apoyo solicitado esta vacío o no es numérico";

}
*/









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
<h4>Documentos Admitidos solo en formato PDF.</h4> <br>

<div class="documentos">

<form method="post" action="observaciones.php" enctype="multipart/form-data">

<!-- Datos de Persona Fisica -->
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

<!-- Datos de Proyecto -->
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



<!-- Datos de Apoyo Solicitado -->
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



<p>Selecciona la Identificación Oficial expedida por el <b>IFE o INE</b>: </p>

  <input type="file" name="INE"  required="required">
	


<?php 
	
	if ($_FILES) {
	$nameINE = $_FILES['INE']['name'];

	switch ($_FILES['INE']['type']){
		case 'application/pdf': $ext = 'pdf'; break;
		default: 	$ext =''; break;
	}
	


	
	if($ext){
		$n = "Documentos/".$folioImpreso."_INE_.$ext";
	move_uploaded_file($_FILES['INE']['tmp_name'],$n);
	echo "<br> El archivo '$nameINE' fue subido como Identiticacion INE  '$n':<br>";
	} else echo "No es un archivo PDF";


	
}  
 ?>

</div>
<div class="documentos">
<p>Selecciona la  <b>CURP</b> Clave Única de Registro de Población:</p>
 <input type="file" name="INE"  required="required">
</div>


<div class="documentos">
<p> Selecciona el <b>Comprobante de domicilio</b> o <br> Constancia de Residencia firmado por la autoridad competente:</p>
<input type="file" name="INE" required="required" >
</div>

<div class="documentos">
<p>Selecciona el <b>Croquis</b> de bien a adquirir:</p>
 <input type="file" name="INE" required="required" >
 </div>


<input type="submit" name="RequisitosG" value="Enviar información"  class="boton">
</form>



<h2>Declaraciones del Solicitante:</h2>
<div class="declaraciones">
<p>a) Que no realizo actividades productivas ni comerciales ilícitas. </p>
<p>b) Que no se aplicaran los incentivos únicamente para los fines autorizados, y en caso de no realizarlo se entregara el recurso, así como los productos financieros.</p>

<p>c) Que no he recibido o estoy recibiendo apoyo alguno para el mismo concepto en otro programa, que implique duplicidad de incentivos.</p>

<p>d) Que los datos aquí expuestos son verídicos y me comprometo a cumplir con los ordenamientos establecidos en la mecánica operativa establecida.</p>

<p>e) Expreso mi total y cabal compromiso, para realizar las inversiones y/o trabajos que corresponden para ejecutar las acciones del proyecto que requieran.</p>

<p>f) Que estoy cierto que la entrega de esta solicitud, así como la de los documentos solicitados, no implica aceptación u obligación del pago de los incentivos solicitados.</p>
</div>








<!--Fecha: -->



<a href="http://localhost/sedea/Personas/Fisica/conceptosApoyoPF.php"><button class="boton"> Regresar  </button></a>
<a href="http://localhost/sedea/inicio.php"><button class="boton">Menú Principal</button></a>


<h5>Autorizo que mis datos personales sean empleados para el trámite de la solución. Otorgo el consentimiento para que sean transferidos en caso de ser necesario y dar el cumplimiento conforme a lo previsto en los artículos 16 fracción II,59 y 61 de la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de Querétaro; así como a las obligaciones de transparencia y acceso a la información pública de conformidad con la Ley del Estado de Querétaro.
"En cumplimiento a las Leyes de Protección de Datos Personales, Usted puede consultar el aviso de privacidad a través del portal de internet http://sedea.queretaro.gob.mx"
La entrega de la presente solicitud, así como de la documentación solicitada, no implica aceptación u obligación del pago de los incentivos.
</h5>



</div>	


</body>
</html>
