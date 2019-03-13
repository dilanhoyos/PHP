<?php 
function guardarcliente()
{
require '../includes/Conexion.php'; //Exigir conexion

$nombre = $_POST["txtnombre"];
$correo = $_POST["txtcorreo"];
$usuario = $_POST["txtusuario"];
$contraseña = $_POST["txtcontraseña"];
$apellido = $_POST["txtapellido"];
$cedula = $_POST["txtcedula"];
$direccion = $_POST["txtdireccion"];

//echo $nombre . $correo . $usuario . $contraseña . $apellido . $cedula . $direccion;
//exit();

$sql = "INSERT INTO cliente (CC, Nombre, Usuario, Contrasena, Apellido, Direccion, Correo) VALUES ('$cedula','$nombre','$usuario','$contraseña','$apellido','$direccion','$correo')";

$resultado = $mysqli->query($sql);

return $resultado;
}
?>

<html lang="es">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--Etiqueta bootstrap la cual detcta que si es un dispositivo movil se va a adaptar a esa pantalla-->
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</head>	

<body>
	<div class="container">
		<div class="row"> 
			<div class="row" style="text-align: center">
				<?php if(guardarcliente()) { ?>
					<h3>REGISTRO GUARDADO</h3>
					<?php  } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php  } ?>    
					<a href="../ListadoCliente.php" class="btn btn-primary">Regresar </a>
				</div>
			</div>
		</div>

	</body>

	</html>