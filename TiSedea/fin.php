<?php 
require_once('Funciones.php');


if(isset($_POST['EnviarSolicitud'])){

$nombre = 				ucfirst(strtolower(sanitizeString($_POST['NombreAsistencia'])));
$Ubicacion =			$_POST['Ubicacion'];
$Departamento = 		$_POST['departamento'];
$falla = 				ucfirst(strtolower(sanitizeString($_POST['falla'])));
$masdetalles = 			ucfirst(strtolower(sanitizeString($_POST['masdetalles'])));

 }

$select = "SELECT * FROM reportes WHERE nombre = '{$nombre}' AND falla = '{$falla}'";
$result = queryMySql("$select");

IF($result -> num_rows){
 echo "Ya existe este reporte.";

}else{ 


if(!is_null($masdetalles)){

 $insertFalla = "INSERT INTO reportes VALUES(null,'{$nombre}','{$Ubicacion}','{$Departamento}','{$falla}','{$masdetalles}',curdate());";
 $insertFalla = utf8_encode($insertFalla);
 queryMySql("$insertFalla");

 $insertFallaH = "INSERT INTO reportesHistorial VALUES(null,'{$nombre}','{$Ubicacion}','{$Departamento}','{$falla}','{$masdetalles}',curdate());";
 $insertFallaH = utf8_encode($insertFallaH);
 queryMySql("$insertFallaH");
 
}else{

 $insertFalla = "INSERT INTO reportes VALUES(null,'{$nombre}','{$Ubicacion}','{$Departamento}','{$falla}','S/D',curdate());";
 $insertFalla = utf8_encode($insertFalla);
 queryMySql("$insertFalla");

 $insertFallaH = "INSERT INTO reportesHistorial VALUES(null,'{$nombre}','{$Ubicacion}','{$Departamento}','{$falla}','S/D',curdate());";
 $insertFallaH = utf8_encode($insertFallaH);
 queryMySql("$insertFallaH");
 
}





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
	<p>Gracias <?php if(is_null($nombre)) { header('location:index.php');} else {echo $nombre; }?>, tu reporte fue recibido. </p>
 	

	<p>¡Que tengas un excelente día!</p>

	<a href="http://localhost/TiSedea/index.php"><button class="boton">Ir a Menú Principal</button></a>
 
  
</div>
</body>
</html>