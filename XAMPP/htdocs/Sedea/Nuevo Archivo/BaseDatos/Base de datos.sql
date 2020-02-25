#Base de Datos Sedea

drop Database Sedea;
Create Database Sedea;


drop table personafisica;

truncate table personafisica;


#Tabla Persona Fisica
Create Table personafisica(
sfolioImpresoPF varchar(30) Primary Key,
sventanidirRegional varchar(30),  
sventaniMunicipio varchar(30),
snombre varchar(80),
sgenero varchar(25),
sfechaNacimiento varchar(8),
snacionalidad varchar(25),
sestadoCivil varchar(25),
sestadoNacimiento varchar(25),
stelefono int(10),
scorreoElectronico varchar(120),
stipoIdentificacion varchar(30),
snumeroIdentificacion varchar(13),
scurp varchar(20),
stipoDomicilio varchar(8),
stipoAsentamiento varchar(8),
snombreAsentamiento varchar(50),
stipoVialidad varchar(10),
snombreVialidad varchar(50),
snombreLocalidad varchar(50),
snombreMunicipio varchar(30),
sreferenciaVialidad varchar(50),
stipoActividad varchar(15)

);


Create Table nombreproyectoPF(
sIdProyecto int Primary Key auto_increment,
sfolioImpreso varchar(30), #Foreign Key
sNombreProyecto varchar(80),
sAntiguedadProyecto varchar(20),
sTelefonoProyecto varchar(100),
sCorreoElectronicoProyecto varchar(120),
sFechaConstitucion varchar(10),
sTipoDomicilioProyecto varchar(15),
sTipoAsentamientoProyecto varchar(15),
sNombreAsentamientoProyecto varchar(80),
sTipoVialidadProyecto  varchar(10),
sNombreVialidadProyecto varchar(80),
sNombreLocalidadProyecto varchar(80),
sNombreMunicipioProyecto varchar(30),
sReferenciaVialidadProyecto varchar(50)

);


Create Table conceptosapoyoPF(
idConcepto int Primary key auto_increment,
sfolioImpreso varchar(30), #Foreign Key
ApoyoSolicitado varchar(35),
UniMedida int(5),
CanSolicitada int(5),
ApoyoEstatalSolicitado varchar(20),
ApoyoMunicipalSolicitado varchar(20),
AportacionBeneficiario varchar(20),
InversionTotal varchar(20)
);


Create Table requisitosGenePF(
idRequisito int Primary Key auto_increment,
sfolioImpreso varchar(30), #Foreign Key
observaciones varchar(80),


)


#Add Constrain
ALTER Table conceptosapoyoPF
add constraint FK_Folio_Concepto_PF Foreign Key (sfolioImpreso) references  personafisica(sfolioImpresoPF);

ALTER Table nombreproyectoPF
add constraint FK_Folio_Proyecto_PF Foreign Key (sfolioImpreso) references  personafisica(sfolioImpresoPF);

ALTER Table requisitosGenePF
add constraint FK_Folio_Requisito_PF Foreign Key (sfolioImpreso) references personafisica(sfolioImpresoPF);


#Drop Foreign Key
ALTER table conceptosapoyoPF
drop Foreign key FK_Folio_Concepto_PF

ALTER table nombreproyectoPF
drop Foreign key FK_Folio_Proyecto_PF;

ALTER table requisitosGenePF
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