<?php 
$server="localhost";
$usuario="root";
$comtra="andy";
$db="php";

$conexion=mysqli_connect($server,$usuario,$comtra,$db);

if($conexion->errno){
	echo "Hubo un error";
}
else {
	echo "Se conecto Correctamente";
}


$consulta=$conexion->prepare("insert into usuarios (nombre,apellido,edad) values(?,?,?)");
/*
bind_param
i-> entero
d->double
s ->string
b -> blob
*/

$nombre="juan";
$apellido="campos";
$edad=58;
$consulta->bind_param('ssi',$nombre,$apellido,$edad);
$consulta->execute();

$i=$consulta->affected_rows;

if($i>0){
	echo "Se ingreso correctamente".PHP_EOL;
}
else {
	echo "Error al insertar";
}

$conexion->close();






