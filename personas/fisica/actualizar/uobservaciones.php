<?php 

require_once('conexionPF.php');

global $folioImpreso;


if (isset($_POST['RequisitosG']))  {



#recepcion de datos de PersonaFisica.php
  $folioImpreso               = 				            sanitizeString($_POST['IfolioImpreso']);

  

  $dirReg                     =                      sanitizeString($_POST['dirReg']);
  $municipio                  =                      sanitizeString($_POST['municipio']);
  $nombre                     =                      sanitizeString($_POST['nombre']);
  $genero                     =                      sanitizeString($_POST['genero']);
  $fechaNacimiento            =                      sanitizeString($_POST['fechaNacimiento']);
  $nacionalidad               =                      sanitizeString($_POST['nacionalidad']);
  $EstadoCivil                =                      sanitizeString($_POST['EstadoCivil']);
  $estadoNacimiento           =                      sanitizeString($_POST['estadoNacimiento']);
  $telefono                   =                      sanitizeString($_POST['telefono']);
  $correo                     =                      sanitizeString($_POST['correo']);
  $tipoIdentificacion         =                      sanitizeString($_POST['tipoIdentificacion']);
  $numIdentificacion          =                      sanitizeString($_POST['numIdentificacion']);
  $curp                       =                      sanitizeString($_POST['curp']);
  $tipoDomicilio              =                      sanitizeString($_POST['tipoDomicilio']);
  $tipoAsentamiento           =                      sanitizeString($_POST['tipoAsentamiento']);
  $nombreAsentamiento         =                      sanitizeString($_POST['nombreAsentamiento']);
  $tipoVialidad               =                      sanitizeString($_POST['tipoVialidad']);
  $nombreVialidad             =                      sanitizeString($_POST['nombreVialidad']);
  $nombreLocalidad            =                      sanitizeString($_POST['nombreLocalidad']);
  $nombreMunicipio            =                      sanitizeString($_POST['nombreMunicipio']);
  $refVial                    =                      sanitizeString($_POST['refVial']);
  $actEco                     =                      sanitizeString($_POST['actEco']);
      
#recepcion de datos de proyecto
$NombreProyecto               =                      sanitizeString($_POST['NombreProyecto']);
$AntiguedadProyecto           =                      sanitizeString($_POST['AntiguedadProyecto']);
$TelefonoProyecto             =                      sanitizeString($_POST['TelefonoProyecto']);
$CorreoElectronicoProyecto    =                      sanitizeString($_POST['CorreoElectronicoProyecto']);
$FechaConstitucion            =                      sanitizeString($_POST['FechaConstitucion']);
$TipoDomicilioProyecto        =                      sanitizeString($_POST['TipoDomicilioProyecto']);
$TipoAsentamientoProyecto     =                      sanitizeString($_POST['TipoAsentamientoProyecto']);
$NombreAsentamientoProyecto   =                      sanitizeString($_POST['NombreAsentamientoProyecto']);
$TipoVialidadProyecto         =                      sanitizeString($_POST['TipoVialidadProyecto']);
$NombreVialidadProyecto       =                      sanitizeString($_POST['NombreVialidadProyecto']);
$NombreLocalidadProyecto      =                      sanitizeString($_POST['NombreLocalidadProyecto']);
$NombreMunicipioProyecto      =                      sanitizeString($_POST['NombreMunicipioProyecto']);
$ReferenciaVialidadProyecto   =                      sanitizeString($_POST['ReferenciaVialidadProyecto']);
  




#recepcion de datos concepto de apoyo
$ApoyoSolicitado1            = 		                  sanitizeString($_POST['ApoyoSolicitado1']);
$UniMedida1	                 =			                sanitizeString($_POST['UniMedida1']);
$CanSolicitada1	             =			                sanitizeString($_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1	   =	                    sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1	 =	                    sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1	   =	                    sanitizeString($_POST['AportacionBeneficiario1']);


#Segundo Apoyo Solicitado						
$ApoyoSolicitado2	           =			                sanitizeString($_POST['ApoyoSolicitado2']);
$UniMedida2	                 =			                sanitizeString($_POST['UniMedida2']);
$CanSolicitada2	             =			                sanitizeString($_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2	   =	                    sanitizeString($_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2	 =	                    sanitizeString($_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2	   =	                    sanitizeString($_POST['AportacionBeneficiario2']);



$ApoyoSolicitado3	          =			                  sanitizeString($_POST['ApoyoSolicitado3']);
$UniMedida3	                =				                sanitizeString($_POST['UniMedida3']);
$CanSolicitada3	            =				                sanitizeString($_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3	  =	                      sanitizeString($_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3	=	                      sanitizeString($_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3	  =	                      sanitizeString($_POST['AportacionBeneficiario3']);


				
$ApoyoSolicitado4	          =			                  sanitizeString($_POST['ApoyoSolicitado4']);
$UniMedida4	                =				                sanitizeString($_POST['UniMedida4']);
$CanSolicitada4	            =				                sanitizeString($_POST['CanSolicitada4']);
$ApoyoEstatalSolicitado4	  =	                      sanitizeString($_POST['ApoyoEstatalSolicitado4']);
$ApoyoMunicipalSolicitado4	=	                      sanitizeString($_POST['ApoyoMunicipalSolicitado4']);
$AportacionBeneficiario4	  =	                      sanitizeString($_POST['AportacionBeneficiario4']);



$ApoyoSolicitado5	          =			                 sanitizeString($_POST['ApoyoSolicitado5']);
$UniMedida5	                =			                 sanitizeString($_POST['UniMedida5']);
$CanSolicitada5	            =			                 sanitizeString($_POST['CanSolicitada5']);
$ApoyoEstatalSolicitado5	  =	                     sanitizeString($_POST['ApoyoEstatalSolicitado5']);
$ApoyoMunicipalSolicitado5	=	                     sanitizeString($_POST['ApoyoMunicipalSolicitado5']);
$AportacionBeneficiario5	  =	                     sanitizeString($_POST['AportacionBeneficiario5']);


						
$ApoyoSolicitado6	          =			                 sanitizeString($_POST['ApoyoSolicitado6']);
$UniMedida6	                =				               sanitizeString($_POST['UniMedida6']);
$CanSolicitada6	            =				               sanitizeString($_POST['CanSolicitada6']);
$ApoyoEstatalSolicitado6	  =	                     sanitizeString($_POST['ApoyoEstatalSolicitado6']);
$ApoyoMunicipalSolicitado6	=	                     sanitizeString($_POST['ApoyoMunicipalSolicitado6']);
$AportacionBeneficiario6	  =	                     sanitizeString($_POST['AportacionBeneficiario6']);




	




}




echo "<br>".$ApoyoSolicitado1; 
echo "<br>".$UniMedida1;
echo "<br>".$CanSolicitada1;
echo "<br>".$ApoyoEstatalSolicitado1; 
echo "<br>".$ApoyoMunicipalSolicitado1;
echo "<br>".$AportacionBeneficiario1; 

echo "<br>".$ApoyoSolicitado2;
echo "<br>".$UniMedida2;
echo "<br>".$CanSolicitada2;
echo "<br>".$ApoyoEstatalSolicitado2;
echo "<br>".$ApoyoMunicipalSolicitado2;
echo "<br>".$AportacionBeneficiario2;

echo "<br>".$ApoyoSolicitado3;
echo "<br>".$UniMedida3;
echo "<br>".$CanSolicitada3;
echo "<br>".$ApoyoEstatalSolicitado3;
echo "<br>".$ApoyoMunicipalSolicitado3;
echo "<br>".$AportacionBeneficiario3;
      
echo "<br>".$ApoyoSolicitado4;
echo "<br>".$UniMedida4;
echo "<br>".$CanSolicitada4;
echo "<br>".$ApoyoEstatalSolicitado4;
echo "<br>".$ApoyoMunicipalSolicitado4;
echo "<br>".$AportacionBeneficiario4;

echo "<br>".$ApoyoSolicitado5;
echo "<br>".$UniMedida5;
echo "<br>".$CanSolicitada5;
echo "<br>".$ApoyoEstatalSolicitado5;
echo "<br>".$ApoyoMunicipalSolicitado5;
echo "<br>".$AportacionBeneficiario5;
         
echo "<br>".$ApoyoSolicitado6;
echo "<br>".$UniMedida6;
echo "<br>".$CanSolicitada6;
echo "<br>".$ApoyoEstatalSolicitado6;
echo "<br>".$ApoyoMunicipalSolicitado6;
echo "<br>".$AportacionBeneficiario6;


















        global $ruta_SQL_ine;
        global $ruta_SQL_curp;
        global $ruta_SQL_comprobantedomicilio;
        global $ruta_SQL_croquis;


        $num_archivos = count($_FILES['archivo']['name']);

        for($i=0; $i<= $num_archivos; $i++){

        if(!empty($_FILES['archivo']['name'][$i])){

           $nombrearchivo = $_FILES['archivo']['name'][$i]; 
           $tipoarchivo = $_FILES['archivo']['type'][$i];
           $ruta_temporal = $_FILES['archivo']['tmp_name'][$i];
           

           if ($tipoarchivo === "application/pdf") 

                {

                #echo "<br>el archivo $nombre si es un pdf";

              $nuevonombre_ine = "$folioImpreso"."_INE_"."$nombrearchivo";                     
              $nuevonombre_curp = "$folioImpreso"."_CURP_"."$nombrearchivo";
              $nuevonombre_comprobanteDomicilio = "$folioImpreso"."_COMPROBANTEDOMICILIO_"."$nombrearchivo";
              $nuevonombre_croquis = "$folioImpreso"."_CROQUIS_"."$nombrearchivo";         
  

              #ruta donde se va a guardar el archivo pdf
              $ruta_nueva_ine  = "documentospf/"."$nuevonombre_ine";
  
              $ruta_nueva_curp  = "documentospf/"."$nuevonombre_curp";
        
              $ruta_nueva_comprobanteDomicilio = "documentospf/"."$nuevonombre_comprobanteDomicilio";
  
              $ruta_nueva_croquis  = "documentospf/"."$nuevonombre_croquis";


               if(file_exists($ruta_nueva_ine) || file_exists($ruta_nueva_curp) || file_exists($ruta_nueva_comprobanteDomicilio) || file_exists($ruta_nueva_croquis))
               {

                    //echo "El PDF".$_FILES['archivo']['name'][$i]." ya se encuentra en el servidor<br> ";

                } else {

                  if($i == 0){

                  move_uploaded_file($ruta_temporal, $ruta_nueva_ine);
                  echo "<br>El PDF ".$_FILES['archivo']['name'][$i]." se subio de manera exitosa ";
                  $ruta_SQL_ine = "$ruta_nueva_ine";

                   }
                  if($i == 1){

                  move_uploaded_file($ruta_temporal, $ruta_nueva_curp);
                  echo "<br>El PDF ".$_FILES['archivo']['name'][$i]." se subio de manera exitosa <br>";
                  $ruta_SQL_curp = "$ruta_nueva_curp";
                 
                  }
                  

                  if($i == 2){

                  move_uploaded_file($ruta_temporal, $ruta_nueva_comprobanteDomicilio);
                  echo "<br>El PDF ".$_FILES['archivo']['name'][$i]." se subio de manera exitosa <br>";
                   $ruta_SQL_comprobantedomicilio = "$ruta_nueva_comprobanteDomicilio";
                  

                  }
                  
                  if($i == 3){

                  move_uploaded_file($ruta_temporal, $ruta_nueva_croquis);
                  echo "<br>El PDF ".$_FILES['archivo']['name'][$i]." se subio de manera exitosa <br>";
                  $ruta_SQL_croquis = "$ruta_nueva_croquis";
                  
                  }
                  

                      }



            




                  } else {



                  echo "<br><p class='mensaje'>El archivo $nombrearchivo no es un pdf</p>";

           }
        }   

      }



        echo  "<br>ruta ".$ruta_SQL_ine;
        echo  "<br>ruta ".$ruta_SQL_curp;
        echo  "<br>ruta ".$ruta_SQL_comprobantedomicilio;
        echo  "<br>ruta ".$ruta_SQL_croquis;







 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>Fin de Registro</title>
 	<link rel="stylesheet" type="text/css" href="estiloFisica.css">
 	<meta charset="utf-8">
 </head>
 <body>


<div class="ObservacionesM">
<h3>Observaciones:</h3>

<form action="fin.php" method="Post">

<!-- envio de informacion de persona fisica -->

<input type ="hidden" name ="IfolioImpreso" value="<?php echo $folioImpreso; ?>">	
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
<input type ="hidden" name ="curp"              value="<?php echo $curp; ?>">
<input type ="hidden" name ="tipoDomicilio"     value="<?php echo $tipoDomicilio; ?>">
<input type ="hidden" name ="tipoAsentamiento" value="<?php echo $tipoAsentamiento; ?>">
<input type ="hidden" name ="nombreAsentamiento" value="<?php echo $nombreAsentamiento; ?>">
<input type ="hidden" name ="tipoVialidad" value="<?php echo $tipoVialidad; ?>">
<input type ="hidden" name ="nombreVialidad" value="<?php echo $nombreVialidad; ?>">
<input type ="hidden" name ="nombreLocalidad" value="<?php echo $nombreLocalidad; ?>">
<input type ="hidden" name ="nombreMunicipio" value="<?php echo $nombreMunicipio; ?>">
<input type ="hidden" name ="refVial" value="<?php echo $refVial; ?>">
<input type ="hidden" name ="actEco" value="<?php echo $actEco; ?>">

<!-- envio de informacion de datos de proyecto-->

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


<!-- envio de informacion de conceptos de apoyo -->
<input type ="hidden" name ="ApoyoSolicitado1"          value="<?php echo $ApoyoSolicitado1; ?>">
<input type ="hidden" name ="UniMedida1"                value="<?php echo $UniMedida1; ?>">
<input type ="hidden" name ="CanSolicitada1"            value="<?php echo $CanSolicitada1; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado1"   value="<?php echo $ApoyoEstatalSolicitado1; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado1" value="<?php echo $ApoyoMunicipalSolicitado1; ?>">
<input type ="hidden" name ="AportacionBeneficiario1"   value="<?php echo $AportacionBeneficiario1; ?>">

							
							
<input type ="hidden" name ="ApoyoSolicitado2" value="<?php echo $ApoyoSolicitado2; ?>">
<input type ="hidden" name ="UniMedida2" value="<?php echo $UniMedida2; ?>">
<input type ="hidden" name ="CanSolicitada2" value="<?php echo $CanSolicitada2; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado2" value="<?php echo $ApoyoEstatalSolicitado2; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado2" value="<?php echo $ApoyoMunicipalSolicitado2; ?>">
<input type ="hidden" name ="AportacionBeneficiario2" value="<?php echo $AportacionBeneficiario2; ?>">

							
							
<input type ="hidden" name ="ApoyoSolicitado3" value="<?php echo $ApoyoSolicitado3; ?>">
<input type ="hidden" name ="UniMedida3" value="<?php echo $UniMedida3; ?>">
<input type ="hidden" name ="CanSolicitada3" value="<?php echo $CanSolicitada3; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado3" value="<?php echo $ApoyoEstatalSolicitado3; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado3" value="<?php echo $ApoyoMunicipalSolicitado3; ?>">
<input type ="hidden" name ="AportacionBeneficiario3" value="<?php echo $AportacionBeneficiario3; ?>">

							
							
<input type ="hidden" name ="ApoyoSolicitado4" value="<?php echo $ApoyoSolicitado4; ?>">
<input type ="hidden" name ="UniMedida4" value="<?php echo $UniMedida4; ?>">
<input type ="hidden" name ="CanSolicitada4" value="<?php echo $CanSolicitada4; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado4" value="<?php echo $ApoyoEstatalSolicitado4; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado4" value="<?php echo $ApoyoMunicipalSolicitado4; ?>">
<input type ="hidden" name ="AportacionBeneficiario4" value="<?php echo $AportacionBeneficiario4; ?>">

							
							
<input type ="hidden" name ="ApoyoSolicitado5" value="<?php echo $ApoyoSolicitado5; ?>">
<input type ="hidden" name ="UniMedida5" value="<?php echo $UniMedida5; ?>">
<input type ="hidden" name ="CanSolicitada5" value="<?php echo $CanSolicitada5; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado5" value="<?php echo $ApoyoEstatalSolicitado5; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado5" value="<?php echo $ApoyoMunicipalSolicitado5; ?>">
<input type ="hidden" name ="AportacionBeneficiario5" value="<?php echo $AportacionBeneficiario5; ?>">

							
							
<input type ="hidden" name ="ApoyoSolicitado6" value="<?php echo $ApoyoSolicitado6; ?>">
<input type ="hidden" name ="UniMedida6" value="<?php echo $UniMedida6; ?>">
<input type ="hidden" name ="CanSolicitada6" value="<?php echo $CanSolicitada6; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado6" value="<?php echo $ApoyoEstatalSolicitado6; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado6" value="<?php echo $ApoyoMunicipalSolicitado6; ?>">
<input type ="hidden" name ="AportacionBeneficiario6" value="<?php echo $AportacionBeneficiario6; ?>">



<!-- envio de informacion de rutas -->

<input type="hidden" name="ruta_SQL_ine" value="<?php  echo $ruta_SQL_ine; ?>">
<input type="hidden" name="ruta_SQL_curp" value="<?php  echo $ruta_SQL_curp; ?>">
<input type="hidden" name="ruta_SQL_comprobantedomicilio" value="<?php  echo $ruta_SQL_comprobantedomicilio; ?>">
<input type="hidden" name="ruta_SQL_croquis" value="<?php  echo $ruta_SQL_croquis; ?>">



<textarea class="observaciones" name="observaciones" rows="2" cols="90" maxlength="250" placeholder="(opcional)"></textarea>





<h5>Autorizo que mis datos personales sean empleados para el trámite de la solución. Otorgo el consentimiento para que sean transferidos en caso de ser necesario y dar el cumplimiento conforme a lo previsto en los artículos 16 fracción II,59 y 61 de la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de Querétaro; así como a las obligaciones de transparencia y acceso a la información pública de conformidad con la Ley del Estado de Querétaro.
"En cumplimiento a las Leyes de Protección de Datos Personales, Usted puede consultar el aviso de privacidad a través del portal de internet http://sedea.queretaro.gob.mx"
La entrega de la presente solicitud, así como de la documentación solicitada, no implica aceptación u obligación del pago de los incentivos.
</h5>


<input class="boton"  type="submit" name="CompletarRegistro"	id="ubicacion" value="Finalizar Registro">

</form>
 

<a href="http://localhost/sedea/index.php"><button class="boton" id="ubicacion">Menú Principal</button></a>
 </div>



 </body>
 </html>