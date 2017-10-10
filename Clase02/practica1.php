<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<center>
		<input id="nom" type="text"><br>
		<input id="comtra" type="text">
		<input type="button" onclick="cargar();" value="enviar"><br>
	<div id="box"></div>
		
	</center>
	
	<script type="text/javascript">
		function cargar(){

			var nombre=$("#nom").val();
			var comtra=$("#comtra").val();

     $.ajax({
     	url:"servidor1.php?nombre="+nombre+"&comtra="+comtra,
     	type:"GET",
     	success:function(data){
     		console.log("servidor1.php?nombre="+nombre+"&comtra="+comtra);
     		$("#box").text(data);
     	}
     })

		}

	</script>
	
</body>
</html>