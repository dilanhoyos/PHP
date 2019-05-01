<?php 
class Area{
    var $id;
    var $nom;
    var $emple;

    function Area($idd,$noms,$emp){
        $this->id = $idd;
        $this->nom = $noms;
        $this->emple = $emp;
    }
    public function Registrar(Area $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "INSERT INTO `area`(`IDAREA`, `NOMBRE`, `FKEMPLE`) VALUES (
            '$data->id',
            '$data->nombre',
            '$data->supervisor')";
        $resultado = $mysqli->query($sql) or die($mysqli->error);
    }

    public function Existe(Area $data){
        require 'Controlador/Conexion.php';
        $sql = "SELECT * FROM area WHERE IDAREA ='$data->id'";
        $resultado = $mysqli->query($sql) or die($mysqli->error);
        if($resultado)
         $str = "Location: /phpproject/Vista/ERROR.php";
         header($str);
   
    }



	public function __CONSTRUCT()
	{
	}

    public function Modificar(Area $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "UPDATE `area` SET 
        `NOMBRE`='$data->nombre',
        `FKEMPLE`='$data->supervisor' WHERE IDAREA = '$data->id'";//aqui estaba el error  es supervisor   ms no empleado
        print_r ($sql);
        $resultado = $mysqli->query($sql) or die($mysqli->error);

    }
    
    public function Eliminar(Area $data)
	{
		require 'Controlador/Conexion.php';
        $sql = "DELETE FROM area WHERE IDAREA = '$data->id'";
        $resultado = $mysqli->query($sql) or die  (mysqli_error($mysqli));
	}
   
}
?>