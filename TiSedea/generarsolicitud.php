<?php  ?>


<!DOCTYPE html>
<html>
<head>
	<title>Enviar Solicitud de Asistencia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloSedea.css">
</head>
<body>





<div class="medio" align="center"> 
<h2>Completa los campos vacíos para reportar una falla. </h2>


<form method="post" action="fin.php">

<p>Tu Nombre:</p>
<input type="text" name="NombreAsistencia" placeholder="César Miguel" required="required" maxlength="25" autocomplete="off">

<p>Departamento:</p>
<select name="departamento" required>
	<option value="">Sin Seleccionar</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
</select>


<p>Ubicación:</p>
<select name="Ubicacion" required>
	<option value="">Sin Seleccionar</option>
	<option value="PlantaBaja">Planta Baja</option>
	<option value="Primer Piso">Primer Piso</option>
	<option value="Segundo Piso">Segundo Piso</option>
	<option value="Tercer Piso">Tercer Piso</option>
</select>



<p>Describe la falla que presentas:</p>
<textarea name="falla" rows="3" cols="70" maxlength="184" placeholder="Ej: No Puedo usar Office" required="required" autocomplete="off"></textarea>


<p>Mas detalles:</p>
<textarea name="masdetalles" rows="3" cols="70" maxlength="184" placeholder="(opcional)" autocomplete="off"></textarea>

<input type="submit" name="EnviarSolicitud" value="Enviar Reporte" class="boton">
</form>

<br> <a href="http://localhost/TiSedea/index.php"><button class="boton">Ir a Menú Principal</button></a>
</div>

</body>
</html>