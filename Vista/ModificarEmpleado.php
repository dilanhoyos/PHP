<?php include 'header1.php'; 
include '../includes/conexion.php';
$cc = $_GET['cc'];
$sql = "SELECT * FROM cliente where CC = '$cc'";
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
<form class="form1" method="POST" action="../modelo/UpdateCliente.php">
  <h1><center>MODIFICAR CLIENTE </center></h1>
  <div class="form-row">
    <input type="hidden" name="txtcedula" value="<?php ECHO $row['CC']; ?>" />
    <div class="form-group col-md-4">
      <label for="inputEmail4">Correo</label>
      <input type="email" class="form-control" id="txtcorreo" name="txtcorreo" placeholder="Correo" value="<?php echo $row['Correo']; ?>" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Usuario</label>
      <input type="text" class="form-control" id="txtusuario" name="txtusuario" placeholder="Uuario"value="<?php echo $row['Usuario']; ?>" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Cotraseña</label>
      <input type="password" class="form-control" id="txtcontraseña"  name="txtcontraseña" placeholder="Contraseña" value="<?php echo $row['Contrasena']; ?>" >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="txtnombre">Nombre</label>
    <input type="text" class="form-control" id="txtnombre" name= "txtnombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>" >
  </div>
  <div class="form-group col-md-4">
    <label for="txtapellido">Apellido</label>
    <input type="text" class="form-control" id="txtapellido" name= "txtapellido" placeholder="Nombre" value="<?php echo $row['Apellido']; ?>" >
  </div>
    <div class="form-group col-md-4">
    <label for="txtnombre">Cedula</label>
    <input type="text" class="form-control" id="txtcedula" name= "txtcedula" placeholder="Cedula" value="<?php echo $row['CC']; ?>" >
  </div>
  </div>
   <div class="form-group">
    <label for="txtdireccion">Direccion</label>
    <input type="text" class="form-control" id="txtdireccion" name="txtdireccion" placeholder="1234 Main St" value="<?php echo $row['Direccion']; ?>" >
  </div>
  
     <center> 
   <div class="form-row">
      <div class="form-group col-md-12">
  <button type="submit" class="btn btn-default" name="btnaceptar">Aceptar</button>
        <a href="ListadoCliente.php" class="btn btn-default">Regresar</a>

      </div>

  </div>
  </center>
  
</form>
</body>
</html>