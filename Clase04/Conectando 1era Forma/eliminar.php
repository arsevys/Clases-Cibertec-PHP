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
	echo "Se conecto Correctamente".PHP_EOL;
}


$consulta=$conexion->query("delete from usuarios where id=13 ");

if(!$consulta){
	echo "Ocurrio un error -> ".$conexion->error;
  return;
}

$i=$conexion->affected_rows;

if($i==1){
	echo "Se elimino correctamente";
}
else {
	echo "No se elimino";
}
 // $consulta->close();
$conexion->close();



