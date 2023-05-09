<?php
    /*echo "<h3>Ejercicio 1</h3>";
    require 'Classes.php';
    $Persona = new Persona('Maximiliano','Glujoy','29/12/86');
    //echo $Persona->saludo();

    //echo "<h3>Ejercicio 2</h3>";
    $miRectangulo1 = new Rectangulo(5,4);
    $miRectangulo2 = new Rectangulo(20,25);
    //echo $miRectangulo1->mostrarDimension();
    //echo $miRectangulo2->mostrarDimension();

    //echo "<h3>Ejercicio 3</h3>";
    //New Employee
    $empleado1 = new Empleado("32716359", "Maximiliano", "Glujoy", "usd 1000");
    //echo "Empleado 1: <br>";
    //$empleado1->imprimir();

    echo "<h3>Ejercicio 4</h3>";
    $hora1 = new Hora("13", "17", "25");
    echo "Hora 1: <br>";
    $hora1->imprimir();
    $hora1->sumarSegundo();
    $hora1->restarSegundo();

    echo "<h3>Ejercicio 5</h3>";
    $autor1=new Autor("Joshua", "Bloch", "joshua@email.com", 41);
    echo "Autor 1: <br>";
    $autor1->imprimir();
    echo "<br>";
    $autor2=new Autor ("x", "x", "x", 36);
    echo "Autor 2: <br>";
    $autor2->imprimir();
    echo "<br>";

    $libro1=new Libro("Effective Java", 450, 150, ($autor1->nombre." ".$autor1->apellido." de ".$autor1->edad."años de edad e email: ".$autor1->email), $autor2->nombre);
    echo "Libro 1: <br>";
    $libro1->imprimir();
    $libro1->modPrecio(500);
    $libro1->modStock(50);
    echo "<br>";
    $libro1->imprimir();
    echo "<br>";
    $libro1->mensaje();
*/
?>
<?php
/* */
require 'ClassesClase3.php';
echo "<h3>Clase 3 Ejercicio 1</h3>";

$persona1 = new Persona("Maxi", 36);
$persona1->imprimir();
$persona1->setNombre("Maximiliano");
$persona1->setEdad(30);
echo "<br>";
$persona1->imprimir();

echo "<br>";
$empleado1 = new Empleado("Maximiliano", 30, 600);
$empleado1->imprimir();
$empleado1->getSueldo();
echo "<br>";
$empleado1->setNombre("Maxi");
$empleado1->setEdad(36);
$empleado1->imprimir();
$empleado1->setSueldo(1000);
$empleado1->getSueldo();
?>