<p>CURP Clave Única de Registro de Población</p>
<form method="post" action="#" enctype="multipart/form-data">
	Selecciona la Curp: <input type="file" name="filenameCurp" size="10">
	<input type="submit" name="subirCURP" value="Subir archivo">
</form>

<?php 
	if($_FILES){
		$nameCURP = $_FILES['filenameCurp']['name'];
		switch ($_FILES['filenameCurp']['type']){
		case 'application/pdf': $ext = 'pdf'; break;
		default: 	$ext =''; break;
	} if($ext){
		$n = "Documentos/Curp_.$ext";
		move_uploaded_file($_FILES['filesnameCurp']['tmp_name'], $n);
		echo "Identificación Curp Subida '$nameCURP' como '$n': <br>";
	} else echo "No es un archivo PDF";

	}

 ?>