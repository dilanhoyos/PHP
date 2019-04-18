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
		$alm->estado = "1";
		$alm->area = $_REQUEST['rbAreaRadicado'];
		$this->objRequerimiento->Registrar($alm); // : no
		header('Location: Vista/V_requerimiento.php');	
	}
	public function Modificar(){
        $alm = new Requerimiento();
        $alm->id = $_REQUEST['txtId'];	
		$alm->empleasi = $_REQUEST['rbempa'];
		     
		$this->objRequerimiento->Modificar($alm); // : no
		header('Location: /phpproject/Vista/ListadoRequerimiento.php');	

	}
	public function Eliminar(){
		$alm = new Requerimiento();
		$alm->id = $_GET['cc'];
		$this->objRequerimiento->Eliminar($alm); // : no
		header('Location: /phpproject/Vista/inicio.php');	

	}
}
