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
<h2>Completa los campos vacíos para<br> generar una solicitud de asistencia. </h2>


<form method="post" action="fin.php">

<p>Tu Nombre:</p>
<input type="text" name="NombreAsistencia" placeholder="Ej: César Miguel" required="required" maxlength="25" autocomplete="off">

<p>Departamento:</p>
<select name="departamento" required>
	<option value="">Sin Seleccionar</option>
	<option value="Oficina del C. Secretario">Oficina del C. Secretario</option>
    <option value="Centro de Capacitación Ajuchitlán">Centro de Capacitación Ajuchitlán</option>
    <option value="Centro de Información Agropecuaria">Centro de Información Agropecuaria</option>
    <option value="Departamento de Comercialización">Departamento de Comercialización</option>
    <option value="Departamento Jurídico">Departamento Jurídico</option>
    <option value="Dirección Administrativa">Dirección Administrativa</option>
    <option value="Dirección de Fomente y Desarrollo Agropecuario">Dirección de Fomento y Desarrollo Agropecuario  </option>
    <option value="Dirección de Infraestructura Hidroagrícola">Dirección de Infraestructura Hidroagrícola</option>
    <option value="Dirección Regional Cadereyta">Dirección Regional Cadereyta</option>
    <option value="Dirección Regional Jalpan">Dirección Regional Jalpan</option>
    <option value="Dirección Regional Querétaro">Dirección Regional Querétaro</option>
    <option value="Dirección Regional San Juan del Rio">Dirección Regional San Juan del Rio</option>
    <option value="Ganadería">Ganadería</option>
    <option value="Órgano Interno de Control">Órgano Interno de Control</option>
    <option value="Parque Nacional El Cimatario">Parque Nacional El Cimatario</option>
    <option value="PIASRE">PIASRE</option>
</select>


<p>Ubicación:</p>
<select name="Ubicacion" required>
	<option value="">Sin Seleccionar</option>
	<option value="PlantaBaja">Planta Baja</option>
	<option value="Primer Piso">Primer Piso</option>
	<option value="Segundo Piso">Segundo Piso</option>
	<option value="Tercer Piso">Tercer Piso</option>
</select>



<p>Describe a detalle la falla que presentas:</p>
<textarea name="falla" rows="8" cols="70" maxlength="500" placeholder="Ej: No Puedo usar Office" required="required" autocomplete="off"></textarea>




<input type="submit" name="EnviarSolicitud" value="Enviar Reporte" class="boton">
</form>

<br> <a href="http://localhost/Sedea/TiSedea/index.php"><button class="boton">Ir a Menú Principal</button></a>
</div>

</body>
</html>