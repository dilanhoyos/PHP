<?
require_once 'Modelo/requerimiento.php';

class CtrlRequerimiento{
	private $objRequerimiento;
	
	public function __CONSTRUCT()
	{
        $this->objRequerimiento = new Requerimiento(); }
		
	function Index()
	{
		require_once 'Vista/header.php';
	}
	public function Crud(){
        
        require_once 'View/header.php';
    }
	public function Guardar(){
		session_start();
		require 'Controlador/Conexion.php';

		$alm = new Requerimiento();
		$usuuu = $_SESSION['user'];
		$consulsql = "Select FKEMPLE from login where usuario = '$usuuu'";
        $result = mysqli_query($mysqli, $consulsql) or die("Ocurrio un error en la consulta SQL");
        $fila = mysqli_fetch_array($result);
        $EMPLEID = $fila["FKEMPLE"];


        $alm->fecha = $_REQUEST['txtFecha'];
        $alm->observacion = $_REQUEST['txtObser'];
        $alm->emple = $EMPLEID;
		$alm->estado = $_REQUEST['rbestado'];
		$alm->empleasi = $_REQUEST['rbempa'];
		$alm->area = $_REQUEST['rbAreaRadicado'];
		$this->objRequerimiento->Registrar($alm); // : no
		header('Location: Vista/inicio.php');	
	}
	public function Modificar(){
        $alm = new Requerimiento();
        $alm->id = $_REQUEST['txtId'];
        $alm->fecha = $_REQUEST['txtFecha'];
        $alm->observacion = $_REQUEST['txtObser'];
        $alm->emple = $_REQUEST['rbempleado'];
        $alm->req = $_REQUEST['rbrequerimiento'];
		$alm->estado = $_REQUEST['rbestado'];
		$alm->empleasi = $_REQUEST['rbempa'];
		     
		$this->objRequerimiento->Modificar($alm); // : no
		header('Location: /phpproject/');	
	}
	public function Eliminar(){
		$alm = new Requerimiento();
		$alm->id = $_GET['cc'];
		$this->objRequerimiento->Eliminar($alm); // : no
		header('Location: /phpproject/');	
	}
}
