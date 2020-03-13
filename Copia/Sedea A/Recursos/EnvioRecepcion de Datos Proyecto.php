
#envio de datos de proyecto
<input type="hidden" name="IfolioImpreso" value="<?php echo $folioImpreso; ?>">
<input type ="hidden" name ="NombreProyecto" value="<?php echo $NombreProyecto;  ?>">
<input type ="hidden" name ="AntiguedadProyecto" value="<?php echo $AntiguedadProyecto;  ?>">
<input type ="hidden" name ="TelefonoProyecto" value="<?php echo $TelefonoProyecto;  ?>">
<input type ="hidden" name ="CorreoElectronicoProyecto" value="<?php echo $CorreoElectronicoProyecto;  ?>">
<input type ="hidden" name ="FechaConstitucion" value="<?php echo $FechaConstitucion;  ?>">
<input type ="hidden" name ="TipoDomicilioProyecto" value="<?php echo $TipoDomicilioProyecto;  ?>">
<input type ="hidden" name ="TipoAsentamientoProyecto" value="<?php echo $TipoAsentamientoProyecto;  ?>">
<input type ="hidden" name ="NombreAsentamientoProyecto" value="<?php echo $NombreAsentamientoProyecto; ?>">
<input type ="hidden" name ="TipoVialidadProyecto" value="<?php echo $TipoVialidadProyecto;  ?>">
<input type ="hidden" name ="NombreVialidadProyecto" value="<?php echo $NombreVialidadProyecto; ?>">
<input type ="hidden" name ="NombreLocalidadProyecto" value="<?php echo $NombreLocalidadProyecto;  ?>">
<input type ="hidden" name ="NombreMunicipioProyecto" value="<?php echo $NombreMunicipioProyecto;  ?>">
<input type ="hidden" name ="ReferenciaVialidadProyecto" value="<?php echo $ReferenciaVialidadProyecto;  ?>">

#recepcion de datos de proyecto
$NombreProyecto		=	 $_POST['NombreProyecto'];
$AntiguedadProyecto		=	 $_POST['AntiguedadProyecto'];
$TelefonoProyecto		=	 $_POST['TelefonoProyecto'];
$CorreoElectronicoProyecto		=	 $_POST['CorreoElectronicoProyecto'];
$FechaConstitucion		=	 $_POST['FechaConstitucion'];
$TipoDomicilioProyecto		=	 $_POST['TipoDomicilioProyecto'];
$TipoAsentamientoProyecto		=	 $_POST['TipoAsentamientoProyecto'];
$NombreAsentamientoProyecto 		=	 $_POST['NombreAsentamientoProyecto '];
$TipoVialidadProyecto		=	 $_POST['TipoVialidadProyecto'];
$NombreVialidadProyecto 		=	 $_POST['NombreVialidadProyecto '];
$NombreLocalidadProyecto		=	 $_POST['NombreLocalidadProyecto'];
$NombreMunicipioProyecto		=	 $_POST['NombreMunicipioProyecto'];
$ReferenciaVialidadProyecto		=	 $_POST['ReferenciaVialidadProyecto'];
