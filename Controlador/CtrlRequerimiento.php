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
        $alm = new Requerimiento();
        $alm->fecha = $_REQUEST['txtFecha'];
        $alm->observacion = $_REQUEST['txtObser'];
        $alm->emple = $_REQUEST['rbempleado'];
        $alm->req = $_REQUEST['rbrequerimiento'];
		$alm->estado = $_REQUEST['rbestado'];
		$alm->empleasi = $_REQUEST['rbempa'];
		     
		$this->objRequerimiento->Registrar($alm); // : no
		header('Location: Vista/CrearRadicado.php');	
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
