<?php	
include ('header.php');
include "../Controlador/Conexion.php";	
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/jquery.tabledit.js"></script>

</head>
<script type="text/javascript">

$(document).ready(function(){
	
$('#example1').Tabledit({
    url: '../Controlador/editar.php',
    columns: {
        identifier: [0, 'usuario'],
        editable: [ [2, 'rol']]
    },
    onDraw: function() {
        console.log('onDraw()');
    },
    onSuccess: function(data, textStatus, jqXHR) {
        console.log('onSuccess(data, textStatus, jqXHR)');
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
    },
    onFail: function(jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    },
    onAlways: function() {
        console.log('onAlways()');
    },
    onAjax: function(action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
    }
	});


});

</script>
<style>

.table.user-select-none {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>

</head>
<body>

 <div class="container" >
 <div class="panel-heading">
            <h1><center>USUARIOS</center></h1>
        </div>
    <div class="panel panel-default">
       
       
        <div class="panel-body"> 
        <table class="striped" id="example1" style="border:1px solide red">
    	<tr>
        <th>USUARIO</th>
        <th>CLAVE</th>
        <th>ROL</th>
        <th>EMPLEADO</th>
        </th></th>
        </th></th>
        </tr>
        <?php 
		//////////////// CONSULTA A LA BASE DE DATOS ///////////////////
			$consulta ="SELECT * FROM login";
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
    		<td><?php echo $data['usuario'];?></td>
    		<td><?php echo $data['contrasena']; ?></td>
    		<td><?php echo $data['rol']; ?></td>
            <td><?php echo $data['FKEMPLE']; ?></td>
    	</tr>
    	<?php 
				}
			}
		?>
        </table>
        </div>



    </div>
  </div>

</body>
</html>