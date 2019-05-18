

<!DOCTYPE html>
<html>
<?php session_start();?>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body class="body1" style="background-color : #fafafa ">
    <header style="background-color: #393e46">
    <div class="navbar-fixed">
        <nav style="background-color: #1565c0">
        <?php if($_SESSION['verificar'] && $_SESSION['rol'] == 0){ //ADMINISTRADOR?> 
            <div class="nav-wrapper">
                 <ul class="left hide-on-med-and-down">
                     <li>
                        <a  href="/phpproject/Vista/inicio.php">Inicio</a>
                     </li>
                     <li>
                        <a href="/phpproject/Vista/ListadoArea.php">Area</a>
                     </li>
                     <li >
                         <a href="/phpproject/Vista/ListadoEmpleado.php">Empleado</a>
                     </li>
                     <li >
                         <a href="/phpproject/Vista/ListadoRequerimiento.php">Asignar</a>
                     </li>
                     <li > 
                        <a href="/phpproject/Vista/V_requerimiento.php">Radicado</a>
                     </li>
                     <li > 
                        <a href="/phpproject/Vista/ListadoEstado.php">Solucion</a>
                     </li>
                     <li > 
                        <a href="/phpproject/Vista/adminuser.php">Administracion de Usuarios</a>
                     </li>
                     <li > 
                        <a href="/phpproject/Vista/consultas.php">Consultas</a>
                     </li>
                </ul>
                <ul class="right hide-on-med-and-down">
                     <li >
                        <a  href="/phpproject/Controlador/logout.php">Cerrar Sesion</a>
                     </li>
                </ul>
         <?php }else if ($_SESSION['verificar'] && $_SESSION['rol'] == 1){ //JEFE DE AREA?> 
                <ul class="left hide-on-med-and-down">
                     <li>
                         <a href="/phpproject/Vista/inicio.php">Inicio</a>
                     </li>
                     <li>
                         <a href="/phpproject/Vista/ListadoArea.php">Area</a>
                     </li>
                     <li class="nav-link text-light"> 
                        <a  href="/phpproject/Vista/ListadoEmpleado.php">Empleado</a>
                    </li>
                     <li class="nav-link text-light"> 
                        <a href="/phpproject/Vista/\ListadoRequerimiento.php">Radicado</a>
                     </li>
                </ul> 
                <ul class="right hide-on-med-and-down">
                     <li >
                        <a  href="/phpproject/Controlador/logout.php">Cerrar Sesion</a>
                     </li>
                </ul>
        <?php }else if ($_SESSION['verificar'] && $_SESSION['rol'] == 2){ //EMPLEADO?>
                 <ul class="left hide-on-med-and-down">
                     <li>
                         <a href="/phpproject/Vista/inicio.php">Inicio</a>
                     </li>
                     <li>
                        <a href="/phpproject/Vista/ListadoRequerimiento.php">Radicado</a>
                     </li>                     
                     <li>
                        <a href="/phpproject/Vista/ListadoEstado.php">Radicados por Solucionar</a>
                     </li>
                </ul>
                <ul class="right hide-on-med-and-down">
                     <li >
                        <a  href="/phpproject/Controlador/logout.php">Cerrar Sesion</a>
                     </li>
                </ul>
        <?php }else{header('Location: /phpproject/');}?>                         
            </div>
        </nav>
    </div>
    </header>
      <!--Import jQuery before materialize.js-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js" type="text/javascript" src="js/materialize.min.js">      
         $(function() {
            Materialize.toast('cccscesescesscs', 4000 );
         });
      </script>
    </body>
</html>
        













