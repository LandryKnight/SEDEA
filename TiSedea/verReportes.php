<?php require_once('Funciones.php');

$Select = "SELECT * FROM reportes";


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
/*class="detalles" */



echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Departamento</th><th>Ubicación</th><th>Fallas</th><th>Estado</th><th>Fecha</th></tr>";
if($rows > 0){
for ($i=0; $i<1; $i++) {
$row = $result -> fetch_array(MYSQLI_NUM);

echo "<tr>"; 
for($j=0; $j<7; $j++)
echo "<td>" . htmlspecialchars(utf8_decode($row[$j]))."</td>";

echo "</tr>";
	
}
}
echo "</table>";

 ?>


<h2>Borrar Falla Resuelta.</h2>
<form method="POST" action="#">
<input type="text" name="Fallas" placeholder="ID a borrar Ej: 1" required="required" > 
<input type="submit" name="BorrarFalla" value="Borrar Falla" class="boton">
</form>

<?php 
if(isset($_POST['BorrarFalla'])){

$Falla = sanitizeString($_POST['Fallas']);

$Delete = "DELETE FROM reportes WHERE id = $Falla";

queryMySql("$Delete");

}
 ?>



<a href="http://localhost/sedea/TiSedea/index.php"><button class="boton">Ir a Menú Principal</button></a>
</div>



</body>
</html>