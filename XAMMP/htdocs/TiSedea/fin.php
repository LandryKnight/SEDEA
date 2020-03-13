<?php 
require_once('Funciones.php');


if(isset($_POST['EnviarSolicitud'])){

$nombre = 				ucfirst(strtolower(sanitizeString($_POST['NombreAsistencia'])));
$Ubicacion =			$_POST['Ubicacion'];
$falla = 				ucfirst(strtolower(sanitizeString($_POST['falla'])));
$masdetalles = 			ucfirst(strtolower(sanitizeString($_POST['masdetalles'])));

 }
if(!is_null($masdetalles)){

 $insertFalla = "INSERT INTO reportes VALUES(null,'{$nombre}','{$Ubicacion}','{$falla}','{$masdetalles}',curdate());";
 $insertFalla = utf8_encode($insertFalla);
 queryMySql("$insertFalla");

 $insertFallaH = "INSERT INTO reportesHistorial VALUES(null,'{$nombre}','{$Ubicacion}','{$falla}','{$masdetalles}',curdate());";
 $insertFallaH = utf8_encode($insertFallaH);
 queryMySql("$insertFallaH");
 
}else{

 $insertFalla = "INSERT INTO reportes VALUES(null,'{$nombre}','{$Ubicacion}','{$falla}','S/D',curdate());";
 $insertFalla = utf8_encode($insertFalla);
 queryMySql("$insertFalla");

 $insertFallaH = "INSERT INTO reportesHistorial VALUES(null,'{$nombre}','{$Ubicacion}','{$falla}','S/D',curdate());";
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

<div class="fin" align="center">
	<p>Gracias <?php echo $nombre; ?>, tu reporte fue recibido. </p>
 	<img src="https://media.giphy.com/media/lD76yTC5zxZPG/giphy.gif">

	<p>¡Que tengas un excelente día!</p>

	<a href="http://localhost/TiSedea/inicio.php"><button class="boton">Ir a Menú Principal</button></a>
 
  
</div>
</body>
</html>