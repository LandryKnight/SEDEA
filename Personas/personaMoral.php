
<?php
 require_once('conect.php');

$funcion = new funcion();

$con = $funcion -> conectar();


if(isset($_POST['enviarDatos'])){

 
$FolioImpreso = sanitizeString(($_POST['FolioImpreso']));
$VentanillaDireccionRegional  = ($_POST['VentanillaDireccionRegional']);
$VentanillaMunicipio  = ($_POST['VentanillaMunicipio']);

#Organizacion
$NombreOrganizacion  = sanitizeString(($_POST['NombreOrganizacion']));
$TipoOrganizacion  = sanitizeString(($_POST['TipoOrganizacion']));
$NumeroTelefonoOrganizacion  = sanitizeString(($_POST['NumeroTelefonoOrganizacion']));
$CorreoElectronicoOrganizacion  = sanitizeString(($_POST['CorreoElectronicoOrganizacion']));
								
$DiaFechaConstitucion  = ($_POST['DiaFechaConstitucion']);
$MesFechaConstitucion  = ($_POST['MesFechaConstitucion']);
$AnioFechaConstitucion  = ($_POST['AnioFechaConstitucion']);

$FechaConstitucion = $DiaFechaConstitucion."/".$MesFechaConstitucion."/".$AnioFechaConstitucion;

$TipoDomicilioOrganizacion  = ($_POST['TipoDomicilioOrganizacion']);
$TipoAsentamientoOrganizacion  = ($_POST['TipoAsentamientoOrganizacion']);
$NombreAsentamientoOrganizacion  = sanitizeString(($_POST['NombreAsentamientoOrganizacion']));
$TipoVialidadOrganizacion  = ($_POST['TipoVialidadOrganizacion']);
$NombreVialidadOrganizacion  = sanitizeString(($_POST['NombreVialidadOrganizacion']));
$NombreLocalidadOrganizacion  = sanitizeString(($_POST['NombreLocalidadOrganizacion']));
$NombreMunicipioOrganizacion  = ($_POST['NombreMunicipioOrganizacion']);
$ReferenciaVialidadOrganizacion  = sanitizeString(($_POST['ReferenciaVialidadOrganizacion']));
$TipoActividadEconomicaOrganizacion  = ($_POST['TipoActividadEconomicaOrganizacion']);
								
#Representante							
$NombreRepresentante  = sanitizeString(($_POST['NombreRepresentante']));
$GeneroRepresentante  = ($_POST['GeneroRepresentante']);

$DiaFechaNacimientoRepresentante  = ($_POST['DiaFechaNacimientoRepresentante']);
$MesFechaNacimientoRepresentante  = ($_POST['MesFechaNacimientoRepresentante']);
$AnioFechaNacimientoRepresentante  = ($_POST['AnioFechaNacimientoRepresentante']);

$FechaNacimientoRepresentante = $DiaFechaNacimientoRepresentante."/".$MesFechaNacimientoRepresentante."/".$AnioFechaNacimientoRepresentante;

$NacionalidadRepresentante  = ($_POST['NacionalidadRepresentante']);
$EstadoCivilRepresentante  = ($_POST['EstadoCivilRepresentante']);
$EstadoNacimientoRepresentante  = ($_POST['EstadoNacimientoRepresentante']);
$TelefonoRepresentante  = sanitizeString(($_POST['TelefonoRepresentante']));
$CorreoElectronicoRepresentante  = sanitizeString(($_POST['CorreoElectronicoRepresentante']));
$TipoIdentificacionRepresentante  = ($_POST['TipoIdentificacionRepresentante']);
$NumeroIdentificacionRepresentante  = sanitizeString(($_POST['NumeroIdentificacionRepresentante']));
$CurpRepresentante  = sanitizeString(($_POST['CurpRepresentante']));
$TipoDomicilioRepresentante  = ($_POST['TipoDomicilioRepresentante']);
$TipoAsentamientoRepresentante  = ($_POST['TipoAsentamientoRepresentante']);
$NombreAsentamientoReprsentante  = sanitizeString(($_POST['NombreAsentamientoReprsentante']));
$TipoVialidadRepresentante  = ($_POST['TipoVialidadRepresentante']);
$NombreVialidadRepresentante  = sanitizeString(($_POST['NombreVialidadRepresentante']));
$NombreLocalidadRepresentante  = sanitizeString(($_POST['NombreLocalidadRepresentante']));
$NombreMunicipioRepresentante  = ($_POST['NombreMunicipioRepresentante']);
$ReferenciaVialidadRepresentante  = sanitizeString(($_POST['ReferenciaVialidadRepresentante']));


$insert = "INSERT INTO personamoral (sFolioImpreso,sVentanillaDireccionRegional,sVentanillaMunicipio,sNombreOrganizacion,
sTipoOrganizacion,sNumeroTelefonoOrganizacion,sCorreoElectronicoOrganizacion,sFechaConstitucion,sTipoDomicilioOrganizacion,
sTipoAsentamientoOrganizacion,sNombreAsentamientoOrganizacion,sTipoVialidadOrganizacion,
sNombreVialidadOrganizacion,sNombreLocalidadOrganizacion,sNombreMunicipioOrganizacion,
sReferenciaVialidadOrganizacion,sTipoActividadEconomicaOrganizacion) VALUES('{$FolioImpreso}','{$VentanillaDireccionRegional}','{$VentanillaMunicipio}','{$NombreOrganizacion}','{$TipoOrganizacion}','{$NumeroTelefonoOrganizacion}','{$CorreoElectronicoOrganizacion}',
'{$FechaConstitucion}','{$TipoDomicilioOrganizacion}','{$TipoAsentamientoOrganizacion}','{$NombreAsentamientoOrganizacion}','{$TipoVialidadOrganizacion}',
'{$NombreVialidadOrganizacion}','{$NombreLocalidadOrganizacion}','{$NombreMunicipioOrganizacion}',
'{$ReferenciaVialidadOrganizacion}','{$TipoActividadEconomicaOrganizacion}');"; 





$INSERT2 ="INSERT INTO representante(sRFolioImpreso,sNombreRepresentante,sGeneroRepresentante,sFechaNacimientoRepresentante,sNacionalidadRepresentante,
sEstadoCivilRepresentante,sEstadoNacimientoRepresentante,sTelefonoRepresentante,
sCorreoElectronicoRepresentante,sTipoIdentificacionRepresentante,sNumeroIdentificacionRepresentante,
sCurpRepresentante,sTipoDomicilioRepresentante,sTipoAsentamientoRepresentante,
sNombreAsentamientoReprsentante,sTipoVialidadRepresentante,sNombreVialidadRepresentante,sNombreLocalidadRepresentante,
sNombreMunicipioRepresentante,sReferenciaVialidadRepresentante) VALUES('{$FolioImpreso}','{$NombreRepresentante}',
'{$GeneroRepresentante}','{$FechaNacimientoRepresentante}',
'{$NacionalidadRepresentante}','{$EstadoCivilRepresentante}','{$EstadoNacimientoRepresentante}',
'{$TelefonoRepresentante}','{$CorreoElectronicoRepresentante}',
'{$TipoIdentificacionRepresentante}','{$NumeroIdentificacionRepresentante}',
'{$CurpRepresentante}','{$TipoDomicilioRepresentante}','{$TipoAsentamientoRepresentante}','{$NombreAsentamientoReprsentante}',
'{$TipoVialidadRepresentante}','{$NombreVialidadRepresentante}','{$NombreLocalidadRepresentante}',
'{$NombreMunicipioRepresentante}','{$ReferenciaVialidadRepresentante}');"; 


#echo $insert;

if($con -> query($insert) ){
	if ($con -> query($INSERT2)) {
		echo "Datos Registrados <br>";
	}
    
  }else {
    echo $con -> error, "<br>";
    echo $insert, "<br>";
  }


}

function sanitizeString($var){

  if(get_magic_quotes_gpc())
    $var = stripcslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
  return $var;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<form action="#" method="post">
  
  <p>Folio Impreso</p> <input type="text" name="FolioImpreso" required="required" placeholder="Ej:DQW-RWEQ-156" maxlength="30">


  <h2>Datos de la Ventanilla Receptora</h2>
  <p> Selecciona la Dirección Regional</p> 
  	<select name="VentanillaDireccionRegional"> 
    <option value="Sin Seleccionar">Sin Seleccionar</option>
    <option value="Cadereyta de Montes">Cadereyta de Montes</option>
    <option value="Querétaro">Querétaro</option>
    <option value="Jalpan de Serra">Jalpan de Serra</option>
    <option value="San Juan del Río">San Juan del Río</option>
  </select>

  
  <p>Selecciona el Municipio</p>
   <Select name="VentanillaMunicipio">
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
	<input type="text" name="NombreOrganizacion" placeholder="Ej: Agricultores Unidos" required="required" maxlength="50">

	<p>Tipo de Organización</p> 
	<input type="text" name="TipoOrganizacion" placeholder="Ej:  " required="required">

	<p>Teléfono</p> 
	<input type="text" name="NumeroTelefonoOrganizacion" placeholder="Ej: 442 456 4684" required="required" maxlength="10">

	<p>Correo Electrónico</p> 
	<input type="text" name="CorreoElectronicoOrganizacion" placeholder="Ej: Sedea@gmail.com" required="required" maxlength="120">

	<p>Fecha de Constitución</p> 
	
	<p>Selecciona el Día </p>
	<select name="DiaFechaConstitucion" required="required">
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
	<p>Selecciona el Mes</p>
	<select name="MesFechaConstitucion" required="required">
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
	<p>Selecciona el Año</p>
	<select name="AnioFechaConstitucion" required="required">
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

	


	<h2>Domicilio de la Organización</h2>
	<p>Tipo de Domicilio</p>
	<select name="TipoDomicilioOrganizacion">
	<option value="Sin Seleccionar">Sin Seleccionar</option>
	<option value="Urbano">Urbano</option>	
	<option value="Rurar">Rural</option>
	</select>
	

	<p>Tipo de Asentamiento</p>
	<select name="TipoAsentamientoOrganizacion">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Colonia">Colonia</option>
		<option value="Pueblo">Pueblo</option>
		<option value="Rancho">Rancho</option>
		<option value="Ejido">Ejido</option>
		<option value="Hacienda">Hacienda</option>
		<option value="Otro">Otro</option>
	</select>
	


	<p>Nombre del Asentamiento</p>
	<input type="Text" name="NombreAsentamientoOrganizacion" placeholder="Ej: Pozo Blanco" required="required" maxlength="50">

	<p>Selecciona el Tipo de Vialidad</p>
	<select name="TipoVialidadOrganizacion">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Calle">Calle</option>
		<option value="Callejon">Callejon</option>
		<option value="Privada">Privada</option>
		<option value="Carretera">Carretera</option>
		<option value="Camino">Camino</option>
		<option value="Otro">Otro</option>
		
 </select>



	<p>Nombre de la vialidad</p>
	<input type="text" name="NombreVialidadOrganizacion" required="required" maxlength="50">


	<p>Nombre de la localidad</p>
	<input type="text" name="NombreLocalidadOrganizacion" required="required" maxlength="50">

	<p>Selecciona el Nombre del Municipio</p>
   		<Select name="NombreMunicipioOrganizacion">
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
	<input type="text" name="ReferenciaVialidadOrganizacion" maxlength="50">
	

	<h2>Actividad Economica</h2>
   <p>Seleccion el Tipo de Actividad</p>
   <select name="TipoActividadEconomicaOrganizacion" required="required">
   	<option value="Sin Seleccionar">Sin Seleccionar</option>
   	<option value="Agrícola">Agrícola</option>
   	<option value="Pecuaria">Pecuaria</option>
   	<option value="Pesca/Agrícola">Pesca/Agrícola</option>
   	<option value="Otra">Otra</option>
   </select>

   <h2>Datos Personales del representante de la organización</h2>

   <p>Nombre Completo</p>
   <input type="text" name="NombreRepresentante" required="required" placeholder="Ej: Maria Guadalupe Fernandez Gutierrez" maxlength="80">

   <p>Selecciona el Género</p>
    <select name="GeneroRepresentante">
   	<option value="Sin Seleccionar">Sin Seleccionar</option>
   	<option value="Femenino">Femenino</option>
   	<option value="Masculino">Masculino</option>
   </select>


<p>Selecciona la Fecha de Nacimiento</p>
	<p>Selecciona el Día </p>
	<select name="DiaFechaNacimientoRepresentante" required="required">
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
	<p>Selecciona el Mes</p>
	<select name="MesFechaNacimientoRepresentante" required="required">
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
	<p>Selecciona el Año</p>
	<select name="AnioFechaNacimientoRepresentante" required="required">
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
<select name="NacionalidadRepresentante">
	<option value="Sin Seleccionar">Sin Seleccionar</option>
	<option value="Mexicana">Mexicana</option>
	<option value="Extranjera">Extranjera</option>

</select>

<p>Selecciona el Estado Civil</p>
	<select name="EstadoCivilRepresentante">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Soltero">Soltero</option>
		<option value="Casado">Casado</option>
		<option value="Divorciado">Divorciado</option>
		<option value="Union Libre">Union Libre</option>

	</select>


	<p>Selecciona el Estado de Nacimiento</p>
	<select name="EstadoNacimientoRepresentante" required="required">
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
	<input type="text" name="TelefonoRepresentante" placeholder="Ej: 442 256 4567" required="required" maxlength="10" >

	<p>Correo Electrónico</p>
	<input type="text" name="CorreoElectronicoRepresentante" placeholder="Ej: Sedeaq@gmail.com" required="required" maxlength="120">

	<p>Selecciona el tipo de Identificacion</p>

	<select name="TipoIdentificacionRepresentante">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="INE">INE - IFE</option>
		
	</select>

	<p>Numero de identificacion</p>
	<input type="text" name="NumeroIdentificacionRepresentante" required="required" placeholder="Ej: 1456237891234" maxlength="20">
	
	<p>Curp</p>
	<input type="text" name="CurpRepresentante" required="required" placeholder="Ej: SJFA451236SASD" maxlength="14">

	

	<p>Selecciona el Tipo de Domicilio</p>
		<select name="TipoDomicilioRepresentante">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Urbano">Urbano</option>
		<option value="Rural">Rural</option>
    
	</select>


	<p>Tipo de Asentamiento</p>
		<select name="TipoAsentamientoRepresentante">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Colonia">Colonia</option>
		<option value="Pueblo">Pueblo</option>
		<option value="Rancho">Rancho</option>
		<option value="Ejido">Ejido</option>
		<option value="Hacienda">Hacienda</option>
		<option value="Otro">Otro</option>
	</select>


	<p>Nombre del Asentamiento</p>
	<input type="text" name="NombreAsentamientoReprsentante" maxlength="50">

	<p>Selecciona el Tipo de vialidad</p>
		<select name="TipoVialidadRepresentante">
		<option value="Sin Seleccionar">Sin Seleccionar</option>
		<option value="Calle">Calle</option>
		<option value="Callejón">Callejón</option>
		<option value="Privada">Privada</option>
		<option value="Carretera">Carretera</option>
		<option value="Camino">Camino</option>
		<option value="Otro">Otro</option>
	</select>



	<p>Nombre de la vialidad</p>
  	<input type="text" name="NombreVialidadRepresentante"  maxlength="50">

	<p>Nombre de la localidad</p>
  	<input type="text" name="NombreLocalidadRepresentante" maxlength="30">


	<p>Selecciona el Nombre del Municipio</p>
   		<Select name="NombreMunicipioRepresentante" required="required">
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
 <input type="text" name="ReferenciaVialidadRepresentante" maxlength="50"> <br>


<input type="submit" name="enviarDatos" value="Enviar">

	

</form>
</body>
</html>