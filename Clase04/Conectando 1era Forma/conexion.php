<?php 
$server="localhost";
$usuario="root";
$comtra="andy";
$db="php";

$conexion=new mysqli($server,$usuario,$comtra,$db);

if($conexion->errno){
	echo "Hubo un error";
}
else {
	echo "Se conecto Correctamente";
}





