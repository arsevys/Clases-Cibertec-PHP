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

$consulta=$conexion->prepare("select * from usuarios");

var_dump($consulta);

if($consulta==false){
	echo "hubo un error ".$conexion->error;
	return;
}

$consulta->execute();

$consulta->store_result(); /* sirve para que el num_rows pueda el obtener el numero total de filas devueltas*/

$consulta->bind_result($id,$a,$ape,$edad);

echo "La cantidad de filas devueltas son -> ".$consulta->num_rows.PHP_EOL;

while($consulta->fetch()){

	echo $id." ". $a . $ape .PHP_EOL;
}

$conexion->close();
