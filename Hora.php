<?php

class Hora {
  public $hora;
  public $minuto;
  public $segundo;

  function __construct($hora, $minuto, $segundo) {
    if ($hora < 0 || $hora > 23) {
      throw new Exception("Hora inválida: $hora");
    }
    if ($minuto < 0 || $minuto > 59) {
      throw new Exception("Minuto inválido: $minuto");
    }
    if ($segundo < 0 || $segundo > 59) {
      throw new Exception("Segundo inválido: $segundo");
    }
    $this->hora = $hora;
    $this->minuto = $minuto;
    $this->segundo = $segundo;
  }

  function imprimir() {
    $hora_str = str_pad($this->hora, 2, "0", STR_PAD_LEFT);
    $minuto_str = str_pad($this->minuto, 2, "0", STR_PAD_LEFT);
    $segundo_str = str_pad($this->segundo, 2, "0", STR_PAD_LEFT);
    echo "$hora_str:$minuto_str:$segundo_str";
  }

  function avanzarSegundo() {
    $segundo = $this->segundo + 1;
    $minuto = $this->minuto;
    $hora = $this->hora;
    if ($segundo == 60) {
      $segundo = 0;
      $minuto += 1;
    }
    if ($minuto == 60) {
      $minuto = 0;
      $hora += 1;
    }
    if ($hora == 24) {
      $hora = 0;
    }
    return new Hora($hora, $minuto, $segundo);
  }

  function retrocederSegundo() {
    $segundo = $this->segundo - 1;
    $minuto = $this->minuto;
    $hora = $this->hora;
    if ($segundo == -1) {
      $segundo = 59;
      $minuto -= 1;
    }
    if ($minuto == -1) {
      $minuto = 59;
      $hora -= 1;
    }
    if ($hora == -1) {
      $hora = 23;
    }
    return new Hora($hora, $minuto, $segundo);
  }
}

// Instanciar el objeto Hora y probar los métodos creados
$hora1 = new Hora(13, 4, 22);
echo "Hora actual: ";
$hora1->imprimir();
echo "<br>";

$hora2 = $hora1->avanzarSegundo();
echo "Hora avanzada en 1 segundo: ";
$hora2->imprimir();
echo "<br>";

$hora3 = $hora1->retrocederSegundo();
echo "Hora retrocedida en 1 segundo: ";
$hora3->imprimir();
echo "<br>";

?>
