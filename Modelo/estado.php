<?php 
class Estado{
    var $id;
    var $nom;
    
    function Estado($id,$nom,$emp){
        $this->id = $id;
        $this->nom = $nom;
    }

    public function __CONSTRUCT()
	{
	}

    public function Registrar(Estado $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "INSERT INTO `estado`(`IDESTADO`, `NOMBRE`) VALUES (
            '$data->id',
            '$data->nombre')";
        $resultado = $mysqli->query($sql) or die($mysqli->error);

    }

    public function Modificar(Estado $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "UPDATE `estado` SET 
        `NOMBRE`='$data->nombre' WHERE IDESTADO ='$data->id'";
        $resultado = $mysqli->query($sql) or die($mysqli->error);
    }
    
    public function Eliminar(Estado $data)
	{
		require 'Controlador/Conexion.php';
        $sql = "DELETE FROM estado WHERE IDESTADO = '$data->id'";
        $resultado = $mysqli->query($sql) or die  (mysqli_error($mysqli));
	}
    
    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getNombre(){
        return $this->nom;
    }

    function setNombre($nomb){
        $this->nom = $nomb;
    }
}
?>