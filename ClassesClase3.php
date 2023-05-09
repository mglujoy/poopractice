<?php
class Persona {
private $nombre;
private $edad;

function __construct($nombre, $edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
}

function setNombre($nombre){
    $this->nombre = $nombre;
}

function setEdad($edad){
    $this->edad = $edad;
}

function imprimir(){
    echo $this->nombre." ".$this->edad;
}
}

class Empleado extends Persona {
    private $sueldo;

function __construct($nombre, $edad, $sueldo){
    parent::__construct($nombre, $edad);
    $this->sueldo=$sueldo;
}

function setSueldo($sueldo){
    $this->sueldo = $sueldo;
}
function getSueldo(){
    echo " ".$this->sueldo;
}

}


?>