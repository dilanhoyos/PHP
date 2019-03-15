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
        <form class="form1" method="POST" action='?c=empleado&a=Guardar'>
            <h1><center>CREAR EMPLEADO</center></h1>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID">
                </div>
                <div class="form-group col-md-4">
                    <label for="NOMBRE">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
                </div>
                    <div class="form-group col-md-4">
                    <label for="TELEFONO">Telefono</label>
                    <input type="text" class="form-control" id="txtTelefono"  name="txtTelefono" placeholder="Telefono">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="CARGO">Cargo</label>
                    <input type="text" class="form-control" id="txtCargo" name= "txtCargo" placeholder="Cargo">
                </div>
                <div class="form-group col-md-3">
                    <label for="EMAIL">Email</label>
                    <input type="email" class="form-control" id="txtEmail" name= "txtEmail" placeholder="Email">
                </div>
                <div class="form-group col-md-3">
                    <label for="Area">Area</label>
                    <BR>
                    <select name="rbarea" id="rbarea">
                        <option disabled selected>Seleccione Una Opcion</option>                     
                        <?php
                                 try {
                                    $mbd = new PDO('mysql:host=localhost;dbname=mesaAyuda', 'root', '');
                                    foreach($mbd->query("SELECT IDAREA, NOMBRE FROM `area` ORDER BY `Nombre`") as $fila) {
                                        echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
                                    }
                                    $mbd = null;
                                } catch (PDOException $e) {
                                    print "¡Error!: " . $e->getMessage() . "<br/>";
                                    die();
                                } 




                           /* ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDAREA, NOMBRE FROM `area` ORDER BY `Nombre`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                            echo '<option value="'.$fila["IDAREA"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
                            }             */               
                        ?>
                    </select>
                </div><?php echo 'fsefsefsf';?>
                <div class="form-group col-md-3">
                    <label for="Super">Supervisor</label>
                    <BR>    
                    <select name="rbSup" id="rbSup">
                        <option disabled selected>Seleccione Una Opcion</option>                     
                        <?php
                               try {
                                    $mbd = new PDO('mysql:host=localhost;dbname=mesaAyuda', 'root', '');
                                    foreach($mbd->query("SELECT IDEMPLEADO,NOMBRE FROM `empleado` ORDER BY `NOMBRE`") as $fila) {
                                        echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
                                    }
                                    $mbd = null;
                                } catch (PDOException $e) {
                                    print "¡Error!: " . $e->getMessage() . "<br/>";
                                    die();
                                } 
                            







/*
                            try 
                            {
                                $stm = $this->pdo
                                        ->prepare("SELECT IDEMPLEADO,NOMBRE FROM `empleado` ORDER BY `NOMBRE`");
                                        while (($fila = $stm->fetch(PDO::FETCH_OBJ)) != NULL) 
                                        {
                                            echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
                                        }   
                                        //$stm->execute(array($idpersona));
                                       
                            } catch (Exception $e) 
                            {
                                die($e->getMessage());
                            }
*/




                            /*ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDEMPLEADO,NOMBRE FROM `empleado` ORDER BY `NOMBRE`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                            echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
                            }   */
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
