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
</head>
<body>
<img  class="Finimg" src="img/top.png">

<div class="fin" align="center">

<h2>Solicitudes de Asistencia: </h2>



<?php 




echo "<table border='2'><tr><th>Nombre</th><th>Departamento</th><th>Ubicación</th><th>Descripción de Fallas</th><th>Estado</th><th>Fecha (Año/Mes/Dia)</th><th>Número de Reporte</th></tr>";

if($rows > 0){

for ($i=0; $i<10; $i++) {
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
<form method="POST" action="#">
<input type="text" name="Fallas" placeholder="Numero de Reporte: PA4513" required="required" > 
<select class='estado' name='Estado' required>
	<option value=''>Reportado</option>
	<option value='En Revision'>En Revisión</option>
	<option value='Resuelto'>Resuelto</option>

</select>

	
<br>
<input type="submit" name="ActualizarEstatus" value="Actualizar Estatus" class="boton">

</form>


<h2>Borrar Reporte Resuelto.</h2>
<form method="POST" action="#">
<input type="text" name="Fallas" placeholder="Numero de Reporte: CE5236" required="required" ><br> 
<input type="submit" name="BorrarFalla" value="Borrar Falla"  class="boton">
</form>

<?php 
if(isset($_POST['BorrarFalla'])){

$Falla = sanitizeString($_POST['Fallas']);

$Delete = "DELETE FROM reportes WHERE id = $Falla";

queryMySql("$Delete");

}
 ?>



<a href="http://localhost/SEDEA/SEDEA/TiSedea/index.php"><button class="boton">Ir a Menú Principal</button></a>
</div>



</body>
</html>