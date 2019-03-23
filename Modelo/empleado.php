<?php
class Empleado
{
    var $id;
    var $nombre;
    var $telefono;
    var $cargo;
    var $email;
    var $area;
    var $supervisor;

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
            '$data->supervisor')";

            print_r($data->area);
            print_r($sql);
        $resultado = $mysqli->query($sql) or die($mysqli->error);

    }
    
    function __CONSTRUCT1($Id, $nom, $tel, $car, $mail, $Area, $Sup){
        
        $this->id = $Id;
        $this->nombre = $nom;
        $this->telefono = $tel;
        $this->cargo = $car;
        $this->email = $mail;
        $this->area = $Area;
        $this->supervisor = $Sup;
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
        `FKEMPLE`='$data->supervisor'
         WHERE IDEMPLEADO = '$data->id'";
        $resultado = $mysqli->query($sql) or die($mysqli->error);

    }
    
    public function Eliminar(Empleado $data)
	{
		require 'Controlador/Conexion.php';
        $sql = "DELETE FROM empleado WHERE IDEMPLEADO = '$data->id'";
        $resultado = $mysqli->query($sql) or die  (mysqli_error($mysqli));
	}

}
?>