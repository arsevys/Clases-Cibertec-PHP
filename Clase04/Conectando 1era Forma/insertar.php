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

$nom="Alvaro";
$apellido="JAvier";
$edad=18;


$consulta=$conexion->query("insert into usuarios(nombre,apellido,edad) values('$nom','$apellido',$edad)");

if(!$consulta){
	echo "Ocurrio un error -> ".$conexion->error;
  return;
}

$i=$conexion->affected_rows;

if($i==1){
	echo "Se registro correctamente";
}
else {
	echo "No se registro";
}
 // $consulta->close();
$conexion->close();









