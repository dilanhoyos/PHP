<?php include 'header.php'; 
include '../Controlador/Conexion.php';
$cc = $_GET['cc'];
$sql = "SELECT * FROM detallereq where IDDETALLEREQ = '$cc'";
$resultado1 = $mysqli->query($sql);
$row = $resultado1->fetch_array(/*MYSQL_ASSOC*/);//SOLO VA A SELECCIONAR UN REGISTRO ENTONCES NO ES NECESARIO COLOCAR EL WHILE

?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script>
         $(document).ready(function() {
            $('select').material_select();
         });
 </script>
</head>
<body class="body1">
    <div class="container">
        <form class="form1" method="POST" action='../index.php?c=requerimiento&a=Modificar'>
            <h1><center>ASIGNAR EMPLEADO</center></h1>
            <div class="row">
                <div class="col s6">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID"  value="<?php ECHO $row['IDDETALLEREQ']; ?> "readonly>
                </div>
                <div class="col s6">
                    <label for="Fecha">Fecha</label>
                    <input type="date" class="form-control" id="txtFecha" name="txtFecha" min="<?php echo date ("Y/n/j"); ?>" value="<?php echo $row['FECHA'];?>" readonly>
                </div>
                <div class="col s12">
                    <label for="Observacion">Observacion</label>
                    <textarea rows = "20" cols = "50"  id="txtObser" readonly name="txtObser" ><?php echo $row['OBSERVACION']; ?></textarea >                
            </div>    
            </div>
            <div class="row">
            <div class="col s4">
                    <label for="Empleado">Empleado</label>
                    <BR>
                    <select class = "browser-default" name="rbempleado" id="rbempleado" disabled>
                        <option disabled selected>Seleccione Una Opcion</option>                     
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDEMPLEADO, NOMBRE FROM `empleado` ORDER BY `Nombre`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                                if($row['FKEMPLE'] === $fila["IDEMPLEADO"]){
                                    echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select" selected="true">'.$fila["NOMBRE"].' - '.$fila["IDEMPLEADO"].'</option>';
                                }
                                else{
                                    echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select">'.$fila["NOMBRE"].' - '.$fila["IDEMPLEADO"].'</option>';
                                }
                            }                           
                        ?>
                    </select>
                </div>
                <div class="col s4">
                    <label for="Requerimiento">Requerimiento</label>
                    <BR>
                    <select class = "browser-default" name="rbrequerimiento" id="rbrequerimiento" disabled>
                        <option disabled selected>Seleccione Una Opcion</option>                     
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDREQ, FKAREA FROM `requisito` ORDER BY `IDREQ`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                                if($row['FKREQ'] === $fila["IDREQ"]){
                                    echo '<option value="'.$fila["IDREQ"].'" class="custom-select" selected="true">'.$fila["IDREQ"].'</option>';
                                }
                                else{
                                    echo '<option value="'.$fila["IDREQ"].'" class="custom-select">'.$fila["IDREQ"].'</option>';
                                }
                            }                           
                        ?>
                    </select>
                </div>
                <div class="col s4">
                    <label for="Estado">Estado</label>
                    <BR>
                    <select class = "browser-default" name="rbestado" id="rbestado" disabled>
                        <option disabled selected>Seleccione Una Opcion</option>                     
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDESTADO, NOMBRE FROM `estado` ORDER BY `Nombre`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                                if($row['FKESTADO'] === $fila["IDESTADO"]){
                                    echo '<option value="'.$fila["IDESTADO"].'" class="custom-select" selected="true">'.$fila["NOMBRE"].'</option>';
                                }
                                else{
                                    echo '<option value="'.$fila["IDESTADO"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
                                }
                            }                           
                        ?>
                    </select>
                </div>
                <div class="col s12">
                    <label for="EmpleadoA">Empleado Asignado</label>
                    <BR>    
                    <select class = "browser-default" name="rbempa" id="rbempa">
                        <option disabled selected>Seleccione Una Opcion</option>   
                        <option value="NULL" class="custom-select">Nulo</option>                  
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDEMPLEADO,NOMBRE FROM `empleado` ORDER BY `NOMBRE`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                                if($row['FKEMPLEASIG'] === $fila["IDEMPLEADO"]){
                                    echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select" selected="true">'.$fila["NOMBRE"].' - '.$fila["IDEMPLEADO"].'</option>';
                                }
                                else{
                                    echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select">'.$fila["NOMBRE"].' - '.$fila["IDEMPLEADO"].'</option>';
                                }
                            } 
                        ?>
                    </select>
                </div>
                </div>
                <center><button type="submit" class="btn btn-primary">Registrar</button></center>
            </div>
        </form>
    </div>
     <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>  
</body>
</html>