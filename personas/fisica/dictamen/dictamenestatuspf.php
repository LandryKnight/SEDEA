<?php 

require_once('conexionDPF.php');

global $Folio;
if(isset($_POST['EnviarFolio'])){

	$Folio = sanitizeString($_POST['folio']);
}



$select = "SELECT personafisicaDatos.folioImpresoPF,personafisicaDatos.nombre,personafisicaDatos.dirRegional,personafisicaDatos.curp,personafisicaProyecto.NProyecto,personafisicaConceptoApoyo.ApoyoSolicitado,personafisicaConceptoApoyo.InversionTotal,personafisicaDictamenes.estatusdictamen,personafisicaDatos.fechaReg FROM personafisicaDatos,personafisicaProyecto,personafisicaConceptoApoyo,personafisicaDictamenes WHERE personafisicaDatos.folioImpresoPF = '{$Folio}' AND personafisicaDatos.folioImpresoPF = personafisicaProyecto.folioImpreso AND personafisicaDatos.folioImpresoPF = personafisicaConceptoApoyo.folioImpreso AND personafisicaDictamenes.folioImpreso = personafisicaDatos.folioImpresoPF  ORDER BY personafisicaDictamenes.estatusdictamen DESC ,personafisicaDatos.nombre ASC, personafisicaConceptoApoyo.ApoyoSolicitado ASC";

$select = utf8_decode($select);


$result = queryMySql("$select");

if(!$result) die("No se pudo extraer los datos de la tabla");

$rows = $result -> num_rows;






 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Estatus Solicitudes</title>
	<link rel="stylesheet" type="text/css" href="estiloFisica.css">
	<meta charset="utf-8">
</head>
<body>



<div class="Marco2">

<div class="tituloSolicitudes2">
<h1>Estatus de Solicitudes Dictaminadas</h1>
</div>

<?php 

echo "<table border='2'><tr><th>Folio Impreso</th><th>Nombre</th><th>Dirección Regional</th><th>CURP</th><th>Proyecto</th><th>Apoyo Solicitado</th><th>Inversión Total</th><th>Estatus Dictamen</th><th>Fecha de Registro</th></tr>";



if($rows < 15){

for ($i=0; $i<$rows; $i++) {
$row = $result -> fetch_array(MYSQLI_NUM);

echo "<tr>"; 
for($j=0; $j<9; $j++)

echo "<td>" . utf8_decode($row[$j])."</td>";


echo "</tr>";

	
		}

}if($rows > 15){

	for ($i=0; $i<15; $i++) {
$row = $result -> fetch_array(MYSQLI_NUM);

echo "<tr>"; 
for($j=0; $j<9; $j++)

echo "<td>" . utf8_decode($row[$j])."</td>";


echo "</tr>";
		}

 }
echo "</table>";





 ?>

<a href="/sedea/personas/fisica/dictamen/buscarfolio.php"><button class="boton" id="ubicacionsolicitudes">Buscar Folio</button></a>
<br>
<a href="/sedea/index.php"><button class="boton" id="ubicacionsolicitudes">Menú Principal</button></a>


<h5>"Este programa es público; ajeno a cualquier partido político. Queda prohibido el uso para fines distinto a los establecidos al Programa"</h5>


</div>
</body>
</html>