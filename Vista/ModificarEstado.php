<?php include 'header.php'; 
include '../Controlador/Conexion.php';
$cc = $_GET['cc'];
$sql = "SELECT * FROM estado where IDESTADO = '$cc'";
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
    
        <form class="form1" method="POST" action='../index.php?c=estado&a=Modificar'>
            <h1><center>MODIFICAR AREA</center></h1>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID" disabled value="<?php ECHO $row['IDESTADO']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="NOMBRE">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" value="<?php echo $row['NOMBRE']; ?>">
                </div>
            </div>
                <center><button type="submit" class="btn btn-primary">Registrar</button></center>
            </div>
        </form>
    </div>
</body>
</html>