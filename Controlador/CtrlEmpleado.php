<?
require_once 'Modelo/empleado.php';

class CtrlEmpleado{

	private $objEmpleado;
	
	public function __CONSTRUCT()
	{
		$this->objEmpleado = new Empleado(); 
	}

	function Login()
	{
		require_once 'Vista/Login.php';
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
		$alm->email = $_REQUEST['txtEmail'];
        $alm->area = $_REQUEST['rbarea'];
		$alm->supervisor = $_REQUEST['rbSup'];
		$alm->usu = $_REQUEST['txtUsu'];
		$alm->pass = $_REQUEST['txtPass'];
		$this->objEmpleado->Existe($alm);    
		$this->objEmpleado->Registrar($alm); // : no
		header('Location: /phpproject/Vista/inicio.php');	
	}

	public function Modificar(){
        $alm = new Empleado();
        $alm->id = $_REQUEST['txtId'];
        $alm->nombre = $_REQUEST['txtNombre'];
        $alm->telefono = $_REQUEST['txtTelefono'];
        $alm->cargo = $_REQUEST['txtCargo'];
        $alm->area = $_REQUEST['rbarea'];
		$alm->email = $_REQUEST['txtEmail'];
		$alm->supervisor = $_REQUEST['rbSup'];
		     
		$this->objEmpleado->Modificar($alm); // : no
		header('Location: /phpproject/Vista/inicio.php');	

	}

	public function Eliminar(){
		$alm = new Empleado();
		$alm->id = $_GET['cc'];
		$this->objEmpleado->Eliminar($alm); // : no
		header('Location: /phpproject/Vista/inicio.php');	
	}

}