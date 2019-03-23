<?php
require_once 'Controlador/Conexion.php';
$controlador = 'CtrlEmpleado';

// Con esta sección hacemos el Controlador del Frontend
if(!isset($_REQUEST['c']))
{
    require_once "Controlador/$controlador.php";
    $controlador = ($controlador) ;
    $controlador = new $controlador;
    $controlador->Index();    
}
else
{
    // buscamos el controlador que queremos cargar
    $controlador = ($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "Controlador/Ctrl".ucwords($controlador).".php";
    $controlador = "Ctrl".ucwords($controlador);
    $controlador = new $controlador;
    echo "<script>console.log( 'Debug Objects:  ' );</script>";

    // Función para llamar las acciones a ejecutar
    call_user_func( array( $controlador, $accion ) );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
</body>
</html>