<?php
if(isset($_POST['usuario']) && isset($_POST['clave']))
{
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	if($usuario == 'android' && $clave == 'sabado')
	{
		echo "correcto";	
	}
	else
	{
		echo "incorrecto";
	}
}
else
{
echo "ERROR sin datos recibidos";
}
?>