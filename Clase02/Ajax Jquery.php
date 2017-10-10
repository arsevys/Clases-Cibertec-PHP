<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<input type="text" id="nombre" ><br>

<input type="button" onclick="llamar()" value="enviar peticiones" ><br>

<div id="box"></div>


<script type="text/javascript">
	function llamar(){
     var nom=$("#nombre").val();
     $.ajax({
      url:"servidor.php?nombre="+nom,
      type:"GET",
      success:function(data){
     $("#box").html(data);

      }

	})

	}
	


</script>

	
</body>
</html>