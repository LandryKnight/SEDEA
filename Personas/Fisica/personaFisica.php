<?php 

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Datos Persona Física</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
<body>

<div class="Marco">


<form action="DatosProyectoPF.php" method="post">




 <h1>Persona Física</h1>
 <h2>Datos de la Ventanilla Receptora</h2>


  

   <div class="regional">

  <p> Selecciona la Dirección Regional</p> 
  <select name="DireccionRegional"  required> 
    <option value="">Sin Seleccionar</option>
    <option value="Cadereyta de Montes">Cadereyta de Montes</option>
    <option value="Jalpan de Serra">Jalpan de Serra</option>
    <option value="Querétaro">Querétaro</option>
    <option value="San Juan del Río">San Juan del Río</option>
  </select>
  
  


<p>Selecciona el Municipio</p>
   <Select name="ventanillaMunicipio" required>
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

  
  <h2>Datos del Solicitante - Persona Física </h2> 
  
  <div class="centro">
  <p>Nombre</p>
  <input type="text" name="nombresPF" placeholder=" Ej: María Guadalupe" required="required" maxlength="40">

  <p>Apellido Paterno</p>
  <input type="text" name="apellidoPa" placeholder=" Ej: Fernández" required="required" maxlength="20">

  <p>Apellido Materno</p>
  <input type="text" name="apellidoMa" placeholder="Ej: Gutierrez" required="required" maxlength="20">
  
 </div>
  

 
  <h3 id="titulo2">Selecciona la Fecha de Nacimiento</h3>
   <div class="nacimiento" >
  <p>Selecciona el Día </p>
        <select name="DiaFechaNacimiento" required >
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
        <option value="31">31</option>
    
  </select>
  <p>Selecciona el Mes</p>
  <select name="MesFechaNacimiento" required >
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
    
  </select>
  <p>Selecciona el Año</p>
  <select name="AnioFechaNacimiento" required>
    <option value="">Sin Seleccionar</option>
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
   
   <div class="genero">
  <p>Selecciona el Género</p>
  <select name="genero" required>
    <option value="">Sin Seleccionar</option>
    <option value="Masculino">Masculino</option>
    <option value="Femenino">Femenino</option>
  </select>

  <p>Selecciona la Nacionalidad</p>
    <select name="Nacionalidad" required >
    <option value="">Sin Seleccionar</option>
    <option value="Mexicana">Mexicana</option>
    <option value="Extranjera">Extranjera</option>
  </select> 
  

  <P>Selecciona el Estado Civil</P>
    <select name="EstadoCivil" required>
    <option value="">Sin Seleccionar</option>
    <option value="Soltero">Soltero</option>
    <option value="Casado">Casado</option>
    <option value="Divorciado">Divorciado</option>
    <option value="Unión Libre">Unión Libre</option>
  </select>

  </div>
  <div class="genero">

  <p>Selecciona el Estado de Nacimiento</p>
  <select name="EstadoNacimiento" required >
       <option value="">Sin Seleccionar</option>
       <option value="Aguascalientes">Aguascalientes</option>
       <option value="Baja California B.C.">Baja California B.C.</option>
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
  <input type="text" name="Telefono" placeholder="Ej: 442 031 4120" required="required" maxlength="10">


  <p>Correo Electrónico</p>
  <input type="text" name="Correo" placeholder="Ej: sedea@gmail.com"  maxlength="80">

</div>

<div class="genero">
  <p>Tipo de Identificación</p>
  <select name="tipoIdentificacion" required>
    <option value="">Sin Seleccionar</option>
    <option value="INE">INE - IFE</option>
  </select>
  


  <p>Numero de Identificación</p>
  <input type="text" name="numIdentificacion" required="required" placeholder="Ej:897456789582" maxlength="15">


  <p>Curp</p>
  <input type="text" name="Curp" required="required" placeholder="Ej:SDFDS445678POD" maxlength="20">

 </div>


   <h2 id="titulo">Domicilio</h2>



 <div class="domicilio">

  <p>Selecciona el Nombre del Municipio</p>
   <Select name="nombreDomicilioMunicipio"  required>
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



   <p>Selecciona el Tipo de Domicilio</p>
   <select name="tipoDomicilio" required>
    <option value="">Sin Seleccionar</option>
    <option value="Urbano">Urbano</option>
    <option value="Rural">Rural</option>
   </select>
  
   <p>Selecciona el Tipo de Vialidad</p>
   <select name="tipoVialidad" required>
      <option value="">Sin Seleccionar</option>
      <option value="Calle">Calle</option>  
      <option value="Callejón">Callejón</option>
      <option value="Privada">Privada</option>
      <option value="Carretera">Carretera</option>
      <option value="Camino">Camino</option>
      <option value="Otro">Otro</option>
   </select>


   <p>Selecciona el Tipo de Asentamiento</p>
   <select name="tipoAsentamiento"  required>
    <option value="">Sin Seleccionar</option>
    <option value="Colonia">Colonia</option>
    <option value="Pueblo">Pueblo</option>
    <option value="Rancho">Rancho</option>
    <option value="Ejido">Ejido</option>
    <option value="Hacienda">Hacienda</option>
    <option value="Otro">Otro</option>
   </select>

 
   
  

</div>

   
   <div class="asentamiento">
 <p>Nombre del Asentamiento</p>
   <input type="Text" name="nombreAsentamiento" placeholder="Ej: Pozo Blanco" required="required" maxlength="50">

     
      <p>Nombre de la Vialidad</p>
   <input type="text" name="nombreVialidad" required="required" maxlength="50">



  

 
   <p>Nombre de la Localidad </p>
   <input type="text" name="nombreLocalidad" placeholder="Ej: Pozo Blanco" required="required" maxlength="50">

   <p>Referencia de Vialidad</p>
   <input type="text" name="referenciaVialidad" maxlength="50">







</div>

   <h2 id="actividad">Actividad Económica</h2>
   <p>Seleccion el Tipo de Actividad</p>
   <select name="tipoActividadEconomica" required >
    <option value="">Sin Seleccionar</option>
    <option value="Agrícola">Agrícola</option>
    <option value="Pecuaria">Pecuaria</option>
    <option value="Pesca/Acuicola">Pesca/Acuícola</option>
    <option value="Otra">Otra</option>
   </select>


<br>


<input type="submit" name="EnviarPF" value="Siguiente" class="boton" id="ubicacion">
<br>

</form>

<a href="http://localhost/sedea/personas/fisica/eleccionpf.php"><button class="boton" id="ubicacion">Regresar</button></a>
<br>
<a href="http://localhost/sedea/index.php"><button class="boton" id="ubicacion">Menú Principal</button></a>


</div>
</body>
</html>

