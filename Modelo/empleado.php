<?php
class Empleado
{
    var $id;
    var $nombre;
    var $telefono;
    var $cargo;
    var $email;
    var $area;
    var $Supervisor;

    public function Registrar(Empleado $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "INSERT INTO `empleado`(`IDEMPLEADO`, `NOMBRE`, `TELEFONO`, `CARGO`, `EMAIL`, `FKAREA`, `FKEMPLE`) VALUES (
            '$data->id',
            '$data->nombre',
            '$data->telefono',
            '$data->cargo',
            '$data->email',
            '$data->area',
            '$data->Supervisor')";
        $resultado = $mysqli->query($sql) or die($mysqli->error);

    }
    
    function Empleado($id, $nom, $tel, $car, $mail, $area, $sup){
        $this->id = $id;
        $this->nombre = $nom;
        $this->telefono = $tel;
        $this->cargo = $car;
        $this->email = $mail;
        $this->area = $area;
        $this->Supervisor = $sup;
    }

	public function __CONSTRUCT()
	{
	}

    public function Modificar(Empleado $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "UPDATE `empleado` SET 
        `NOMBRE`='$data->nombre',
        `TELEFONO`='$data->telefono',
        `CARGO`='$data->cargo',
        `EMAIL`='$data->email',
        `FKAREA`='$data->area',
        `FKEMPLE`='$data->Supervisor' WHERE IDEMPLEADO = '$data->id'";
        $resultado = $mysqli->query($sql) or die($mysqli->error);

    }
    
    public function Eliminar(Empleado $data)
	{
		require 'Controlador/Conexion.php';
        $sql = "DELETE FROM empleado WHERE IDEMPLEADO = '$data->id'";
        $resultado = $mysqli->query($sql) or die  (mysqli_error($mysqli));
	}

    function getId(){
        return $this->id;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getTelefono(){
        return $this->telefono;
    }
    function getCargo(){
        return $this->cargo;
    }
    function getEmail(){
        return $this->email;
    }
    function getArea(){
        return $this->area;
    }
    function getSupervisor(){
        return $this->Supervisor;
    }
}
?>