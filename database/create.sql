drop schema if exists tiendaOnline;
create schema if not exists tiendaOnline;
use tiendaOnline;

create table producto(
    id integer unsigned auto_increment primary key,
    codigo integer,
    nombre varchar(255),
    descripcion varchar(255),
    precio double,
    imagen varchar(255)
);