<?php
class Persona {
    var $nombre;
    var $apellido;
    var $fechanac;

    function __construct($nombre, $apellido, $fechanac){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechanac = $fechanac;
    }

    public function saludo(){
        return "Hola {$this->nombre}, {$this->apellido} cómo estás? <br>";
    }
}

class Rectangulo {
    public $ancho;
    public $alto;

    function __construct($ancho, $alto){
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    function mostrarDimension(){
        return "ancho: ". $this->ancho . " alto: " .$this->alto . "<br>";
    }
}

class Empleado {
    public $dni;
    public $nombre;
    public $apellido;
    public $salario;

    function __construct($dni, $nombre, $apellido, $salario) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->salario = $salario;
    }

    function imprimir(){
        echo "DNI: ".$this->dni."<br>";
        echo "Nombre: ".$this->nombre."<br>";
        echo "Apellido: ".$this->apellido."<br>";
        echo "Salario: ".$this->salario."<br>";
    }
}

class Hora {
    public $hora;
    public $minuto;
    public $segundo;

    function __construct($hora, $minuto, $segundo){
        $this->hora=$hora;
        $this->minuto=$minuto;
        $this->segundo=$segundo;
    }

    function imprimir(){
        echo $this->hora.":".$this->minuto.":".$this->segundo."<br>";
    }

    function sumarSegundo(){           
        $segundo = $this->segundo + 1;
        echo $this->hora.":".$this->minuto.":".$segundo."<br>";
    }

    function restarSegundo(){           
        $segundo = $this->segundo - 1;
        echo $this->hora.":".$this->minuto.":".$segundo."<br>";
    }
}

class Libro {
    public $titulo;
    public $precio;
    public $stock;
    public $autor;
    public $autor2;

    function __construct($titulo, $precio, $stock, $autor, $autor2) {
        $this->titulo=$titulo;
        $this->precio=$precio;
        $this->stock=$stock;
        $this->autor=$autor;
        $this->autor2=$autor2;
    }

    function imprimir() {
        echo "Titulo: ".$this->titulo."<br>";
        echo "Precio: ".$this->precio." pesos <br>";
        echo "Stock: ".$this->stock." unidaes <br>";
        echo "Autores: ".$this->autor.", ".$this->autor2."<br>";
    }

    function modStock($stock){
        $newStock = $this->stock + $stock;
        $this->stock=$newStock;
    }

    function modPrecio($precio){
        $this->precio=$precio;
    }

    function mensaje(){
        echo "El libro ".$this->titulo." de ".$this->autor.", ".$this->autor2.", se vende a $".$this->precio;
    }
}

class Autor {
    public $nombre;
    public $apellido;
    public $email;
    public $edad;

    function __construct($nombre, $apellido, $email, $edad){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->email=$email;
        $this->edad=$edad;
    }

    function imprimir(){
        echo "Nombre: ".$this->nombre."<br>";
        echo "Apellido: ".$this->apellido."<br>";
        echo "Email: ".$this->email."<br>";
        echo "Edad: ".$this->edad." años <br>"; 
    }

}

?>