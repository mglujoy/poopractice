<?php

class Autor {
  public $nombre;
  public $apellido;
  public $email;
  public $edad;

  function __construct($nombre, $apellido, $email, $edad) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->edad = $edad;
  }

  function imprimir() {
    echo "Autor: " . $this->nombre . " " . $this->apellido . "<br>";
    echo "Email: " . $this->email . "<br>";
    echo "Edad: " . $this->edad . "<br>";
  }
}

class Libro {
  public $titulo;
  public $precio;
  public $stock;
  public $autores = array();

  function __construct($titulo, $precio, $stock, $autores) {
    $this->titulo = $titulo;
    $this->precio = $precio;
    $this->stock = $stock;
    $this->autores = $autores;
  }

  function modificarPrecioYStock($nuevo_precio, $cantidad_aumentar) {
    $this->precio = $nuevo_precio;
    $this->stock += $cantidad_aumentar;
  }

  function imprimirMensaje() {
    $nombres_autores = array_map(function($a) { return $a->nombre; }, $this->autores);
    $autores_str = implode(" y ", $nombres_autores);
    echo "El libro, " . $this->titulo . " de " . $autores_str . ". Se vende a " . $this->precio . " pesos.";
  }
}

// Inicializar un objeto de tipo Autor
$autor1 = new Autor("Joshua", "Bloch", "joshua@email.com", 41);
echo "Autor:<br>";
$autor1->imprimir();
echo "<br>";

// Inicializar el libro "Effective Java" del autor "Joshua Bloch"
$libro1 = new Libro("Effective Java", 450, 150, array($autor1));
echo "Libro:<br>";
echo "Título: " . $libro1->titulo . "<br>";
echo "Precio: " . $libro1->precio . "<br>";
echo "Stock: " . $libro1->stock . "<br>";
echo "Autor: " . $autor1->nombre . " " . $autor1->apellido . "<br><br>";

// Modificar el precio del libro "Effective Java" y aumentar la cantidad en stock
$libro1->modificarPrecioYStock(500, 50);

// Imprimir los atributos del autor Joshua accediendo desde el libro "Effective Java"
echo "Atributos del Autor desde el Libro:<br>";
echo "Nombre: " . $libro1->autores[0]->nombre . "<br>";
echo "Apellido: " . $libro1->autores[0]->apellido . "<br>";
echo "Email: " . $libro1->autores[0]->email . "<br>";
echo "Edad: " . $libro1->autores[0]->edad . "<br><br>";

// Imprimir el mensaje del libro "Effective Java"
$libro1

?>
