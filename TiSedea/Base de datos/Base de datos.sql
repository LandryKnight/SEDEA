drop Database sedeaTI;

drop table usuariosTI;
drop table reportes;
drop table reportesHistorial;

truncate table usuariosTI;
truncate table reportes;
truncate table reportesHistorial;


Create Database sedeaTI;

Create table usuariosTI(
id int primary key auto_increment,
nombre varchar(50),
usuario varchar(50),
pazz varchar(50)
);


insert into usuariosTI Values(null,'FranciscoTI','FranTISEDA','SDE@TI20');


Create table reportes(
id int primary key auto_increment,
nombre varchar(25),
departamento varchar(60),
ubicacion varchar(20),
falla varchar(500),
Estado varchar(35),
fecha varchar(30),
NumeroReporte varchar(15)
);

Create table reportesHistorial(
id int primary key auto_increment,
nombre varchar(25),
departamento varchar(20),
ubicacion varchar(20),
falla varchar(500),
Estado varchar(35), 
fecha varchar(30),
NumeroReporte varchar(15)
);


insert into reportes Values(null,'Luis','Juridico','Planta Baja','No prende mi computadora','reportado',curdate(),'UOI00');