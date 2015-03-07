<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
	<script type="text/javascript">
	function mostrarSelect(str)
	{
		var peticion; 
		
		if (window.XMLHttpRequest)
		{
			peticion = new XMLHttpRequest();
		}
		else
		{
			peticion = new ActiveXObject("Microsoft.XMLHTTP");
		}
		peticion.onreadystatechange=function()
		{
			if (peticion.readyState==4)
			{
				if(peticion.status==200)	
				{
					document.getElementById("destino").innerHTML = peticion.responseText;
				}
			}	 
			
		}
		peticion.open("GET","destino.php?c="+str,true);
		peticion.send();
	}
	</script>
</head>
<body>
	<form action="">
		Origen:
		<select name="origen" onchange="mostrarSelect(this.value)">
			<option value="0">- - -</option>
			<option value="1">Puertollano</option>
			<option value="2">Córdoba</option>
			<option value="3">Madrid</option>
		</select>
	</form>
	<div id="destino">
		

	</div>
</body>
</html>

