<?php 
include 'header.php';
include '../Controlador/Conexion.php'; 
?>
    
<!doctype html>
<html lang="en">
<head>
    <title>Radicado</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class = "container">
        <form class="form1" method="POST" action='../index.php?c=radicado&a=Guardar'>
            <h1><center>CREAR RADICADO</center></h1>
            <center> <label for="mensaje">Escoja el area al cual se va a realizar el radicado</label></center>
            <br>
            <div class="form-row">
            <div class="form-group col-md-4">
            </div>
            <br>
                <div class="form-group col-md-2">
                <select name="rbAreaRadicado" id="rbAreaRadicado">
                        <option disabled selected>Seleccione el Area </option>                 
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
                <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <div class="form-group col-md-4">
        </form>
    </div>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


<?php if(!isset($_GET['cerrar']) || isset($_POST['cerrar']) )
{ ?>
 <form action='CrearRadicado.php' method='post'>
    <td>
    <div class="container">
      <button type="submit" class="btn btn-info" name="ingresar">Detalle Requisito</button>
    </div>
    </td>
  </form>
<?php 
} 
?>
<?php
 if((isset($_POST['ingresar'] ))|| (isset($_POST['registrar']))){
         include ('V_requerimiento.php');
      ?>
        <form action='?cerrar=cierra' method='post'>
          <td>
            <div class="container">
              <button type="submit" class="btn btn-danger" name="cerrar">cerrar formulario</button>
            </div>
          </td>
        </form>
      <?php
    }?>