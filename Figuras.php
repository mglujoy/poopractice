<?php
class Figura {
    private $color;

    function __construct($color){
        $this->color = $color;
    }
    function imprimir(){
        echo $this->color."<br>";
    }
}

class Circulo extends Figura{
    private $radio;

    function __construct($color, $radio) {
        parent::__construct($color);
        $this->radio = $radio;
    }

    function imprimir(){
        echo "Color: ".$this->color.", "."radio: ".$this->radio."<br>";
    }

    function superficie(){
        $radio = $this->radio;
        $superficie = 3.1416*$radio*$radio;
        echo "Superficie: ".$superficie."<br>";
    }
    function perimetro(){
        $radio = $this->radio;
        $perimetro = 2*3.1416*$radio;
        echo "Perimetro: ".$perimetro."<br>";
    }

}



//Instances

$figura1 = new Figura("gris");
$figura1->imprimir();
$circulo1 = new Circulo("azul", 5);
$circulo1->imprimir();
$circulo1->superficie();
$circulo1->perimetro();


?>