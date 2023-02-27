<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>MY FIRST PAGE</h1>

    <?php
    $text = "PHP";
    echo "I love $text!<br>";

    echo "Hola Mundo..!!!<br>";

    echo "forma valida <br>";
    echo "forma valida <br>";
    echo "forma valida <br>";

    /*
    estos son comentarios en PHP
    */

    $x = 5 + /*15*/ +68;
    echo $x;

    $texto = "este es un texto";
    $number = 5;
    $double = 10.9;

    echo "$texto<br>";
    echo "$number<br>";
    echo "$double<br>";

    /*generando texto y una variable */
    $text_1 = "mi nombre es william";
    echo "soy ingeniero y $text_1";

    /*generando texto y una variable */
    $text_1 = "mi nombre es william";
    echo "soy ingeniero y $text_1";


    ?>

    <!-- VARIABLES ALCANCE DE LA VARIABLES -->

    <?php

    /* una variable declarada fuera de la funcion
    tiene un alcance global y solo se puede 
    acceder fuera de la funcion */
    $numero = 5; /*alcance global */
    function myTest()
    {
        echo "<p>genera un error</p> $numero";
    }

    myTest();

    echo "<p>aqui no muestra un error $numero</p>";


    /* podemos acceder a una variable global dentro 
    de una funcion con la palabra global */
    $f = 6;
    $g = 9;
    function funcion()
    {
        global $f, $g;
        $f = $f + $g;
    }

    funcion();
    echo "La suma de 6 y 9 es $f<br>";

    /* variables globales en una matriz $GLOBALS[index] index*/
    $uno = 55;
    $dos = 2;
    function matriz()
    {
        $GLOBALS['new'] = $GLOBALS['uno'] + $GLOBALS['dos'];
    }
    matriz();
    echo "La suma en la matriz es $new<br>";

    /* la palabra clave static */
    /*nota cuando una funcion se ejecuta se eliminan las variables
    locales para evitar esto se utiliza la palabra clave static*/
    function estatico()
    {
        static $one = 0;
        echo $one;
        $one++;
    }

    echo "<h2>La palabra static evita que se elimine la variable </h2>";
    estatico();
    echo "<br>";
    estatico();
    echo "<br>";
    estatico();
    ?>
</body>

</html>