<?php 
include '../Controlador/Conexion.php'; 
include '../Modelo/requerimiento.php'; 
include 'header.php';

$sql = "SELECT IDESTADO,NOMBRE FROM `estado` ORDER BY `IDESTADO`";
$resultado1 = $mysqli->query($sql);
$row = $resultado1->fetch_array(/*MYSQL_ASSOC*/);//SOLO VA A SELECCIONAR UN REGISTRO ENTONCES NO ES NECESARIO COLOCAR EL WHILE
//echo $_SERVER['PHP_SELF'];
 ?>

      
<!doctype html>
<html lang="en">
  <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script>
         $(document).ready(function() {
            $('select').material_select();
         });
      </script>
      <?php
       if(isset($_REQUEST['confirmacion'])){
		if($_REQUEST['confirmacion'] == 1){
            ?>
           	<div class="card green">
        	 <p>Se Genero el radicado Correctamente</p>
			</div>
           <?php 
            }
        }
?>
<body>
    <br>
    <div class = "container">
 
        <form class="form1" method="POST" action='../index.php?c=requerimiento&a=Guardar'>
            <h1><center>CREAR RADICADO</center></h1>  
            <div class="row">
                <div class="col s6">
                    <label for="Fecha">Fecha</label>
                    <input type="date" class="form-control" id="txtFecha" name="txtFecha" value="<? echo date("Y-m-d");  ?>" readonly>
            
                </div>
                <div class="col s6">
                    <label for="Observacion">Persona Activa</label>
                    <input type="text" class="form-control" id="txtPersona" name="txtPersona" value="<?php echo $_SESSION['user']; ?>" readonly>
                </div>    
            </div>
            <div class="row">
                <div class="col s6">
                    <label for="Requerimiento">Area</label>
                    <BR>
                    <select class = "browser-default" name="rbAreaRadicado" id="rbAreaRadicado" required>
                        <option disabled selected> </option>                 
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDAREA,NOMBRE FROM `area` ORDER BY `NOMBRE`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                            $query="SELECT IDAREA,NOMBRE FROM `area` ORDER BY `NOMBRE`";
                            echo '<option value="'.$fila["IDAREA"].'" class="custom-select">'.$fila["NOMBRE"].' - '.$fila["IDAREA"].'</option>';
                            } 
                        ?>
                    </select>
                </div>
                <div class="col s6">
                <label for="Estado">Estado</label>
                    <input type="text" class="form-control" id="txtEstado" name="txtEstado" value= "<?php echo $row["NOMBRE"] ;?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                   <textarea name="txtObser" id="txtObser" cols="115" rows="800" required></textarea>
                </div>
                <div class="form-group col-md-5"></div>
                <div class="form-group col-md-2">
            </div>
            <center><button type="submit" class="btn btn-primary">Radicar</button></center>
        </form>
    </div>
     <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
