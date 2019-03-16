<?php
$mysqli = new mysqli('localhost', 'root', '', 'mesaAyuda');//primer parametro nombre del servidor
if($mysqli->connect_error)
{
	die('Error en la conexion' . $mysqli->connect_error);//si no se realizo la conexion me aparecera el sigfuiente error.
	//el die es como colocar un exit pero envia un mensaje y llerga hasta ahi, no ejecuta mas el srcipt
}
?>