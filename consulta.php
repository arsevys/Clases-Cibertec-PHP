<?php

$conexion=new mysqli('localhost','root','andy','cibertecclases');

if($conexion->connect_errno){
echo "error";
}
else {
	echo "Se conecto";
}

function insertar(){
	global $conexion;
$query=$conexion->prepare("insert into a values(?,?)");
$num=12;
$t='este es un texto';
/*
uso del bind_param
i -> numeros
s ->String
d ->double
b ->datos blob
*/
$query->bind_param('is',$num,$t); //->debe estar siempre como variables los datos
$query->execute();
$i=$query->affected_rows;

if($i>0 ){
	echo "se registro $i";
}
else {
	echo "no se registro";
}

// $query->bind_result($a,$b);

// while($query->fetch()){

// 	echo "$a  $b";
// }

$query->close();

$conexion->close();
}


function mostrar(){
global $conexion;

$consulta=$conexion->prepare("select * from a");

var_dump($consulta);

if($consulta==false){

 echo($conexion->error);return;
}

$consulta->execute();


$consulta->store_result();#es necesario definirlo para saber la cantida de filas devuelta con el num_rows
$consulta->bind_result($a,$b); #es comforme la cantidad de columnas devuelva en este caso devuelve dos columnas

echo "Filas total ".$consulta->num_rows;
while($consulta->fetch()){
    echo "este es $a   $b".PHP_EOL;
}

$consulta->close();
$conexion->close();


}

mostrar();