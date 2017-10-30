create database php;
use php;


create table usuarios(
id int auto_increment primary key,
nombre varchar(150),
apellido varchar(200),
edad int 

);


set sql_safe_updates=0;

select * from usuarios;