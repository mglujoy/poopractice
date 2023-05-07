<?php
    echo "<h3>Ejercicio 1</h3>";
    require 'Classes.php';
    $Persona = new Persona('Maximiliano','Glujoy','29/12/86');
    echo $Persona->saludo();

    echo "<h3>Ejercicio 2</h3>";
    $miRectangulo1 = new Rectangulo(5,4);
    $miRectangulo2 = new Rectangulo(20,25);
    echo $miRectangulo1->mostrarDimension();
    echo $miRectangulo2->mostrarDimension();

    echo "<h3>Ejercicio 3</h3>";
    //New Employee
    $empleado1 = new Empleado("32716359", "Maximiliano", "Glujoy", "usd 1000");
    echo "Empleado 1: <br>";
    $empleado1->imprimir();

    echo "<h3>Ejercicio 4</h3>";
    $hora1 = new Hora("13", "17", "25");
    echo "Hora 1: <br>";
    $hora1->imprimir();
    $hora1->sumarSegundo();
    $hora1->restarSegundo();

?>