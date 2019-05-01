<?php
class Requerimiento
{
    var $fecha;
    var $observacion;
    var $emple;
    var $estado;
    var $empleasi;
    var $area;

    public function Registrar(Requerimiento $data)
	{
        require 'Controlador/Conexion.php';
        $sqlreq = "INSERT INTO `requisito`(`FKAREA`) VALUES ('$data->area')";
        $mysqli->query($sqlreq) or die($mysqli->error);

        $consulsql = "Select IDREQ from requisito order by IDREQ desc limit 1";
        $result = mysqli_query($mysqli, $consulsql) or die("Ocurrio un error en la consulta SQL");
        $fila = mysqli_fetch_array($result);
        $REQID = $fila["IDREQ"];
        $sql = "INSERT INTO `detallereq`(`FECHA`, `OBSERVACION`, `FKEMPLE`, `FKREQ`, `FKESTADO`, `FKEMPLEASIG`) VALUES (
            '$data->fecha',
            '$data->observacion',
            '$data->emple',
            '$REQID',
            '$data->estado',
             NULL)";
        $resultado = $mysqli->query($sql) or die($mysqli->error);
        if($resultado == 1)
            header('Location: /phpproject/Vista/V_requerimiento.php?confirmacion=1');	
        else{
            $str = "Location: /phpproject/Vista/ERROR.php?p=".$resultado;	
            header($str);	
        }


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
        $sql = "UPDATE `detallereq` 
        SET 
        `FKEMPLEASIG`='$data->empleasi', `FKESTADO`='$data->estado'
        WHERE IDDETALLEREQ = '$data->id'";
        $resultado = $mysqli->query($sql) or die($mysqli->error);
    }

    public function ModificarMejorado(Requerimiento $data)
	{
        require 'Controlador/Conexion.php';
        $sql = "UPDATE `detallereq` 
        SET 
        `FKEMPLEASIG`='$data->empleasi', `FKESTADO`='$data->estado'
        WHERE IDDETALLEREQ = '$data->id'";
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