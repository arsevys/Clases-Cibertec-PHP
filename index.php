<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
$n=1235;

echo $n."<br>";
echo "sfsa";
print "safsa";
echo "<span style='color:red;'>hola Mundo</span>";

// $a=["uno",2,3,"cuatro","texto"];
$f=array("numero"=>array(4,5,9,[4,48,458]),"letra"=>"A");

echo $f['numero'][3][1];

$t=[1,2,3,4,5,6];

foreach ($t as $i) {
	echo " </br>El numero 'es' -> " .$i ;
}


function muestra ($nombre){
	echo " <br>hola que tal " . $nombre ;
}

muestra("Andy");
$numero=55;

if(empty($numero)){
 echo "Funca";
}
else {
	echo "<br>No funca";
}

$h= array("numero"=>["colores"=>["Amarrillo","Azul","verde"]]);


#utilizando el contenido de la variable color imprimir 3 textos con los colores de la llave colores 

$color= array("color"=>[[],["yellow","green","red"]]);

foreach ($color['color'][1] as $i) {
	echo "<br>El Color es ->  <span style='color : $i'>".$i."</span><br>";
}

// foreach ($color as $k => $v) {
// 	# code...
// 	echo $k. $v;
// }


$t=array([200,40,50],[60,80,200],[140,67,40]);

foreach ($t as $k) {
	# code...
    

}


foreach ($t[0] as $r) {
	
	foreach ($t[1] as $g) {
	   
	   foreach ($t[2] as $b) {
	        echo"<br><span style='color : rgb($r,$g,$b)'>Texo</span><br>";
       }

    }

}


$rt="hola Mundo desde la variable php";

?>
<script type="text/javascript">
	var mensaje="<?php echo $rt;?>";
	alert(mensaje);
</script>

<style type="text/css">
	
	#color{
		width: 150px;
		height: 150px;
       background-color:rgba(114,61,0,0.3); 
	}
</style>

<div id="color"></div>



</body>
</html>