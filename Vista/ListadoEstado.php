<?php 
	$Page_Title = 'Listado de Empleados';
	$Page = 'Informacion';
	include ('header.php');
	include "../Controlador/Conexion.php";	
	include "../Modelo/estado.php";
	/////////// VARIABLES DE CONSULTA ////////////////
	$where="";
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
		<BR>
	<div class="container">
		<div class="row">
			<h2 style="text-align: center">Listado de Estados</h2>
		</div>
		<div class="row">
			<a href="V_estado.php" class="btn btn-primary">Nuevo Estado</a>
		</div>
		<br>
		<br>
		<div class="row table-responsive"> 
			<table class="striped" id="mitabla">
				<thead class="thead-dark">
					<tr>   
						<th scope="col">ID</th>
						<th scope="col">NOMBRE</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead> 
			<tbody>
		<?php 
		//////////////// CONSULTA A LA BASE DE DATOS ///////////////////
			$consulta ="SELECT * FROM estado;";
			$resEstado=$mysqli->query($consulta);
			if(mysqli_num_rows($resEstado)==0)
			{
				$mensaje = "<h1>No hay registros que coincidan con su criterio de busqueda..</h1>";
			}
			mysqli_close($mysqli);
					
			$result = mysqli_num_rows($resEstado);
			if($result > 0){

			while ($data = $resEstado->fetch_array(MYSQLI_BOTH)) {
				$E = new Estado(($data["IDESTADO"]),($data["NOMBRE"]));	
		?>
			<tr>
				<td><?php echo ($data["IDESTADO"]); ?></td>
				<td><?php echo $data["NOMBRE"]; ?></a></td>
				<td><a href="ModificarEstado.php?cc=<?php echo $data['IDESTADO']; ?>"> <button type="button" class="btn btn-success">Modificar</button> </a> </td>
				<!--
					<td><a  href="#" button type="button" class="btn btn-danger" data-href="../index.php?c=estado&a=Eliminar&cc=<?//php echo $data['CC']; ?>" data-toggle="modal" data-target="#confirm-delete">Eliminar</button></a> </td>
				-->

				<td><a href="../index.php?c=estado&a=Eliminar&cc=<?php echo $data['IDESTADO']; ?>"><button type="button" class="btn btn-danger"> Eliminar</button></a> </td>
			</tr>
		<?php 
				}
			}
		?>
			</table>
		</div>
		<!--
	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
				</div>
				
				<div class="modal-body">
					¿Desea eliminar este registro?
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<a class="btn btn-danger btn-ok">Delete</a>
				</div>
			</div>
		</div>
	</div>
<script>
	$('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
	});
</script>-->
</body>
</html>