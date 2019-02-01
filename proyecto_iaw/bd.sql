CREATE DATABASE mensajeria;
create user 'mensajeria'@'localhost' identified by 'mensajeria';
grant all on mensajeria.* to 'mensajeria'@'localhost';
use mensajeria;
create table usuarios(
  nombre varchar(25) not null ,
  apellido1 varchar(25) not null ,
  apellido2 varchar(25),
  login varchar(25),
  password varchar(100) not null ,
  constraint usuarios_pk primary key (login),
  constraint usuarios_ck check ( length(password)>=8 )
);
create table mensajes(
  mensaje tinytext not null ,
  id_mensaje int auto_increment,
  login varchar(25) not null ,
  constraint mensajes_pk primary key (id_mensaje),
  constraint mensajes_fk foreign key (login) references usuarios(login)
);
create table puntuaciones(
  puntuacion int not null ,
  login varchar(25) not null,
  id_mensaje int not null,
  constraint puntuaciones_pk primary key (login,id_mensaje),
  constraint puntuaciones_fk1 foreign key (login) references usuarios(login),
  constraint puntuaciones_fk2 foreign key (id_mensaje) references mensajes(id_mensaje)
);
