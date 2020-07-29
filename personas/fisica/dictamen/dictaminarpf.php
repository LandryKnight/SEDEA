
<?php 
require_once('conexionDPF.php');


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Dictamen de la solicitud</title>
	<link rel="stylesheet" type="text/css" href="estiloFisica.css">
	<meta charset="utf-8">
</head>
<body>


<?php 

	$select = "SELECT * FROM personafisicaDatos";
	$select = utf8_decode($select);

	$result = queryMySql("$select");

	if(!$result) die("No se pudo extraer los datos de la tabla");

	$rows = $result -> num_rows;

	




$dato = $result -> fetch_array(MYSQLI_NUM);



$datos = $dato[5];

echo "fecha completa".$datos ."<br>";


$dia  = substr($dato[5], 0,2);

$mes = substr($dato[5], 3,2);
$anio = substr($dato[5],6,4);


echo "<br> dia ".$dia;
echo "<br>mes ".$mes;
echo "<br>año ".$anio."<br>";


 ?>
<input type="text" name="var" value="<?php echo utf8_decode($dato[0]); ?>">
<input type="text" name="var" value="<?php echo utf8_decode($dato[1]); ?>">
<input type="text" name="var" value="<?php echo utf8_decode($dato[2]); ?>">
<input type="text" name="var" value="<?php echo utf8_decode($dato[3]); ?>">
<input type="text" name="var" value="<?php echo utf8_decode($dato[4]); ?>">


<select name="dia" required>
	<option value="<?php echo $dia; ?>"><?php echo $dia;?></option>
</select>

<h2>Dictamen de la solicitud</h2>

<select name="DictSolicitud" required>
	<option value="">Sin Seleccionar</option>
	<option value="Positiva">Positiva</option>
	<option value="Negativa">Negativa</option>

</select>






</div>
</body>
</html>