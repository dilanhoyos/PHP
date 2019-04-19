<?php
class CtrlLogin{
    public function Verificar(){
        require 'Controlador/Conexion.php';

        $usu = $_REQUEST['txtEmail'];
        $psw = $_REQUEST['txtPassword'];

        $query="SELECT USUARIO, CONTRASENA, rol FROM `login` WHERE USUARIO = '$usu'";
        $result = mysqli_query($mysqli, $query) or die("Ocurrio un error en la consulta SQL");
        if(($fila = mysqli_fetch_array($result)) != NULL){
            if($fila['CONTRASENA'] == $psw){
                if(!isset($_SESSION)) 
                { 
                    session_start(); 
                } 
                $US = $_REQUEST['txtEmail'];
                $sqls = "SELECT E.IDEMPLEADO FROM login L INNER JOIN empleado E ON L.FKEMPLE = E.IDEMPLEADO WHERE L.USUARIO = '$US'";
                $resulta = mysqli_query($mysqli, $sqls) or die("Ocurrio un error en la consulta SQL");
                $kkk = mysqli_fetch_array($resulta);
                $_SESSION['user']=$US;
                $_SESSION['verificar']=true;
                $_SESSION['rol'] = $fila['rol'];	
                $_SESSION['CC'] = $kkk['IDEMPLEADO'];
                header('Location: /phpproject/Vista/V_Requerimiento.php');	            
            }else{
                header('Location: /phpproject/');	            
            }
        }else{
            header('Location: /phpproject/');//pagina de error <3	            

        }

	}
}
?>