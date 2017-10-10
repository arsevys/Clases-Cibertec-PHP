<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recibiendo</title>
	<script type="text/javascript">





		function consulta(){
			var http = new XMLHttpRequest();

			http.onreadystatechange = function(){
     
               if(http.readyState == 4 && http.status == 200){
                  document.getElementById('box').innerHTML = http.response;
               }

			}

			http.open("GET","1.html",true);
			http.send();
		}


	</script>
</head>
<body>

    <input type="button" name="" value="Consultar" onclick="consulta()">

    <div id="box">
    	
    </div>
</body>
</html>

