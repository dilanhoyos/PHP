<?
require_once 'Modelo/empleado.php';

class CtrlEmpleado{

	private $objEmpleado;
	
	public function __CONSTRUCT()
	{
        $this->objEmpleado = new Empleado(); }
		
	function Index()
	{
		require_once 'Vista/header.php';
	}


	public function Crud(){
        
        require_once 'View/header.php';
    }

	public function Guardar(){
        $alm = new Empleado();
		
        $alm->id = $_REQUEST['txtId'];
        $alm->nombre = $_REQUEST['txtNombre'];
        $alm->telefono = $_REQUEST['txtTelefono'];
        $alm->cargo = $_REQUEST['txtCargo'];
        $alm->area = $_REQUEST['rbarea'];
		$alm->email = $_REQUEST['txtEmail'];
		$alm->supervisor = $_REQUEST['rbSup'];

		
		echo "<script>console.log( 'Debug Objects:  ' );</script>";         

		$this->objEmpleado->Registrar($alm); // : no
        	//$alm->id > 0 
            //? $this->model->Actualizar($alm) // ? si
           
        
        header('Location: ../index.php');
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