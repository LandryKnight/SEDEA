<?php 

require_once('uconexionPF.php');

global $Folio;
 
if(isset($_POST['EnviarPF'])){

  #recepcion de datos PersonaFisica.php
  

  $Folio                =             sanitizeString($_POST['folio']);
  $dirReg               =             $_POST['DireccionRegional']; #direccionRegional
  $municipio            =             $_POST['ventanillaMunicipio'];
  $nombres              =             ucfirst(strtolower(sanitizeString($_POST['nombresPF'])));
  

  $nombre               =             $nombres;

  $genero               =             $_POST['genero'];

  $diaNacimiento        =             $_POST['DiaFechaNacimiento'];
  $mesNacimiento        =             $_POST['MesFechaNacimiento'];
  $anioNacimiento       =             $_POST['AnioFechaNacimiento'];

  $fechaNacimiento = $diaNacimiento."/".$mesNacimiento."/".$anioNacimiento;
  #echo $fechaNacimiento;

  $nacionalidad         =             $_POST['Nacionalidad'];
  $EstadoCivil          =             $_POST['EstadoCivil'];
  $estadoNacimiento     =             $_POST['EstadoNacimiento'];
  $telefono             =             sanitizeString($_POST['Telefono']);
  $correo               =             strtolower(sanitizeString($_POST['Correo'])); #correoElectronico
  $tipoIdentificacion   =             $_POST['tipoIdentificacion'];

  $numIdentificacion    =             sanitizeString($_POST['numIdentificacion']);
  $curp                 =             strtoupper(sanitizeString($_POST['Curp']));
  $tipoDomicilio        =             $_POST['tipoDomicilio'];
  $tipoAsentamiento     =             $_POST['tipoAsentamiento'];
  $nombreAsentamiento   =             ucfirst(strtolower(sanitizeString($_POST['nombreAsentamiento'])));
  $tipoVialidad         =             $_POST['tipoVialidad'];
  
  $nombreVialidad       =             ucfirst(strtolower(sanitizeString($_POST['nombreVialidad'])));
  $nombreLocalidad      =             ucfirst(strtolower(sanitizeString($_POST['nombreLocalidad'])));
  $nombreMunicipio      =             $_POST['nombreDomicilioMunicipio'];
  $refVial              =             ucfirst(strtolower(sanitizeString($_POST['referenciaVialidad']))); #referenciaVialidad
  $actEco               =             $_POST['tipoActividadEconomica']; #actividadEconomica

    
}

  $select = "SELECT * FROM personafisicaproyecto WHERE folioImpreso =  '{$Folio}'";
  $select = utf8_decode($select);

  $result = queryMySql("$select");

  if(!$result) die("No se pudo extraer los datos de la tabla");

  $dato = $result -> fetch_array(MYSQLI_NUM);



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Datos del Proyecto Persona Física</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="uestiloFisica.css">
</head>
<body>

<div class="MarcoDatos"> 
<form method="post" action="uconceptosApoyoPF.php">
  



<input type ="hidden" name ="folio" value="<?php echo $Folio; ?>"> 
<input type ="hidden" name ="dirReg" value="<?php echo $dirReg; ?> ">
<input type ="hidden" name ="municipio" value="<?php echo $municipio; ?> ">
<input type ="hidden" name ="nombre" value="<?php echo $nombre; ?> ">
<input type ="hidden" name ="genero" value="<?php echo $genero; ?> ">
<input type ="hidden" name ="fechaNacimiento" value="<?php echo $fechaNacimiento; ?> ">
<input type ="hidden" name ="nacionalidad" value="<?php echo $nacionalidad; ?> ">
<input type ="hidden" name ="EstadoCivil" value="<?php echo $EstadoCivil; ?> ">
<input type ="hidden" name ="estadoNacimiento" value="<?php echo $estadoNacimiento; ?> ">
<input type ="hidden" name ="telefono" value="<?php echo $telefono; ?> ">
<input type ="hidden" name ="correo" value="<?php echo $correo; ?> ">
<input type ="hidden" name ="tipoIdentificacion" value="<?php echo $tipoIdentificacion; ?> ">
<input type ="hidden" name ="numIdentificacion" value="<?php echo $numIdentificacion; ?> ">
<input type ="hidden" name ="curp" value="<?php echo $curp; ?> ">
<input type ="hidden" name ="tipoDomicilio" value="<?php echo $tipoDomicilio; ?> ">
<input type ="hidden" name ="tipoAsentamiento" value="<?php echo $tipoAsentamiento; ?> ">
<input type ="hidden" name ="nombreAsentamiento" value="<?php echo $nombreAsentamiento; ?> ">
<input type ="hidden" name ="tipoVialidad" value="<?php echo $tipoVialidad; ?> ">
<input type ="hidden" name ="nombreVialidad" value="<?php echo $nombreVialidad; ?> ">
<input type ="hidden" name ="nombreLocalidad" value="<?php echo $nombreLocalidad; ?> ">
<input type ="hidden" name ="nombreMunicipio" value="<?php echo $nombreMunicipio; ?> ">
<input type ="hidden" name ="refVial" value="<?php echo $refVial; ?> ">
<input type ="hidden" name ="actEco" value="<?php echo $actEco; ?> ">


<h1 >Datos del Proyecto para Persona Física</h1>



<p>Nombre del proyecto</p>	
<input type="text" name="NombreProyecto" required="required"  placeholder="Ej: Estufa Ecológica" maxlength="80" value="<?php echo $dato[2]; ?>">

<br> <br>

<div class="antiguedad">
<p>Antiguedad del proyecto</p>

<select name="AntiguedadProyecto" required>
	<option value="<?php echo $dato[3]; ?>"><?php echo utf8_decode($dato[3]); ?></option>
	<option value="Antiguedad en años">Antiguedad en años</option>
	<option value="Continuidad">Continuidad</option>
	<option value="Nuevo">Nuevo</option>
	
	

</select>


<p>Teléfono</p>
<input type="text" name="TelefonoProyecto" placeholder="Ej: 442 255 2556" maxlength="10"  value="<?php echo $dato[4]; ?>">

<p>Correo Electrónico</p>
<input type="text" name="CorreoElectronicoProyecto" id="correo" placeholder="proyectoSedea@sedea.com" maxlength="80" value="<?php echo $dato[5]; ?>">

</div>


<?php 

$dia  = substr($dato[6], 0,2);

$mes = substr($dato[6], 3,2);
$anio = substr($dato[6],6,4);


 ?>

<h3 id="constitucion">Fecha Constitución</h3>
<div class="constitucion">
<p>Selecciona el Día</p>
<select name="DiaFechaConstitucion" required>
    <option value="<?php echo $dia; ?>"><?php echo $dia; ?></option>
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
        <option value="31">31</option>
    
  </select>

  <p>Selecciona el Mes</p>
  <select name="MesFechaConstitucion" required>
    	  <option value="<?php echo $mes ?>"><?php echo $mes ?></option>
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
       <option value="<?php echo $anio ?>"><?php echo $anio ?></option>
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

</div>

<h2 id="domiciliotitulo">Domicilio del proyecto</h2>

<div class="municipio">

<p>Selecciona el Municipio</p>
    <Select name="NombreMunicipioProyecto" required>
    <option value="<?php echo $dato[13]; ?>"><?php echo $dato[13]; ?></option>
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

<p>Tipo de domicilio</p>

<select name="TipoDomicilioProyecto" required>
	<option  value="<?php echo $dato[7]; ?>"><?php echo $dato[7]; ?></option>
	<option  value="Rural">Rural</option>
	<option  value="Urbano">Urbano</option>
	
</select>

<p>Tipo de Asentamiento</p>

<select name="TipoAsentamientoProyecto" required>
	<option value="<?php echo $dato[8]; ?>"><?php echo $dato[8]; ?></option>
	<option value="Colonia">Colonia</option>
	<option value="Ejido">Ejido</option>
	<option value="Hacienda">Hacienda</option>
	<option value="Pueblo">Pueblo</option>
	<option value="Rancho">Rancho</option>
	<option value="Otro">Otro</option>
	
	
</select>




<p>Tipo de la vialidad</p>

<select name="TipoVialidadProyecto" required>
  <option value="<?php echo $dato[10]; ?>"><?php echo $dato[10]; ?></option>
  <option value="Calle">Calle</option>
  <option value="Callejón">Callejón</option>
  <option value="Carretera">Carretera</option>
  <option value="Camino">Camino</option>
  <option value="Privada">Privada</option>
  <option value="Otro">Otro</option>

</select>

</div>
<div class="asentamiento">
<p>Nombre del Asentamiento</p>
<input type="text" name="NombreAsentamientoProyecto" required="required" maxlength="80" value="<?php echo $dato[9]; ?>">


<p>Nombre de la Vialidad</p>
<input type="text" name="NombreVialidadProyecto" maxlength="80" value="<?php echo $dato[11]; ?>"> 

<p>Nombre de la Localidad</p>
<input type="text" name="NombreLocalidadProyecto" maxlength="80" value="<?php echo $dato[12]; ?>">


<p>Referencia de la Vialidad</p>
<input type="text" name="ReferenciaVialidadProyecto" maxlength="50" value="<?php echo $dato[14]; ?>"> 
</div>
<br> <br>
<input type="submit" name="DatosProyectoPF" value="Siguiente" class="boton" id="ubicaciondp">
<br>

</form>
<br>

<a href="/sedea/index.php"><button class="boton" id="ubicaciondp">Menú Principal</button></a>
</div>


 
</body>
</html>