
<?php 
require_once('ConexionPF.php');


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Agregar un nuevo concepto de apoyo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloFisica.css">

</head>
<body>


<div class="conceptoApoyo">

<form method="post" action="requisitosGeneralesPF.php">





<h1>Conceptos de Apoyo para Persona Física</h1>

<div class="nota">
<h3>Nota: Checa que todos los campos solo contengan digitos, excepto conceptos de
apoyo solicitado</h3> 
<br>
 <input type="checkbox" name="check" required="required">

</div>

<br>
<table border="1">
	
	<tr>
		<td><b>Conceptos de <br>Apoyo Solicitado</b></td> 
		<td class="UnidadMedida"><b>Unidad de <br>Medida</b></td>   
		<td class="UnidadMedida"><b>Cantidad <br>Solicitada</b></td> 
		<td class="ApoyoEstatal"><b>Apoyo Estatal <br>Solicitado (pesos)</b> </td> 
		<td class="ApoyoMunicipal"><b>Apoyo Municipal <br>Solicitado (pesos)</b> </td> 
		<td class="AportaciónBeneficiario"><b>Aportación Beneficiario (pesos)</b></td> 
	
	</tr>

	<tr>
		<td><input type="text" name="ApoyoSolicitado1" maxlength="35" 	placeholder=" Estufa ecológica" required="required"> </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida1" maxlength="5" 	placeholder="      2" required="required">  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada1" maxlength="5" 	placeholder="      2" required="required">  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado1" maxlength="10" 	placeholder="   $500,000" required="required"> </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado1" maxlength="10"	placeholder="   $250,000" required="required"> </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario1" maxlength="10" 	placeholder="    $250,000" required="required"> </td>
		
	</tr>

	<tr>
		<td><input type="text" name="ApoyoSolicitado2" maxlength="35" 	placeholder=" Estufa ecológica" > </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida2" maxlength="5" 	placeholder="      2" >  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada2" maxlength="5" 	placeholder="      2" >  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado2" maxlength="10" 	placeholder="   $500,000" > </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado2" maxlength="10"	placeholder="   $250,000" > </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario2" maxlength="10" 	placeholder="    $250,000" > </td>
	
		
	</tr>



		<tr>
		<td><input type="text" name="ApoyoSolicitado3" maxlength="35" 	placeholder=" Estufa ecológica" > </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida3" maxlength="5" 	placeholder="      2" >  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada3" maxlength="5" 	placeholder="      2" >  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado3" maxlength="10" 	placeholder="   $500,000" > </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado3" maxlength="10"	placeholder="   $250,000" > </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario3" maxlength="10" 	placeholder="    $250,000" > </td>
		
	</tr>

		<tr>
		<td><input type="text" name="ApoyoSolicitado4" maxlength="35" 	placeholder=" Estufa ecológica" > </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida4" maxlength="5" 	placeholder="      2" >  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada4" maxlength="5" 	placeholder="      2" >  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado4" maxlength="10" 	placeholder="   $500,000" > </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado4" maxlength="10"	placeholder="   $250,000" > </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario4" maxlength="10" 	placeholder="    $250,000" > </td>
		
	</tr>

		<tr>
		<td><input type="text" name="ApoyoSolicitado5" maxlength="35" 	placeholder=" Estufa ecológica" > </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida5" maxlength="5" 	placeholder="      2" >  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada5" maxlength="5" 	placeholder="      2" >  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado5" maxlength="10" 	placeholder="   $500,000" > </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado5" maxlength="10"	placeholder="   $250,000" > </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario5" maxlength="10" 	placeholder="    $250,000" > </td>
		
	</tr>

		<tr>
		<td><input type="text" name="ApoyoSolicitado6" maxlength="35" 	placeholder=" Estufa ecológica" > </td>
		<td class="UnidadMedida"><input type="text" name="UniMedida6" maxlength="5" 	placeholder="      2" >  </td>
		<td class="UnidadMedida"><input type="text" name="CanSolicitada6" maxlength="5" 	placeholder="      2" >  </td>
		<td class="ApoyoEstatal"><input type="text" name="ApoyoEstatalSolicitado6" maxlength="10" 	placeholder="   $500,000" > </td>
		<td class="ApoyoMunicipal"><input type="text" name="ApoyoMunicipalSolicitado6" maxlength="10"	placeholder="   $250,000" > </td>
		<td class="AportaciónBeneficiario"><input type="text" name="AportacionBeneficiario6" maxlength="10" 	placeholder="    $250,000" > </td>
		
	</tr>



</table>


<input type="submit" name="EnviarConceptosPF" value="Siguiente" class="boton" id="ubicacionConceptos">

</form>

<a href="eleccionpf.php"><button class="boton" id="ubicacionConceptos"> Regresar  </button></a>
<br>
<a href="http://localhost/sedea/index.php"><button class="boton" id="ubicacionConceptos">Menú Principal</button></a>


<h5>"Este programa es público; ajeno a cualquier partido político. Queda prohibido el uso para fines distinto a los establecidos al Programa"</h5>

</div>



</body>
</html>