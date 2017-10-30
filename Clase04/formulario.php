<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<center>
	<input type="text" id="id" name="">
	<input type="button" name="" onclick="buscar()" value="Buscar">
    <br>

    <span id="resultado"></span>


</center>	


	
</body>

<script type="text/javascript">
	   function buscar(){
	   	// console.log(typeof $("#id").val() );
        var i=parseInt($("#id").val());
        // console.log(typeof i);

      $.ajax({
      	url:"consultasid.php?id="+i,
      	type:"GET",
      	success:function(data){
      		$("#resultado").text(data);
      	}
      })
	   }



</script>

</html>