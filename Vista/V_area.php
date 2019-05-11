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
         $(document).ready(function(){ Materialize.toast('I am Alert', 4000) });

      </script>

</head>
<body>
    <br>
    <div class = "container">
        <form class="form1" method="POST" action='../index.php?c=area&a=Guardar'>
            <h1><center>CREAR AREA</center></h1>
            <div class="row">
                <div class="col s6">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID" required >
                </div>
                <div class="col s6">
                    <label for="NOMBRE">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" required>
                </div>
            </div>
            <center><button onclick="M.toast({html: 'I am a toast'})" type="submit" class="btn btn-primary">Registrar</button></center>
            </div>
        </form>
    </div>
     <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
