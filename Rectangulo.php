<?php

Class Rectangulo {

    public $ancho;
    public $alto;

    function __construct($ancho,$alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
      }

    function mostrarDimension(){
        return "ancho: ". $this->ancho . " alto:" .$this->alto;  
    }

}

$miRectangulo1 = new Rectangulo(5,4);
$miRectangulo2 = new Rectangulo(20,25);

echo $miRectangulo1->mostrarDimension();
echo $miRectangulo2->mostrarDimension();

?>
