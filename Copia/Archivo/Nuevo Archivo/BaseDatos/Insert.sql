 $folioImpreso = $_POST['FolioImpreso'];
  $direccionRegional = $_POST['DireccionRegional'];
  $municipio = $_POST['ventanillaMunicipio'];
  $nombre = $_POST['nombreCompleto'];
  $genero = $_POST['genero'];

  $diaNacimiento  = $_POST['DiaFechaNacimiento'];
  $mesNacimiento  = $_POST['MesFechaNacimiento'];
  $anioNacimiento  = $_POST['AnioFechaNacimiento'];

  $fechaNacimiento = $diaNacimiento."/".$mesNacimiento."/".$anioNacimiento;
  echo $fechaNacimiento;

  $nacionalidad = $_POST['Nacionalidad'];
  $EstadoCivil = $_POST['EstadoCivil'];
  $estadoNacimiento = $_POST['EstadoNacimiento'];
  $telefono = $_POST['Telefono'];
  $correoElectronico = $_POST['Correo'];
  $tipoIdentificacion = $_POST['tipoIdentificacion'];
  $numIdentificacion = $_POST['numIdentificacion'];
  $curp = $_POST['Curp'];
  $tipoDomicilio = $_POST['tipoDomicilio'];
  $tipoAsentamiento = $_POST['tipoAsentamiento'];
  $nombreAsentamiento = $_POST['nombreAsentamiento'];
  $tipoVialidad = $_POST['tipoVialidad'];
  $nombreVialidad  = $_POST['nombreVialidad'];
  $nombreLocalidad = $_POST['nombreLocalidad'];
  $nombreMunicipio = $_POST['nombreDomicilioMunicipio'];
  $referenciaVialidad = $_POST['referenciaVialidad'];
  $actividadEconomica = $_POST['tipoActividadEconomica'];


/*insert persona fisica */


INSERT INTO personafisica(folioImpreso,ventanidirRegional,ventaniMunicipio,
nombre,
genero,
fechaNacimiento,
nacionalidad,
estadoCivil,
estadoNacimiento,
telefono,
correoElectronico,
tipoIdentificacion,
numeroIdentificacion,
curp,
tipoDomicilio,
tipoAsentamiento,
nombreAsentamiento,
tipoVialidad,
nombreVialidad,
nombreLocalidad,
nombreMunicipio,
referenciaVialidad,
tipoActividad ) VALUES ('{$folioImpreso}','{$direccionRegional}','{$municipio}','{$nombre}','{$genero}','{$fechaNacimiento}','{$nacionalidad}','{$EstadoCivil}','{$estadoNacimiento}','{$telefono }','{$correoElectronico}','{$tipoIdentificacion}','{$numIdentificacion}','{$curp}','{$tipoDomicilio}','{$tipoAsentamiento}','{$nombreAsentamiento}','{$tipoVialidad}','{$nombreVialidad}','{$nombreLocalidad}','{$nombreMunicipio}','{$referenciaVialidad}','{$actividadEconomica}');";








"INSERT INTO personafisica(folioImpreso,ventanidirRegional,ventaniMunicipio,nombre,genero,fechaNacimiento,nacionalidad,estadoCivil,estadoNacimiento,telefono)

VALUES ('{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}','{}');";