<?php



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estiloMoral.css">
</head>
<body>

<div class="Marco">
<form action="DatosPersonalesRepre.php" method="post">

 <h1>Persona Moral</h1>

  



  <h2>Datos de la Ventanilla Receptora</h2>
  <div class="regional">
  <p> Selecciona la Dirección Regional</p> 
  	<select name="VentanillaDireccionRegional" required> 
    <option value="">Sin Seleccionar</option>
    <option value="Cadereyta de Montes">Cadereyta de Montes</option>
    <option value="Querétaro">Querétaro</option>
    <option value="Jalpan de Serra">Jalpan de Serra</option>
    <option value="San Juan del Río">San Juan del Río</option>
  </select>

  
  <p>Selecciona el Municipio</p>
   <Select name="VentanillaMunicipio" required>
    <option value="">Sin Seleccionar</option>
    <option value="Amealco de Bonfil">Amealco de Bonfil</option>
    <option value="Arroyo Seco">Arroyo Seco</option>
    <option value="Cadereyta de Montes">Cadereyta de Montes</option>
    <option value="Colón">Colón</option>
    <option value="Corregidora">Corregidora</option>
    <option value="El Marqués">El Marqués</option>
    <option value="Ezequiel Montes">Ezequiel Montes</option>
    <option value="Huimilpan">Huimilpan</option>
    <option value="Jalpan de Serra">Jalpan de Serra </option>
    <option value="Landa de Matamoros">Landa de Matamoros</option>
    <option value="Pedro Escobedo">Pedro Escobedo</option>
    <option value="Peñamiller">Peñamiller</option>
    <option value="Pinal de Amoles">Pinal de Amoles</option>
    <option value="Querétaro">Querétaro</option>
    <option value="San Joaquín">San Joaquín</option>
    <option value="San Juan del Río">San Juan del Río</option>
    <option value="Tequisquiapan">Tequisquiapan</option>
    <option value="Tolimán">Tolimán</option>

</Select>


</div>


	<h2>Datos Solicitante - Persona Moral</h2>



  <div class="organizacion" >
	<p>Nombre de la Organización</p> 
	<input type="text" name="NombreOrganizacion" placeholder="Ej: Agricultores Unidos" required="required" maxlength="50">

	<p>Tipo de Organización</p> 
	<input type="text" name="TipoOrganizacion" placeholder="Ej: Organización Formal  " required="required">

	<p>Teléfono</p> 
	<input type="text" name="NumeroTelefonoOrganizacion" placeholder="Ej: 442 456 4684" required="required" maxlength="10">

	<p>Correo Electrónico</p> 
	<input type="text" name="CorreoElectronicoOrganizacion" placeholder="Ej: Sedea@gmail.com" required="required" maxlength="120">

  </div>

	<h3 id="titulo2">Fecha de Constitución</h3>
	 <div class="centro">
	<p>Selecciona el Día </p>
	<select name="DiaFechaConstitucion" required>
		    <option value="">Sin Seleccionar</option>
	      <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
		
	</select>
	<p>Selecciona el Mes</p>
	<select name="MesFechaConstitucion" required>
		<option value="">Sin Seleccionar</option>
		    <option value="01">01 - Enero</option>
        <option value="02">02 - Febrero</option>
        <option value="03">03 - Marzo</option>
        <option value="04">04 - Abril</option>
        <option value="05">05 - Mayo</option>
        <option value="06">06 - Junio</option>
        <option value="07">07 - Julio</option>
        <option value="08">08 - Agosto</option>
        <option value="09">09 - Septiembre</option>
        <option value="10">10 - Octubre</option>
        <option value="11">11 - Noviembre</option>
        <option value="12">12 - Diciembre</option>
		
	</select>
	<p>Selecciona el Año</p>
	<select name="AnioFechaConstitucion" required>
		   <option value="">Sin Seleccionar</option>
	     <option value="2020">2020</option>
       <option value="2019">2019</option>
       <option value="2018">2018</option>
       <option value="2017">2017</option>
       <option value="2016">2016</option>
       <option value="2015">2015</option>
       <option value="2014">2014</option>
       <option value="2013">2013</option>
       <option value="2012">2012</option>
       <option value="2011">2011</option>
       <option value="2010">2010</option>
       <option value="2009">2009</option>
       <option value="2008">2008</option>
       <option value="2007">2007</option>
       <option value="2006">2006</option>
       <option value="2005">2005</option>
       <option value="2004">2004</option>
       <option value="2003">2003</option>
       <option value="2002">2002</option>
       <option value="2001">2001</option>
       <option value="2002">2002</option>
       <option value="2001">2001</option>
       <option value="2000">2000</option>
       <option value="1999">1999</option>
       <option value="1998">1998</option>
       <option value="1997">1997</option>
       <option value="1996">1996</option>
       <option value="1995">1995</option>
       <option value="1994">1994</option>
       <option value="1993">1993</option>
       <option value="1992">1992</option>
       <option value="1991">1991</option>
       <option value="1990">1990</option>
       <option value="1989">1989</option>
       <option value="1988">1988</option>
       <option value="1987">1987</option>
       <option value="1986">1986</option>
       <option value="1985">1985</option>
       <option value="1984">1984</option>
       <option value="1983">1983</option>
       <option value="1982">1982</option>
       <option value="1981">1981</option>
       <option value="1980">1980</option>
       <option value="1979">1979</option>
       <option value="1978">1978</option>
       <option value="1977">1977</option>
       <option value="1976">1976</option>
       <option value="1975">1975</option>
       <option value="1974">1974</option>
       <option value="1973">1973</option>
       <option value="1972">1972</option>
       <option value="1971">1971</option>
       <option value="1970">1970</option>
       <option value="1969">1969</option>
       <option value="1968">1968</option>
       <option value="1967">1967</option>
       <option value="1966">1966</option>
       <option value="1965">1965</option>
       <option value="1964">1964</option>
       <option value="1963">1963</option>
       <option value="1962">1962</option>
       <option value="1961">1961</option>
       <option value="1960">1960</option>
       <option value="1959">1959</option>
       <option value="1958">1958</option>
       <option value="1957">1957</option>
       <option value="1956">1956</option>
       <option value="1955">1955</option>
       <option value="1954">1954</option>
       <option value="1953">1953</option>
       <option value="1952">1952</option>
       <option value="1951">1951</option>
       <option value="1950">1950</option>
	</select>

	
</div>

	<br><h2>Domicilio de la Organización</h2><br>
   <div class="organizacion">
    <p>Selecciona el Nombre del Municipio</p>
    <Select name="NombreMunicipioOrganizacion" required >
    <option value="">Sin Seleccionar</option>
    <option value="Amealco de Bonfil">Amealco de Bonfil</option>
    <option value="Arroyo Seco">Arroyo Seco</option>
    <option value="Cadereyta de Montes">Cadereyta de Montes</option>
    <option value="Colón">Colón</option>
    <option value="Corregidora">Corregidora</option>
    <option value="El Marqués">El Marqués</option>
    <option value="Ezequiel Montes">Ezequiel Montes</option>
    <option value="Huimilpan">Huimilpan</option>
    <option value="Jalpan de Serra">Jalpan de Serra </option>
    <option value="Landa de Matamoros">Landa de Matamoros</option>
    <option value="Pedro Escobedo">Pedro Escobedo</option>
    <option value="Peñamiller">Peñamiller</option>
    <option value="Pinal de Amoles">Pinal de Amoles</option>
    <option value="Querétaro">Querétaro</option>
    <option value="San Joaquín">San Joaquín</option>
    <option value="San Juan del Río">San Juan del Río</option>
    <option value="Tequisquiapan">Tequisquiapan</option>
    <option value="Tolimán">Tolimán</option>
   </Select>

	<p>Tipo de Domicilio</p>
	<select name="TipoDomicilioOrganizacion" required>
	<option value="">Sin Seleccionar</option>
	<option value="Urbano">Urbano</option>	
	<option value="Rurar">Rural</option>
	</select>
	

	<p>Tipo de Asentamiento</p>
	<select name="TipoAsentamientoOrganizacion" required>
		<option value="">Sin Seleccionar</option>
		<option value="Colonia">Colonia</option>
		<option value="Pueblo">Pueblo</option>
		<option value="Rancho">Rancho</option>
		<option value="Ejido">Ejido</option>
		<option value="Hacienda">Hacienda</option>
		<option value="Otro">Otro</option>
	</select>
	
<p>Selecciona el Tipo de Vialidad</p>
  <select name="TipoVialidadOrganizacion" required>
    <option value="">Sin Seleccionar</option>
    <option value="Calle">Calle</option>
    <option value="Callejon">Callejon</option>
    <option value="Privada">Privada</option>
    <option value="Carretera">Carretera</option>
    <option value="Camino">Camino</option>
    <option value="Otro">Otro</option>
    
 </select>


	<p>Nombre del Asentamiento</p>
	<input type="Text" name="NombreAsentamientoOrganizacion" placeholder="Ej: Pozo Blanco" required="required" maxlength="50">

	



	<p>Nombre de la vialidad</p>
	<input type="text" name="NombreVialidadOrganizacion" required="required" maxlength="50">


	<p>Nombre de la localidad</p>
	<input type="text" name="NombreLocalidadOrganizacion" required="required" maxlength="50">

	

	<p>Referencia de la Vialidad</p>
	<input type="text" name="ReferenciaVialidadOrganizacion" maxlength="50">
	
</div>
  <br>  <br>
	<h2>Actividad Economica</h2>
   <p>Seleccion el Tipo de Actividad</p>
   <select name="TipoActividadEconomicaOrganizacion" required>
   	<option value="">Sin Seleccionar</option>
   	<option value="Agrícola">Agrícola</option>
   	<option value="Pecuaria">Pecuaria</option>
   	<option value="Pesca/Agrícola">Pesca/Agrícola</option>
   	<option value="Otra">Otra</option>
   </select>

<br>

<input type="submit" name="enviarPM" value="Siguiente" id="botonPM" class="boton">

	<br>

</form>

<a href="http://localhost/sedea/index.php"><button id="botonPM" class="boton"> Menú Principal</button></a>
</div>

</body>
</html>
