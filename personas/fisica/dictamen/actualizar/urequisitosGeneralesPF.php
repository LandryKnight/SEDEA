
<?php  

require_once('uconexionPF.php');


global $Folio;

if (isset($_POST['EnviarConceptosPF'])){

   $Folio                     =                       sanitizeString($_POST['folio']);
   $Filas                     =                       sanitizeString($_POST['filas']);


#recepcion de datos de Persona Fisica.php
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






               
if($Filas == 1){
$ApoyoSolicitado1           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1                 =                       sanitizeString($_POST['UniMedida1']);
$CanSolicitada1             =                       sanitizeString($_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1    =                       sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1    =                       sanitizeString($_POST['AportacionBeneficiario1']);


$ApoyoSolicitado2="";
$UniMedida2="";
$CanSolicitada2="";
$ApoyoEstatalSolicitado2="";
$ApoyoMunicipalSolicitado2="";
$AportacionBeneficiario2="";


$ApoyoSolicitado3="";
$UniMedida3="";
$CanSolicitada3="";
$ApoyoEstatalSolicitado3="";
$ApoyoMunicipalSolicitado3="";
$AportacionBeneficiario3="";



$ApoyoSolicitado4="";
$UniMedida4="";
$CanSolicitada4="";
$ApoyoEstatalSolicitado4="";
$ApoyoMunicipalSolicitado4="";
$AportacionBeneficiario4="";


$ApoyoSolicitado5 ="";
$UniMedida5 ="";
$CanSolicitada5="";
$ApoyoEstatalSolicitado5="";
$ApoyoMunicipalSolicitado5="";
$AportacionBeneficiario5="";


$ApoyoSolicitado6="";
$UniMedida6="";
$CanSolicitada6="";
$ApoyoEstatalSolicitado6="";
$ApoyoMunicipalSolicitado6="";
$AportacionBeneficiario6="";


}             
if($Filas == 2){

$ApoyoSolicitado1           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1                 =                       sanitizeString($_POST['UniMedida1']);
$CanSolicitada1             =                       sanitizeString($_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1    =                       sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1    =                       sanitizeString($_POST['AportacionBeneficiario1']);

            
$ApoyoSolicitado2           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado2'])));
$UniMedida2                 =                       sanitizeString($_POST['UniMedida2']);
$CanSolicitada2             =                       sanitizeString($_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2    =                       sanitizeString($_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2    =                       sanitizeString($_POST['AportacionBeneficiario2']);


$ApoyoSolicitado3="";
$UniMedida3="";
$CanSolicitada3="";
$ApoyoEstatalSolicitado3="";
$ApoyoMunicipalSolicitado3="";
$AportacionBeneficiario3="";



$ApoyoSolicitado4="";
$UniMedida4="";
$CanSolicitada4="";
$ApoyoEstatalSolicitado4="";
$ApoyoMunicipalSolicitado4="";
$AportacionBeneficiario4="";


$ApoyoSolicitado5 ="";
$UniMedida5 ="";
$CanSolicitada5="";
$ApoyoEstatalSolicitado5="";
$ApoyoMunicipalSolicitado5="";
$AportacionBeneficiario5="";


$ApoyoSolicitado6="";
$UniMedida6="";
$CanSolicitada6="";
$ApoyoEstatalSolicitado6="";
$ApoyoMunicipalSolicitado6="";
$AportacionBeneficiario6="";

}             
if($Filas == 3){
$ApoyoSolicitado1           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1                 =                       sanitizeString($_POST['UniMedida1']);
$CanSolicitada1             =                       sanitizeString($_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1    =                       sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1    =                       sanitizeString($_POST['AportacionBeneficiario1']);

            
$ApoyoSolicitado2           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado2'])));
$UniMedida2                 =                       sanitizeString($_POST['UniMedida2']);
$CanSolicitada2             =                       sanitizeString($_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2    =                       sanitizeString($_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2    =                       sanitizeString($_POST['AportacionBeneficiario2']);



$ApoyoSolicitado3          =                        ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado3'])));
$UniMedida3                =                        sanitizeString($_POST['UniMedida3']);
$CanSolicitada3            =                        sanitizeString($_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3   =                        sanitizeString($_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3 =                        sanitizeString($_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3   =                        sanitizeString($_POST['AportacionBeneficiario3']);


$ApoyoSolicitado4="";
$UniMedida4="";
$CanSolicitada4="";
$ApoyoEstatalSolicitado4="";
$ApoyoMunicipalSolicitado4="";
$AportacionBeneficiario4="";

$ApoyoSolicitado5 ="";
$UniMedida5 ="";
$CanSolicitada5="";
$ApoyoEstatalSolicitado5="";
$ApoyoMunicipalSolicitado5="";
$AportacionBeneficiario5="";


$ApoyoSolicitado6="";
$UniMedida6="";
$CanSolicitada6="";
$ApoyoEstatalSolicitado6="";
$ApoyoMunicipalSolicitado6="";
$AportacionBeneficiario6="";


}
if($Filas == 4){
$ApoyoSolicitado1           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1                 =                       sanitizeString($_POST['UniMedida1']);
$CanSolicitada1             =                       sanitizeString($_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1    =                       sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1    =                       sanitizeString($_POST['AportacionBeneficiario1']);

            
$ApoyoSolicitado2           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado2'])));
$UniMedida2                 =                       sanitizeString($_POST['UniMedida2']);
$CanSolicitada2             =                       sanitizeString($_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2    =                       sanitizeString($_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2    =                       sanitizeString($_POST['AportacionBeneficiario2']);



$ApoyoSolicitado3          =                        ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado3'])));
$UniMedida3                =                        sanitizeString($_POST['UniMedida3']);
$CanSolicitada3            =                        sanitizeString($_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3   =                        sanitizeString($_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3 =                        sanitizeString($_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3   =                        sanitizeString($_POST['AportacionBeneficiario3']);


        
$ApoyoSolicitado4            =                      ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado4'])));
$UniMedida4                  =                      sanitizeString($_POST['UniMedida4']);
$CanSolicitada4              =                      sanitizeString($_POST['CanSolicitada4']);
$ApoyoEstatalSolicitado4     =                      sanitizeString($_POST['ApoyoEstatalSolicitado4']);
$ApoyoMunicipalSolicitado4   =                      sanitizeString($_POST['ApoyoMunicipalSolicitado4']);
$AportacionBeneficiario4     =                      sanitizeString($_POST['AportacionBeneficiario4']);

$ApoyoSolicitado5 ="";
$UniMedida5 ="";
$CanSolicitada5="";
$ApoyoEstatalSolicitado5="";
$ApoyoMunicipalSolicitado5="";
$AportacionBeneficiario5="";


$ApoyoSolicitado6="";
$UniMedida6="";
$CanSolicitada6="";
$ApoyoEstatalSolicitado6="";
$ApoyoMunicipalSolicitado6="";
$AportacionBeneficiario6="";


}
if($Filas == 5){

$ApoyoSolicitado1           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1                 =                       sanitizeString($_POST['UniMedida1']);
$CanSolicitada1             =                       sanitizeString($_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1    =                       sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1    =                       sanitizeString($_POST['AportacionBeneficiario1']);

            
$ApoyoSolicitado2           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado2'])));
$UniMedida2                 =                       sanitizeString($_POST['UniMedida2']);
$CanSolicitada2             =                       sanitizeString($_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2    =                       sanitizeString($_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2    =                       sanitizeString($_POST['AportacionBeneficiario2']);



$ApoyoSolicitado3          =                        ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado3'])));
$UniMedida3                =                        sanitizeString($_POST['UniMedida3']);
$CanSolicitada3            =                        sanitizeString($_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3   =                        sanitizeString($_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3 =                        sanitizeString($_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3   =                        sanitizeString($_POST['AportacionBeneficiario3']);


        
$ApoyoSolicitado4            =                      ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado4'])));
$UniMedida4                  =                      sanitizeString($_POST['UniMedida4']);
$CanSolicitada4              =                      sanitizeString($_POST['CanSolicitada4']);
$ApoyoEstatalSolicitado4     =                      sanitizeString($_POST['ApoyoEstatalSolicitado4']);
$ApoyoMunicipalSolicitado4   =                      sanitizeString($_POST['ApoyoMunicipalSolicitado4']);
$AportacionBeneficiario4     =                      sanitizeString($_POST['AportacionBeneficiario4']);


$ApoyoSolicitado5            =                      ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado5'])));
$UniMedida5                  =                      sanitizeString($_POST['UniMedida5']);
$CanSolicitada5              =                      sanitizeString($_POST['CanSolicitada5']);
$ApoyoEstatalSolicitado5     =                      sanitizeString($_POST['ApoyoEstatalSolicitado5']);
$ApoyoMunicipalSolicitado5   =                      sanitizeString($_POST['ApoyoMunicipalSolicitado5']);
$AportacionBeneficiario5     =                      sanitizeString($_POST['AportacionBeneficiario5']);


$ApoyoSolicitado6="";
$UniMedida6="";
$CanSolicitada6="";
$ApoyoEstatalSolicitado6="";
$ApoyoMunicipalSolicitado6="";
$AportacionBeneficiario6="";

}
if($Filas == 6){

$ApoyoSolicitado1           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1                 =                       sanitizeString($_POST['UniMedida1']);
$CanSolicitada1             =                       sanitizeString($_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1    =                       sanitizeString($_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1    =                       sanitizeString($_POST['AportacionBeneficiario1']);

            
$ApoyoSolicitado2           =                       ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado2'])));
$UniMedida2                 =                       sanitizeString($_POST['UniMedida2']);
$CanSolicitada2             =                       sanitizeString($_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2    =                       sanitizeString($_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2  =                       sanitizeString($_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2    =                       sanitizeString($_POST['AportacionBeneficiario2']);



$ApoyoSolicitado3          =                        ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado3'])));
$UniMedida3                =                        sanitizeString($_POST['UniMedida3']);
$CanSolicitada3            =                        sanitizeString($_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3   =                        sanitizeString($_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3 =                        sanitizeString($_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3   =                        sanitizeString($_POST['AportacionBeneficiario3']);


        
$ApoyoSolicitado4            =                      ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado4'])));
$UniMedida4                  =                      sanitizeString($_POST['UniMedida4']);
$CanSolicitada4              =                      sanitizeString($_POST['CanSolicitada4']);
$ApoyoEstatalSolicitado4     =                      sanitizeString($_POST['ApoyoEstatalSolicitado4']);
$ApoyoMunicipalSolicitado4   =                      sanitizeString($_POST['ApoyoMunicipalSolicitado4']);
$AportacionBeneficiario4     =                      sanitizeString($_POST['AportacionBeneficiario4']);


$ApoyoSolicitado5            =                      ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado5'])));
$UniMedida5                  =                      sanitizeString($_POST['UniMedida5']);
$CanSolicitada5              =                      sanitizeString($_POST['CanSolicitada5']);
$ApoyoEstatalSolicitado5     =                      sanitizeString($_POST['ApoyoEstatalSolicitado5']);
$ApoyoMunicipalSolicitado5   =                      sanitizeString($_POST['ApoyoMunicipalSolicitado5']);
$AportacionBeneficiario5     =                      sanitizeString($_POST['AportacionBeneficiario5']);

            
$ApoyoSolicitado6            =                      ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado6'])));
$UniMedida6                  =                      sanitizeString($_POST['UniMedida6']);
$CanSolicitada6              =                      sanitizeString($_POST['CanSolicitada6']);
$ApoyoEstatalSolicitado6     =                      sanitizeString($_POST['ApoyoEstatalSolicitado6']);
$ApoyoMunicipalSolicitado6   =                      sanitizeString($_POST['ApoyoMunicipalSolicitado6']);
$AportacionBeneficiario6     =                      sanitizeString($_POST['AportacionBeneficiario6']);

}




}


  







?>


<!DOCTYPE html>
<html>
<head>
	<title>Requisitos Generales de Documentos para Persona Física</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="uestiloFisica.css">
</head>
<body>

<div class="requisitos">

<h1>Requisitos Generales de Documentos para Persona Física</h1>


<form action="uobservaciones.php" method="POST" enctype="multipart/form-data">

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



<input type ="hidden" name ="ApoyoSolicitado1" value="<?php echo $ApoyoSolicitado1; ?>">
<input type ="hidden" name ="UniMedida1" value="<?php echo $UniMedida1; ?>">
<input type ="hidden" name ="CanSolicitada1" value="<?php echo $CanSolicitada1; ?>">
<input type ="hidden" name ="ApoyoEstatalSolicitado1" value="<?php echo $ApoyoEstatalSolicitado1; ?>">
<input type ="hidden" name ="ApoyoMunicipalSolicitado1" value="<?php echo $ApoyoMunicipalSolicitado1; ?>">
<input type ="hidden" name ="AportacionBeneficiario1" value="<?php echo $AportacionBeneficiario1; ?>">

							
							
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










<br>






<?php 


global $ine;
global $curp;
global $comprobante;
global $croquis;

global $rutaIne;
global $rutaCurp;
global $rutaComprobanteDomicilio;
global $rutaCroquis;

$ine = "_INE_";
$curp = "_CURP_";
$comprobante = "_COMPROBANTEDOMICILIO_";
$croquis = "_CROQUIS_";


$select = "SELECT ruta FROM personafisicarutaarchivos WHERE  folioImpreso = '{$Folio}'";
$select = utf8_decode($select);

 
 $result = queryMySql("$select");

  if(!$result) die("No se pudo extraer los datos de la tabla");

  $filas = $result -> num_rows;

  for ($i=0; $i<$filas; $i++) {
  $dato = $result -> fetch_array(MYSQLI_NUM);



  for($j=0; $j<1; $j++){
    
      if(strpos($dato[$j], $ine)!== FALSE){
              $rutaIne = $dato[$j];
              
      }else if(strpos($dato[$j], $curp)!== FALSE){
              $rutaCurp = $dato[$j];
              

      }else if(strpos($dato[$j], $comprobante)!== FALSE){
              $rutaComprobanteDomicilio = $dato[$j];
              
      }else if(strpos($dato[$j], $croquis)!== FALSE){
              $rutaCroquis = $dato[$j];
              
      }

  }
}
 




 ?>


<?php 
if(empty($rutaIne)){ echo "No se pudo localizar el Documento del INE";}else{ ?>

<h3 id="ine"><i>Identificación Oficial expedida por el <b>IFE o INE</b>: </i></h3> 
<h2>Borrar este PDF</h2>  
<select name="pdfine" required>
  <option value="">Sin Seleccionar</option>
  <option value="No">No</option>
  <option value="Si">Si</option>
  
</select>
<iframe class='pdf' src='/sedea/personas/fisica/<?php echo $rutaIne; ?>'></iframe>
<input type ="hidden" name ="rutaIne" value="<?php echo $rutaIne; ?>">


<?php } ?>



<?php 
if(empty($rutaCurp)){ echo "No se pudo localizar el Documento de la CURP";} else {  ?>

<h3 id="curp"><i><b>CURP</b> Clave Única de Registro de Población:</i></h3>
<h2>Borrar este PDF</h2>  
<select name="pdfcurp" required>
  <option value="">Sin Seleccionar</option>
  <option value="No">No</option>
  <option value="Si">Si</option>
  
</select>

<iframe class='pdf' src='/sedea/personas/fisica/<?php echo $rutaCurp; ?>'></iframe>
<input type ="hidden" name ="rutaCurp" value="<?php echo $rutaCurp; ?>">



<?php } ?>

<?php 
if(empty($rutaComprobanteDomicilio)) {  echo "No se pudo localizar el Documento del Comprobante de DOMICILIO";} else{ ?>
<h3 id="comprobantedomicilio"><i>Comprobante de domicilio</b>:</i></h3> 

<h2>Borrar este PDF</h2>  
<select name="pdfdomicilio" required>
  <option value="">Sin Seleccionar</option>
  <option value="No">No</option>
  <option value="Si">Si</option>
  
</select>
<iframe class='pdf' src='/sedea/personas/fisica/<?php echo $rutaComprobanteDomicilio; ?>'></iframe>
<input type ="hidden" name ="rutaComprobanteDomicilio" value="<?php echo $rutaComprobanteDomicilio; ?>">



<?php  } ?>


<?php 
if(empty($rutaCroquis)){ echo "No se pudo localizar el Documento del CROQUIS";} else { ?>
<h3 id="croquis"><i><b>Croquis</b> de bien a adquirir:</i></h3>

<h2>Borrar este PDF</h2>  
<select name="pdfcroquis" required>
  <option value="">Sin Seleccionar</option>
  <option value="No">No</option>
  <option value="Si">Si</option>
  
</select> 
<iframe class='pdf' src='/sedea/personas/fisica/<?php echo $rutaCroquis; ?>'></iframe>
<input type ="hidden" name ="rutaCroquis" value="<?php echo $rutaCroquis; ?>">

<?php  } ?>





<br>



<input type="submit" name="RequisitosG" value="Siguiente" class="boton" id="ubicacionrg">




</form>
<br><a href="/sedea/index.php"><button class="boton" id="ubicacionrg" >Menú Principal</button></a>


<h5>Autorizo que mis datos personales sean empleados para el trámite de la solución. Otorgo el consentimiento para que sean transferidos en caso de ser necesario y dar el cumplimiento conforme a lo previsto en los artículos 16 fracción II,59 y 61 de la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de Querétaro; así como a las obligaciones de transparencia y acceso a la información pública de conformidad con la Ley del Estado de Querétaro.
"En cumplimiento a las Leyes de Protección de Datos Personales, Usted puede consultar el aviso de privacidad a través del portal de internet http://sedea.queretaro.gob.mx"
La entrega de la presente solicitud, así como de la documentación solicitada, no implica aceptación u obligación del pago de los incentivos.
</h5>



</div>	





</body>
</html>
