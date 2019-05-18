<?php 
    include ('header.php');

?>
<?php
function insert(){
    echo "The select function is called.";
}
function enviar(){
    include('/phpproject/Vista/consulta5.php');
}
?>
<!DOCTYPE html>
<html lang="es"> <!-- Lenguaje español -->
<head>
    <meta name="index.php"  content="text/html;" http-equiv="content-type" charset="utf-8"><!-- Utf que hace que la letra salga bien -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--Etiqueta bootstrap la cual detcta que si es un dispositivo movil se va a adaptar a esa pantalla-->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
	<script src="../js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
    <br>
        <div class="row">
            <div class="col s2">
                <a class="waves-effect waves-light btn" href="/phpproject/Vista/consulta5.php" onclick="insert();">No Solucionados Totalmente</a>
            </div>
            <div class="col s2">
            </div>
            <div class="col s2">
            </div>
            <div class="col s2">
            </div>
            <div class="col s2">
            </div>
        </div>
    </div>
    <script>
        function funcion(){
            alert('<?php echo insert(); ?>');
            enviar();
        }
    </script>
</body>
</html>
