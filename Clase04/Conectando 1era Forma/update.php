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

$nom="Andy";


$consulta=$conexion->query("update usuarios set nombre='$nom' where id=12 ");

if(!$consulta){
	echo "Ocurrio un error -> ".$conexion->error;
  return;
}

$i=$conexion->affected_rows;

if($i==1){
	echo "Se actualiso correctamente";
}
else {
	echo "No se registro";
}
 // $consulta->close();
$conexion->close();



