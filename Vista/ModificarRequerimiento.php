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
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title></title>
</head>
<body class="body1">
    <div class="container">
        <form class="form1" method="POST" action='../index.php?c=requerimiento&a=Modificar'>
            <h1><center>MODIFICAR REQUERIMIENTO</center></h1>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID" disabled value="<?php ECHO $row['IDDETALLEREQ']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="Fecha">Fecha</label>
                    <input type="date" class="form-control" id="txtFecha" name="txtFecha" min="<?php echo date("Y").'-'.date("m").'-'.date("d");?>" value="<?php echo $filas['FechaIni'];?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="Observacion">Observacion</label>
                    <textarea rows = "5" cols = "50" name = "description" id="txtObser" name="txtObser" value="<?php ECHO $row['OBSERVACION']; ?>"></textarea>                
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
                            echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
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
</body>
</html>