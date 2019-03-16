<?php
class Requerimiento
{
    var $id;
    var $fecha;
    var $observacion;
    var $emple;
    var $req;
    var $estado;
    var $empleasi;

    public function Registrar(Requerimiento $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "INSERT INTO `detallereq`(`IDDETALLEREQ`, `FECHA`, `OBSERVACION`, `FKEMPLE`, `FKREQ`, `FKESTADO`, `FKEMPLEASIG`) VALUES (
            '$data->id',
            '$data->fecha',
            '$data->observacion',
            '$data->emple',
            '$data->req',
            '$data->estado',
            '$data->empleasi')";
        $resultado = $mysqli->query($sql) or die($mysqli->error);

    }
    
    function __CONSTRUCT1($Id, $fecha, $obs, $emp, $re, $es, $ema){
        
        $this->id = $Id;
        $this->fecha = $fecha;
        $this->observacion = $obs;
        $this->emple = $emp;
        $this->req = $re;
        $this->estado = $es;
        $this->empleasi = $ema;
    }

	public function __CONSTRUCT()
	{
	}

    public function Modificar(Requerimiento $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "UPDATE `detallereq` SET 
        `FECHA`='$data->nombre',
        `OBSERVACION`='$data->telefono',
        `FKEMPLE`='$data->cargo',
        `FKREQ`='$data->email',
        `FKESTADO`='$data->area',
        `FKEMPLEASIG`='$data->Supervisor' WHERE IDDETALLEREQ = '$data->id'";
        $resultado = $mysqli->query($sql) or die($mysqli->error);

    }
    
    public function Eliminar(Requerimiento $data)
	{
		require 'Controlador/Conexion.php';
        $sql = "DELETE FROM detallereq WHERE IDDETALLEREQ = '$data->id'";
        $resultado = $mysqli->query($sql) or die  (mysqli_error($mysqli));
	}

    function getId(){
        return $this->id;
    }
    function getNombre(){
        return $this->fecha;
    }
    function getobservacion(){
        return $this->observacion;
    }
    function getemple(){
        return $this->emple;
    }
    function getreq(){
        return $this->req;
    }
    function getestado(){
        return $this->estado;
    }
    function getempleasi(){
        return $this->empleasi;
    }
}
?>