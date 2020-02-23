<p>Identificación Oficial expedida por el IFE o INE </p>
<form method="post" action="#" enctype="multipart/form-data">
	Selecciona la Identificación Oficial: <input type="file" name="filenameINE" size="10">
	<input type="submit" name="subirINE" value="Subir archivo">
</form>

<?php 
	
	if ($_FILES) {
	$nameINE = $_FILES['filenameINE']['name'];

	switch ($_FILES['filenameINE']['type']){
		case 'application/pdf': $ext = 'pdf'; break;
		default: 	$ext =''; break;
	}
	#echo count($_FILES)."<br>";


	
	if($ext){
		$n = "Documentos/INE_.$ext";
	move_uploaded_file($_FILES['filenameINE']['tmp_name'],$n);
	echo "Identiticacion INE Subida '$nameINE'  como  '$n':<br>";
	} else echo "No es un archivo PDF";


	
} ?>