<?php 
$origen = $_GET['c'];


function dibujarDestino($a, $b, $c)
{
	$destino = 'Destino:';
	$destino .= '<select>';
	$destino .= '<option value="1">'.$a.'</option>';
	$destino .= '<option value="2">'.$b.'</option>';
	$destino .= '<option value="3">'.$c.'</option>';
	$destino .= '</select>';

	echo $destino;
}

if ($origen == 0)
{
	$a = "";
	$b = '';
	$c = '';
}

if ($origen == 1)
{
	$a = "Ciudad Real";
	$b = 'Albacete';
	$c = 'Alicante';
}

if ($origen == 2)
{
	$a = 'Sevilla';
	$b = 'Huelva';
	$c = 'Cádiz';
}

if ($origen == 3)
{
	$a = 'Zaragoza';
	$b = 'Tarragona';
	$c = 'Barcelona';
}

dibujarDestino($a, $b, $c);

 ?>