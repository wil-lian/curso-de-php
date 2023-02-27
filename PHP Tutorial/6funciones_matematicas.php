<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>FUNCIONES MATEMATICAS</h1>
    <?php
    /* la funcion pi() devuelve el valor de pi */
    echo (pi());
    echo "<br>";
    /* La funcion min() y max() se usa para encontrar el
    valor mas alto o mas bajos de una lista de argumentos*/
    echo (min(1, 2, 34, 5, 6, 7, 8, 9));
    echo "<br>";
    echo (max(1, 2, 3, 4, 5, 6, 7, 8, 9,));
    echo "<br>";
    /* funcion abs() devuelve el valor absoluto (positivo) de un numero */
    echo (abs(-343.3434));
    echo "<br>";
    echo "la raiz cuadrada de un numero <br>";
    echo (sqrt(16));
    echo "<br>";
    echo "el valor redondeado de un numero <br>";
    echo (round(0.60));
    echo "<br> ";
    echo "el valor redondeado de un numero <br>";
    echo (round(0.49));
    echo "<br> un nuemro aleatorio";
    echo "<br>";
    echo (rand());
    echo "<br> un numero aleatorio entre 1 y 10";
    echo "<br>";
    echo (rand(1, 10));
    echo "<br>";
    echo "<br>";
    ?>
</body>

</html>