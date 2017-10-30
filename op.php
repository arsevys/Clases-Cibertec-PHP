<?php

phpinfo();

$server="localhost";
$usuario="root";
$comtra="andy";
$bd="cibertecclases";

$conexion= new mysqli($server,$usuario,$comtra,$bd);
if($conexion->connect_errno){
	echo "error";
}

else {
	echo "Se conecto Correctamente".PHP_EOL;

}


$consulta=$conexion->query("select * from a");

var_dump($consulta);


if(!$consulta){

echo "Error en la consulta ".$conexion->error;
return;

}

// $i=$consulta->fetch_array;
while($i=mysqli_fetch_array($consulta)){

echo $i['id'].PHP_EOL;
}



$consulta->close();
$conexion->close();









