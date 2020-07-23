<?php 

if($_FILES){

	
	$num_archivos = count($_FILES['archivo']['name']);

	for ($i=0; $i <$num_archivos; $i++) { 

		$name = $_FILES['archivo']['name'][$i];
		echo "$name <br>";

	switch ($_FILES['archivo']['type'][$i]) {

	case 'application/pdf': $ext= 'pdf'; break;
		
	
	default: $ext = '';
		
		break;
}

if($ext){

	$n="documentospf/"."INE.$ext";
	$ruta_temporal = $_FILES['archivo']['tmp_name'][$i];
	move_uploaded_file($ruta_temporal, $n);
	echo "Pdf subido '$name' as '$n': <br>";
	

} else {	
	echo "'$name' no es el tipo de archivo permitido";

}
 }

 }else 	
	echo "ningún archivo pdf ha sido subido";


 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="prueba.php" method="POST" enctype="multipart/form-data">


<p>Selecciona el <b>Croquis</b> de bien a adquirir:</p>
 <input type="file" name="archivo[]" required="required">

<p>Selecciona el <b>Croquis</b> de bien a adquirir:</p>
 <input type="file" name="archivo[]" required="required">




<input type="submit" name="RequisitosG" value="Subir Documentos" class="boton">

</form>


</body>
</html>