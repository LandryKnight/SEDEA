#Base de Datos Sedea

drop Database Sedea;
Create Database Sedea;

Create Table Usuarios(
idUsuario int Primary Key auto_increment,
nameUsuario varchar(50),
constrasenaUsuario varchar(50)

);

#idUsuario 1 AdminSda
#idUsuario 2 Sedea
#idUsuario 3 SedeaRegional

insert into Usuarios values(1,'adminSda','sdaAdmin@_@2020');
insert into Usuarios values(2,'sedea','sde@_@2020');
insert into Usuarios values(3,'sedearegional','sda@Regional_2020');


drop table persfisDatos;

truncate table persfisDatos;


#Tabla Persona Fisica
Create Table personafisicaDatos(
sfolioImpresoPF varchar(30) Primary Key,
sventanidirRegional varchar(30),  
sventaniMunicipio varchar(30),
snombre varchar(80),
sgenero varchar(25),
sfechaNacimiento varchar(10),
snacionalidad varchar(25),
sestadoCivil varchar(25),
sestadoNacimiento varchar(25),
stelefono varchar(10),
scorreoElectronico varchar(80),
stipoIdentificacion varchar(30),
snumeroIdentificacion varchar(15),
scurp varchar(20),
stipoDomicilio varchar(8),
stipoAsentamiento varchar(8),
snombreAsentamiento varchar(50),
stipoVialidad varchar(10),
snombreVialidad varchar(50),
snombreLocalidad varchar(50),
snombreMunicipio varchar(30),
sreferenciaVialidad varchar(50),
stipoActividad varchar(15),
sfechaRegistro varchar(30)

);


#Nombre Proyecto
Create Table personafisicaProyecto(
sIdProyecto int Primary Key auto_increment,
sfolioImpreso varchar(30), #Foreign Key
sNombreProyecto varchar(80),
sAntiguedadPr varchar(20), #sAntiguedadProyecto 
sTelefonoPr varchar(100), #sTelefonoProyecto
sCorreoPr varchar(80), #sCorreoElectronicoProyecto
sFechaConstitucion varchar(10),
sTiDomiPr varchar(15), #sTipoDomicilioProyecto
sTiAsentPr varchar(15), #sTipoAsentamientoProyecto
sNomAsentPr varchar(80), #sNombreAsentamientoProyecto
sTiVialPr  varchar(10), #sTipoVialidadProyecto 
sNomVialPr varchar(80),  #sNombreVialidadProyecto
sNomLocalPr varchar(80), #sNombreLocalidadProyecto
sNomMuniciPr varchar(30), #sNombreMunicipioProyecto
sRefVialPr varchar(50), #sReferenciaVialidadProyecto
sfechaRegistro varchar(30)

);


#Concepto Apoyo
Create Table personafisicaConceptoApoyo(
idConcepto int Primary key auto_increment,
sfolioImpreso varchar(30), #Foreign Key
ApoyoSolicitado varchar(35),
UniMedida int(5),
CanSolicitada int(5),
ApoyoEstatalSolicitado varchar(10),
ApoyoMunicipalSolicitado varchar(10),
AportacionBeneficiario varchar(10),
InversionTotal varchar(20),
sfechaRegistro varchar(30)
);

#requisitos Generales
Create Table personafisicaReqenerales(
idRequisito int Primary Key auto_increment,
sfolioImpreso varchar(30), #Foreign Key
observaciones varchar(194),
sfechaRegistro varchar(30)


);


#Add Constrain
ALTER Table personafisicaConceptoApoyo
add constraint FK_Folio_Concepto_PF Foreign Key (sfolioImpreso) references  personafisicaDatos(sfolioImpresoPF);

ALTER Table personafisicaProyecto
add constraint FK_Folio_Proyecto_PF Foreign Key (sfolioImpreso) references  personafisicaDatos(sfolioImpresoPF);

ALTER Table personafisicaReqenerales
add constraint FK_Folio_Requisito_PF Foreign Key (sfolioImpreso) references personafisicaDatos(sfolioImpresoPF);


#Drop Foreign Key
ALTER table personafisicaConceptoApoyo
drop Foreign key FK_Folio_Concepto_PF

ALTER table personafisicaNP
drop Foreign key FK_Folio_Proyecto_PF;

ALTER table personafisicaRG
drop Foreign Key FK_Folio_Requisito_PF;







-----------------------------------------------------------------------------------------------------------------

Persona Moral 

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