<?php 
require_once('conect.php');


$funcion = new funcion();

$con = $funcion -> conectar();

if (isset($_POST['EnviarConceptosPF'])){

$ApoyoSolicitado1 = sanitizeString($_Post['ApoyoSolicitado1']);
$UniMedida1	=	sanitizeString(	$_POST['UniMedida1']);
$CanSolicitada1	=	sanitizeString(	$_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1	=	sanitizeString(	$_POST['AportacionBeneficiario1']);
$InversionTotal1	=	sanitizeString(	$_POST['InversionTotal1']);

echo $ApoyoSolicitado1;

$insert1 = "INSERT INTO conceptosApoyoPF(ApoyoSolicitado,UniMedida ,CanSolicitada,ApoyoEstatalSolicitado,ApoyoMunicipalSolicitado,AportacionBeneficiario,InversionTotal) VALUES('{ApoyoSolicitado1}','{UniMedida1}','{CanSolicitada1}','{ApoyoEstatalSolicitado1}','{ApoyoMunicipalSolicitado1}','{AportacionBeneficiario1}','{InversionTotal1}');";

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



<!DOCTYPE html>
<html>
<head>
	<title>Conceptos de Apoyos</title>
	<meta charset="utf-8">
</head>
<body>


<form method="post" action="#">

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



</form>

<input type="submit" name="EnviarConceptosPF" value="Enviar Información">

<h5>"Este programa es público; ajeno a cualquier partido político. Queda prohibido el uso para fines distinto a los establecidos al Programa"</h5>
</body>
</html>