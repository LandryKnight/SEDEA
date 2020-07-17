<?php 


require_once("ConexcionPF.php");

$select = "SELECT personafisicaDatos.folioImpresoPF,personafisicaDatos.nombre,personafisicaDatos.NIdent.personafisicaDatos.curp,personafisicaProyecto.NProyecto,personafisicaConceptoApoyo.ApoyoSolicitado,personafisicaConceptoApoyo.InversionTotal,personafisicaDatos.fechaReg FROM personafisicaDatos,personafisicaProyecto,personafisicaConceptoApoyo";

$select = utf8_decode($select);



$result = queryMySql("$select");

if(!$result) die("No se pudo extraer los datos de la tabla");

$rows = $result -> num_rows;






 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ver Solicitudes</title>
	<link rel="stylesheet" type="text/css" href="estiloFisica.css">
	<meta charset="utf-8">
</head>
<body>

<div class="marco">


<?php 

echo "<table border='2'><tr><th>Folio Impreso</th><th>Nombre</th><th>No.de Identificación</th><th>CURP</th><th>Proyecto</th><th>Apoyo Solicitado</th><th>Inversión Total</th><th>Fecha de Registro</th></tr>";



if($rows < 15){

for ($i=0; $i<$rows; $i++) {
$row = $result -> fetch_array(MYSQLI_NUM);

echo "<tr>"; 
for($j=1; $j<9; $j++)

echo "<td>" . utf8_decode($row[$j])."</td>";


echo "</tr>";

	
		}

}if($rows > 15){

	for ($i=0; $i<15; $i++) {
$row = $result -> fetch_array(MYSQLI_NUM);

echo "<tr>"; 
for($j=1; $j<9; $j++)

echo "<td>" . utf8_decode($row[$j])."</td>";


echo "</tr>";
		}

 }
echo "</table>";





 ?>

</div>

</body>
</html>