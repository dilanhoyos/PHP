<?
class Empleado
{
    var $id;
    var $nombre;
    var $telefono;
    var $cargo;
    var $email;
    var $area;
    var $Supervisor;

    function Empleado($id, $nom, $tel, $car, $mail, $area, $sup){
        $this->id = $id;
        $this->nombre = $nom;
        $this->telefono = $tel;
        $this->cargo = $car;
        $this->email = $mail;
        $this->area = $area;
        $this->Supervisor = $sup;
    }

    function getId(){
        return $id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getNombre(){
        return $nombre;
    }

    function setNombre($nom){
        $this->nombre = $nom;
    }
    function getTel(){
        return $tel;
    }

    function setTel($tel){
        $this->telefono = $tel;
    }
    function getCargo(){
        return $cargo;
    }

    function setCargo($car){
        $this->cargo = $car;
    }
    function getEmail(){
        return $email;
    }

    function setEmail($email){
        $this->email = $email;
    }
    function getArea(){
        return $area;
    }

    function setArea($are){
        $this->area = $are;
    }
    function getSupervi(){
        return $Supervisor;
    }

    function setSupervi($sup){
        $this->Supervisor = $sup;
    }
}
?>