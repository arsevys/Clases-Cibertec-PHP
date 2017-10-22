<?php

// $nombre=$_GET['nombre'];
// $apellido=$_GET['apellido'];
// echo $nombre." ".$apellido;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

  	<input type="text" id="nombre" name=""><br>
	<input type="password" id="pass" name="" ><br>
	<input type="button" name="" value="Enviar" onclick="enviar()"><br>
	<span id="resultado"></span>
	

	

	<script type="text/javascript">
		

		function enviar(){
         
         let nom=$("#nombre").val();
         let com=$("#pass").val();
         $.ajax({ 
            url:"validar.php?nombre="+nom+"&comtra="+com,
            type:"GET",
            success:function(d){
           $("#resultado").text(d);
            }
         });

		}



     
	</script>

    


</body>
</html>