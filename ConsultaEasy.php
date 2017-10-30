<?php

$conexion=new mysqli('localhost','root','andy','cibertecclases');

if($conexion->connect_errno){
echo "error";
}
else {
	echo "Se conecto";
}

$nombre="Andy";
function mostrar(){
    global $conexion;

 $consulta=$conexion->query("select * from a");
 if(!$consulta){
     echo "Hubo un error -> ". $conexion->error;
 	return;
 }

 while($i=mysqli_fetch_array($consulta)){
  echo "{$i["id"]}".PHP_EOL;
 }
 $consulta->close();
 $conexion->close();
// echo $nombre;
}

function insertar(){
 global $conexion;
 $consulta=$conexion->query("insert into a values(12,'demo')");
 
 if(!$consulta){
     echo "Hubo un error -> ". $conexion->error;
 	return;
  }
 
 $i=$conexion->affected_rows;
 if($i==1){
	echo "Se registro correctamente";
  }
  $consulta->close();
  $conexion->close();

 }



insertar();