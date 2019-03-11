<?php


$mysqli = new mysqli('localhost', 'root', '', 'mesaAyuda');

if($mysqli->connect_error)
{
	die('Error en la conexion' . $mysqli->connect_error);
}