<?php 
require_once('Funciones.php');

global $numeroRand;
global $NumeroReporte;
global $nombre;

if(isset($_POST['EnviarSolicitud'])){

$nombre 			=               ucfirst(strtolower(sanitizeString($_POST['NombreAsistencia'])));
$Ubicacion 			=               $_POST['Ubicacion'];
$Departamento 		=        		$_POST['departamento'];
$falla 				=               ucfirst(strtolower(sanitizeString($_POST['falla'])));
$Estado 			=               'Reportado';



 		}

$Cifrador   		= strlen($nombre).strlen($falla).strlen($Estado);


$numeroRand = ($Cifrador * 2) *3;



$NumeroReporte =   strtoupper(substr($nombre,0,2).strlen($nombre).$numeroRand);


$select = "SELECT * FROM reportes WHERE nombre = '{$nombre}' AND falla = '{$falla}'";
$select = utf8_decode($select);
$result = queryMySql("$select");


if($result -> num_rows){
 /*echo "Ya existe este reporte.";*/

}else{ 

 
	

			

   $insertFalla = "INSERT INTO reportes VALUES(null,'{$nombre}','{$Departamento}','{$Ubicacion}','{$falla}','{$Estado}',curdate(),'{$NumeroReporte}');";

 $insertFalla = utf8_encode($insertFalla);

 queryMySql("$insertFalla");

 $insertFallaH = "INSERT INTO reportesHistorial VALUES(null,'{$nombre}','{$Departamento}','{$Ubicacion}','{$falla}','{$Estado}',curdate(),'{$NumeroReporte}');";

 $insertFallaH = utf8_encode($insertFallaH);

 queryMySql("$insertFallaH");

	

 
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Fin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloSedea.css">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet"> 
</head>
<body>


<div class="final" align="center">
	<p>Gracias <b><?php if(is_null($nombre)) { header('location:index.php'); } else {	echo $nombre;  }?></b>, tu reporte fue recibido.<br> <br>Este es tu número de reporte: <b> <?php echo $NumeroReporte; ?></b>, anótalo para que después puedas checar el estado de tu reporte.  </p>
 	

	<p class="Gracias">¡Que tengas un excelente día!</p>

	<a href="http://localhost/SEDEA/TiSedea/index.php"><button class="boton">Ir a Menú Principal</button></a>
 
  
</div>
</body>
</html>