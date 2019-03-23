<?php 
include 'header.php';
include '../Controlador/Conexion.php'; 
 ?>
      
<!doctype html>
<html lang="en">
<head>
    <title>Empleado</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class = "container">
        <form class="form1" method="POST" action='../index.php?c=requerimiento&a=Guardar'>
            <h1><center>CREAR REQUERIMIENTO</center></h1>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID">
                </div>
                <div class="form-group col-md-4">
                    <label for="Fecha">Fecha</label>
                    <input type="date" class="form-control" id="txtFecha" name="txtFecha" min="<?php echo date("Y").'-'.date("m").'-'.date("d");?>">      
                    <!--value="<?php// echo $filas['FechaIni'];?>"-->
                </div>
                <div class="form-group col-md-4">
                    <label for="Observacion">Observacion</label>
                    <input type="text" class="form-control" id="txtObser" name="txtObser" placeholder="ID">
            </div>    
            </div>
            <div class="form-row">
            <div class="form-group col-md-3">
                    <label for="Empleado">Empleado</label>
                    <BR>
                    <select name="rbempleado" id="rbempleado">
                        <option disabled selected>Seleccione Una Opcion</option>                     
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDEMPLEADO, NOMBRE FROM `empleado` ORDER BY `Nombre`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                                if($row['FKEMPLEASIG'] === $fila["IDEMPLEADO"]){
                                    echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select" selected="true">'.$fila["NOMBRE"].' - '.$fila["IDEMPLEADO"].'</option>';
                                }
                                else{
                                    echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
                                }
                            }                           
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="Requerimiento">Requerimiento</label>
                    <BR>
                    <select name="rbrequerimiento" id="rbrequerimiento">
                        <option disabled selected>Seleccione Una Opcion</option>                     
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDREQ, FKAREA FROM `requisito` ORDER BY `IDREQ`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                            echo '<option value="'.$fila["IDREQ"].'" class="custom-select">'.$fila["FKAREA"].'</option>';
                            }                           
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="Estado">Estado</label>
                    <BR>
                    <select name="rbestado" id="rbestado">
                        <option disabled selected>Seleccione Una Opcion</option>                     
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDESTADO, NOMBRE FROM `estado` ORDER BY `Nombre`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                            echo '<option value="'.$fila["IDESTADO"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
                            }                           
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="EmpleadoA">Empleado Asignado</label>
                    <BR>    
                    <select name="rbempa" id="rbempa">
                        <option disabled selected>Seleccione Una Opcion</option>   
                        <option value="NULL" class="custom-select">Nulo</option>                  
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
                <center><button type="submit" class="btn btn-primary">Registrar</button></center>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
