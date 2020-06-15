<?php 

require_once('Funciones.php');

global $NumeroReporteB;

if(isset($_POST['BuscarEstadoReporte'])){
	
	$NumeroReporteB = strtoupper(sanitizeString($_POST['NumeroReporteI']));


 }



 $SelectR = "SELECT  nombre,departamento,falla,estado,fecha FROM reportesHistorial Where NumeroReporte = '{$NumeroReporteB}'"; 

$SelectR = utf8_decode($SelectR);


$ResultR = queryMySql("$SelectR");


if(!$ResultR) die("No se pudo consultar la tabla de reportes");
$rows = $ResultR -> num_rows;

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Checar Estado Reporte </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloSedea.css">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
</head>
<body>

<div class="estatusReporte" align="center">
<form method="POST"  action="estatusReporte.php">
<h2>Ingresa el Número de Reporte: </h2>

<input type="text" name="NumeroReporteI" placeholder="Ej Reporte: PA4513" required="required" maxlength="15">

<input class="boton" type="submit" name="BuscarEstadoReporte" value="Buscar Reporte">


</form>


<a class="menuEstatus" href="http://localhost/SEDEA/TiSedea/index.php"><button class="boton">Ir a Menú Principal</button></a>






<?php 

echo "<table  border='2'><th class='tituloTable'>Nombre</th><th class='tituloTable'>Departamento</th><th class='tituloTable'>Falla</th><th class='tituloTable'>Estado</th><th class='tituloTable'>Fecha de Reporte<br> (Año/Mes/Día)</th>";

if($rows < 7){

for ($i=0; $i<$rows; $i++) {
$row = $ResultR -> fetch_array(MYSQLI_NUM);

echo "<tr>"; 
for($j=0; $j<5; $j++)

echo "<td>" . utf8_decode($row[$j])."</td>";


echo "</tr>";

	
		}

}if($rows > 7){

	for ($i=0; $i<7; $i++) {
$row = $ResultR -> fetch_array(MYSQLI_NUM);

echo "<tr>"; 
for($j=0; $j<5; $j++)

echo "<td>" . utf8_decode($row[$j])."</td>";


echo "</tr>";
		}

 }
echo "</table>";

 ?>

</div>




</body>
</html>