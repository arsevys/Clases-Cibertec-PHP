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

$consulta =$conexion->query("select * from usuarios");
if(!$consulta){
	echo "Error -> ".$conexion->error .PHP_EOL;
   return;
}

while($i=mysqli_fetch_array($consulta))
{
  
  echo PHP_EOL."Tu nombre es {$i['nombre']}   {$i['apellido']}  {$i['edad']} ".PHP_EOL;
}

$conexion->close();
