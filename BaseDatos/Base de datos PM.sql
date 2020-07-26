#Base de datos para persona Moral
drop Database sedeaPM;




#crear la carpeta documentospm para que se guarden los documentos
Create Database sedeapm
  CHARACTER SET utf8
  COLLATE utf8_spanish_ci;



drop table personamoral;
truncate table personamoral;

Create table personamoral(

FolioImpreso varchar(30) Primary key,
VentDirReg varchar(30), #VentanillaDireccionRegional
VentaMunicipio varchar(30), #VentanillaMunicipio
NOrg varchar(50), #NombreOrganizacion
TipoOrg  varchar(50), #TipoOrganizacion
TelefonoOrg int(10), #NumeroTelefonoOrganizacion
CorreoOrg varchar(120), #CorreoElectronicoOrganizacion
FechaConst varchar(10), #FechaConstitucion
TipoDomicilioOrg varchar(10), #TipoDomicilioOrganizacion
TipoAsentOrg varchar(10), #TipoAsentamientoOrganizacion 
NAsent varchar(50), #NombreAsentamientoOrganizacion
TipoVialOrg varchar(10), #TipoVialidadOrganizacion
NVialOrg varchar(50), #NombreVialidadOrganizacion
NLocalOrg varchar(50), #NombreLocalidadOrganizacion
NMunicipioOrg varchar(30), #NombreMunicipioOrganizacion 
RefVialOrg varchar(50), #ReferenciaVialidadOrganizacion
TipoActEcoOrg varchar(20),#TipoActividadEconomicaOrganizacion
IdProyectoPM int,        #Foreing Key
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER Table personamoral
add constraint FK_Id_Proyecto_PM Foreign key (sIdProyectoPM) references nombreproyectoPM(sIdProyecto);


/* telefono correo redundantes */

Create Table nombreproyectoPM(
IdProyecto int Primary Key  auto_increment,
NProyecto varchar(80), #NombreProyecto 
AntigProyecto varchar(20), #AntiguedadProyecto
TelefonoProyecto varchar(100), #TelefonoProyecto
CorreoProyecto varchar(120), #CorreoElectronicoProyecto
FechaConstitucion varchar(10), #FechaConstitucion
TDomicilioProyecto varchar(10), #TipoDomicilioProyecto
TAsentProyecto varchar(10), #TipoAsentamientoProyecto 
NAsentProyecto varchar(80), #NombreAsentamientoProyecto
TVialProyecto  varchar(10), #TipoVialidadProyecto
NVialProyecto varchar(80), #NombreVialidadProyecto
NLocalProyecto varchar(80), #NombreLocalidadProyecto
NMunicipioProyecto varchar(30), #NombreMunicipioProyecto
RefVialProyecto varchar(50), #ReferenciaVialidadProyecto
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


Create table representante(
IdRepre int Primary Key auto_increment,
RFolioImpreso varchar(20),
NRepre varchar(80), #NombreRepresentante 
GeneroRepre varchar(10), #GeneroRepresentante
FNacimientoRepre varchar(10), #FechaNacimientoRepresentante
NacionalidadRepre varchar(15), #NacionalidadRepresentante
EstadoCivilRepre  varchar(15), #EstadoCivilRepresentante
EstadoNacimientoRepre varchar(40), #EstadoNacimientoRepresentante
TelefonoRepre int(10), #Numero de telefono representante
CorreoRepre varchar(120), #Correo representante
TipoIdentRepre varchar(10), #tipo de identificacion representante
NumIdentRepre varchar(20), #NumeroIdentificacionRepresentante
CurpRepre varchar(14), #CurpRepresentante
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

Create table Domiciliorepresentante(
TipoDomicilioRepre varchar(15), #TipoDomicilioRepresentante 
TipoAsentamientoRepre varchar(20), #TipoAsentamientoRepresentante
NombreAsentamientoRepre varchar(50), #NombreAsentamientoReprsentante
TipoVialidadRepre varchar(15), #TipoVialidadRepresentante
NombreVialidadRepre  varchar(50), #NombreVialidadRepresentante
NombreLocalidadRepre varchar(30), #NombreLocalidadRepresentante 
NombreMunicipioRepre varchar(30), #NombreMunicipioRepresentante
RefVialRepre varchar(50) #ReferenciaVialidadRepresentante
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER Table representante
add constraint FK_Folio Foreign key(sRFolioImpreso) references personamoral(sFolioImpreso);



Create Table conceptosapoyoPM(
idConcepto int Primary key auto_increment,
ApoyoSolicitado varchar(35),
UniMedida int(5),
CanSolicitada int(5),
ApoyoEstatalSolicitado varchar(20),
ApoyoMunicipalSolicitado varchar(20),
AportacionBeneficiario varchar(20),
InversionTotal varchar(20)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;