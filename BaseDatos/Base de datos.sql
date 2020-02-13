
drop Database Sedea;
Create Database Sedea;

drop table usuarios;

Create Table Usuarios (
id int Primary key auto_increment,	
usuario varchar(60),
contra varchar(60),
estado varchar(60),
municipio varchar(120)
--fechaRegistro time 

);

drop table personafisica;

truncate table personafisica;



Create Table personafisica(
idPersonaFisica int Primary key auto_increment,

folioImpreso varchar(30),
ventanidirRegional varchar(30),  
ventaniMunicipio varchar(30),
nombre varchar(80),
genero varchar(25),
fechaNacimiento varchar(8),
nacionalidad varchar(25),
estadoCivil varchar(25),
estadoNacimiento varchar(25),
telefono int(10),
correoElectronico varchar(120),
tipoIdentificacion varchar(30),
numeroIdentificacion varchar(13),
curp varchar(20),
tipoDomicilio varchar(8),
tipoAsentamiento varchar(8),
nombreAsentamiento varchar(50),
tipoVialidad varchar(10),
nombreVialidad varchar(50),
nombreLocalidad varchar(50),
nombreMunicipio varchar(30),
referenciaVialidad varchar(50),
tipoActividad varchar(15)
)




insert into personafisica(folioImpreso,ventanidirRegional,ventaniMunicipio,nombre,genero,fechaNacimiento,nacionalidad,estadoCivil,estadoNacimiento,telefono) Values();

--Inserts 
insert into Usuarios (usuario,contra,estado,municipio,fechaRegistro) Values ();

insert into Usuarios (usuario,contra,estado,municipio) Values ('Sedea_Juan','Juan_SDA','Queretaro','Santiago de Queretaro');



drop table personamoral;
truncate table personamoral;

Create table personamoral(
idPersonaMoral int Primary Key auto_increment,
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
sTipoActividadEconomicaOrganizacion varchar(20)
)

Create table representante(
idRepre int Primary Key auto_increment,
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

/* telefono correo redundantes */

Create Table nombreProyecto(
idProyecto int Primary Key  auto_increment,
nombreProyecto varchar(80),
AntiguedadProyecto varchar(20),
TelefonoProyecto varchar(100),
CorreoElectronicoProyecto varchar(120),
FechaConstitucion varchar(10),
TipoDomicilioProyecto varchar(10),
TipoAsentamientoProyecto varchar(10),
NombreAsentamientoProyecto varchar(80),
TipoVialidadProyecto  varchar(10),
NombreVialidadProyecto varchar(80),
NombreLocalidadProyecto varchar(80),
NombreMunicipioProyecto varchar(30),
ReferenciaVialidadProyecto varchar(50)

)