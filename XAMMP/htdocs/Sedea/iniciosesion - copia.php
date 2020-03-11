<?php  ?>


<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloSedea.css">
</head>
<body>

<div class="login" align="center">
<h1>SEDEA Regional</h1>
<h2>Ingresa los datos para <br>el inicio de sesión: </h2>

<div class="centrol">

<h3>Usuario: </h3>
<input type="text" name="usuarios" placeholder="Usuario de sedea" required="required" maxlength="21">
<h3>Contraseña: </h3>
<input type="text" name="contras" placeholder="Contraseña de sedea" required="required" maxlength="21">

</div>


<input type="submit" name="sesion" value="Iniciar sesión" class="boton">

</div>


</body>
</html>