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
            '$data->emple')";
        $resultado = $mysqli->query($sql) or die($mysqli->error);
    }

	public function __CONSTRUCT()
	{
	}

    public function Modificar(Area $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "UPDATE `area` SET 
        `NOMBRE`='$data->nombre',
        `FKEMPLE`='$data->emple' WHERE IDAREA = '$data->id'";
        $resultado = $mysqli->query($sql) or die($mysqli->error);

    }
    
    public function Eliminar(Area $data)
	{
		require 'Controlador/Conexion.php';
        $sql = "DELETE FROM area WHERE IDAREA = '$data->id'";
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

    function getEmple(){
        return $this->emple;
    }

    function setEmple($E){
        $emple = $E;
    }
}
?>