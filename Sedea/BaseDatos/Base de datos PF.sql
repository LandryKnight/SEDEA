#Base de datos para persona fisica
drop Database sedeaPF;


Create Database sedeaPF;

#Tabla Persona Fisica
Create Table personafisicaDatos(
folioImpresoPF varchar(30) Primary Key,
ventanidirRegional varchar(30),  
ventaniMunicipio varchar(30),
nombre varchar(80),
genero varchar(25),
fechaNacimiento varchar(10),
nacionalidad varchar(25),
estadoCivil varchar(25),
estadoNacimiento varchar(25),
telefono varchar(10),
correoPF varchar(80),
tipoIdentificacion varchar(30),
numeroIdentificacion varchar(15),
curp varchar(20),
fechaReg varchar(30)
);


##Domicilio Persona Fisica

Create Table personafisicaDomicilio{
idDomicilio int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
tipoDomicilio varchar(8),
tipoAsentamiento varchar(8),
nombreAsentamiento varchar(50),
tipoVialidad varchar(10),
nombreVialidad varchar(50),
nombreLocalidad varchar(50),
nombreMunicipio varchar(30),
referenciaVialidad varchar(50),
tipoActividad varchar(15),
fechaReg varchar(30)

}


#Nombre Proyecto
Create Table personafisicaProyecto(
IdProyecto int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
NombreProyecto varchar(80),
AntiguedadPr varchar(20), #sAntiguedadProyecto 
TelefonoPr varchar(100), #sTelefonoProyecto
CorreoPr varchar(80), #sCorreoElectronicoProyecto
FechaConstitucion varchar(10),
TiDomiPr varchar(15), #sTipoDomicilioProyecto
TiAsentPr varchar(15), #sTipoAsentamientoProyecto
NomAsentPr varchar(80), #sNombreAsentamientoProyecto
TiVialPr  varchar(10), #sTipoVialidadProyecto 
NomVialPr varchar(80),  #sNombreVialidadProyecto
NomLocalPr varchar(80), #sNombreLocalidadProyecto
NomMuniciPr varchar(30), #sNombreMunicipioProyecto
RefVialPr varchar(50), #sReferenciaVialidadProyecto
fechaRegistro varchar(30)

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



DROP DATABASE sedea;

drop table personafisicaDatos;
drop table personafisicaProyecto;
drop table personafisicaConceptoApoyo;
drop table personafisicaReqenerales;


truncate table personafisicaDatos;
truncate table personafisicaProyecto;
truncate table personafisicaConceptoApoyo;
Truncate table personafisicaReqenerales;
