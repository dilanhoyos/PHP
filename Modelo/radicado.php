<?php 
class Radicado{

    public function __CONSTRUCT()
	{
	}

    public function Registrar(Radicado $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "INSERT INTO `requisito`(`FKAREA`) VALUES (
            '$data->rbRadicado')";
        $resultado = $mysqli->query($sql) or die($mysqli->error);

    }

    function consultaSiExiste($user)
     {
    
    $contador1=0;
  $stmt=$this->conector->query("SELECT * FROM tbl_usuario WHERE user='".$user."' ");  
     //echo "<h1>".$stmt."</h1>";
     foreach ($stmt as $key1) {
      $contador1++;
      //echo $contador1;
      }
      
    //echo "<h1>".$contador1."</h1>";
     return $contador1==0;

    }
}
?>