<?php 
require_once('Funciones.php');


if(isset($_POST['EnviarSolicitud'])){

$nombre = 				ucfirst(strtolower(sanitizeString($_POST['NombreAsistencia'])));
$Ubicacion =			$_POST['Ubicacion'];
$Departamento = 		$_POST['departamento'];
$falla = 				ucfirst(strtolower(sanitizeString($_POST['falla'])));
$Estado = 				'Reportado';
$NumeroReporte =      	strtoupper(substr($nombre,0,2).strlen($nombre).random_int(1,1000));


 }



$select = "SELECT * FROM reportes WHERE nombre = '{$nombre}' AND falla = '{$falla}'";
$select = utf8_decode($select);
$result = queryMySql("$select");

IF($result -> num_rows){
 echo "Ya existe este reporte.";

}else{ 


 $insertFalla = "INSERT INTO reportes VALUES(null,'{$nombre}','{$Ubicacion}','{$Departamento}','{$falla}','{$Estado}',curdate(),'{$NumeroReporte}');";
 $insertFalla = utf8_encode($insertFalla);
 queryMySql("$insertFalla");

 $insertFallaH = "INSERT INTO reportesHistorial VALUES(null,'{$nombre}','{$Ubicacion}','{$Departamento}','{$falla}','{$Estado}',curdate(),'{$NumeroReporte}');";
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
</head>
<body>

<div class="final" align="center">
	<p>Gracias <?php if(is_null($nombre)) { header('location:index.php');} else {echo $nombre;  }?>, tu reporte fue recibido.<br> Este es tu número de reporte: <?php echo $NumeroReporte; ?>, anótalo para que después puedas checar el estatus de tu reporte.  </p>
 	

	<p>¡Que tengas un excelente día!</p>

	<a href="http://localhost/Sedea/TiSedea/index.php"><button class="boton">Ir a Menú Principal</button></a>
 
  
</div>
</body>
</html>