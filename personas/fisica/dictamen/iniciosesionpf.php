<?php 

	require_once('conexionDPF.php');


	global $user;
	global $pazz;

	if(isset($_POST['sesion'])){


	$user = sanitizeString($_POST['usuarios']);
	$pazz = sanitizeString($_POST['contras']);

		}

		$select    = "SELECT nameUsuario,pazz FROM usuarios 	WHERE nameUsuario = '{$user}' AND pazz = '{$pazz}'";
		$result    = queryMySql("$select");


		$selectreg = "SELECT nameUsuario,pazz FROM usuariosreg 	WHERE nameUsuario = '{$user}' AND pazz = '{$pazz}'";
		$resultreg = queryMySql("$selectreg");
	
		if($result -> num_rows)	{
		
					header('location:dictaminarpf.php');

			}else if($resultreg -> num_rows)

			{

					header('location:dictamenestatuspf.php');

			} else {

					
					echo "Revisa los campos de usuario/contraseña";

			}


				


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloFisica.css">
</head>
<body>

<div class="login" align="center">
<h1>SEDEA Querétaro</h1>
<h2>Ingresa los datos para <br>el inicio de sesión: </h2>



<form action="iniciosesionpf.php" method="post">
<h3>Usuario: </h3>
<input type="text" name="usuarios" placeholder="Usuario SEDEA" required="required" maxlength="21" class="input" autocomplete="off">
<h3>Contraseña: </h3>
<input type="password" name="contras" placeholder="Contraseña SEDEA" required="required" maxlength="21" class="input">

<br>
<br>
<input type="submit" name="sesion" value="Iniciar sesión" class="boton"></a>

<br><br>

 </form>
 <a href="http://localhost/sedea/index.php"><button class="boton">Menú Principal</button>
</div>


</body>
</html>