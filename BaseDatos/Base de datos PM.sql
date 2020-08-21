#Base de datos para persona Moral
drop Database sedeaPM;




#crear la carpeta documentospm para que se guarden los documentos
Create Database sedeapm
  CHARACTER SET utf8
  COLLATE utf8_spanish_ci;





Create table personamoraldatos(
Folio varchar(30) Primary key,
VentDirReg varchar(30), #VentanillaDireccionRegional
VentaMunicipio varchar(30), #VentanillaMunicipio
NOrg varchar(80), #NombreOrganizacion
TipoOrg  varchar(50), #TipoOrganizacion
TelefonoOrg int(10), #NumeroTelefonoOrganizacion
CorreoOrg varchar(120), #CorreoElectronicoOrganizacion
FechaConst varchar(10), #FechaConstitucion
TipoDomicilioOrg varchar(30), #TipoDomicilioOrganizacion
TipoAsentOrg varchar(20), #TipoAsentamientoOrganizacion 
NAsent varchar(50), #NombreAsentamientoOrganizacion
TipoVialOrg varchar(30), #TipoVialidadOrganizacion
NVialOrg varchar(50), #NombreVialidadOrganizacion
NLocalOrg varchar(50), #NombreLocalidadOrganizacion
NMunicipioOrg varchar(30), #NombreMunicipioOrganizacion 
RefVialOrg varchar(50), #ReferenciaVialidadOrganizacion
TipoActEcoOrg varchar(30),#TipoActividadEconomicaOrganizacion
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;






Create Table personamoralproyecto(
idProyecto int Primary Key  auto_increment,
Folio varchar(30),
NProyecto varchar(80), #NombreProyecto 
AntigProyecto varchar(30), #AntiguedadProyecto
TelefonoProyecto varchar(100), #TelefonoProyecto
CorreoProyecto varchar(120), #CorreoElectronicoProyecto
FechaConstitucion varchar(10), #FechaConstitucion
TDomicilioProyecto varchar(30), #TipoDomicilioProyecto
TAsentProyecto varchar(30), #TipoAsentamientoProyecto 
NAsentProyecto varchar(80), #NombreAsentamientoProyecto
TVialProyecto  varchar(30), #TipoVialidadProyecto
NVialProyecto varchar(80), #NombreVialidadProyecto
NLocalProyecto varchar(80), #NombreLocalidadProyecto
NMunicipioProyecto varchar(30), #NombreMunicipioProyecto
RefVialProyecto varchar(50), #ReferenciaVialidadProyecto
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


Create table personamoralrepresentante(
idRepre int Primary Key auto_increment,
Folio varchar(30),
NRepre varchar(80), #NombreRepresentante 
GeneroRepre varchar(30), #GeneroRepresentante
FNacimientoRepre varchar(10), #FechaNacimientoRepresentante
NacionalidadRepre varchar(30), #NacionalidadRepresentante
EstadoCivilRepre  varchar(30), #EstadoCivilRepresentante
EstadoNacimientoRepre varchar(40), #EstadoNacimientoRepresentante
TelefonoRepre int(10), #Numero de telefono representante
CorreoRepre varchar(120), #Correo representante
TipoIdentRepre varchar(500), #tipo de identificacion representante
NumIdentRepre varchar(20), #NumeroIdentificacionRepresentante
CurpRepre varchar(14), #CurpRepresentante
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


Create table personamoralDomiciliorepre(
idDomicilio int Primary Key auto_increment,
Folio varchar(30),
TipoDomicilioRepre varchar(15), #TipoDomicilioRepresentante
TipoAsentamientoRepre varchar(20), #TipoAsentamientoRepresentante
NombreAsentamientoRepre varchar(50), #NombreAsentamientoReprsentante
TipoVialidadRepre varchar(15), #TipoVialidadRepresentante
NombreVialidadRepre  varchar(50), #NombreVialidadRepresentante
NombreLocalidadRepre varchar(30), #NombreLocalidadRepresentante 
NombreMunicipioRepre varchar(30), #NombreMunicipioRepresentante
RefVialRepre varchar(50) #ReferenciaVialidadRepresentante
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




Create Table personamoralconceptosapoyo(
idConcepto int Primary key auto_increment,
Folio varchar(30),
ApoyoSolicitado varchar(35),
UniMedida int(5),
CanSolicitada int(5),
ApoyoEstatalSolicitado varchar(20),
ApoyoMunicipalSolicitado varchar(20),
AportacionBeneficiario varchar(20),
InversionTotal varchar(20),
fechaRegistro varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


#requisitos Generales
Create Table personamoralReqenerales(
idRequisito int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
observaciones varchar(250),
fechaRegistro varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

Create Table personamoralrutaarchivos( 
idarchivo int Primary key auto_increment,
folioImpreso varchar(30) not null,
ruta varchar(250) not null,
fechaRegistro varchar(30)	
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

Create Table personamoralDictamenes(
iddictamen int Primary Key auto_increment,
folioImpreso varchar(30),
nombre varchar(80),
dirRegional varchar(30),  #Ventanilla Direccion regional
estatusdictamen varchar(30),
fechaRegistro varchar(30),
fechaactualizacion varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




Create table zhpersonamoraldatos(
Folio varchar(30) Primary key,
VentDirReg varchar(30), #VentanillaDireccionRegional
VentaMunicipio varchar(30), #VentanillaMunicipio
NOrg varchar(80), #NombreOrganizacion
TipoOrg  varchar(50), #TipoOrganizacion
TelefonoOrg int(10), #NumeroTelefonoOrganizacion
CorreoOrg varchar(120), #CorreoElectronicoOrganizacion
FechaConst varchar(10), #FechaConstitucion
TipoDomicilioOrg varchar(30), #TipoDomicilioOrganizacion
TipoAsentOrg varchar(20), #TipoAsentamientoOrganizacion 
NAsent varchar(50), #NombreAsentamientoOrganizacion
TipoVialOrg varchar(30), #TipoVialidadOrganizacion
NVialOrg varchar(50), #NombreVialidadOrganizacion
NLocalOrg varchar(50), #NombreLocalidadOrganizacion
NMunicipioOrg varchar(30), #NombreMunicipioOrganizacion 
RefVialOrg varchar(50), #ReferenciaVialidadOrganizacion
TipoActEcoOrg varchar(30),#TipoActividadEconomicaOrganizacion

fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




/* telefono correo redundantes */

Create Table zhpersonamoralproyecto(
idProyecto int Primary Key  auto_increment,
Folio varchar(30),
NProyecto varchar(80), #NombreProyecto 
AntigProyecto varchar(30), #AntiguedadProyecto
TelefonoProyecto varchar(100), #TelefonoProyecto
CorreoProyecto varchar(120), #CorreoElectronicoProyecto
FechaConstitucion varchar(10), #FechaConstitucion
TDomicilioProyecto varchar(30), #TipoDomicilioProyecto
TAsentProyecto varchar(30), #TipoAsentamientoProyecto 
NAsentProyecto varchar(80), #NombreAsentamientoProyecto
TVialProyecto  varchar(30), #TipoVialidadProyecto
NVialProyecto varchar(80), #NombreVialidadProyecto
NLocalProyecto varchar(80), #NombreLocalidadProyecto
NMunicipioProyecto varchar(30), #NombreMunicipioProyecto
RefVialProyecto varchar(50), #ReferenciaVialidadProyecto
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


Create table zhpersonamoralrepresentante(
idRepre int Primary Key auto_increment,
Folio varchar(30),
NRepre varchar(80), #NombreRepresentante 
GeneroRepre varchar(30), #GeneroRepresentante
FNacimientoRepre varchar(10), #FechaNacimientoRepresentante
NacionalidadRepre varchar(30), #NacionalidadRepresentante
EstadoCivilRepre  varchar(30), #EstadoCivilRepresentante
EstadoNacimientoRepre varchar(40), #EstadoNacimientoRepresentante
TelefonoRepre int(10), #Numero de telefono representante
CorreoRepre varchar(120), #Correo representante
TipoIdentRepre varchar(500), #tipo de identificacion representante
NumIdentRepre varchar(20), #NumeroIdentificacionRepresentante
CurpRepre varchar(14), #CurpRepresentante
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


Create table zhpersonamoralDomiciliorepre(
idDomicilio int Primary Key auto_increment,
Folio varchar(30),
TipoDomicilioRepre varchar(15), #TipoDomicilioRepresentante
TipoAsentamientoRepre varchar(20), #TipoAsentamientoRepresentante
NombreAsentamientoRepre varchar(50), #NombreAsentamientoReprsentante
TipoVialidadRepre varchar(15), #TipoVialidadRepresentante
NombreVialidadRepre  varchar(50), #NombreVialidadRepresentante
NombreLocalidadRepre varchar(30), #NombreLocalidadRepresentante 
NombreMunicipioRepre varchar(30), #NombreMunicipioRepresentante
RefVialRepre varchar(50) #ReferenciaVialidadRepresentante
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




Create Table zhpersonamoralconceptosapoyo(
idConcepto int Primary key auto_increment,
Folio varchar(30),
ApoyoSolicitado varchar(35),
UniMedida int(5),
CanSolicitada int(5),
ApoyoEstatalSolicitado varchar(20),
ApoyoMunicipalSolicitado varchar(20),
AportacionBeneficiario varchar(20),
InversionTotal varchar(20),
fechaRegistro varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


#requisitos Generales
Create Table zhpersonamoralReqenerales(
idRequisito int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
observaciones varchar(250),
fechaRegistro varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

Create Table zhpersonamoralrutaarchivos( 
idarchivo int Primary key auto_increment,
folioImpreso varchar(30) not null,
ruta varchar(250) not null,
fechaRegistro varchar(30)	
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

Create Table zhpersonamoralDictamenes(
iddictamen int Primary Key auto_increment,
folioImpreso varchar(30),
nombre varchar(80),
dirRegional varchar(30),  #Ventanilla Direccion regional
estatusdictamen varchar(30),
fechaRegistro varchar(30),
fechaactualizacion varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;







ALTER Table personamoral
add constraint FK_Id_Proyecto_PM Foreign key (sIdProyectoPM) references nombreproyectoPM(sIdProyecto);

ALTER Table representante
add constraint FK_Folio Foreign key(sRFolioImpreso) references personamoral(sFolioImpreso);

drop table personamoraldatos;

drop table personamoralproyecto;
drop table personamoralconceptosapoyo;
drop table personamoralDomiciliorepre;
drop table personamoralrepresentante;
truncate table personamoral;