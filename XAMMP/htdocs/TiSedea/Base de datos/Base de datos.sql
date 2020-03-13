drop table usuariosTI;
drop table reportes;
drop table reportesHistorial;

truncate table usuariosTI;
truncate table reportes;
truncate table reportesHistorial;


Create table usuariosTI(
id int primary key auto_increment,
nombre varchar(50),
usuario varchar(50),
contraseña varchar(50)
);


insert into usuariosTI Values(null,'Francisco','FranTISEDA','SDE@TI20');


Create table reportes(
id int primary key auto_increment,
nombre varchar(25),
ubicacion varchar(20),
falla varchar(25),
masdetalles varchar(184),
fecha varchar(30)
);


Create table reportesHistorial(
id int primary key auto_increment,
nombre varchar(25),
ubicacion varchar(20),
falla varchar(25),
masdetalles varchar(184),
fecha varchar(30)
);