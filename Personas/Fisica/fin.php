<?php  

require_once('conexionPF.php');





if (isset($_POST['CompletarRegistro'])) { 

#recepcion de datos de PersonaFisica.php
$folioImpreso               =                     sanitizeString($_POST['IfolioImpreso']);
$folioImpreso               = trim($folioImpreso);
  

$dirReg                     =                      sanitizeString($_POST['dirReg']);
$dirReg                     =  trim($dirReg);

$municipio                  =                      sanitizeString($_POST['municipio']);
$municipio                  =  trim($municipio);

$nombre                     =                      sanitizeString($_POST['nombre']);
$nombre                     =  trim($nombre);

$genero                     =                      sanitizeString($_POST['genero']);
$genero                     =  trim($genero);

$fechaNacimiento            =                      sanitizeString($_POST['fechaNacimiento']);
$fechaNacimiento            =  trim($fechaNacimiento);

$nacionalidad               =                      sanitizeString($_POST['nacionalidad']);
$nacionalidad               =  trim($nacionalidad);

$EstadoCivil                =                      sanitizeString($_POST['EstadoCivil']);
$EstadoCivil                =  trim($EstadoCivil);

$estadoNacimiento           =                      sanitizeString($_POST['estadoNacimiento']);
$estadoNacimiento           =  trim($estadoNacimiento);

$telefono                   =                      sanitizeString($_POST['telefono']);
$telefono                   =  trim($telefono);

$correo                     =                      sanitizeString($_POST['correo']);
$correo                     =  trim($correo);

$tipoIdentificacion         =                      sanitizeString($_POST['tipoIdentificacion']);
$tipoIdentificacion         =  trim($tipoIdentificacion);

$numIdentificacion          =                      sanitizeString($_POST['numIdentificacion']);
$numIdentificacion          =  trim($numIdentificacion);

$curp                       =                      sanitizeString($_POST['curp']);
$curp                       =  trim($curp);

$tipoDomicilio              =                      sanitizeString($_POST['tipoDomicilio']);
$tipoDomicilio              =  trim($tipoDomicilio);

$tipoAsentamiento           =                      sanitizeString($_POST['tipoAsentamiento']);
$tipoAsentamiento           =  trim($tipoAsentamiento);

$nombreAsentamiento         =                      sanitizeString($_POST['nombreAsentamiento']);
$nombreAsentamiento         =  trim($nombreAsentamiento);

$tipoVialidad               =                      sanitizeString($_POST['tipoVialidad']);
$tipoVialidad               =  trim($tipoVialidad);

$nombreVialidad             =                      sanitizeString($_POST['nombreVialidad']);
$nombreVialidad             =  trim($nombreVialidad);

$nombreLocalidad            =                      sanitizeString($_POST['nombreLocalidad']);
$nombreLocalidad            =  trim($nombreLocalidad);

$nombreMunicipio            =                      sanitizeString($_POST['nombreMunicipio']);
$nombreMunicipio            =  trim($nombreMunicipio);

$refVial                    =                      sanitizeString($_POST['refVial']);
$refVial                    =  trim($refVial);

$actEco                     =                      sanitizeString($_POST['actEco']);
$actEco                     =  trim($actEco);

    
#recepcion de datos de proyecto
$NombreProyecto               =                      sanitizeString($_POST['NombreProyecto']);
$NombreProyecto               = trim($NombreProyecto);

$AntiguedadProyecto           =                      sanitizeString($_POST['AntiguedadProyecto']);
$AntiguedadProyecto           = trim($AntiguedadProyecto);

$TelefonoProyecto             =                      sanitizeString($_POST['TelefonoProyecto']);
$TelefonoProyecto             = trim($TelefonoProyecto);

$CorreoElectronicoProyecto    =                      sanitizeString($_POST['CorreoElectronicoProyecto']);
$CorreoElectronicoProyecto    = trim($CorreoElectronicoProyecto);

$FechaConstitucion            =                      sanitizeString($_POST['FechaConstitucion']);
$FechaConstitucion            = trim($FechaConstitucion);

$TipoDomicilioProyecto        =                      sanitizeString($_POST['TipoDomicilioProyecto']);
$TipoDomicilioProyecto        = trim($TipoDomicilioProyecto);

$TipoAsentamientoProyecto     =                      sanitizeString($_POST['TipoAsentamientoProyecto']);
$TipoAsentamientoProyecto     = trim($TipoAsentamientoProyecto);

$NombreAsentamientoProyecto   =                      sanitizeString($_POST['NombreAsentamientoProyecto']);
$NombreAsentamientoProyecto   = trim($NombreAsentamientoProyecto);

$TipoVialidadProyecto         =                      sanitizeString($_POST['TipoVialidadProyecto']);
$TipoVialidadProyecto         = trim($TipoVialidadProyecto);

$NombreVialidadProyecto       =                      sanitizeString($_POST['NombreVialidadProyecto']);
$NombreVialidadProyecto       = trim($NombreVialidadProyecto);

$NombreLocalidadProyecto      =                      sanitizeString($_POST['NombreLocalidadProyecto']);
$NombreLocalidadProyecto      = trim($NombreLocalidadProyecto);

$NombreMunicipioProyecto      =                      sanitizeString($_POST['NombreMunicipioProyecto']);
$NombreMunicipioProyecto      = trim($NombreMunicipioProyecto);

$ReferenciaVialidadProyecto   =                      sanitizeString($_POST['ReferenciaVialidadProyecto']);
$ReferenciaVialidadProyecto   = trim($ReferenciaVialidadProyecto);

               


#recepcion de datos concepto de apoyo
$ApoyoSolicitado1             = 		                 sanitizeString($_POST['ApoyoSolicitado1']);
$ApoyoSolicitado1             = trim($ApoyoSolicitado1);

$UniMedida1	                  =			                 sanitizeString($_POST['UniMedida1']);
$UniMedida1                   = trim($UniMedida1);

$CanSolicitada1	              =			                 sanitizeString($_POST['CanSolicitada1']);
$CanSolicitada1               = trim($CanSolicitada1);

$ApoyoEstatalSolicitado1	    =	                     sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoEstatalSolicitado1      = trim($ApoyoEstatalSolicitado1);

$ApoyoMunicipalSolicitado1	  =  	                   sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$ApoyoMunicipalSolicitado1    = trim($ApoyoMunicipalSolicitado1);

$AportacionBeneficiario1	    =	                     sanitizeString($_POST['AportacionBeneficiario1']);
$AportacionBeneficiario1      = trim($AportacionBeneficiario1);


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
      $Observaciones       =      trim($Observaciones);	

	        if (is_null($Observaciones) | empty($Observaciones)) {
          
          $Observaciones = "Sin Observaciones";

        }



}




		      #Datos de Persona
       		 $insertPF = "INSERT INTO personafisicaDatos VALUES ('{$folioImpreso}','{$dirReg}','{$municipio}','{$nombre}','{$genero}','{$fechaNacimiento}','{$nacionalidad}','{$EstadoCivil}','{$estadoNacimiento}','{$telefono}','{$correo}','{$tipoIdentificacion}','{$numIdentificacion}','{$curp}',curdate());";

              #Datos de Persona zh
           $insertPFzh = "INSERT INTO zhpersonafisicaDatos VALUES ('{$folioImpreso}','{$dirReg}','{$municipio}','{$nombre}','{$genero}','{$fechaNacimiento}','{$nacionalidad}','{$EstadoCivil}','{$estadoNacimiento}','{$telefono}','{$correo}','{$tipoIdentificacion}','{$numIdentificacion}','{$curp}',curdate());";

          


         #Datos de Persona Domicilio
        $insertDomicilioPF = "INSERT INTO personafisicaDomicilio VALUES(null,'{$folioImpreso}','{$nombreMunicipio}','{$tipoDomicilio}','{$tipoVialidad}','{$tipoAsentamiento}','{$nombreAsentamiento}','{$nombreVialidad}','{$nombreLocalidad}','{$refVial}','{$actEco}',curdate());";

         #Datos de Persona zhDomicilio
        $insertDomicilioPFzh = "INSERT INTO zhpersonafisicaDomicilio VALUES(null,'{$folioImpreso}','{$nombreMunicipio}','{$tipoDomicilio}','{$tipoVialidad}','{$tipoAsentamiento}','{$nombreAsentamiento}','{$nombreVialidad}','{$nombreLocalidad}','{$refVial}','{$actEco}',curdate());";




   			#Datos de Proyecto
   			$InsertProyecto = "INSERT INTO personafisicaProyecto VALUES(null,'{$folioImpreso}','{$NombreProyecto}','{$AntiguedadProyecto}','{$TelefonoProyecto}','{$CorreoElectronicoProyecto}','{$FechaConstitucion}','{$TipoDomicilioProyecto}','{$TipoAsentamientoProyecto}','{$NombreAsentamientoProyecto}','{$TipoVialidadProyecto}','{$NombreVialidadProyecto}','{$NombreLocalidadProyecto}','{$NombreMunicipioProyecto}','{$ReferenciaVialidadProyecto}',curdate());";


        #Datos de zhProyecto
        $InsertProyectozh = "INSERT INTO zhpersonafisicaProyecto VALUES(null,'{$folioImpreso}','{$NombreProyecto}','{$AntiguedadProyecto}','{$TelefonoProyecto}','{$CorreoElectronicoProyecto}','{$FechaConstitucion}','{$TipoDomicilioProyecto}','{$TipoAsentamientoProyecto}','{$NombreAsentamientoProyecto}','{$TipoVialidadProyecto}','{$NombreVialidadProyecto}','{$NombreLocalidadProyecto}','{$NombreMunicipioProyecto}','{$ReferenciaVialidadProyecto}',curdate());";






   			#Datos de Concepto de Apoyo
        	$InsertConceptoApoyo1 = "INSERT INTO personafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado1}','{$UniMedida1}','{$CanSolicitada1}','{$ApoyoEstatalSolicitado1}','{$ApoyoMunicipalSolicitado1}','{$AportacionBeneficiario1}','{$InversionTotal1}',curdate());";


          #Datos de Concepto de zhApoyo
          $InsertConceptoApoyo1zh = "INSERT INTO zhpersonafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado1}','{$UniMedida1}','{$CanSolicitada1}','{$ApoyoEstatalSolicitado1}','{$ApoyoMunicipalSolicitado1}','{$AportacionBeneficiario1}','{$InversionTotal1}',curdate());";






          #Datos de Requisitos Generales

          $InsertRQG  = "INSERT INTO  personafisicaReqenerales VALUES(null,'{$folioImpreso}','{$Observaciones}',curdate());";

          #Datos de Requisitos zhGenerales

          $InsertRQGzh  = "INSERT INTO  zhpersonafisicaReqenerales VALUES(null,'{$folioImpreso}','{$Observaciones}',curdate());";





          #Datos de Dictamenes 
     		$insertDictamen = "INSERT INTO personafisicaDictamenes VALUES(null,'{$folioImpreso}','{$nombre}','{$dirReg}','Sin Dictaminar',curdate(),curdate());";

          #Datos de zhDictamenes 
          $insertDictamenzh = "INSERT INTO zhpersonafisicaDictamenes VALUES(null,'{$folioImpreso}','{$nombre}','{$dirReg}','Sin Dictaminar',curdate(),curdate());";



          $insertPF               = utf8_encode($insertPF);
          $insertDomicilioPF      = utf8_encode($insertDomicilioPF);
   			  $InsertProyecto         = utf8_encode($InsertProyecto);
   			  $InsertConceptoApoyo1   = utf8_encode($InsertConceptoApoyo1);
          $InsertRQG              = utf8_encode($InsertRQG);
          $insertDictamen         = utf8_encode($insertDictamen);  

          #respaldo de informacion en Tablas de Historial 
          $insertPFzh               = utf8_encode($insertPFzh);
          $insertDomicilioPFzh      = utf8_encode($insertDomicilioPFzh);
          $InsertProyectozh         = utf8_encode($InsertProyectozh);
          $InsertConceptoApoyo1zh   = utf8_encode($InsertConceptoApoyo1zh);
          $InsertRQGzh              = utf8_encode($InsertRQGzh);
          $insertDictamenzh         = utf8_encode($insertDictamenzh); 



      

        echo "Dictamenes ". $insertDictamen;


        $select = "SELECT * FROM personafisicaDatos WHERE  folioImpresoPF  = '{$folioImpreso}'";


        $select = utf8_decode($select);

        $result = queryMySql("$select");


        if($result -> num_rows){
          echo "ya existe el folio";
  
        } else {


              queryMySql("$insertPF"); 
              queryMySql("$insertPFzh"); 
              #echo "Datos Registrados de persona fisica";
                       
              queryMySql("$insertDomicilioPF");
               queryMySql("$insertDomicilioPFzh");
              #echo "Datos Registrados de  Domicilio persona fisica";
           
              queryMySql("$InsertProyecto"); 
              queryMySql("$InsertProyectozh"); 
              #echo "Datos Registrados de Proyecto";
                       
              queryMySql("$InsertConceptoApoyo1"); 
              queryMySql("$InsertConceptoApoyo1zh"); 
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


              $InsertConceptoApoyo2zh = "INSERT INTO zhpersonafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado2}','{$UniMedida2}','{$CanSolicitada2}','{$ApoyoEstatalSolicitado2}','{$ApoyoMunicipalSolicitado2}','{$AportacionBeneficiario2}','{$InversionTotal2}',curdate());";

              $InsertConceptoApoyo2zh  = utf8_encode($InsertConceptoApoyo2zh);

              queryMySql("$InsertConceptoApoyo2zh");

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


             $InsertConceptoApoyo3zh = "INSERT INTO zhpersonafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado3}','{$UniMedida3}','{$CanSolicitada3}','{$ApoyoEstatalSolicitado3}','{$ApoyoMunicipalSolicitado3}','{$AportacionBeneficiario3}','{$InversionTotal3}',curdate());";
            
                      $InsertConceptoApoyo3zh = utf8_encode($InsertConceptoApoyo3zh);
            
                      queryMySql("$InsertConceptoApoyo3zh");         

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


             $InsertConceptoApoyo4zh = "INSERT INTO zhpersonafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado4}','{$UniMedida4}','{$CanSolicitada4}','{$ApoyoEstatalSolicitado4}','{$ApoyoMunicipalSolicitado4}','{$AportacionBeneficiario4}','{$InversionTotal4}',curdate());";
        
                $InsertConceptoApoyo4zh = utf8_encode($InsertConceptoApoyo4zh);
                queryMySql("$InsertConceptoApoyo4zh");   
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


             $InsertConceptoApoyo5zh = "INSERT INTO zhpersonafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado5}','{$UniMedida5}','{$CanSolicitada5}','{$ApoyoEstatalSolicitado5}','{$ApoyoMunicipalSolicitado5}','{$AportacionBeneficiario5}','{$InversionTotal5}',curdate());";
         
         
                 $InsertConceptoApoyo5zh = utf8_encode($InsertConceptoApoyo5zh);
         
                 queryMySql("$InsertConceptoApoyo5zh");    
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


            $InsertConceptoApoyo6zh = "INSERT INTO zhpersonafisicaConceptoApoyo VALUES(null,'{$folioImpreso}','{$ApoyoSolicitado6}','{$UniMedida6}','{$CanSolicitada6}','{$ApoyoEstatalSolicitado6}','{$ApoyoMunicipalSolicitado6}','{$AportacionBeneficiario6}','{$InversionTotal6}',curdate());";
          
               $InsertConceptoApoyo6zh = utf8_encode($InsertConceptoApoyo6zh);
                   queryMySql("$InsertConceptoApoyo6zh");
          }

                   
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



   $insertrutaSQL_inezh = "INSERT INTO zhpersonafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_ine}',curdate());";
   $insertrutaSQL_inezh  = utf8_encode($insertrutaSQL_inezh);
   queryMySql("$insertrutaSQL_inezh");


  }

     
if(empty($ruta_SQL_curp)){
  
  }else{

    $insertrutaSQL_curp = "INSERT INTO personafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_curp}',curdate());";
    $insertrutaSQL_curp = utf8_encode($insertrutaSQL_curp);
    queryMySql("$insertrutaSQL_curp");

    $insertrutaSQL_curpzh = "INSERT INTO zhpersonafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_curp}',curdate());";
    $insertrutaSQL_curpzh = utf8_encode($insertrutaSQL_curpzh);
    queryMySql("$insertrutaSQL_curpzh");
  }


if(empty($ruta_SQL_comprobantedomicilio)){
  
  }else {
    $insertrutaSQL_comprobantedomicilio = "INSERT INTO personafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_comprobantedomicilio}',curdate());";
    
    $insertrutaSQL_comprobantedomicilio = utf8_encode($insertrutaSQL_comprobantedomicilio);
    queryMySql("$insertrutaSQL_comprobantedomicilio");




    $insertrutaSQL_comprobantedomiciliozh = "INSERT INTO zhpersonafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_comprobantedomicilio}',curdate());";
    
    $insertrutaSQL_comprobantedomiciliozh = utf8_encode($insertrutaSQL_comprobantedomiciliozh);
    queryMySql("$insertrutaSQL_comprobantedomiciliozh");

  }

  if(empty($ruta_SQL_croquis)){
 
  }else {

    $insertrutaSQL_croquis = "INSERT INTO personafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_croquis}',curdate());";
     $insertrutaSQL_croquis = utf8_encode($insertrutaSQL_croquis);

     queryMySql("$insertrutaSQL_croquis");


     $insertrutaSQL_croquiszh = "INSERT INTO zhpersonafisicarutaarchivos VALUES(null,'{$folioImpreso}','{$ruta_SQL_croquis}',curdate());";
     $insertrutaSQL_croquiszh = utf8_encode($insertrutaSQL_croquiszh);

     queryMySql("$insertrutaSQL_croquiszh");

  }



        

        queryMySql("$InsertRQG");
        queryMySql("$InsertRQGzh");

        
        queryMySql("$insertDictamen");
        queryMySql("$insertDictamenzh");




              


        }



/*echo "<br>". $insertPF;             

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
	<link rel="stylesheet" type="text/css" href="estiloFisica.css">
	
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