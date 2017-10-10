<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<center>
		<input type="button" onclick="cargar();" value="enviar"><br>
	<textarea id="datos">
		
	</textarea>
		
	</center>
	
	<script type="text/javascript">
		function cargar(){
     $.ajax({
     	url:"/texto.txt",
     	type:"GET",
     	success:function(data){
     		$("#datos").val(data);
     	}
     })

		}

	</script>
	
</body>
</html>