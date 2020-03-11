#envio de Datos Conceptos de apoyo

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

#envio de datos concepto de apoyo

$ApoyoSolicitado1 = 			ucfirst(strtolower(sanitizeString($_POST['ApoyoSolicitado1'])));
$UniMedida1	=					sanitizeString(	$_POST['UniMedida1']);
$CanSolicitada1	=				sanitizeString(	$_POST['CanSolicitada1']);
$ApoyoEstatalSolicitado1	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado1']);
$ApoyoMunicipalSolicitado1	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado1']);
$AportacionBeneficiario1	=	sanitizeString(	$_POST['AportacionBeneficiario1']);
$InversionTotal1	=			$ApoyoEstatalSolicitado1 + $ApoyoMunicipalSolicitado1 + $AportacionBeneficiario1;
	
/*

						
$ApoyoSolicitado2	=			sanitizeString(	$_POST['ApoyoSolicitado2']);
$UniMedida2	=					sanitizeString(	$_POST['UniMedida2']);
$CanSolicitada2	=				sanitizeString(	$_POST['CanSolicitada2']);
$ApoyoEstatalSolicitado2	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado2']);
$ApoyoMunicipalSolicitado2	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado2']);
$AportacionBeneficiario2	=	sanitizeString(	$_POST['AportacionBeneficiario2']);
$InversionTotal2	=			$ApoyoEstatalSolicitado2 + $ApoyoMunicipalSolicitado2 + $AportacionBeneficiario2;

$ApoyoSolicitado3	=			sanitizeString(	$_POST['ApoyoSolicitado3']);
$UniMedida3	=					sanitizeString(	$_POST['UniMedida3']);
$CanSolicitada3	=				sanitizeString(	$_POST['CanSolicitada3']);
$ApoyoEstatalSolicitado3	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado3']);
$ApoyoMunicipalSolicitado3	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado3']);
$AportacionBeneficiario3	=	sanitizeString(	$_POST['AportacionBeneficiario3']);
$InversionTotal3	=			$ApoyoEstatalSolicitado3 + $ApoyoMunicipalSolicitado3 + $AportacionBeneficiario3;

				
$ApoyoSolicitado4	=			sanitizeString(	$_POST['ApoyoSolicitado4']);
$UniMedida4	=					sanitizeString(	$_POST['UniMedida4']);
$CanSolicitada4	=				sanitizeString(	$_POST['CanSolicitada4']);
$ApoyoEstatalSolicitado4	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado4']);
$ApoyoMunicipalSolicitado4	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado4']);
$AportacionBeneficiario4	=	sanitizeString(	$_POST['AportacionBeneficiario4']);
$InversionTotal4	=			$ApoyoEstatalSolicitado4 + $ApoyoMunicipalSolicitado4 + $AportacionBeneficiario4;

$ApoyoSolicitado5	=			sanitizeString(	$_POST['ApoyoSolicitado5']);
$UniMedida5	=					sanitizeString(	$_POST['UniMedida5']);
$CanSolicitada5	=				sanitizeString(	$_POST['CanSolicitada5']);
$ApoyoEstatalSolicitado5	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado5']);
$ApoyoMunicipalSolicitado5	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado5']);
$AportacionBeneficiario5	=	sanitizeString(	$_POST['AportacionBeneficiario5']);
$InversionTotal5	=			$ApoyoEstatalSolicitado5 +  $ApoyoMunicipalSolicitado5 + $AportacionBeneficiario5;
						
$ApoyoSolicitado6	=			sanitizeString(	$_POST['ApoyoSolicitado6']);
$UniMedida6	=					sanitizeString(	$_POST['UniMedida6']);
$CanSolicitada6	=				sanitizeString(	$_POST['CanSolicitada6']);
$ApoyoEstatalSolicitado6	=	sanitizeString(	$_POST['ApoyoEstatalSolicitado6']);
$ApoyoMunicipalSolicitado6	=	sanitizeString(	$_POST['ApoyoMunicipalSolicitado6']);
$AportacionBeneficiario6	=	sanitizeString(	$_POST['AportacionBeneficiario6']);
$InversionTotal6	=			$ApoyoEstatalSolicitado6 +  $ApoyoMunicipalSolicitado6 + $AportacionBeneficiario6;
