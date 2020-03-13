<?php 

session_start();


require_once('conect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sedea</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloSedea.css">

</head>

<body>
	<div align="center" class="Marco">
		<h2>Sedea --</h2>

		<form action="#" method="post">
			<p>Usuario:</p> <input type="text" name="user" class="cuadro">
			<p>Contraseña:</p> 	<input type="password" name="pass" class="cuadro">
			<br><input type="submit" name="botonenviar" value="Iniciar Sesión" class="boton">
			<br><input type="submit" name="botoncontacto" value="Contacto" class="boton">
		</form>
	</div>
</body>
</html>
