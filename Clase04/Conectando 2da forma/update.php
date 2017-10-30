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


$consulta=$conexion->prepare("update usuarios  set apellido=? where id=?");
/*
bind_param
i-> entero
d->double
s ->string

b -> blob

*/
$apellido="Reyes";
$id=14;
$consulta->bind_param('si',$apellido,$id);
$consulta->execute();

$i=$consulta->affected_rows;

if($i>0){
	echo "Se actualiso correctamente".PHP_EOL;
}
else {
	echo "Error al actualisar";
}

$conexion->close();






