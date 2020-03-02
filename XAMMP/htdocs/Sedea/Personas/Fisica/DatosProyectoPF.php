<?php 
/*
require_once('conect.php');

$funcion = new funcion();

$con = $funcion -> conectar();



 global $folioImpreso;

 
if(isset($_POST['EnviarPF'])){

  $folioImpreso = strtoupper(sanitizeString($_POST['FolioImpreso']));

 
  $direccionRegional = $_POST['DireccionRegional'];
  $municipio = $_POST['ventanillaMunicipio'];
  $nombres    = ucfirst(strtolower(sanitizeString($_POST['nombresPF'])));
  $apellidoPa = ucfirst(strtolower(sanitizeString($_POST['apellidoPa'])));
  $apellidoMa = ucfirst(strtolower(sanitizeString($_POST['apellidoMa'])));

  $nombre = $nombres." ".$apellidoPa." ".$apellidoMa;

  $genero = $_POST['genero'];

  $diaNacimiento  = $_POST['DiaFechaNacimiento'];
  $mesNacimiento  = $_POST['MesFechaNacimiento'];
  $anioNacimiento  = $_POST['AnioFechaNacimiento'];

  $fechaNacimiento = $diaNacimiento."/".$mesNacimiento."/".$anioNacimiento;
  #echo $fechaNacimiento;

  $nacionalidad = $_POST['Nacionalidad'];
  $EstadoCivil = $_POST['EstadoCivil'];
  $estadoNacimiento = $_POST['EstadoNacimiento'];
  $telefono = sanitizeString($_POST['Telefono']);
  $correoElectronico = strtolower(sanitizeString($_POST['Correo']));
  $tipoIdentificacion = $_POST['tipoIdentificacion'];
  $numIdentificacion = sanitizeString($_POST['numIdentificacion']);
  $curp = strtoupper(sanitizeString($_POST['Curp']));
  $tipoDomicilio = $_POST['tipoDomicilio'];
  $tipoAsentamiento = $_POST['tipoAsentamiento'];
  $nombreAsentamiento = ucfirst(strtolower(sanitizeString($_POST['nombreAsentamiento'])));
  $tipoVialidad = $_POST['tipoVialidad'];
  $nombreVialidad  = ucfirst(strtolower(sanitizeString($_POST['nombreVialidad'])));
  $nombreLocalidad = ucfirst(strtolower(sanitizeString($_POST['nombreLocalidad'])));
  $nombreMunicipio = $_POST['nombreDomicilioMunicipio'];
  $referenciaVialidad = ucfirst(strtolower(sanitizeString($_POST['referenciaVialidad'])));
  $actividadEconomica = $_POST['tipoActividadEconomica'];

    
}

  

 $insertPF = "INSERT INTO personafisicaDatos(sfolioImpresoPF,sventanidirRegional,sventaniMunicipio,snombre,sgenero,sfechaNacimiento,snacionalidad,sestadoCivil,sestadoNacimiento,
stelefono,scorreoElectronico,stipoIdentificacion,snumeroIdentificacion,scurp,stipoDomicilio,stipoAsentamiento,snombreAsentamiento,
stipoVialidad,snombreVialidad,snombreLocalidad,snombreMunicipio,sreferenciaVialidad,stipoActividad ) VALUES ('{$folioImpreso}','{$direccionRegional}','{$municipio}','{$nombre}','{$genero}','{$fechaNacimiento}','{$nacionalidad}','{$EstadoCivil}','{$estadoNacimiento}','{$telefono }','{$correoElectronico}','{$tipoIdentificacion}','{$numIdentificacion}','{$curp}','{$tipoDomicilio}','{$tipoAsentamiento}','{$nombreAsentamiento}','{$tipoVialidad}','{$nombreVialidad}','{$nombreLocalidad}','{$nombreMunicipio}','{$referenciaVialidad}','{$actividadEconomica}');";

 $insertPF = utf8_encode($insertPF);
 

 echo $insertPF;

    /* hacer una consulta para saber si el folio ya existe y si existe no hacer el envio del insert
  if(){
        }



         if($con -> query($insertPF)){
        echo "Datos de Persona Física Registrados <br>";
          } else {
          echo $con -> error, "<br>";
            echo $insertPF, "<br>";
        }


    */

      
     


 
 





/*
if(function_exists("sanitizeString")){
  echo "existe la funcion";
}else {
  echo "no existe la funcion";
}


#function sanitizeString($var){

  if(get_magic_quotes_gpc())
    $var = stripcslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
  return $var;
}


*/




#conceptosApoyoPF.php

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Datos del Proyecto Persona Física</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<div class="Marco"> 
<form method="post" action="conceptosApoyoPF.php">

<h1 id="titulo3">Datos del Proyecto para Persona Física</h1>

<input type="hidden" name="IfolioImpreso" value="<?php echo $folioImpreso; ?>">

<p>Nombre del proyecto</p>	
<input type="text" name="NombreProyecto" required="required"  placeholder="Ej: Estufa Ecológica" maxlength="80">


<div class="antiguedad">
<p>Antiguedad del proyecto</p>

<select name="AntiguedadProyecto">
	<option value="Sin Seleccionar">Sin Seleccionar</option>
	<option value="Antiguedad en años">Antiguedad en años</option>
	<option value="Continuidad">Continuidad</option>
	<option value="Nuevo">Nuevo</option>
	
	

</select>


<p>Telefono</p>
<input type="text" name="TelefonoProyecto" placeholder="Ej: 442 255 2556" maxlength="10" >

<p>Correo Electrónico</p>
<input type="text" name="CorreoElectronicoProyecto" id="correo" placeholder="proyectoSedea@sedea.com" maxlength="120">

</div>

<h3 id="titulo">Fecha Constitución</h3>
<div class="constitucion">
<p>Selecciona el Día</p>
<select name="DiaFechaConstitucion">
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
        <option value="31">31</option>
    
  </select>

  <p>Selecciona el Mes</p>
  <select name="MesFechaConstitucion">
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
  <select name="AnioFechaConstitucion">
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

<h2 id="titulo2">Domicilio del proyecto</h2>
<div class="municipio">
<p>Selecciona el Municipio</p>
    <Select name="NombreMunicipioProyecto">
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

<p>Tipo de domicilio</p>

<select name="TipoDomicilioProyecto">
	<option  value="Sin Seleccionar">Sin Seleccionar</option>
	<option  value="Rural">Rural</option>
	<option  value="Urbano">Urbano</option>
	
</select>

<p>Tipo de Asentamiento</p>

<select name="TipoAsentamientoProyecto">
	<option value="Sin Seleccionar">Sin Seleccionar</option>
	<option value="Colonia">Colonia</option>
	<option value="Ejido">Ejido</option>
	<option value="Hacienda">Hacienda</option>
	<option value="Pueblo">Pueblo</option>
	<option value="Rancho">Rancho</option>
	<option value="Otro">Otro</option>
	
	
</select>




<p>Tipo de la vialidad</p>

<select name="TipoVialidadProyecto">
  <option value="Sin Seleccionar">Sin Seleccionar</option>
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
<input type="text" name="NombreAsentamientoProyecto" maxlength="80">


<p>Nombre de la Vialidad</p>
<input type="text" name="NombreVialidadProyecto" maxlength="80">

<p>Nombre de la Localidad</p>
<input type="text" name="NombreLocalidadProyecto" maxlength="80">


<p>Referencia de la Vialidad</p>
<input type="text" name="ReferenciaVialidadProyecto" maxlength="50"> 
</div>
<br> <br>
<input type="submit" name="DatosProyectoPF" value="Enviar" class="boton">
<br>
</div>
</form>


</body>
</html>