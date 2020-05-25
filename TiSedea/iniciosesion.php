<?php 
require_once('Funciones.php');

if(isset($_POST['sesion'])){
	$usuario  = sanitizeString($_POST['usuarios']);
	$pazz = sanitizeString($_POST['contras']);


	$Select = "SELECT * FROM usuariosTI WHERE  usuario = '{$usuario}' AND pazz ='{$pazz}'";
	$result = queryMySql("$Select");
	if($result -> num_rows){
		header('location: verReportes.php');

	}else {
		echo "<input class='mensaje' type='text' name='mensaje' value='Usuario/Contraseña incorrectos.'>";
	}



}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloSedea.css">
</head>
<body>

<div class="login" align="center">

<h1>SEDEA TI </h1>
<h2>Ingresa los siguientes datos: </h2>

<div class="centrol">

<form action="#" method="post">

<h3>Usuario: </h3>
<input type="text" name="usuarios" placeholder="Usuario de SEDEATI" required="required" maxlength="21" >
<h3>Contraseña: </h3>
<input type="text" name="contras" placeholder="Contraseña de SEDEATI" required="required" maxlength="21">

</div>


<input type="submit" name="sesion" value="Iniciar Sesión" class="boton"></a>

</form>

<?php 



 ?>

<br> <a href="http://localhost/SEDEA/TiSedea/index.php"><button class="boton">Ir a Menú Principal</button></a>
</div>


</body>
</html>