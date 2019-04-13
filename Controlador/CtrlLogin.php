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
                $_SESSION['user']=$fila['USUARIO'];
                $_SESSION['verificar']=true;
                $_SESSION['rol'] = $fila['rol'];		
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