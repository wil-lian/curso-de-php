<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>FUNCIONES</h1>
    <?php

    echo "<h2>Llamando a una funcion</h2>";
    function myFunction()
    {
        echo "Hola Mundo <br>";
    }

    myFunction();

    echo "<h2>Pasando informacion atravez de Argumentos</h2>";

    function colorsName($color, $num)
    {
        echo "El color es $color y su numero es $num <br>";
    }

    colorsName("red", 7);
    colorsName("blue", 8);
    colorsName("gree", 9);
    colorsName("orange", 10);

    echo "<h2>Especificando el tipo de datos en el argumento</h2>";
    echo "<h2>dado que no ponemos strict el dato se cambia a entero</h2>";

    /* <?php declare(strict_types=1); tienes que estar al principi del bloque de php*/


    function suma(int $a, int $b)
    {
        return $a + $b;
    }

    echo suma(5, "5");

    echo "<h2>Parametro predeterminado como argumento</h2>";

    function mostrandoValores(int $number = 45)
    {
        echo "El numero es $number <br>";
    }

    mostrandoValores(2);
    mostrandoValores(4);
    mostrandoValores();
    mostrandoValores(9);

    echo "<h2>Devolviendo valores con return</h2>";
    function resta(int $x, int $y)
    {
        $z = $x - $y;
        return $z;
    }
    echo "La resta de 10 - 4 = " . resta(10, 4) . "<br>";
    echo "La resta de 20 - 5 = " . resta(20, 5) . "<br>";
    echo "La resta de 50 - 10 = " . resta(50, 10) . "<br>";


    echo "<h2>Declaraciones de tipo de devolucion</h2>";
    function sum(float $a, float $b): int
    {
        return (int) ($a + $b);
    }
    echo "La suma es: " . sum(89.8, 2.9);

    echo "<h2>Pasar argumentos por referencia</h2>";
    function add_five(&$value)
    {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;
    ?>
</body>

</html>