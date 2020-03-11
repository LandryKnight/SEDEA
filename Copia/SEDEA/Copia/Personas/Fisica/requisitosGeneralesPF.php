
<?php  


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
<p>Identificación Oficial expedida por el IFE o INE </p><br>
<form method="post" action="#" enctype="multipart/form-data">
	Selecciona la Identificación Oficial: <input type="file" name="filename" size="10">
	<input type="submit" name="subir">
</form>

<?php if ($_FILES) {
	$name = $_FILES['filename']['name'];

	switch ($_FILES['filename']['type']){
		case 'application/pdf': $ext = 'pdf'; break;
		default: 	$ext =''; break;
	}
	if($ext){
		$n = "INE.$ext";
	move_uploaded_file($_FILES['filename']['tmp_name'],$n);
	echo "Identiticacion INE Subida '$name'  como  '$n':<br>";
	} else echo "No es un archivo PDF";
} ?>
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

<input type="text" name="observa">


<h2>Firmas de entrega de Solicitud</h2>
Fecha: <input type="text" name="FechaEntregaSolicitud">



<input type="text" name="firmaBeneficiado">
<h4>Nombre y Firma del Beneficiario y/o del representante legal</h4>

<input type="text" name="firmaFuncionario">
<h4>Nombre y Firma del Funcionario receptor de la solicitud</h4>


<h2>Dictamen de la solicitud</h2>

<select name="DictSolicitud">
	<option value="Sin Seleccionar">Sin Seleccionar</option>
	<option value="Positiva">Positiva</option>
	<option value="Negativa">Negativa</option>

</select>


<table border="1">
	
	<tr>
		<td>Conceptos de Apoyo Solicitado</td>
		<td>Unidad de Medida</td>
		<td>Cantidad Solicitada</td>
		<td>Apoyo Estatal Solicitado (pesos) </td>
		<td>Apoyo Municipal Solicitado (pesos) </td>
		<td>Aportación Beneficiario (pesos)</td>
		<td>Inversión Total (pesos)</td>
	</tr>

	<tr>
		<td><input type="text" name="" maxlength="35" 	placeholder="Estufa ecológica" required="required"> </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2" required="required">  </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2" required="required">  </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$500,000" required="required"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$250,000" required="required"> </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$250,000" required="required"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$1,000,000" required="required"> </td>
	</tr>

	<tr>
		<td><input type="text" name="" maxlength="35" 	placeholder="Estufa ecológica"> </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2">  </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2">  </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$500,000"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$250,000"> </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$250,000"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$1,000,000"> </td>
	</tr>

	<tr>
		<td><input type="text" name="" maxlength="35" 	placeholder="Estufa ecológica"> </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2">  </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2">  </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$500,000"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$250,000"> </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$250,000"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$1,000,000"> </td>
	</tr>

	<tr>
		<td><input type="text" name="" maxlength="35" 	placeholder="Estufa ecológica"> </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2">  </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2">  </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$500,000"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$250,000"> </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$250,000"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$1,000,000"> </td>
	</tr>

	<tr>
		<td><input type="text" name="" maxlength="35" 	placeholder="Estufa ecológica"> </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2">  </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2">  </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$500,000"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$250,000"> </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$250,000"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$1,000,000"> </td>
	</tr>
	<tr>
		<td><input type="text" name="" maxlength="35" 	placeholder="Estufa ecológica"> </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2">  </td>
		<td><input type="text" name="" maxlength="5" 	placeholder="2">  </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$500,000"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$250,000"> </td>
		<td><input type="text" name="" maxlength="20" 	placeholder="$250,000"> </td>
		<td><input type="text" name="" maxlength="20"	placeholder="$1,000,000"> </td>
	</tr>

</table>



<p>Fecha </p>


<h5>Autorizo que mis datos personales sean empleados para el trámite de la solución. Otorgo el consentimiento para que sean transferidos en caso de ser necesario y dar el cumplimiento conforme a lo previsto en los artículos 16 fracción II,59 y 61 de la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de Querétaro; así como a las obligaciones de transparencia y acceso a la información pública de conformidad con la Ley del Estado de Querétaro.
"En cumplimiento a las Leyes de Protección de Datos Personales, Usted puede consultar el aviso de privacidad a través del portal de internet http://sedea.queretaro.gob.mx"
La entrega de la presente solicitud, así como de la documentación solicitada, no implica aceptación u obligación del pago de los incentivos.
</h5>

</form>

</body>
</html>
