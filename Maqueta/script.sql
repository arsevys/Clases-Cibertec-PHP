create database cibertecclases;
use cibertecclases;


create table usuarios(
id_usu int auto_increment primary key,
nom_usu varchar(200) ,
ape_usu varchar(200) ,
edad int ,
ruta_foto_perfil varchar(200),
usuario varchar(150),
comtra varchar(150),
estado char(1)  default 'I';
);

create table mensajes(
id int auto_increment primary key,
id_usu int references usuarios,
mensaje text ,
fecha timestamp default now()
);

SET SQL_SAFE_UPDATES = 0;

alter table usuarios add column estado char(1)  default 'I';

delete from mensajes;

INSERT INTO usuarios(nom_usu,ape_usu,edad,ruta_foto_perfil,usuario,comtra)
 values('Andy Robers','Javier Reyes',20,null,'reaper','reaper');
DELIMITER //
create procedure logear(nom varchar(150),com varchar(150))
begin
select * from usuarios where usuario=nom and comtra=com;

end;

DELIMITER //
create procedure mensaje(i int , m text)
begin
insert into mensajes (id_usu,mensaje) values(i,m);
end;

drop procedure mostrarmensaje
DELIMITER //
create procedure mostrarmensaje()
begin
select * from mensajes m
inner join usuarios u 
on m.id_usu=u.id_usu
order by m.id desc;
end;
select *from mensajes;
select *from usuarios;
DELIMITER //
create procedure registrar(nom varchar(100),ape varchar(120),u varchar(150),c varchar(150))
begin

INSERT INTO usuarios(nom_usu,ape_usu,edad,ruta_foto_perfil,usuario,comtra)
 values(nom,ape,20,null,u,c);
end;

DELIMITER //
create procedure cambiarestado(id int)
begin
update usuario
set estado='I'
where id_usu=id;
end;
drop procedure actualisarPerfil

DELIMITER //
create procedure actualisarPerfil(id int,n varchar(150),a varchar(150),r varchar(150),u varchar(150),c varchar(150))
begin
update usuarios
set nom_usu=n,ape_usu=a,ruta_foto_perfil=r,usuario=u,comtra=c
where id_usu=id;
end;

call actualisarPerfil(2,'JOse VErgano','aqules','4cfb8584-e077-42aa-907f-7d72aa085c66.jpg','jose','jose')