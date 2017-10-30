<?php
//caturamos el id del formulario
$id=$_GET['id'];

$server="localhost";
$usuario="root";
$comtra="andy";
$db="php";

$conexion=mysqli_connect($server,$usuario,$comtra,$db);
// echo "asdsdas";

$consulta=$conexion->query("select * from usuarios where id=$id");


while($t=mysqli_fetch_array($consulta)){

	echo "El usuario es {$t["nombre"]} {$t["apellido"]} tu edad es -> {$t["edad"]}";
}