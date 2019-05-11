<?php 
include 'header.php';
include '../Controlador/Conexion.php'; 
 ?>

<!DOCTYPE html>
  <html>
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
    </head>

    <body>
    <br>
    <div class = "container">
        <form class="form1" method="POST" action='../index.php?c=empleado&a=Guardar'>
            <h1><center>CREAR EMPLEADO</center></h1>
            <div class="row">
                <div class="col s4">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID" required>
                </div>
                <div class="col s4">
                    <label for="NOMBRE">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" required>
                </div>
                    <div class="col s4">
                    <label for="TELEFONO">Telefono</label>
                    <input type="text" class="form-control" id="txtTelefono"  name="txtTelefono" placeholder="Telefono" required>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <label for="CARGO">Cargo</label>
                    <br>
                    <select class = "browser-default" name="txtCargo" id="txtCargo" required>
                        <option disabled selected></option>                     
                        <option value = "0">Administrador</option>                     
                        <option value = "1">Jefe de Area</option>                     
                        <option value = "2">Empleado</option>                     
                    </select>
                </div>
                <div class="col s4">
                    <label for="EMAIL">Email</label>
                    <input type="email" class="form-control" id="txtEmail" name= "txtEmail" placeholder="Email" required>
                </div>
                <div class="col s4">
                    <label for="Area">Area</label>
                    <BR>
                    <select class = "browser-default" name="rbarea" id="rbarea" required>
                        <option disabled selected></option>                     
                        <?php 
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            $query="SELECT IDAREA, NOMBRE FROM `area` ORDER BY `Nombre`";
                            $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                            echo '<option value="'.$fila["IDAREA"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
                            }                           
                        ?>
                    </select>
                </div>

                <br>
                <br>
                <br>
                <br>
              
                <div class=row>
                <br>
                    <div class="col s4">
                        <label for="Usuario">Usuario</label>
                        <input type="text" class="form-control" id="txtUsu" name="txtUsu" placeholder="Usuario" required>
                    </div>
                    <div class="col s4">
                        <label for="PASSWORD">Password</label>
                        <input type="password" class="form-control" id="txtPass" name="txtPass" placeholder="Clave" required>
                    </div>
                </div>
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









