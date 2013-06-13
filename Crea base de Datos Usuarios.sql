create database Usuarios;

use Usuarios;

create table Usuario(
rut varchar(10) primary key,
nombre varchar(50) not null,
apellidoPaterno varchar(50) not null,
apellidoMaterno Varchar(50) not null,
edad integer not null,
direccion varchar(100) not null,
comuna varchar(50) not null,
ciudad varchar(50) not null,
pais varchar(50) not null,
telefono varchar(20) not null);