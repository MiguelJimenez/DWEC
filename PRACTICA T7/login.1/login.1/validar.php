<?php

$conexion =  mysqli_connect('localhost', 'root', '');
if($conexion)
{
	
}
else
{
	echo('No se ha podido conectar con la base de datos');
}

mysqli_select_db($conexion, 'usuarios');

$consulta = "SELECT * FROM datos;";
$resultado = mysqli_query($conexion, $consulta);

while($fila = mysqli_fetch_array($resultado, MYSQL_ASSOC))
{
		

	if($fila['usuario'] == $_GET['u'])
	{
		echo 'El usuario ya existe';
	}
	else
	{
		echo 'No existe';
	}
}

?>
