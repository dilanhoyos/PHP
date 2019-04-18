<?php include 'header.php'; 
include '../Controlador/Conexion.php';
$cc = $_GET['cc'];
$sql = "SELECT * FROM area where IDAREA = '$cc'";
$resultado1 = $mysqli->query($sql);
$row = $resultado1->fetch_array(/*MYSQL_ASSOC*/);//SOLO VA A SELECCIONAR UN REGISTRO ENTONCES NO ES NECESARIO COLOCAR EL WHILE
//echo $_SERVER['PHP_SELF'];
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
  <title></title>
</head>
<body class="body1">
    <div class="container">
    
        <form class="form1" method="POST" action='../index.php?c=area&a=Modificar'>
            <h1><center>MODIFICAR AREA</center></h1>
            <div class="row">
                <div class="col s4">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID"  value="<?php ECHO $row['IDAREA']; ?> "readonly>
                </div>
                <div class="col s4">
                    <label for="NOMBRE">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" value="<?php echo $row['NOMBRE']; ?>">
                </div>
                <div class="col s4">
                    <label for="Super">Supervisor</label>
                    <BR>    
                    <select class = "browser-default" name="rbSup" id="rbSup">
                        <option disabled selected>Seleccione Una Opcion</option>   
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT * FROM `empleado` ";
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
            </div>
                <center><button type="submit" class="btn btn-primary">Registrar</button></center>
            </div>
        </form>
    </div>
    <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>