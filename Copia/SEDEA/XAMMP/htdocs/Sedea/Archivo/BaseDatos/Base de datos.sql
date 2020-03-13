
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


Create Table personafisica(
id int Primary key auto_increment,
folioAutorizacion varchar(80),
folioImpreso varchar(80),
ventanidirRegional varchar(50),
ventaniMunicipio varchar(50),
nombre varchar(250),
genero varchar(25),
fechaDia tinyint(2),
fechaMes tinyint(2),
fechaAnio tinyint(4),
nacionalidad varchar(25),
estadoCivil varchar(25),
estadoNacimiento varchar(25),
telefono int(10)

)


Create Table personamoral{
	
}




--Inserts 
insert into Usuarios (usuario,contra,estado,municipio,fechaRegistro) Values ();

insert into Usuarios (usuario,contra,estado,municipio) Values ('Sedea_Juan','Juan_SDA','Queretaro','Santiago de Queretaro');




