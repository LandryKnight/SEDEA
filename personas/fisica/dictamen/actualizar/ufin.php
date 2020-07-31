<?php  

require_once('uconexionPF.php');





if (isset($_POST['CompletarRegistro'])) { 

#recepcion de datos de PersonaFisica.php
  $folioImpreso               =                     sanitizeString($_POST['IfolioImpreso']);

  

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
$ApoyoSolicitado1             = 		                 sanitizeString($_POST['ApoyoSolicitado1']);
$UniMedida1	                  =			                 sanitizeString($_POST['UniMedida1']);
$CanSolicitada1	              =			                 sanitizeString($_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1	    =	                     sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1	  =  	                   sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1	    =	                     sanitizeString($_POST['AportacionBeneficiario1']);
$InversionTotal1	            =			                 $ApoyoEstatalSolicitado1 + $ApoyoMunicipalSolicitado1 + $AportacionBeneficiario1;

		
$ApoyoSolicitado2	            =			                 sanitizeString($_POST['ApoyoSolicitado2']);
$UniMedida2	                  =				               sanitizeString($_POST['UniMedida2']);
$CanSolicitada2	              =				               sanitizeString($_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2	    =	                     sanitizeString($_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2	  =	                     sanitizeString($_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2	    =                      sanitizeString($_POST['AportacionBeneficiario2']);


$ApoyoSolicitado3	          =			                   sanitizeString($_POST['ApoyoSolicitado3']);
$UniMedida3	                =				                 sanitizeString($_POST['UniMedida3']);
$CanSolicitada3	            =				                 sanitizeString($_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3	  =	                       sanitizeString($_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3	=	                       sanitizeString($_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3	  =      	                 sanitizeString($_POST['AportacionBeneficiario3']);


$ApoyoSolicitado4           =                        sanitizeString($_POST['ApoyoSolicitado4']);
$UniMedida4                 =                        sanitizeString($_POST['UniMedida4']);
$CanSolicitada4             =                        sanitizeString($_POST['CanSolicitada4']);
$ApoyoEstatalSolicitado4    =                        sanitizeString($_POST['ApoyoEstatalSolicitado4']);
$ApoyoMunicipalSolicitado4  =                        sanitizeString($_POST['ApoyoMunicipalSolicitado4']);
$AportacionBeneficiario4    =                        sanitizeString($_POST['AportacionBeneficiario4']);

$ApoyoSolicitado5            =                       sanitizeString($_POST['ApoyoSolicitado5']);
$UniMedida5                  =                       sanitizeString($_POST['UniMedida5']);
$CanSolicitada5              =                       sanitizeString($_POST['CanSolicitada5']);
$ApoyoEstatalSolicitado5     =                       sanitizeString($_POST['ApoyoEstatalSolicitado5']);
$ApoyoMunicipalSolicitado5   =                       sanitizeString($_POST['ApoyoMunicipalSolicitado5']);
$AportacionBeneficiario5     =                       sanitizeString($_POST['AportacionBeneficiario5']);


$ApoyoSolicitado6           =                        sanitizeString($_POST['ApoyoSolicitado6']);
$UniMedida6                 =                        sanitizeString($_POST['UniMedida6']);
$CanSolicitada6             =                        sanitizeString($_POST['CanSolicitada6']);
$ApoyoEstatalSolicitado6    =                        sanitizeString($_POST['ApoyoEstatalSolicitado6']);
$ApoyoMunicipalSolicitado6  =                        sanitizeString($_POST['ApoyoMunicipalSolicitado6']);
$AportacionBeneficiario6    =                        sanitizeString($_POST['AportacionBeneficiario6']);


#ruta de archivos en BD
$ruta_SQL_ine                  =                        sanitizeString($_POST['ruta_SQL_ine']);
$ruta_SQL_curp                 =                        sanitizeString($_POST['ruta_SQL_curp']);
$ruta_SQL_comprobantedomicilio =                        sanitizeString($_POST['ruta_SQL_comprobantedomicilio']);
$ruta_SQL_croquis              =                        sanitizeString($_POST['ruta_SQL_croquis']);







			$Observaciones       =      sanitizeString($_POST['observaciones']);	

	        if (is_null($Observaciones) | empty($Observaciones)) {
          
          $Observaciones = "Sin Observaciones";

        }



}




		      #Datos de Persona
       		 $insertPF = "INSERT INTO personafisicaDatos VALUES ('{$folioImpreso}','{$dirReg}','{$municipio}','{$nombre}','{$genero}','{$fechaNacimiento}','{$nacionalidad}','{$EstadoCivil}','{$estadoNacimiento}','{$telefono}','{$correo}','{$tipoIdentificacion}','{$numIdentificacion}','{$curp}',curdate());";

           #datos de identificacion persona fisica

           $inserIdentificacionpf = "INSERT INTO identificacionpf VALUES ('{$numIdentificacion}','{$curp}','{$folioImpreso}',curdate());";

         #Datos de Persona Domicilio
        $insertDomicilioPF = "INSERT INTO personafisicaDomicilio VALUES(null,'{$folioImpreso}','{$tipoDomicilio}','{$tipoAsentamiento}','{$nombreAsentamiento}','{$tipoVialidad}','{$nombreVialidad}','{$nombreLocalidad}','{$nombreMunicipio}','{$refVial}','{$actEco}',curdate());";

   			#Datos de Proyecto
   			$InsertProyecto = "INSERT INTO personafisicaProyecto VALUES(null,'{$folioImpreso}','{$NombreProyecto}','{$AntiguedadProyecto}','{$TelefonoProyecto}','{$CorreoElectronicoProyecto}','{$FechaConstitucion}','{$TipoDomicilioProyecto}','{$TipoAsentamientoProyecto}','{$NombreAsentamientoProyecto}','{$TipoVialidadProyecto}','{$NombreVialidadProyecto}','{$NombreLocalidadProyecto}','{$NombreMunicipioProyecto}','{$ReferenciaVialidadProyecto}',curdate());";

   			#Datos de Concepto de Apoyo
        	$InsertConceptoApoyo1 = "INSERT INTO personafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado1}','{$UniMedida1}','{$CanSolicitada1}','{$ApoyoEstatalSolicitado1}','{$ApoyoMunicipalSolicitado1}','{$AportacionBeneficiario1}','{$InversionTotal1}',curdate());";


          #Datos de Requisitos Generales

          $InsertRQG  = "INSERT INTO  personafisicaReqenerales VALUES(null,'{$folioImpreso}','{$Observaciones}',curdate());";

          #Datos de Dictamenes 
     		$insertDictamen = "INSERT INTO personafisicaDictamenes VALUES(null,'{$folioImpreso}','{$nombre}','{$dirReg}','Sin Dictaminar',curdate(),curdate());";

          $insertPF               = utf8_encode($insertPF);
          $inserIdentificacionpf  = utf8_encode($inserIdentificacionpf);
          $insertDomicilioPF      = utf8_encode($insertDomicilioPF);
   			  $InsertProyecto         = utf8_encode($InsertProyecto);
   			  $InsertConceptoApoyo1   = utf8_encode($InsertConceptoApoyo1);
          $InsertRQG              = utf8_encode($InsertRQG);
          $insertDictamen         = utf8_encode($insertDictamen);  



      

        echo "Dictamenes ". $insertDictamen;


        $select = "SELECT * FROM personafisicaDatos WHERE  folioImpresoPF  = '{$folioImpreso}'";


        $select = utf8_decode($select);

        $result = queryMySql("$select");


        if($result -> num_rows){
          echo "ya existe el folio";
  
        } else {


              queryMySql("$insertPF"); 
              #echo "Datos Registrados de persona fisica";
              
              queryMySql("$inserIdentificacionpf");

              queryMySql("$insertDomicilioPF");
              #echo "Datos Registrados de  Domicilio persona fisica";
           
              queryMySql("$InsertProyecto"); 
              #echo "Datos Registrados de Proyecto";
                       
              queryMySql("$InsertConceptoApoyo1"); 
              #echo "Datos de Concepto  de Persona Fisica";

              




if(empty($ApoyoSolicitado2)){} else {
  if(is_numeric($UniMedida2)){
    if(is_numeric($CanSolicitada2)){
      if(is_numeric($ApoyoEstatalSolicitado2)){
        if(is_numeric($ApoyoMunicipalSolicitado2)){
          if(is_numeric($AportacionBeneficiario2)){
            $InversionTotal2 = $ApoyoEstatalSolicitado2 + $ApoyoMunicipalSolicitado2 + $AportacionBeneficiario2;

             $InsertConceptoApoyo2 = "INSERT INTO personafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado2}','{$UniMedida2}','{$CanSolicitada2}','{$ApoyoEstatalSolicitado2}','{$ApoyoMunicipalSolicitado2}','{$AportacionBeneficiario2}','{$InversionTotal2}',curdate());";

              $InsertConceptoApoyo2  = utf8_encode($InsertConceptoApoyo2);

              queryMySql("$InsertConceptoApoyo2");

          }
        }
      }
    }
  }
}




if(empty($ApoyoSolicitado3)){} else {
  if(is_numeric($UniMedida3)){
    if(is_numeric($CanSolicitada3)){
      if(is_numeric($ApoyoEstatalSolicitado3)){
        if(is_numeric($ApoyoMunicipalSolicitado3)){
          if(is_numeric($AportacionBeneficiario3)){
              $InversionTotal3 = $ApoyoEstatalSolicitado3 + $ApoyoMunicipalSolicitado3 + $AportacionBeneficiario3;


            $InsertConceptoApoyo3 = "INSERT INTO personafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado3}','{$UniMedida3}','{$CanSolicitada3}','{$ApoyoEstatalSolicitado3}','{$ApoyoMunicipalSolicitado3}','{$AportacionBeneficiario3}','{$InversionTotal3}',curdate());";
            
                      $InsertConceptoApoyo3 = utf8_encode($InsertConceptoApoyo3);
            
                      queryMySql("$InsertConceptoApoyo3");

          }
        }
      }
    }
  }
}


if(empty($ApoyoSolicitado4)){} else {
  if(is_numeric($UniMedida4)){
    if(is_numeric($CanSolicitada4)){
      if(is_numeric($ApoyoEstatalSolicitado4)){
        if(is_numeric($ApoyoMunicipalSolicitado4)){
          if(is_numeric($AportacionBeneficiario4)){
            $InversionTotal4 = $ApoyoEstatalSolicitado4 + $ApoyoMunicipalSolicitado4 + $AportacionBeneficiario4;

            $InsertConceptoApoyo4 = "INSERT INTO personafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado4}','{$UniMedida4}','{$CanSolicitada4}','{$ApoyoEstatalSolicitado4}','{$ApoyoMunicipalSolicitado4}','{$AportacionBeneficiario4}','{$InversionTotal4}',curdate());";
        
                $InsertConceptoApoyo4 = utf8_encode($InsertConceptoApoyo4);
                queryMySql("$InsertConceptoApoyo4");
          }
        }
      }
    }
  }
}


if(empty($ApoyoSolicitado5)){} else {
  if(is_numeric($UniMedida5)){
    if(is_numeric($CanSolicitada5)){
      if(is_numeric($ApoyoEstatalSolicitado5)){
        if(is_numeric($ApoyoMunicipalSolicitado5)){
          if(is_numeric($AportacionBeneficiario5)){

            $InversionTotal5 = $ApoyoEstatalSolicitado5 + $ApoyoMunicipalSolicitado5 + $AportacionBeneficiario5;


            $InsertConceptoApoyo5 = "INSERT INTO personafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado5}','{$UniMedida5}','{$CanSolicitada5}','{$ApoyoEstatalSolicitado5}','{$ApoyoMunicipalSolicitado5}','{$AportacionBeneficiario5}','{$InversionTotal5}',curdate());";
         
         
                 $InsertConceptoApoyo5 = utf8_encode($InsertConceptoApoyo5);
         
                 queryMySql("$InsertConceptoApoyo5");
          }
        }
      }
    }
  }
}


if(empty($ApoyoSolicitado6)){} else {
  if(is_numeric($UniMedida6)){
    if(is_numeric($CanSolicitada6)){
      if(is_numeric($ApoyoEstatalSolicitado6)){
        if(is_numeric($ApoyoMunicipalSolicitado6)){
          if(is_numeric($AportacionBeneficiario6)){

            $InversionTotal6 = $ApoyoEstatalSolicitado6 + $ApoyoMunicipalSolicitado6 + $AportacionBeneficiario6;

            $InsertConceptoApoyo6 = "INSERT INTO personafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado6}','{$UniMedida6}','{$CanSolicitada6}','{$ApoyoEstatalSolicitado6}','{$ApoyoMunicipalSolicitado6}','{$AportacionBeneficiario6}','{$InversionTotal6}',curdate());";
          
               $InsertConceptoApoyo6 = utf8_encode($InsertConceptoApoyo6);
                   queryMySql("$InsertConceptoApoyo6");
          }
        }
      }
    }
  }
}


#envio de las rutas a la BD

if(empty($ruta_SQL_ine) ){
  
  }else {

    $insertrutaSQL_ine = "INSERT INTO personafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_ine}',curdate());";
   $insertrutaSQL_ine  = utf8_encode($insertrutaSQL_ine);
   queryMySql("$insertrutaSQL_ine");



  }

     
if(empty($ruta_SQL_curp)){
  
  }else{

    $insertrutaSQL_curp = "INSERT INTO personafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_curp}',curdate());";
    $insertrutaSQL_curp = utf8_encode($insertrutaSQL_curp);
    queryMySql("$insertrutaSQL_curp");
  }


if(empty($ruta_SQL_comprobantedomicilio)){
  
  }else {
    $insertrutaSQL_comprobantedomicilio = "INSERT INTO personafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_comprobantedomicilio}',curdate());";
    
    $insertrutaSQL_comprobantedomicilio = utf8_encode($insertrutaSQL_comprobantedomicilio);
    queryMySql("$insertrutaSQL_comprobantedomicilio");

  }

  if(empty($ruta_SQL_croquis)){
 
  }else {

    $insertrutaSQL_croquis = "INSERT INTO personafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_croquis}',curdate());";
     $insertrutaSQL_croquis = utf8_encode($insertrutaSQL_croquis);

     queryMySql("$insertrutaSQL_croquis");

  }



        

        queryMySql("$InsertRQG");
        queryMySql("$insertDictamen");



              


        }



/*echo "<br>". $insertPF;             
echo "<br>". $inserIdentificacionpf;
echo "<br>". $insertDomicilioPF;
echo "<br>". $InsertProyecto;

echo "<br>". $InsertRQG;
echo "<br>". $insertDictamen;

echo "<br>". $InsertConceptoApoyo1;
echo "<br>". $InsertConceptoApoyo2;
echo "<br>". $InsertConceptoApoyo3;
echo "<br>". $InsertConceptoApoyo4;
echo "<br>". $InsertConceptoApoyo5;
echo "<br>". $InsertConceptoApoyo6;
echo "<br>". $ruta_SQL_ine;
echo "<br>". $ruta_SQL_curp;
echo "<br>". $ruta_SQL_comprobantedomicilio;
echo "<br>". $ruta_SQL_croquis;

*/



?>




<!DOCTYPE html>
<html>
<head>
	<title>Finalizar Registro</title>
	<link rel="stylesheet" type="text/css" href="uestiloFisica.css">
	
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