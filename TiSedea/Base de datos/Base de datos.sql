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


insert into usuariosTI Values(null,'Francisco','FranTISEDA','SDE@TI20');


Create table reportes(
id int primary key auto_increment,
nombre varchar(25),
ubicacion varchar(20),
departamento varchar(60),
falla varchar(250),
Estado varchar(35),
fecha varchar(30),
NumeroReporte varchar (15)
);

Create table reportesHistorial(
id int primary key auto_increment,
nombre varchar(25),
ubicacion varchar(20),
departamento varchar(20),
falla varchar(250),
Estado varchar(35), 
fecha varchar(30),
NumeroReporte varchar (15)
);

insert into reportes Values(null,'luis','juridico','Segundo Piso','no funcina bien allljhdshfdshfkjshh hdsh','no funcina bien allljhdshfdshfkjshh hdsh',curdate());
insert into reportes Values(null,'Lui','Planta Baja','Juridico','No funciona bien el office','le doy clic y no  se inicia',curdate());

insert into reportes Values(null,'Luis Fernando','Planta Baja','Juridico','qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq','qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq',curdate());
