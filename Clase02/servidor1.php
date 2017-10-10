<?php

$nombre=$_GET['nombre'];
$comtra=$_GET['comtra'];
if($nombre=='andy'&&$comtra=="andy"){
	echo "Esta Correcto -> ".$nombre;
}
else {
	echo "inCorrecto";
}

?>