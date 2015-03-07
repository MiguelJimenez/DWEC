<?php
$fecha= $_POST["fecha_nacimiento"];
$cp= $_POST["codigo_postal"];
$tel= $_POST["telefono"];

//Se haría la correspondiente validación y en función de ella, se le da el valor 1 o 0 a $correcto

$correcto=rand (0,1);
if($correcto==1){
echo ("Formulario enviado correctamente");
}
else{
echo ("Datos incorrectos. Compruebe de nuevo sus datos");
}

?>