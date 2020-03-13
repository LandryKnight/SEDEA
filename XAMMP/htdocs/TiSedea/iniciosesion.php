<?php 
require_once('Funciones.php');

if(isset($_POST['sesion'])){
	$usuario  = sanitizeString($_POST['usuarios']);
	$contraseña = sanitizeString($_POST['contras']);

	$result = queryMySql("SELECT * FROM usuariosTI WHERE  usuario = '{$usuario}' AND contraseña ='{$contraseña}'");
	if($result -> num_rows){
		header('location: verReportes.php');

	}else {
		echo "Checa el usuario y contraseña que ingresaste.";
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
<h2>Ingresa los datos para <br>el inicio de sesión </h2>

<div class="centrol">

<form action="#" method="post">
<h3>Usuario: </h3>
<input type="text" name="usuarios" placeholder="Usuario de sedea" required="required" maxlength="21" >
<h3>Contraseña: </h3>
<input type="text" name="contras" placeholder="Contraseña de sedea" required="required" maxlength="21" >

</div>


<input type="submit" name="sesion" value="Iniciar sesión" class="boton"></a>
 </form>
</div>


</body>
</html>