<?php 

require_once('Funciones.php');

$SelectR = "SELECT  nombre,NumeroReporte,fecha,Estado,falla FROM reportes";
$SelectRH = "SELECT  nombre,NumeroReporte,fecha,Estado,falla FROM reportesHistorial";

$SelectR = utf8_decode($SelectR);
$SelectRH = utf8_decode($SelectRH);

$ResultR = queryMySql("$SelectR");
$ResultRH = queryMySql("$SelectRH");

if(!$ResultR) die("No se pudo consultar la tabla de reportes");
$rows = $ResultR -> num_rows;

if(!$ResultRH) die("No se pudo consultar la tabla de Reportes Historial");

$rowrh = $ResultRH -> num_rows;

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Checar Es</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloSedea.css">
</head>
<body>

<div class="fin" align="center">
<form method="POST"  action="estatusReporte.php">
<h2>Ingresa el Numero de Reporte que deseas buscar: </h2>
<input type="text" name="NumeroReporteI" placeholder="Numero de Reporte">
<br>
<input class="boton" type="submit" name="BuscarEstadoReporte" value="Buscar Reporte">
	
</form>


</div>

</body>
</html>