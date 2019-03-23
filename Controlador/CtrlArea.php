<?
require_once 'Modelo/area.php';

class CtrlArea{

	private $objArea;
	
	public function __CONSTRUCT()
	{
        $this->objArea = new Area(); }
		
	function Index()
	{
		require_once 'Vista/header.php';
	}


	public function Crud(){
        
        require_once 'View/header.php';
    }

	public function Guardar(){
        $alm = new Area();
        $alm->id = $_REQUEST['txtId'];
        $alm->nombre = $_REQUEST['txtNombre'];
		$alm->supervisor = $_REQUEST['rbSup'];
		     
		$this->objArea->Registrar($alm);
		header('Location: /phpproject/');	
	}

	public function Modificar(){
        $alm = new Area();
        $alm->id = $_REQUEST['txtId'];
        $alm->nombre = $_REQUEST['txtNombre'];
		$alm->supervisor = $_REQUEST['rbSup'];
		print_r ($alm->supervisor );
		     
		$this->objArea->Modificar($alm);
		header('Location: /phpproject/');	
	}

	public function Eliminar(){
		$alm = new Area();
		$alm->id = $_GET['cc'];
		$this->objArea->Eliminar($alm);
		header('Location: /phpproject/');	

	}

}