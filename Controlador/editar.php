<?php 
require '../Controlador/Conexion.php';
$input = filter_input_array(INPUT_POST);

if ($input['action'] === 'edit') 
{	
    
    $sql = "UPDATE `login` SET 
    `rol`='".$input['rol']."'
     WHERE usuario = '".$input['usuario']."'";//aqui estaba el error  es supervisor   ms no empleado
    print_r ($sql);
    $resultado = $mysqli->query($sql) or die($mysqli->error);

    
} 
if ($input['action'] === 'delete') 
{
    $consulta ="DELETE FROM login  WHERE usuario='" . $input['usuario'] . "'";
    $resultado = $mysqli->query($consulta) or die  (mysqli_error($mysqli));
} 


mysqli_close($mysqli);

echo json_encode($input);

?>