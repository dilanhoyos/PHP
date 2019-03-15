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
    
    private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


    public function Registrar(Empleado $data)
	{
		try 
		{
            echo "<script>console.log( 'Debug Objects:  ' );</script>";         
		$sql = "INSERT INTO EMPLEADO (IDEMPLEADO,NOMBRE,TELEFONO,CARGO,EMAIL,FKAREA,FKEMPLE)
        VALUES (?, ?, ?, ?, ?, ?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id,
                    $data->nombre, 
                    $data->telefono,
                    $data->cargo,
                    $data->email,
                    $data->$area,
                    $data->$Supervisor  
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
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
   
}
?>