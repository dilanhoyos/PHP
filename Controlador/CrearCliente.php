<?php include 'header1.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
  <title></title>
</head>
<body class="body1">
<form class="form1" method="POST" action="../Modelo/GuardarCliente.php">
  <h1><center>CREAR CLIENTE </center></h1>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Correo</label>
      <input type="email" class="form-control" id="txtcorreo" name="txtcorreo" placeholder="Correo">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Usuario</label>
      <input type="text" class="form-control" id="txtusuario" name="txtusuario" placeholder="Usuario">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Cotraseña</label>
      <input type="password" class="form-control" id="txtcontraseña"  name="txtcontraseña" placeholder="Contraseña">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="txtnombre">Nombre</label>
    <input type="text" class="form-control" id="txtnombre" name= "txtnombre" placeholder="Nombre">
  </div>
  <div class="form-group col-md-4">
    <label for="txtapellido">Apellido</label>
    <input type="text" class="form-control" id="txtapellido" name= "txtapellido" placeholder="Nombre">
  </div>
    <div class="form-group col-md-4">
    <label for="txtnombre">Cedula</label>
    <input type="text" class="form-control" id="txtcedula" name= "txtcedula" placeholder="Cedula">
  </div>
  </div>
   <div class="form-group">
    <label for="txtdireccion">Direccion</label>
    <input type="text" class="form-control" id="txtdireccion" name="txtdireccion" placeholder="1234 Main St">
  </div>
  
    <center><button type="submit" class="btn btn-primary">Registrar</button></center>
  
</form>
</body>
</html>