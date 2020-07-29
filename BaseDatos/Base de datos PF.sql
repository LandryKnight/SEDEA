#Base de datos para persona fisica

drop Database sedeapf;



#crear la carpeta documentospf para que se guarden los documentos



CREATE DATABASE sedeapf
  CHARACTER SET utf8
  COLLATE utf8_spanish_ci;

#Tabla Persona Fisica
Create Table personafisicaDatos(
folioImpresoPF varchar(30) Primary Key,
dirRegional varchar(30),  #Ventanilla Direccion regional
Municipio varchar(30), #Ventanilla Regional Municipio
nombre varchar(80),
genero varchar(25),
FNacimiento varchar(10),#fecha Nacimiento
nacionalidad varchar(25),
estadoCivil varchar(25),
ENacimiento varchar(25),#estado de nacimiento
telefono varchar(10),
correoPF varchar(80),
tipoIdent varchar(30), #Tipo de identificacion
NIdent varchar(15),#Numero de identificacion
curp varchar(20),
fechaReg varchar(30) #fecha de registro
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




Create Table identificacionpf(
numeroIdent varchar(15) Primary key,	#Numero de identificacion
curp varchar(20),
folioImpresoPF varchar(30),
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


#Domicilio Persona Fisica

Create Table personafisicaDomicilio( 
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

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


#Nombre Proyecto
Create Table personafisicaProyecto(
IdProyecto int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
NProyecto varchar(80), #Nombre Proyecto
AntiguedadPr varchar(20), #sAntiguedadProyecto 
TelefonoPr varchar(100), #sTelefonoProyecto
CorreoPr varchar(80), #sCorreoElectronicoProyecto
FConst varchar(10), #Fecha Constitucion 
TiDomiPr varchar(15), #sTipoDomicilioProyecto
TiAsentPr varchar(15), #sTipoAsentamientoProyecto
NomAsentPr varchar(80), #sNombreAsentamientoProyecto
TiVialPr  varchar(10), #sTipoVialidadProyecto 
NomVialPr varchar(80),  #sNombreVialidadProyecto
NomLocalPr varchar(80), #sNombreLocalidadProyecto
NomMuniciPr varchar(30), #sNombreMunicipioProyecto
RefVialPr varchar(50), #sReferenciaVialidadProyecto
fechaRegistro varchar(30)

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


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
fechaRegistro varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#requisitos Generales
Create Table personafisicaReqenerales(
idRequisito int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
observaciones varchar(250),
fechaRegistro varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


Create Table personafisicarutaarchivos( 
idarchivo int Primary key auto_increment,
folioImpreso varchar(30) not null,
ruta varchar(250) not null,
fechaRegistro varchar(30)	
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

Create Table personafisicaDictamenes(
iddictamen int Primary Key auto_increment,
folioImpreso varchar(30),
nombre varchar(80),
dirRegional varchar(30),  #Ventanilla Direccion regional
estatusdictamen varchar(30),
fechaRegistro varchar(30),
fechaactualizacion varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



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








drop table  personafisicaDatos;
drop table  identificacionpf;
drop table  personafisicaDomicilio;
drop table  personafisicaProyecto;
drop table  personafisicaConceptoApoyo;
drop table  personafisicaReqenerales;
drop table  personafisicaDictamenes;
drop table  personafisicarutaarchivos;


truncate table personafisicaDatos;
truncate table identificacionpf;
truncate table personafisicaDomicilio;

truncate table personafisicaProyecto;
truncate table personafisicaConceptoApoyo;
Truncate table personafisicaReqenerales;
Truncate table personafisicaDictamenes;
truncate table personafisicarutaarchivos;