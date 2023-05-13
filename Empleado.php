<?php

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

  function imprimir() {
    echo "DNI: " . $this->dni . "<br>";
    echo "Nombre: " . $this->nombre . "<br>";
    echo "Apellido: " . $this->apellido . "<br>";
    echo "Salario: $" . $this->salario . "<br><br>";
  }
}

// Inicializar un empleado Carlos Gutiérrez
$empleado1 = new Empleado("23456345", "Carlos", "Gutiérrez", 25000);
echo "Empleado 1:<br>";
$empleado1->imprimir();

// Inicializar un empleado Ana Sánchez
$empleado2 = new Empleado("34234123", "Ana", "Sánchez", 27500);
echo "Empleado 2:<br>";
$empleado2->imprimir();

?>
