<?php 
	$Page_Title = 'Listado de Empleados';
	$Page = 'Informacion';
	include ('header.php');
	include "../Controlador/Conexion.php";	
	include "../Modelo/empleado.php";
	/////////// VARIABLES DE CONSULTA ////////////////
	$where="";
	if(isset($_REQUEST['confirmacion']))
		if($_REQUEST['confirmacion'] == 1)
			echo "<script> $(function() {
				Materialize.toast();
			}); </script>";
			echo '<script language="javascript">alert("Guardado Exitoso");</script>'; 
?>
<html lang="es"> <!-- Lenguaje español -->
<head>
    <meta name="index.php"  content="text/html;" http-equiv="content-type" charset="utf-8"><!-- Utf que hace que la letra salga bien -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--Etiqueta bootstrap la cual detcta que si es un dispositivo movil se va a adaptar a esa pantalla-->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
	<script src="../js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function()//va a estar leyendo jqyery
		{
			$('#mitabla').dataTable({ //y va a leer esto cuado detecte la tbala con la id
				"order": [[0,"desc"]],//estamos diciendole que por defautl me va a ordenar la tabla por nombre alfabeticamnete
				"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina", //length es el nombre del campo donde esta el select, _MENU_ es el select 
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
					"infoEmpty": "No hay registros disponibles",
					"infoFiltered": "filtrada de _MAX_ registros",
					"loadingRecords": "cargando...",
					"processing": "Procesando...",
					"search": "Buscar:",
					"zeroRecords": "No se encontraron registros coincidentes",
					"paginate": {
						"next": "Siguiente",
						"previous": "Anterior"
					},
				},
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<BR>
		<div class="row">
			<h2 style="text-align: center">Listado de Radicado</h2>
		</div>
		<div class="row table-responsive"> 
			<table class="striped" id="mitabla">
				<thead class="thead-dark">
					<tr>   
						<th scope="col">ID</th>
						<th scope="col">FECHA</th>
						<th scope="col">OBSERVACION</th>
						<th scope="col">EMPLEADO</th>
						<th scope="col">REQUISITO</th>
						<th scope="col">ESTADO</th>
						<th scope="col">EMPLEADO ASIGNADO</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead> 
			<tbody>
		<?php 
		//////////////// CONSULTA A LA BASE DE DATOS ///////////////////
			$consulta ="SELECT D.IDDETALLEREQ, D.FECHA, D.OBSERVACION, D.FKEMPLE, D.FKREQ, E.NOMBRE, EM.NOMBRE AS 'NOMBREEMPLE', D.FKEMPLEASIG FROM detallereq D INNER JOIN estado E ON D.FKESTADO = E.IDESTADO INNER JOIN empleado EM ON EM.IDEMPLEADO = D.FKEMPLE;";
			$resEstado=$mysqli->query($consulta);
			if(mysqli_num_rows($resEstado)==0)
			{
				$mensaje = "<h1>No hay registros que coincidan con su criterio de busqueda..</h1>";
			}
			mysqli_close($mysqli);
					
			$result = mysqli_num_rows($resEstado);
			if($result > 0){
			while ($data = $resEstado->fetch_array(MYSQLI_BOTH)) {


		?> 
			<tr>
				<td><?php echo ($data["IDDETALLEREQ"]); ?></td>
				<td><?php echo $data["FECHA"]; ?></a></td>
				<td><?php echo $data["OBSERVACION"];?></td>
				<td><?php echo $data["NOMBREEMPLE"];?></td>
				<td><?php echo ($data["FKREQ"]);?></td>
				<td><?php echo $data["NOMBRE"];?></td>
				<td><?php echo $data["FKEMPLEASIG"];?></td>
				<td><a href="ModificarRequerimiento.php?cc=<?php echo $data['IDDETALLEREQ']; ?>"> <button type="button" class="btn btn-success">Asignar</button> </a> </td>
				<td><a href="../index.php?c=requerimiento&a=Eliminar&cc=<?php echo $data['IDDETALLEREQ']; ?>"><button type="button" class="btn btn-danger"> Eliminar</button></a> </td>
			</tr>
		<?php 
				}
			}
		?>
			</table>
		</div>
</body>
</html>