
<?php 


if(isset($_POST['DatosPersonalesRepre'])){

 #Persona Moral
$FolioImpreso                       = strtoupper(sanitizeString($_POST['FolioImpreso']));
$VentanillaDireccionRegional        = ($_POST['VentanillaDireccionRegional']);
$VentanillaMunicipio                = ($_POST['VentanillaMunicipio']);

#Organizacion
$NombreOrganizacion                 = ucfirst(strtolower(sanitizeString($_POST['NombreOrganizacion'])));
$TipoOrganizacion                   = ucfirst(strtolower(sanitizeString($_POST['TipoOrganizacion'])));
$NumeroTelefonoOrganizacion         = sanitizeString($_POST['NumeroTelefonoOrganizacion']);
$CorreoElectronicoOrganizacion      = strtolower(sanitizeString($_POST['CorreoElectronicoOrganizacion']));
                


$FechaConstitucion                  = ($_POST['FechaConstitucion']);   

$TipoDomicilioOrganizacion          = ($_POST['TipoDomicilioOrganizacion']);
$TipoAsentamientoOrganizacion       = ($_POST['TipoAsentamientoOrganizacion']);
$NombreAsentamientoOrganizacion     = sanitizeString(($_POST['NombreAsentamientoOrganizacion']));
$TipoVialidadOrganizacion           = ($_POST['TipoVialidadOrganizacion']);
$NombreVialidadOrganizacion         = ucfirst(sanitizeString($_POST['NombreVialidadOrganizacion']));
$NombreLocalidadOrganizacion        = ucfirst(sanitizeString($_POST['NombreLocalidadOrganizacion']));
$NombreMunicipioOrganizacion        = ($_POST['NombreMunicipioOrganizacion']);
$ReferenciaVialidadOrganizacion     = ucfirst(sanitizeString($_POST['ReferenciaVialidadOrganizacion']));
$TipoActividadEconomicaOrganizacion = ($_POST['TipoActividadEconomicaOrganizacion']);


#Datos Personales Representante 
$NombreRepre                        = ucfirst(strtolower(sanitizeString($_POST['nombresPF'])));     
$ApellidoPaRepre                    = ucfirst(strtolower(sanitizeString($_POST['apellidoPa'])));
$ApellidoMaRepre                    = ucfirst(strtolower(sanitizeString($_POST['apellidoMa'])));

$NombreRepresentante                = $NombreRepre." ".$ApellidoPaRepre." ".$ApellidoMaRepre;
$GeneroRepresentante                = ($_POST['GeneroRepresentante']);

$DiaFechaNacimientoRepresentante      = ($_POST['DiaFechaNacimientoRepresentante']);
$MesFechaNacimientoRepresentante      = ($_POST['MesFechaNacimientoRepresentante']);
$AnioFechaNacimientoRepresentante     = ($_POST['AnioFechaNacimientoRepresentante']);

$FechaNacimientoRepresentante       = $DiaFechaNacimientoRepresentante."/".$MesFechaNacimientoRepresentante."/".$AnioFechaNacimientoRepresentante;

$NacionalidadRepresentante          = ($_POST['NacionalidadRepresentante']);
$EstadoCivilRepresentante           = ($_POST['EstadoCivilRepresentante']);
$EstadoNacimientoRepresentante      = ($_POST['EstadoNacimientoRepresentante']);
$TelefonoRepresentante              = sanitizeString(($_POST['TelefonoRepresentante']));
$CorreoElectronicoRepresentante     = strtolower(sanitizeString($_POST['CorreoElectronicoRepresentante']));
$TipoIdentificacionRepresentante    = ($_POST['TipoIdentificacionRepresentante']);
$NumeroIdentificacionRepresentante  = sanitizeString($_POST['NumeroIdentificacionRepresentante']);
$CurpRepresentante                  = strtoupper(sanitizeString($_POST['CurpRepresentante']));
$TipoDomicilioRepresentante         = ($_POST['TipoDomicilioRepresentante']);
$TipoAsentamientoRepresentante      = ($_POST['TipoAsentamientoRepresentante']);
$NombreAsentamientoRepresentante     = ucfirst(strtolower(sanitizeString($_POST['NombreAsentamientoRepresentante'])));
$TipoVialidadRepresentante          = ($_POST['TipoVialidadRepresentante']);
$NombreVialidadRepresentante        = ucfirst(strtolower(sanitizeString($_POST['NombreVialidadRepresentante'])));
$NombreLocalidadRepresentante       = ucfirst(strtolower(sanitizeString($_POST['NombreLocalidadRepresentante'])));
$NombreMunicipioRepresentante       = ($_POST['NombreMunicipioRepresentante']);
$ReferenciaVialidadRepresentante    = ucfirst(strtolower(sanitizeString($_POST['ReferenciaVialidadRepresentante'])));



}


  



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Dstos Proyecto Persona Moral</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<div class="DatosProyectoPM">
<form method="POST" action="conceptosApoyoPM.php">


<!--- Persona Moral -->
<input type="hidden" name="FolioImpreso"    value=" <?php echo $FolioImpreso; ?> ">
 <input type="hidden" name="VentanillaDireccionRegional"    value=" <?php echo $VentanillaDireccionRegional; ?> ">
 <input type="hidden" name="VentanillaMunicipio"    value=" <?php echo $VentanillaMunicipio; ?> ">
 <input type="hidden" name="NombreOrganizacion"   value=" <?php echo $NombreOrganizacion; ?> ">
 <input type="hidden" name="TipoOrganizacion"   value=" <?php echo $TipoOrganizacion; ?> ">
 <input type="hidden" name="NumeroTelefonoOrganizacion"   value=" <?php echo $NumeroTelefonoOrganizacion; ?> ">
 <input type="hidden" name="CorreoElectronicoOrganizacion"    value=" <?php echo $CorreoElectronicoOrganizacion; ?> ">
 <input type="hidden" name="FechaConstitucion "   value=" <?php echo $FechaConstitucion; ?> ">
 <input type="hidden" name="TipoDomicilioOrganizacion"    value=" <?php echo $TipoDomicilioOrganizacion; ?> ">
 <input type="hidden" name="TipoAsentamientoOrganizacion"   value=" <?php echo $TipoAsentamientoOrganizacion; ?> ">
 <input type="hidden" name="NombreAsentamientoOrganizacion"  value=" <?php echo $NombreAsentamientoOrganizacion; ?> ">
 <input type="hidden" name="TipoVialidadOrganizacion"   value=" <?php echo $TipoVialidadOrganizacion; ?> ">
 <input type="hidden" name="NombreVialidadOrganizacion"  value=" <?php echo $NombreVialidadOrganizacion; ?> ">
 <input type="hidden" name="NombreLocalidadOrganizacion"  value=" <?php echo $NombreLocalidadOrganizacion; ?> ">
 <input type="hidden" name="NombreMunicipioOrganizacion"  value=" <?php echo $NombreMunicipioOrganizacion; ?> ">
 <input type="hidden" name="ReferenciaVialidadOrganizacion"  value=" <?php echo $ReferenciaVialidadOrganizacion; ?> ">
 <input type="hidden" name="TipoActividadEconomicaOrganizacion" value=" <?php echo $TipoActividadEconomicaOrganizacion; ?> ">



<!--- Datos Personales  Representante -->

 
 <input type="hidden" name="NombreRepresentante"    value="<?php echo $NombreRepresentante; ?>">
 <input type="hidden" name="GeneroRepresentante"    value="<?php echo $GeneroRepresentante; ?>">

 <input type="hidden" name="FechaNacimientoRepresentante"   value="<?php echo $FechaNacimientoRepresentante; ?>">
 <input type="hidden" name="NacionalidadRepresentante"    value="<?php echo $NacionalidadRepresentante; ?>">
 <input type="hidden" name="EstadoCivilRepresentante"   value="<?php echo $EstadoCivilRepresentante; ?>">
 <input type="hidden" name="EstadoNacimientoRepresentante"    value="<?php echo $EstadoNacimientoRepresentante; ?>">
 <input type="hidden" name="TelefonoRepresentante"    value="<?php echo $TelefonoRepresentante; ?>">
 <input type="hidden" name="CorreoElectronicoRepresentante"   value="<?php echo $CorreoElectronicoRepresentante; ?>">
 <input type="hidden" name="TipoIdentificacionRepresentante"    value="<?php echo $TipoIdentificacionRepresentante; ?>">
 <input type="hidden" name="NumeroIdentificacionRepresentante"    value="<?php echo $NumeroIdentificacionRepresentante; ?>">
 <input type="hidden" name="CurpRepresentante"  value="<?php echo $CurpRepresentante; ?>">
 <input type="hidden" name="TipoDomicilioRepresentante"   value="<?php echo $TipoDomicilioRepresentante; ?>">
 <input type="hidden" name="TipoAsentamientoRepresentante"    value="<?php echo $TipoAsentamientoRepresentante; ?>">
 <input type="hidden" name="NombreAsentamientoRepresentante"   value="<?php echo $NombreAsentamientoRepresentante; ?>">
 <input type="hidden" name="TipoVialidadRepresentante"  value="<?php echo $TipoVialidadRepresentante; ?>">
 <input type="hidden" name="NombreVialidadRepresentante"    value="<?php echo $NombreVialidadRepresentante; ?>">
 <input type="hidden" name="NombreLocalidadRepresentante"   value="<?php echo $NombreLocalidadRepresentante; ?>">
 <input type="hidden" name="NombreMunicipioRepresentante"   value="<?php echo $NombreMunicipioRepresentante; ?>">
 <input type="hidden" name="ReferenciaVialidadRepresentante"    value="<?php echo $ReferenciaVialidadRepresentante; ?>">









<div class="NombreProyecto">
<p>Nombre del proyecto</p>	
<input type="text" name="NombreProyecto" required="required" placeholder="Ej: Estufa Ecológica" maxlength="80">



<p>Antiguedad del proyecto</p>

<select name="AntiguedadProyecto">
	<option value="Sin Seleccionar">Sin Seleccionar</option>
	<option value="Antiguedad en años">Antiguedad en años</option>
	<option value="Continuidad">Continuidad</option>
	<option value="Nuevo">Nuevo</option>
	
	

</select>


<p>Telefono</p>
<input type="text" name="TelefonoProyecto" placeholder="Ej: 442 255 2556" maxlength="10">

<p>Correo Electronico</p>
<input type="text" name="CorreoElectronicoProyecto" placeholder="proyectoSedea@sedea.com" maxlength="120">

</div>

<h2> Fecha Constitución</h2>
<div class="FechaConstitucion">
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
  <select name="MesFechaConstitucion" required="required">
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
  <select name="AnioFechaConstitucion" required="required">
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

</div>

<h2>Domicilio del proyecto</h2>


<div class="TipoDomicilioProyecto">
<p>Tipo de domicilio</p>

<select name="TipoDomicilioProyecto">
	<option  value="Sin Seleccionar">Sin Seleccionar</option>
	<option  value="Rural">Rural</option>
	<option  value="Urbano">Urbano</option>
	
</select>

<p>Nombre del Asentamiento</p>
<input type="text" name="NombreAsentamientoProyecto" maxlength="80">

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



<p>Nombre de la vialidad</p>
<input type="text" name="NombreVialidadProyecto" maxlength="80">

<p>Nombre de la localidad</p>
<input type="text" name="NombreLocalidadProyecto" maxlength="80">




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



<p>Referencia de la vialidad</p>
<input type="text" name="ReferenciaVialidadProyecto" maxlength="50"> <br> <br>
</div>
<input type="submit" name="DatosProyectoPM" value="Enviar Información" class="boton" >

</div>
</form>
</body>
</html>