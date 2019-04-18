<?
require_once 'Modelo/estado.php';

class CtrlEstado{

	private $objEstado;
	
	public function __CONSTRUCT()
	{
        $this->objEstado = new Estado(); }
		
	function Index()
	{
		require_once 'Vista/header.php';
	}


	public function Crud(){
        
        require_once 'View/header.php';
    }

	public function Guardar(){
        $alm = new Estado();
        $alm->id = $_REQUEST['txtId'];
        $alm->nombre = $_REQUEST['txtNombre'];
	$this->objEstado->Registrar($alm);
	header('Location: /phpproject/Vista/inicio.php');	
	
	}

	public function Modificar(){
        $alm = new Estado();
        $alm->id = $_REQUEST['txtId'];
        $alm->nombre = $_REQUEST['txtNombre'];     
	$this->objEstado->Modificar($alm);
	header('Location: /phpproject/Vista/inicio.php');	

	}

	public function Eliminar(){
	$alm = new Estado();
	$alm->id = $_GET['cc'];
	$this->objEstado->Eliminar($alm);
	header('Location: /phpproject/Vista/inicio.php');	

	}

}