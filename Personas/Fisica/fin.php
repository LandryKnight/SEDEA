<?php  

require_once('ConexionPF.php');

if (isset($_POST['CompletarRegistro'])){

#recepcion de datos de PersonaFisica.php
  $folioImpreso       = 				  sanitizeString($_POST['IfolioImpreso']);
  $dirReg             = 					$_POST['dirReg'];
  $municipio          = 	 				$_POST['municipio'];
  $nombre             = 	 				$_POST['nombre'];
  $genero             = 	 				$_POST['genero'];
  $fechaNacimiento    = 		      $_POST['fechaNacimiento'];
  $nacionalidad       = 	 			  $_POST['nacionalidad'];
  $EstadoCivil        = 	 			  $_POST['EstadoCivil'];
  $estadoNacimiento   = 	 		    $_POST['estadoNacimiento'];
  $telefono           = 	 				$_POST['telefono'];
  $correo             = 	 				$_POST['correo'];
  $tipoIdentificacion = 	 	      $_POST['tipoIdentificacion'];
  $numIdentificacion  = 	 		    $_POST['numIdentificacion'];
  $curp               = 					$_POST['curp'];
  $tipoDomicilio      = 	 			  $_POST['tipoDomicilio'];
  $tipoAsentamiento   = 	 		    $_POST['tipoAsentamiento'];
  $nombreAsentamiento = 	 	      $_POST['nombreAsentamiento'];
  $tipoVialidad       = 	 			  $_POST['tipoVialidad'];
  $nombreVialidad     = 	 		    $_POST['nombreVialidad'];
  $nombreLocalidad    = 	 		    $_POST['nombreLocalidad'];
  $nombreMunicipio    = 	 		    $_POST['nombreMunicipio'];
  $refVial            = 	 				$_POST['refVial'];
  $actEco             = 	 				$_POST['actEco']; #actividad economica

#recepcion de datos de proyecto
$NombreProyecto		            =	 	$_POST['NombreProyecto'];
$AntiguedadProyecto		        =	 	$_POST['AntiguedadProyecto'];
$TelefonoProyecto		          =		$_POST['TelefonoProyecto'];
$CorreoElectronicoProyecto    =	  $_POST['CorreoElectronicoProyecto'];
$FechaConstitucion		        =	 	$_POST['FechaConstitucion'];
$TipoDomicilioProyecto		    =	  $_POST['TipoDomicilioProyecto'];
$TipoAsentamientoProyecto	    =	  $_POST['TipoAsentamientoProyecto'];
$NombreAsentamientoProyecto   =	  $_POST['NombreAsentamientoProyecto'];
$TipoVialidadProyecto		      =	  $_POST['TipoVialidadProyecto'];
$NombreVialidadProyecto       =	 	$_POST['NombreVialidadProyecto'];
$NombreLocalidadProyecto      =	 	$_POST['NombreLocalidadProyecto'];
$NombreMunicipioProyecto	    =   $_POST['NombreMunicipioProyecto'];
$ReferenciaVialidadProyecto	  =	  $_POST['ReferenciaVialidadProyecto'];


#recepcion de datos concepto de apoyo
$ApoyoSolicitado1             = 		 ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1	                  =			 sanitizeString($_POST['UniMedida1']);
$CanSolicitada1	              =			 sanitizeString($_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1	    =	     sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1	  =  	   sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1	    =	     sanitizeString($_POST['AportacionBeneficiario1']);
$InversionTotal1	            =			 $ApoyoEstatalSolicitado1 + $ApoyoMunicipalSolicitado1 + $AportacionBeneficiario1;

		
$ApoyoSolicitado2	            =			   sanitizeString($_POST['ApoyoSolicitado2']);
$UniMedida2	                  =				 sanitizeString($_POST['UniMedida2']);
$CanSolicitada2	              =				 sanitizeString($_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2	    =	       sanitizeString($_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2	  =	       sanitizeString($_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2	    =        sanitizeString($_POST['AportacionBeneficiario2']);


if (is_numeric(!is_null($ApoyoEstatalSolicitado2)) & is_numeric(!is_null($ApoyoEstatalSolicitado2)) & is_numeric(!is_null($ApoyoEstatalSolicitado2)) ) {

	$InversionTotal2	=			$ApoyoEstatalSolicitado2 + $ApoyoMunicipalSolicitado2 + $AportacionBeneficiario2;
}  else{
  echo "Checa que todos los campos solo contengan digitos excepto: conceptos de
apoyo solicitado";
}


$ApoyoSolicitado3	          =			  sanitizeString($_POST['ApoyoSolicitado3']);
$UniMedida3	                =				sanitizeString($_POST['UniMedida3']);
$CanSolicitada3	            =				sanitizeString($_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3	  =	      sanitizeString($_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3	=	      sanitizeString($_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3	  =      	sanitizeString($_POST['AportacionBeneficiario3']);

if (is_numeric(!is_null($ApoyoEstatalSolicitado3)) & is_numeric(!is_null($ApoyoEstatalSolicitado3)) & is_numeric(!is_null($ApoyoEstatalSolicitado3)) ) {

	$InversionTotal3	=			$ApoyoEstatalSolicitado3 + $ApoyoMunicipalSolicitado3 + $AportacionBeneficiario3;
  
} else{
  echo "Checa que todos los campos solo contengan digitos excepto: conceptos de
apoyo solicitado";
}

				
$ApoyoSolicitado4	          =			  sanitizeString($_POST['ApoyoSolicitado4']);
$UniMedida4	                =				sanitizeString($_POST['UniMedida4']);
$CanSolicitada4	            =				sanitizeString($_POST['CanSolicitada4']);
$ApoyoEstatalSolicitado4	  =	      sanitizeString($_POST['ApoyoEstatalSolicitado4']);
$ApoyoMunicipalSolicitado4	=	      sanitizeString($_POST['ApoyoMunicipalSolicitado4']);
$AportacionBeneficiario4	  =	      sanitizeString($_POST['AportacionBeneficiario4']);

if (is_numeric(!is_null($ApoyoEstatalSolicitado4)) & is_numeric(!is_null($ApoyoEstatalSolicitado4)) & is_numeric(!is_null($ApoyoEstatalSolicitado4)) ) {

	$InversionTotal4	=			$ApoyoEstatalSolicitado4 + $ApoyoMunicipalSolicitado4 + $AportacionBeneficiario4;
}  else{
  echo "Checa que todos los campos solo contengan digitos excepto: conceptos de
apoyo solicitado";
}



$ApoyoSolicitado5	           =			sanitizeString($_POST['ApoyoSolicitado5']);
$UniMedida5             	   =			sanitizeString($_POST['UniMedida5']);
$CanSolicitada5	             =			sanitizeString($_POST['CanSolicitada5']);
$ApoyoEstatalSolicitado5	   =	    sanitizeString($_POST['ApoyoEstatalSolicitado5']);
$ApoyoMunicipalSolicitado5	 =	    sanitizeString($_POST['ApoyoMunicipalSolicitado5']);
$AportacionBeneficiario5	   =	    sanitizeString($_POST['AportacionBeneficiario5']);

if (is_numeric(!is_null($ApoyoEstatalSolicitado5)) & is_numeric(!is_null($ApoyoEstatalSolicitado5)) & is_numeric(!is_null($ApoyoEstatalSolicitado5)) ) {

	$InversionTotal5	=			$ApoyoEstatalSolicitado5 + $ApoyoMunicipalSolicitado5 + $AportacionBeneficiario5;
}  else{
  echo "Checa que todos los campos solo contengan digitos excepto: conceptos de
apoyo solicitado";
}




						
$ApoyoSolicitado6	          =		 sanitizeString($_POST['ApoyoSolicitado6']);
$UniMedida6	                =		 sanitizeString($_POST['UniMedida6']);
$CanSolicitada6	            =		 sanitizeString($_POST['CanSolicitada6']);
$ApoyoEstatalSolicitado6	  =    sanitizeString($_POST['ApoyoEstatalSolicitado6']);
$ApoyoMunicipalSolicitado6	=	   sanitizeString($_POST['ApoyoMunicipalSolicitado6']);
$AportacionBeneficiario6	  =	   sanitizeString($_POST['AportacionBeneficiario6']);


if (is_numeric(!is_null($ApoyoEstatalSolicitado6)) & is_numeric(!is_null($ApoyoEstatalSolicitado6)) & is_numeric(!is_null($ApoyoEstatalSolicitado6)) ) {

	$InversionTotal6	=			$ApoyoEstatalSolicitado6 + $ApoyoMunicipalSolicitado6 + $AportacionBeneficiario6;



} else{
  echo "Checa que todos los campos solo contengan digitos excepto: conceptos de
apoyo solicitado";
}


			$Observaciones =                sanitizeString($_POST['observaciones']);	
	



}

		      #Datos de Persona
       		 $insertPF = "INSERT INTO personafisicaDatos VALUES ('{$folioImpreso}','{$dirReg}','{$municipio}','{$nombre}','{$genero}','{$fechaNacimiento}','{$nacionalidad}','{$EstadoCivil}','{$estadoNacimiento}','{$telefono }','{$correo}','{$tipoIdentificacion}','{$numIdentificacion}','{$curp}',curdate());";

         #Datos de Persona Domicilio
        $insertDomicilioPF = "INSERT INTO personafisicaDomicilio VALUES(null,'{$folioImpreso}','{$tipoDomicilio}','{$tipoAsentamiento}','{$nombreAsentamiento}','{$tipoVialidad}','{$nombreVialidad}','{$nombreLocalidad}','{$nombreMunicipio}','{$refVial}','{$actEco}',curdate());";

   			#Datos de Proyecto
   			$InsertProyecto = "INSERT INTO personafisicaProyecto VALUES(null,'{$folioImpreso}','{$NombreProyecto}','{$AntiguedadProyecto}','{$TelefonoProyecto}','{$CorreoElectronicoProyecto}','{$FechaConstitucion}','{$TipoDomicilioProyecto}','{$TipoAsentamientoProyecto}','{$NombreAsentamientoProyecto}','{$TipoVialidadProyecto}','{$NombreVialidadProyecto}','{$NombreLocalidadProyecto}','{$NombreMunicipioProyecto}','{$ReferenciaVialidadProyecto}',curdate());";

   			#Datos de Concepto de Apoyo
        	$InsertConceptoApoyo1 = "INSERT INTO personafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado1}','{$UniMedida1}','{$CanSolicitada1}','{$ApoyoEstatalSolicitado1}','{$ApoyoMunicipalSolicitado1}','{$AportacionBeneficiario1}','{$InversionTotal1}',curdate());";


          #Datos de Requisitos Generales

          $InsertRQG  = "INSERT INTO  personafisicaReqenerales VALUES(null,''{$folioImpreso}','{$Observaciones}',curdate());";

     		$insertPF               = utf8_encode($insertPF);
        $insertDomicilioPF      = utf8_encode($insertDomicilioPF);
   			$InsertProyecto         = utf8_encode($InsertProyecto);
   			$InsertConceptoApoyo1   = utf8_encode($InsertConceptoApoyo1);
        $InsertRQG              = utf8_encode($InsertRQG);
   
   

    		  




              queryMySql("$insertPF"); 
              #echo "Datos Registrados de persona fisica";

              queryMySql("$$insertDomicilioPF");
              #echo "Datos Registrados de  Domicilio persona fisica";
           
              queryMySql("$InsertProyecto"); 
              #echo "Datos Registrados de Proyecto";
                       
              queryMySql("$InsertConceptoApoyo1"); 
				      #echo "Datos de Concepto  de Persona Fisica";

              queryMySql("$InsertRQG");
              #echo "Datos de requisitos generales de persona fisica"






?>




<!DOCTYPE html>
<html>
<head>
	<title>Finalizar Registro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta charset="utf-8">
</head>
<body>


 
 	
 <div class="final">
 

<h1>Se realizo con éxito el registro del Folio: <?php echo $folioImpreso; ?> </h1>


<br>

<h3>¡Que tengas un excelente día!</h3>





<a href="http://localhost/sedea/index.php"><button class="boton">ir al Menú Principal</button></a>


 </div>	
</body>
</html>