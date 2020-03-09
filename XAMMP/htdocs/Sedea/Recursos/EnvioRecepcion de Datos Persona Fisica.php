
#envio de datos de Persona Fisica 
<input type="hidden" name="IfolioImpreso" value="<?php echo $folioImpreso; ?>">
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



#recepcion de datos de Persona Fisica

  $folioImpreso  = 				sanitizeString($_POST['IfolioImpreso']);
  $dirReg = 	 $_POST['dirReg'];
  $municipio = 	 $_POST['municipio'];
  $nombre = 	 $_POST['nombre'];
  $genero = 	 $_POST['genero'];
  $fechaNacimiento = 	 $_POST['fechaNacimiento'];
  $nacionalidad = 	 $_POST['nacionalidad'];
  $EstadoCivil = 	 $_POST['EstadoCivil'];
  $estadoNacimiento  = 	 $_POST['estadoNacimiento'];
  $telefono = 	 $_POST['telefono'];
  $correo = 	 $_POST['correo'];
  $tipoIdentificacion = 	 $_POST['tipoIdentificacion'];
  $numIdentificacion = 	 $_POST['numIdentificacion'];
  $curp = 	 $_POST['curp'];
  $tipoDomicilio = 	 $_POST['tipoDomicilio'];
  $tipoAsentamiento = 	 $_POST['tipoAsentamiento'];
  $nombreAsentamiento = 	 $_POST['nombreAsentamiento'];
  $tipoVialidad = 	 $_POST['tipoVialidad'];
  $nombreVialidad = 	 $_POST['nombreVialidad'];
  $nombreLocalidad = 	 $_POST['nombreLocalidad'];
  $nombreMunicipio = 	 $_POST['nombreMunicipio'];
  $refVial = 	 $_POST['refVial'];
  $actEco = 	 $_POST['actEco'];
