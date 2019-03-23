<?php include 'header.php'; 
include '../Controlador/Conexion.php';
$cc = $_GET['cc'];
$sql = "SELECT * FROM empleado where IDEMPLEADO = '$cc'";
$resultado1 = $mysqli->query($sql);
$row = $resultado1->fetch_array(/*MYSQL_ASSOC*/);//SOLO VA A SELECCIONAR UN REGISTRO ENTONCES NO ES NECESARIO COLOCAR EL WHILE
//echo $_SERVER['PHP_SELF'];

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
        <form class="form1" method="POST" action='../index.php?c=empleado&a=Modificar'>
            <h1><center>MODIFICAR EMPLEADO</center></h1>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID"  value="<?php ECHO $row['IDEMPLEADO']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="NOMBRE">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" value="<?php echo $row['NOMBRE']; ?>">
                </div>
                    <div class="form-group col-md-4">
                    <label for="TELEFONO">Telefono</label>
                    <input type="text" class="form-control" id="txtTelefono"  name="txtTelefono" placeholder="Telefono" value="<?php echo $row['TELEFONO']; ?>" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="CARGO">Cargo</label>
                    <input type="text" class="form-control" id="txtCargo" name= "txtCargo" placeholder="Cargo" value="<?php echo $row['CARGO']; ?>" >
                </div>
                <div class="form-group col-md-3">
                    <label for="EMAIL">Email</label>
                    <input type="email" class="form-control" id="txtEmail" name= "txtEmail" placeholder="Email" value="<?php echo $row['EMAIL']; ?>" >
                </div>
                <div class="form-group col-md-3">
                    <label for="Area">Area</label>
                    <BR>
                    <select name="rbarea" id="rbarea">
                        <option disabled selected>Seleccione Una Opcion</option>                     
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDAREA, NOMBRE FROM `area` ORDER BY `Nombre`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                                if($row['FKAREA'] === $fila["IDAREA"]){
                                    echo '<option value="'.$fila["IDAREA"].'" class="custom-select" selected="true">'.$fila["NOMBRE"].'</option>';
                                }
                                else{
                                    echo '<option value="'.$fila["IDAREA"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
                                }
                            }                           
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="Super">Supervisor</label>
                    <BR>    
                    <select name="rbSup" id="rbSup">
                        <option disabled selected>Seleccione Una Opcion</option>                   
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDEMPLEADO,NOMBRE FROM `empleado` ORDER BY `NOMBRE`";
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
                <center><button type="submit" class="btn btn-primary">Registrar</button></center>
            </div>
        </form>
    </div>
</body>
</html>