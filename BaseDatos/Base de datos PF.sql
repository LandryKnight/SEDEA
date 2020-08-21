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





#Domicilio Persona Fisica

Create Table personafisicaDomicilio( 
idDomicilio int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
nombreMunicipio varchar(30),
tipoDomicilio varchar(20),
tipoVialidad varchar(20),
tipoAsentamiento varchar(20),
nombreAsentamiento varchar(50),
nombreVialidad varchar(50),
nombreLocalidad varchar(50),
referenciaVialidad varchar(50),
tipoActividad varchar(20),
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




#Nombre Proyecto
Create Table personafisicaProyecto(
IdProyecto int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
NProyecto varchar(80), #Nombre Proyecto
AntiguedadPr varchar(50), #sAntiguedadProyecto 
TelefonoPr varchar(100), #sTelefonoProyecto
CorreoPr varchar(80), #sCorreoElectronicoProyecto
FConst varchar(10), #Fecha Constitucion 
TiDomiPr varchar(15), #sTipoDomicilioProyecto
TiAsentPr varchar(15), #sTipoAsentamientoProyecto
NomAsentPr varchar(80), #sNombreAsentamientoProyecto
TiVialPr  varchar(20), #sTipoVialidadProyecto 
NomVialPr varchar(80),  #sNombreVialidadProyecto
NomLocalPr varchar(80), #sNombreLocalidadProyecto
NomMuniciPr varchar(30), #sNombreMunicipioProyecto
RefVialPr varchar(50), #sReferenciaVialidadProyecto
fechaRegistro varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


#Concepto Apoyo
Create Table personafisicaConceptoApoyo(
idConcepto int Primary key auto_increment,
folioImpreso varchar(30), #Foreign Key
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









#Tablas Historial de cada una da las tablas principales 
#Tabla Persona Fisica 
Create Table zhpersonafisicaDatos(
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



#Domicilio Persona Fisica

Create Table zhpersonafisicaDomicilio( 
idDomicilio int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
nombreMunicipio varchar(30),
tipoDomicilio varchar(20),
tipoVialidad varchar(20),
tipoAsentamiento varchar(20),
nombreAsentamiento varchar(50),
nombreVialidad varchar(50),
nombreLocalidad varchar(50),
referenciaVialidad varchar(50),
tipoActividad varchar(20),
fechaReg varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


#Nombre Proyecto
Create Table zhpersonafisicaProyecto(
IdProyecto int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
NProyecto varchar(80), #Nombre Proyecto
AntiguedadPr varchar(50), #sAntiguedadProyecto 
TelefonoPr varchar(100), #sTelefonoProyecto
CorreoPr varchar(80), #sCorreoElectronicoProyecto
FConst varchar(10), #Fecha Constitucion 
TiDomiPr varchar(30), #sTipoDomicilioProyecto
TiAsentPr varchar(30), #sTipoAsentamientoProyecto
NomAsentPr varchar(80), #sNombreAsentamientoProyecto
TiVialPr  varchar(30), #sTipoVialidadProyecto 
NomVialPr varchar(80),  #sNombreVialidadProyecto
NomLocalPr varchar(80), #sNombreLocalidadProyecto
NomMuniciPr varchar(30), #sNombreMunicipioProyecto
RefVialPr varchar(50), #sReferenciaVialidadProyecto
fechaRegistro varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


#Concepto Apoyo
Create Table zhpersonafisicaConceptoApoyo(
idConcepto int Primary key auto_increment,
folioImpreso varchar(30), #Foreign Key
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
Create Table zhpersonafisicaReqenerales(
idRequisito int Primary Key auto_increment,
folioImpreso varchar(30), #Foreign Key
observaciones varchar(250),
fechaRegistro varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


Create Table zhpersonafisicarutaarchivos( 
idarchivo int Primary key auto_increment,
folioImpreso varchar(30) not null,
ruta varchar(250) not null,
fechaRegistro varchar(30)	
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

Create Table zhpersonafisicaDictamenes(
iddictamen int Primary Key auto_increment,
folioImpreso varchar(30),
nombre varchar(80),
dirRegional varchar(30),  #Ventanilla Direccion regional
estatusdictamen varchar(30),
fechaRegistro varchar(30),
fechaactualizacion varchar(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


#add constrains 
ALTER Table personafisicaDomicilio
add constraint FK_Folio_Domicilio_PF Foreign Key (folioImpreso) references  personafisicaDatos(folioImpresoPF);

ALTER Table personafisicaProyecto
add constraint FK_Folio_Proyecto_PF Foreign Key (folioImpreso) references  personafisicaDatos(folioImpresoPF);

ALTER Table personafisicaConceptoApoyo
add constraint FK_Folio_ConceptoApoyo_PF Foreign Key (folioImpreso) references  personafisicaDatos(folioImpresoPF);

ALTER Table personafisicaReqenerales
add constraint FK_Folio_Reqenerales_PF Foreign Key (folioImpreso) references  personafisicaDatos(folioImpresoPF);

ALTER Table personafisicarutaarchivos
add constraint FK_Folio_Rutaarchivos_PF Foreign Key (folioImpreso) references  personafisicaDatos(folioImpresoPF);

ALTER Table personafisicaDictamenes
add constraint FK_Folio_Dictamenes_PF Foreign Key (folioImpreso) references  personafisicaDatos(folioImpresoPF);



#add constrains para tablas historial
ALTER Table zhpersonafisicaDomicilio
add constraint FK_Folio_zhDomicilio_PF Foreign Key (folioImpreso) references  zhpersonafisicaDatos(folioImpresoPF);

ALTER Table zhpersonafisicaProyecto
add constraint FK_Folio_zhProyecto_PF Foreign Key (folioImpreso) references  zhpersonafisicaDatos(folioImpresoPF);

ALTER Table zhpersonafisicaConceptoApoyo
add constraint FK_Folio_zhConceptoApoyo_PF Foreign Key (folioImpreso) references  zhpersonafisicaDatos(folioImpresoPF);

ALTER Table zhpersonafisicaReqenerales
add constraint FK_Folio_zhReqenerales_PF Foreign Key (folioImpreso) references  zhpersonafisicaDatos(folioImpresoPF);

ALTER Table zhpersonafisicarutaarchivos
add constraint FK_Folio_zhRutaarchivos_PF Foreign Key (folioImpreso) references  zhpersonafisicaDatos(folioImpresoPF);

ALTER Table zhpersonafisicaDictamenes
add constraint FK_Folio_zhDictamenes_PF Foreign Key (folioImpreso) references  zhpersonafisicaDatos(folioImpresoPF);





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