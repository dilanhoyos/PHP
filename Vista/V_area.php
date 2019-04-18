<?php 
include 'header.php';
include '../Controlador/Conexion.php'; 
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

</head>
<body>
    <br>
    <div class = "container">
        <form class="form1" method="POST" action='../index.php?c=area&a=Guardar'>
            <h1><center>CREAR AREA</center></h1>
            <div class="row">
                <div class="col s4">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID">
                </div>
                <div class="col s4">
                    <label for="NOMBRE">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
                </div>
                <div class="col s4">
                    <label for="Supervisor">Supervisor</label>
                    <BR>
                    <select class = "browser-default" name="rbSup" id="rbSup">
                        <option disabled selected>Seleccione Una Opcion</option>   
                        <option class="custom-select">Nulo</option>                  
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDEMPLEADO,NOMBRE FROM `empleado` ORDER BY `NOMBRE`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                            echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select">'.$fila["NOMBRE"].' - '.$fila["IDEMPLEADO"].'</option>';
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
