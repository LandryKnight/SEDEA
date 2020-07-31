
<?php 
require_once('conexionDPF.php');


 ?>


<?php 

	global $Folio;
	if(isset($_POST['buscarFolio'])){
		$Folio = sanitizeString($_POST['bfolio']);

	}

	$select = "SELECT * FROM personafisicaDatos WHERE folioImpresoPF =  '{$Folio}'";
	$select = utf8_decode($select);

	$result = queryMySql("$select");

	if(!$result) die("No se pudo extraer los datos de la tabla");

	$dato = $result -> fetch_array(MYSQLI_NUM);

	







 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Dictamen de la solicitud</title>
	<link rel="stylesheet" type="text/css" href="estiloFisica.css">
	<meta charset="utf-8">
</head>
<body>

<h2>Buscador de Folios</h2>

<form method="POST" action="dictaminarpf.php">
<input type="text" name="bfolio" placeholder="Ej:SDFDS445678POD" maxlength="30" autocomplete="off">
<input type="submit" name="buscarFolio" value="Buscar Folio">
</form>


<?php 
if($result -> num_rows){
		

	



	

 ?>

<form method="POST" action="actualizar/upersonaFisica.php">
<input type="hidden" name="folio" value="<?php echo $Folio; ?>">
<input type="submit" name="EnviarFolio" value="Siguiente">	
</form>



<?php 

}else {
		echo "No se encontro ningun folio";
	}

 ?>




</div>
</body>
</html>