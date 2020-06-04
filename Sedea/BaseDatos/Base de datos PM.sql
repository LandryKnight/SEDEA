#Base de datos para persona Moral
drop Database sedeaPM;


Create Database sedeaPM;



drop table personamoral;
truncate table personamoral;

Create table personamoral(

sFolioImpreso varchar(30) Primary key,
sVentanillaDireccionRegional varchar(30),
sVentanillaMunicipio varchar(30),
sNombreOrganizacion varchar(50),
sTipoOrganizacion  varchar(50),
sNumeroTelefonoOrganizacion int(10),
sCorreoElectronicoOrganizacion varchar(120),
sFechaConstitucion varchar(10),
sTipoDomicilioOrganizacion varchar(10),
sTipoAsentamientoOrganizacion varchar(10),
sNombreAsentamientoOrganizacion varchar(50),
sTipoVialidadOrganizacion varchar(10),
sNombreVialidadOrganizacion varchar(50),
sNombreLocalidadOrganizacion varchar(50),
sNombreMunicipioOrganizacion varchar(30),
sReferenciaVialidadOrganizacion varchar(50),
sTipoActividadEconomicaOrganizacion varchar(20),
sIdProyectoPM int        #Foreing Key
)

ALTER Table personamoral
add constraint FK_Id_Proyecto_PM Foreign key (sIdProyectoPM) references nombreproyectoPM(sIdProyecto);


/* telefono correo redundantes */

Create Table nombreproyectoPM(
sIdProyecto int Primary Key  auto_increment,
sNombreProyecto varchar(80),
sAntiguedadProyecto varchar(20),
sTelefonoProyecto varchar(100),
sCorreoElectronicoProyecto varchar(120),
sFechaConstitucion varchar(10),
sTipoDomicilioProyecto varchar(10),
sTipoAsentamientoProyecto varchar(10),
sNombreAsentamientoProyecto varchar(80),
sTipoVialidadProyecto  varchar(10),
sNombreVialidadProyecto varchar(80),
sNombreLocalidadProyecto varchar(80),
sNombreMunicipioProyecto varchar(30),
sReferenciaVialidadProyecto varchar(50)

)


Create table representante(
sIdRepre int Primary Key auto_increment,
sRFolioImpreso varchar(20),
sNombreRepresentante varchar(80),
sGeneroRepresentante varchar(10),
sFechaNacimientoRepresentante varchar(10),

sNacionalidadRepresentante varchar(15),
sEstadoCivilRepresentante  varchar(15),
sEstadoNacimientoRepresentante varchar(40),
sTelefonoRepresentante int(10),
sCorreoElectronicoRepresentante varchar(120),
sTipoIdentificacionRepresentante varchar(10),
sNumeroIdentificacionRepresentante varchar(20),
sCurpRepresentante varchar(14),
sTipoDomicilioRepresentante varchar(15),
sTipoAsentamientoRepresentante varchar(20),
sNombreAsentamientoReprsentante varchar(50),
sTipoVialidadRepresentante varchar(15),
sNombreVialidadRepresentante  varchar(50),
sNombreLocalidadRepresentante varchar(30),
sNombreMunicipioRepresentante varchar(30),
sReferenciaVialidadRepresentante varchar(50)
)

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
)