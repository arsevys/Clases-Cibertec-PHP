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



$consulta=$conexion->prepare("delete from usuarios  where id=?");
/*
bind_param
i-> entero
d->double
s ->string

b -> blob

*/

$id=14;
$consulta->bind_param('i',$id);
$consulta->execute();

$i=$consulta->affected_rows;

if($i>0){
	echo "Se elimino correctamente".PHP_EOL;
}
else {
	echo "Error al elimino";
}

$conexion->close();






