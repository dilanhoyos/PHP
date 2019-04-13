
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <!--<link rel="stylesheet" href="../css/estilos.css">
222831
393e46
00adb5
eeeeee
-->
<?php session_start();?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body class="body1" style="background-color : #eeeeee">
  <header style="background-color: #393e46">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-1 text-light">Mesa de Ayuda</h1>
            </div>            
        </div>
        <?php if($_SESSION['verificar'] && $_SESSION['rol'] == 0){ //ADMINISTRADOR?> 
        <div class="row" style="background-color: #00adb5">
            <div class="col ">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/Vista/inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/Vista/ListadoArea.php">Area</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/Vista/ListadoEmpleado.php">Empleado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/Vista/ListadoRequerimiento.php">Requerimiento</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php }else if ($_SESSION['verificar'] && $_SESSION['rol'] == 1){ //JEFE DE AREA?> 
        <div class="row" style="background-color: #00adb5">
            <div class="col ">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/Vista/inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/Vista/ListadoArea.php">Area</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/Vista/ListadoRequerimiento.php">Requerimiento</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php }else if ($_SESSION['verificar'] && $_SESSION['rol'] == 2){ //EMPLEADO?>
        <div class="row" style="background-color: #00adb5">
            <div class="col ">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/Vista/ListadoArea.php">Area</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/Vista/ListadoEmpleado.php">Empleado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/phpproject/Vista/ListadoRequerimiento.php">Requerimiento</a>
                    </li>
                </ul>
            </div>
        </div>
<?php }else{
    header('Location: /phpproject/');	            
}?>
    </div>
  </header>
</body>
</html>
