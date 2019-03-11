<?php 
class Area{
    var $id;
    var $nom;
    var $emple;

    function Area($id,$nom,$emp){
        $this->id = $id;
        $this->nom = $nom;
        $this->emple = $emp;
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

    function getEmple(){
        return $emple;
    }

    function setEmple($E){
        $emple = $E;
    }
}
?>