<?php

#Variable Numérica
$sdasda=56;
$numero = 5;
echo "Esto es una variable Número: $numero<br>";
var_dump($numero);
echo "<br><br>";

#Variable texto
$palabra = "palabra";
echo "Esto es una variable texto: $palabra<br>";
var_dump($palabra);
echo "<br><br>";

#Variable Boleana
$boleana = true;
echo "Esto es una variable boleana: $boleana<br>";
var_dump($boleana);
echo "<br><br>";


#Variable Arreglo
$colores = array("rojo","amarillo");

$a=["rojo","amarillo",56];



echo "Esto es una variable arreglo: $colores[1]<br>";
var_dump($colores);
echo "<br><br>";


#Variable Arreglo con Propiedades()

$verduras = array("verdura1"=>array(2,5,6), "verdura2"=>"cebolla");

echo $verduras['verdura1'][1] . "<br>";

// echo "Esto es una variable arreglo con propiedades: $verduras[verdura1]<br>";
var_dump($verduras);
echo "<br><br>";

#variables Objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1<br>";
var_dump($frutas);
?>