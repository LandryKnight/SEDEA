<?php require_once('Funciones.php');

$Select = "SELECT * FROM reportes";

$Select = utf8_decode($Select);

$result = queryMySql("$Select");



if(!$result) die("No se pudo extraer los datos de la tabla");

$rows = $result -> num_rows;




 ?>



<!DOCTYPE html>
<html>
<head> 
	<title>Ver Reportes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloSedea.css">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
</head>
<body>
<img  class="Finimg" src="img/top.png">

<div class="fin" align="center">

<h2>Solicitudes de Asistencia: </h2>



<?php 




echo "<table border='2'><tr><th class='tituloTable'>Nombre</th><th class='tituloTable'>Departamento</th><th class='tituloTable'>Ubicación</th><th class='tituloTable'>Descripción de Falla</th><th class='tituloTable'>Estado</th><th class='tituloTable'>Fecha (Año/Mes/Dia)</th><th class='tituloTable'>Número de Reporte</th></tr>";

if($rows < 7){

for ($i=0; $i<$rows; $i++) {
$row = $result -> fetch_array(MYSQLI_NUM);

echo "<tr>"; 
for($j=1; $j<8; $j++)

echo "<td>" . utf8_decode($row[$j])."</td>";


echo "</tr>";

	
		}

}if($rows > 7){

	for ($i=0; $i<7; $i++) {
$row = $result -> fetch_array(MYSQLI_NUM);

echo "<tr>"; 
for($j=1; $j<8; $j++)

echo "<td>" . utf8_decode($row[$j])."</td>";


echo "</tr>";
		}

 }
echo "</table>";




 ?>

<h2>Actualizar Estado de Reporte.</h2>

<form method="POST" action="verReportes.php">
<input type="text" name="NReporte" placeholder="Número de Reporte: PA4513" required="required" > 
<select class='estado' name='Estado' required>
	<option value=''>Sin Seleccionar</option>
	<option value='En Revisión'>En Revisión</option>
	<option value='Resuelto'>Resuelto</option>

</select>

	
<br>
<input type="submit" name="ActualizarEstatus" value="Actualizar Reporte" class="boton">

</form>


<?php 
if(isset($_POST['ActualizarEstatus'])){

$NReporte = sanitizeString($_POST['NReporte']);
$Estado  = ($_POST{'Estado'});





if ($Estado == 'En Revisión') {
	
	$UpdateR ="UPDATE reportes SET Estado = 'En Revisión' WHERE NumeroReporte = '{$NReporte}'";
	$UpdateR = utf8_encode($UpdateR);
	queryMySql("$UpdateR");
	
	$UpdateRH = "UPDATE reportesHistorial SET Estado = 'En Revisión' WHERE NumeroReporte = '{$NReporte}'";
	$UpdateRH = utf8_encode($UpdateRH);
	queryMySql("$UpdateRH");

}

if($Estado == 'Resuelto'){

	$Delete = "DELETE FROM reportes WHERE NumeroReporte = '{$NReporte}'";
	$Delete = utf8_encode($Delete);
	queryMySql("$Delete");


	$UpdateT = "UPDATE reportesHistorial SET Estado ='Resuelto' WHERE NumeroReporte = '{$NReporte}'";
	$UpdateT = utf8_encode($UpdateT);
	queryMySql("$UpdateT");
}

}

 ?>





<a href="http://localhost/SEDEA/TiSedea/index.php"><button class="boton">Ir a Menú Principal</button></a>
</div>



</body>
</html>