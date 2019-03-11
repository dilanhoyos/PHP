<?
class CtrlEmpleado{
	var $objEmpleado;
	function CtrlEmpleado($objEmplea){
		$this->objEmpleado=$objEmplea;
	}
	function guardar(){
		$id=$this->objEmpleado->getId();
		$nom=$this->objEmpleado->getNombre();
		$tel=$this->objEmpleado->getTel();
        $car=$this->objEmpleado->getCargo();
        $email=$this->objEmpleado->getEmail();
        $area=$this->objEmpleado->getArea();
        $sup=$this->objEmpleado->getSupervi();
		$objCon = new Conexion();
		$comSql="INSERT INTO EMPLEADO VALUES('".$id."','".$nom."','".$tel."',".$car.",".$email.",".$area.",".$sup.")";
        $enl=$objCon->conectar("localhost","mesaAyuda","root","");
        $objCon->ejecutarSql("mesaAyuda",$comSql);
        $objCon->cerrar($enl);	
        	
    }
    
    


	function consultar(){
		$cod=$this->objEmpleado->getId();
		$objCon = new Conexion();
		$comSql="SELECT * FROM EMPLEADO WHERE ID='".$id."'";
        $enl=$objCon->conectar("localhost","mesaAyuda","root","");
        $rec=$objCon->ejecutarSql("mesaAyuda",$comSql);
	
		if($rec){
			$registro= mysql_fetch_array($rec);

		$nom= $registro["NOMBRE"];
		$mail= $registro["EMAIL"];
		$cred= $registro["CREDITO"];
			echo "nom=".$nom." mail=".$mail." cred=".$cred;
		$this->objEmpleado->setNombre($nom);
		$this->objEmpleado->setEmail($mail);
		$this->objEmpleado->setCredito($cred);
				}
        $objCon->cerrar($enl);	
		return $this->objEmpleado;
    }
    
    function llenar(){
        ini_set('display_errors', true);
        error_reporting(E_ALL);
        $query="SELECT IDEMPLEADO,NOMBRE FROM `empleado` ORDER BY `NOMBRE`";
        $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
        while (($fila = mysqli_fetch_array($result)) != NULL) {
            echo '<option value="'.$fila["IDEMPLEADO"].'" class="custom-select">'.$fila["NOMBRE"].'</option>';
        }   
    }
}