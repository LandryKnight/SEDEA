
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




<div class="dictaminarpf">
<h2>Buscador de Folios</h2>

<form method="POST" action="buscarfolio.php">
<input type="text" name="bfolio" placeholder="Ej:SDFDS445678POD" maxlength="30" autocomplete="off"><br>
<input type="submit" name="buscarFolio" value="Buscar Folio" class="boton">
</form>


<?php 
if($result -> num_rows){
		

	



	

 ?>

<form method="POST" action="dictamenestatuspf.php">
<input type="hidden" name="folio" value="<?php echo $Folio; ?>">
<input type="submit" name="EnviarFolio" value="Siguiente" class="boton">	
</form>



<?php 

}else {
		echo "<b>No se encontró ningún folio</b>";
	}

 ?>

<br>
<a href="http://localhost/sedea/index.php"><button class="boton"> Menú Principal</button></a>

</div>
</body>
</html>