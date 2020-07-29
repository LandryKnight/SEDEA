

truncate Table usuarios;
truncate Table usuariosReg;






Create Table usuarios(
idUsuario int Primary Key auto_increment,
nameUsuario varchar(50),
pazz varchar(50)

);



Create Table usuariosreg(
idUsuario int Primary Key auto_increment,
nameUsuario varchar(50),
pazz varchar(50)

);


#Tabla de Usuarios 
#idUsuario 1 AdminSda
#idUsuario 2 Sedea
#idUsuario 3 - 6 SedeaRegional

insert into Usuarios values(null,'adminSda','zdaAdmin@_@2020');
insert into Usuarios values(null,'juliosede@','zdeaingjulio_2020');
insert into Usuarios values(null,'sedea','zde@_@2020');




#Tabla de UsuariosReg
#Sedea regional 
#Cadereyta de Montes
#Jalpan de Serra
#Querétaro
#San Juan del Río

insert into UsuariosReg values(null,'sedeaCadereyta','C@dereyt@sede@2020');
insert into UsuariosReg values(null,'sedeaJalpan','J@lp@nsede@2020');
insert into UsuariosReg values(null,'sedeaQro','Qrosede@2020');
insert into UsuariosReg values(null,'sedeaSanJuan','S@nJu@nsede@2020');












