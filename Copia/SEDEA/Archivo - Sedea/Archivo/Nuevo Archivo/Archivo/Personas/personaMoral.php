<?php  
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<form action="#" method="post">
  <p>Folio de Autorización</p> <input type="text" name="FolioAutorizacion" required="required">
  <p>Folio Impreso</p> <input type="text" name="FolioImpreso" required="required">


  <h2>Datos de la Ventanilla Receptora</h2>
  <p> Selecciona la Dirección Regional</p> 
  <select name="DireccionRegional"> 
    <option value="Sin Seleccionar">Sin Seleccionar</option>
    <option value="Cadereyta de Montes">Cadereyta de Montes</option>
    <option value="Querétaro">Querétaro</option>
    <option value="Jalpan de Serra">Jalpan de Serra</option>
    <option value="San Juan del Río">San Juan del Río</option>
  </select>

  
  <p>Selecciona el Municipio</p>
   <Select name="Municipio">
    <option value="Sin Seleccionar">Sin Seleccionar</option>
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

	<h2>Datos Solicitante - Persona Moral</h2>

	

	<p>Nombre de la Organización</p> 
	<input type="text" name="NombreOrganizacion" placeholder="Ej: Agricultores Unidos" required="required">

	<p>Tipo de Organización</p> 
	<input type="text" name="TipoOrganizacion" placeholder="Ej: " required="required">

	<p>Teléfono</p> 
	<input type="text" name="NumeroTelefono" placeholder="442 456 4684" required="required">

	<p>Correo Electrónico</p> 
	<input type="text" name="CorreoElectronicoM" placeholder="Ej: Sedea@gmail.com">

	<p>Fecha de Constitución</p> 
	
	Selecciona el Día 
	<select name="DiaFechaNacimiento" required="required">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
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
	Selecciona el Mes
	<select name="MesFechaNacimiento" required="required">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
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
		
	</select>
	Selecciona el Año
	<select name="AnioFechaNacimiento" required="required">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
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

	


	<h2>Domicio de la Organización</h2>
	<p>Tipo de Domicilio</p>
	<select name="TipoDomicilioM">
	<option value="Sin Seleccionar">Sin Seleccionar</option>
	<option value="Urbano">Urbano</option>	
	<option value="Rurar">Rural</option>
	</select>
	

	<p>Tipo de Asentamiento</p>
	<select name="TipoAsentamientoM">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Colonia">Colonia</option>
		<option value="Pueblo">Pueblo</option>
		<option value="Rancho">Rancho</option>
		<option value="Ejido">Ejido</option>
		<option value="Hacienda">Hacienda</option>
		<option value="Otro">Otro</option>
	</select>
	


	<p>Nombre del Asentamiento</p>
	<input type="Text" name="NombreAsentamientoM" placeholder="Ej: Pozo Blanco" required="required">

	<p>Selecciona el Tipo de Vialidad</p>
	<select name="TipoVialidadM">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Calle">Calle</option>
		<option value="Callejon">Callejon</option>
		<option value="Privada">Privada</option>
		<option value="Carretera">Carretera</option>
		<option value="Camino">Camino</option>
		<option value="Otro">Otro</option>
		
 </select>


	<p>Nombre de la vialidad</p>
	<input type="text" name="NombreVialidadM" required="required">


	<p>Nombre de la localidad</p>
	<input type="text" name="NombreLocalidadM" required="required">

	<p>Selecciona el Nombre del Municipio</p>
   <Select name="NombreMunicipio">
   		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Amealco de Bonfil">Amealco de Bonfil</option>
		<option value="Arroyo Seco">Arroyo Seco</option>
		<option value="Cadereyta de Montes">Cadereyta de Montes</option>
		<option value="Colón">Colón</option>
		<option value="Corregidora">Corregidora</option>
		<option value="El Marqués">El Marqués</option>
		<option value="Ezequiel Montes">Ezequiel Montes</option>
		<option value="Huimilpan">Huimilpan</option>
		<option value="Jalpan de Serra">Jalpan de Serra	</option>
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

	<p>Referencia de la Vialidad</p>
	<input type="text" name="ReferenciaVialidadM">
	

	<h2>Actividad Economica</h2>
   <p>Seleccion el Tipo de Actividad</p>
   <select name="TipoActividadEconomicaM" required="required">
   	<option value="Sin Seleccionar">Sin Seleccionar</option>
   	<option value="Agrícola">Agrícola</option>
   	<option value="Pecuaria">Pecuaria</option>
   	<option value="Pesca/Agrícola">Pesca/Agrícola</option>
   	<option value="Otra">Otra</option>
   </select>
-----------------------------------------------------------------------------------------------
   <h2>Datos Personales del representante de la organización</h2>

   <p>Nombre Completo</p>
   <input type="text" name="NombrePersonaMoral" required="required" placeholder="Ej: Maria Guadalupe Fernandez Gutierrez">

   <p>Selecciona el Género</p>
    <select name="Genero">
   	<option value="Sin Seleccionar">Sin Seleccionar</option>
   	<option value="Femenino">Femenino</option>
   	<option value="Masculino">Masculino</option>
   </select>


<p>Selecciona la Fecha de Nacimiento</p>
	Selecciona el Día 
	<select name="DiaFechaNacimiento" required="required">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
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
	Selecciona el Mes
	<select name="MesFechaNacimiento" required="required">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
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
		
	</select>
	Selecciona el Año
	<select name="AnioFechaNacimientoMP" required="required">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
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
	</select>
	


<p>Selecciona la Nacionalidad</p>
<select name="nacionalidadMP">
	<option value="Sin Seleccionar">Sin Seleccionar</option>
	<option value="Mexicana">Mexicana</option>
	<option value="Extranjera">Extranjera</option>

</select>

<p>Selecciona el Estado Civil</p>
	<select name="EstadoCivilMP">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Soltero">Soltero</option>
		<option value="Casado">Casado</option>
		<option value="Divorciado">Divorciado</option>
		<option value="Union Libre">Union Libre</option>

	</select>


	<p>Selecciona el Estado de Nacimiento</p>
	<select name="EstadoNacimientoMP" required="required">
	   <option value="Sin Seleccionar">Sin Seleccionar</option>
       <option value="Aguascalientes">Aguascalientes</option>
       <option value="Baja California	B.C.">Baja California	B.C.</option>
       <option value="Baja California Sur">Baja California Sur</option>
       <option value="Campeche">Campeche</option>
       <option value="Chiapas">Chiapas</option>
       <option value="Chihuahua">Chihuahua</option>
       <option value="Ciudad de México">Ciudad de México</option>
       <option value="Coahuila">Coahuila</option>
       <option value="Colima">Colima</option>
       <option value="Durango">Durango</option>
       <option value="Guanajuato">Guanajuato</option>
       <option value="Guerrero">Guerrero</option>
       <option value="Hidalgo">Hidalgo</option>
       <option value="Jalisco">Jalisco</option>
       <option value="México">México</option>
       <option value="Michoacán">Michoacán</option>
       <option value="Morelos">Morelos</option>
       <option value="Nayarit">Nayarit</option>
       <option value="Nuevo León">Nuevo León</option>
       <option value="Oaxaca">Oaxaca</option>
       <option value="Puebla">Puebla</option>
       <option value="Querétaro">Querétaro</option>
       <option value="Quintana Roo">Quintana Roo</option>
       <option value="San Luis Potosí">San Luis Potosí</option>
       <option value="Sinaloa">Sinaloa</option>
       <option value="Sonora">Sonora</option>
       <option value="Tabasco">Tabasco</option>
       <option value="Tamaulipas">Tamaulipas</option>
       <option value="Tlaxcala">Tlaxcala</option>
       <option value="Veracruz">Veracruz</option>
       <option value="Yucatán">Yucatán</option>
       <option value="Zacatecas">Zacatecas</option>


	</select>

	<p>Teléfono</p>
	<input type="text" name="Telefono" placeholder="Ej: 442 256 4567" required="required">

	<p>Correo Electrónico</p>
	<input type="text" name="CorreoElectronicoMP" placeholder="Sedeaq@gmail.com" required="required">

	<p>Selecciona el tipo de Identificacion</p>

	<select name="TipoIdentificacionMP">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="INE">INE - IFE</option>
		
	</select>

	<p>Numero de identificacion</p>
	<input type="text" name="NumeroIdentificacion" required="required" placeholder="Ej: 1456237891234">
	
	<p>Curp</p>
	<input type="text" name="CurpM" required="required" placeholder="Ej: SJFA451236SASD">

	<p>Domicilio del Representante de la Organización</p>
	<input type="text" name="DomicilioMP">

	<p>Selecciona el Tipo de Domicilio</p>
	<select name="TipoDomicilioMP">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option></option>
		<option></option>
	</select>


	<p>Tipo de Asentamiento</p>
	<select>
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Colonia">Colonia</option>
		<option value="Pueblo">Pueblo</option>
		<option value="Rancho">Rancho</option>
		<option value="Ejido">Ejido</option>
		<option value="Hacienda">Hacienda</option>
		<option value="Otro">Otro</option>
	</select>


	<p>Nombre del Asentamiento</p>
	<input type="text" name="NombreAsentamientoMP">

	<p>Selecciona el Tipo de vialidad</p>
	<select>
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Calle">Calle</option>
		<option value="Callejon">Callejón</option>
		<option value="Privada">Privada</option>
		<option value="Carretera">Carretera</option>
		<option value="Camino">Camino</option>
		<option value="Otro">Otro</option>
	</select>



	<p>Nombre de la vialidad</p>

	<p>Nombre de la localidad</p>


	<p>Selecciona el Nombre del Municipio</p>
   <Select name="NombreMunicipio" required="required">
   		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Amealco de Bonfil">Amealco de Bonfil</option>
		<option value="Arroyo Seco">Arroyo Seco</option>
		<option value="Cadereyta de Montes">Cadereyta de Montes</option>
		<option value="Colón">Colón</option>
		<option value="Corregidora">Corregidora</option>
		<option value="El Marqués">El Marqués</option>
		<option value="Ezequiel Montes">Ezequiel Montes</option>
		<option value="Huimilpan">Huimilpan</option>
		<option value="Jalpan de Serra">Jalpan de Serra	</option>
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
  

 <p>Referencia de la vialidad</p>
 <input type="text" name="ReferenciaVialidadMP">

	<p></p>

   <br><br>

</form>
</body>
</html>