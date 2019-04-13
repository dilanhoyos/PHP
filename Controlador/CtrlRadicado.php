<?
require_once 'Modelo/radicado.php';

class CtrlRadicado{
    private $objRadicado;
	
	public function __CONSTRUCT()
	{
        $this->objRadicado = new Radicado(); }
		
	function Index()
	{
		require_once 'Vista/header.php';
	}


	public function Crud(){
        
        require_once 'View/header.php';
    }

	public function Guardar(){
        $alm = new Radicado();
        $alm->rbRadicado = $_REQUEST['rbAreaRadicado'];
		     
		$this->objRadicado->Registrar($alm); // : no
		header('Location: Vista/CrearRadicado.php');	
	}

	
}
