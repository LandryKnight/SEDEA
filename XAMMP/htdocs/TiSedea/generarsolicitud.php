<?php  ?>


<!DOCTYPE html>
<html>
<head>
	<title>Enviar Solicitud de Asistencia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloSedea.css">
</head>
<body>



<div class="Marco" align="center">

<div class="medio"> 
<h2>Bienvenido al <br>Portal TI de la SEDEA</h2>


<form method="post" action="fin.php">

<p>Tu Nombre:</p>
<input type="text" name="NombreAsistencia" placeholder="Cesar Miguel" required="required" maxlength="25">

<p>Ubicación:</p>
<select name="Ubicacion" required>
	<option value="">Sin Seleccionar</option>
	<option value="PlantaBaja">Planta Baja</option>
	<option value="Primer Piso">Primer Piso</option>
	<option value="Segundo Piso">Segundo Piso</option>
	<option value="Tercer Piso">Tercer Piso</option>
</select>



<p>Describe cual es la falla que presentas:</p>
<input type="text" name="falla" placeholder="Ej: No puedo usar Office" required="required" maxlength="25">

<p>Mas detalles:</p>
<textarea name="masdetalles" rows="3" cols="70" maxlength="184" placeholder="(opcional)"></textarea>
</div>
<input type="submit" name="EnviarSolicitud" value="Enviar reporte" class="boton">
</form>


</div>

</body>
</html>