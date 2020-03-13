
<?php  
require_once('conect.php');



$funcion = new funcion();

$con = $funcion -> conectar();

global $folioImpreso;

if (isset($_POST['EnviarConceptosPF'])){
$folioImpreso  = sanitizeString($_POST['IfolioImpreso']);
$ApoyoSolicitado1 = ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1	=	sanitizeString(	$_POST['UniMedida1']);
$CanSolicitada1	=	sanitizeString(	$_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1	=	sanitizeString(	$_POST['AportacionBeneficiario1']);
$InversionTotal1	=	sanitizeString(	$_POST['InversionTotal1']);



$insert1 = "INSERT INTO personafisicaCA(sfolioImpreso,ApoyoSolicitado,UniMedida ,CanSolicitada,ApoyoEstatalSolicitado,ApoyoMunicipalSolicitado,AportacionBeneficiario,InversionTotal) VALUES('{$folioImpreso}','{$ApoyoSolicitado1}','{$UniMedida1}','{$CanSolicitada1}','{$ApoyoEstatalSolicitado1}','{$ApoyoMunicipalSolicitado1}','{$AportacionBeneficiario1}','{$InversionTotal1}');";

$insert1 = utf8_encode($insert1);

		  if($con -> query($insert1)){
    		echo "Datos Registrados <br>";
  				}else {
   				 echo $con -> error, "<br>";
    			echo $insert1, "<br>";
  					}
	/*				
						
$ApoyoSolicitado2	=	sanitizeString(	$_POST['ApoyoSolicitado2']);
$UniMedida2	=	sanitizeString(	$_POST['UniMedida2']);
$CanSolicitada2	=	sanitizeString(	$_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2	=	sanitizeString(	$_POST['AportacionBeneficiario2']);
$InversionTotal2	=	sanitizeString(	$_POST['InversionTotal2']);
						
	
	if(!is_null($ApoyoSolicitado2)){

	}					
						
$ApoyoSolicitado3	=	sanitizeString(	$_POST['ApoyoSolicitado3']);
$UniMedida3	=	sanitizeString(	$_POST['UniMedida3']);
$CanSolicitada3	=	sanitizeString(	$_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3	=	sanitizeString(	$_POST['AportacionBeneficiario3']);
$InversionTotal3	=	sanitizeString(	$_POST['InversionTotal3']);
	
	if(!is_null($ApoyoSolicitado3)){

	}					
						
$ApoyoSolicitado4	=	sanitizeString(	$_POST['ApoyoSolicitado4']);
$UniMedida4	=	sanitizeString(	$_POST['UniMedida4']);
$CanSolicitada4	=	sanitizeString(	$_POST['CanSolicitada4']);
$ApoyoEstatalSolicitado4	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado 4']);
$ApoyoMunicipalSolicitado4	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado4']);
$AportacionBeneficiario4	=	sanitizeString(	$_POST['AportacionBeneficiario4']);
$InversionTotal4	=	sanitizeString(	$_POST['InversionTotal4']);
						
		
	if(!is_null($ApoyoSolicitado4)){

	}				
						
$ApoyoSolicitado5	=	sanitizeString(	$_POST['ApoyoSolicitado5']);
$UniMedida5	=	sanitizeString(	$_POST['UniMedida5']);
$CanSolicitada5	=	sanitizeString(	$_POST['CanSolicitada5']);
$ApoyoEstatalSolicitado5	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado 5']);
$ApoyoMunicipalSolicitado5	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado5']);
$AportacionBeneficiario5	=	sanitizeString(	$_POST['AportacionBeneficiario5']);
$InversionTotal5	=	sanitizeString(	$_POST['InversionTotal5']);
						
		
	if(!is_null($ApoyoSolicitado5)){

	}				
						
				
						
$ApoyoSolicitado6	=	sanitizeString(	$_POST['ApoyoSolicitado6']);
$UniMedida6	=	sanitizeString(	$_POST['UniMedida6']);
$CanSolicitada6	=	sanitizeString(	$_POST['CanSolicitada6']);
$ApoyoEstatalSolicitado6	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado 6']);
$ApoyoMunicipalSolicitado6	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado6']);
$AportacionBeneficiario6	=	sanitizeString(	$_POST['AportacionBeneficiario6']);
$InversionTotal6	=	sanitizeString(	$_POST['InversionTotal6']);


	if(!is_null($ApoyoSolicitado6)){

	}
*/





	

}


function sanitizeString($var){

  if(get_magic_quotes_gpc())
    $var = stripcslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
  return $var;
}

?>

<?php 

if (isset($_POST[''])){

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Requisitos Generales de Documentos para Persona Física</title>
	<meta charset="utf-8">
</head>
<body>
<h2>Persona Física</h2>
<h4>Documentos Admitidos solo en formato PDF</h4>

<p>Identificación Oficial expedida por el IFE o INE </p>
<form method="post" action="requisitosGeneralesPF.php" enctype="multipart/form-data">



	Selecciona la Identificación Oficial: <input type="file" name="INE" size="10">
	<input type="submit" name="subirINE" value="Subir INE">


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



<p>CURP Clave Única de Registro de Población</p>



<p>Comprobante de domicilio o Constancia de Residencia firmado por la autoridad competente</p>



<p>Croquis de bien a adquirir</p>



<h2>Declaraciones del Solicitante</h2>

<p>a) Que no realizo actividades productivas ni comerciales ilícitas </p>
<p>b) Que no se aplicaran los incentivos únicamente para los fines autorizados, y en caso de no realizarlo se entregara el recurso, así como los productos financieros</p>

<p>c) Que no he recibido o estoy recibiendo apoyo alguno para el mismo concepto en otro programa, que implique duplicidad de incentivos</p>

<p>d) Que los datos aquí expuestos son verídicos y me comprometo a cumplir con los ordenamientos establecidos en la mecánica operativa establecida</p>

<p>e) Expreso mi total y cabal compromiso, para realizar las inversiones y/o trabajos que corresponden para ejecutar las acciones del proyecto que requieran</p>

<p>f) Que estoy cierto que la entrega de esta solicitud, así como la de los documentos solicitados, no implica aceptación u obligación del pago de los incentivos solicitados</p>


<h2>Observaciones</h2>

<form action="#" method="post">
<input type="hidden" name="IfolioImpreso" value="<?php echo $folioImpreso; ?>">
<input type="text" name="observa" maxlength="80">




<!--Fecha: -->




<h5>Autorizo que mis datos personales sean empleados para el trámite de la solución. Otorgo el consentimiento para que sean transferidos en caso de ser necesario y dar el cumplimiento conforme a lo previsto en los artículos 16 fracción II,59 y 61 de la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de Querétaro; así como a las obligaciones de transparencia y acceso a la información pública de conformidad con la Ley del Estado de Querétaro.
"En cumplimiento a las Leyes de Protección de Datos Personales, Usted puede consultar el aviso de privacidad a través del portal de internet http://sedea.queretaro.gob.mx"
La entrega de la presente solicitud, así como de la documentación solicitada, no implica aceptación u obligación del pago de los incentivos.
</h5>

</form>

</body>
</html>
