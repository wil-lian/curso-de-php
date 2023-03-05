<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Numbers(numeros) en HTML</h1>
    <p>Un tipo de datos entero es un número no decimal entre -2147483648 y 2147483647 en sistemas de 32 bits, y entre -9223372036854775808 y 9223372036854775807 en sistemas de 64 bits. Un valor mayor (o menor) que este, se almacenará como flotante, porque excede el límite de un número entero.</p>
    <?php
    $x = 56;
    /*is_int pregunta si es entero devuelve un bool */
    var_dump(is_int($x));
    echo "<br>";
    var_dump(is_array($x));
    echo "<br>";
    $y = 878.83;
    /*is_float pregunta si es float devuelve un bool */
    echo "<h3>flotadores en php </h3>";
    var_dump(is_float($y));
    echo "<br> ";
    echo "<h3>numeros infinitos</h3>";
    $z = 1.9e411;
    var_dump($z);
    echo "<br>";
    echo "<h3>numeros NaN operaciones matematicas imposibles</h3>";
    $f = acos(8);
    var_dump($f);
    echo "<h3>cadenas numericas is_numeric para encontrar si una variable es numerica</h3>";
    $txt = "wily";
    var_dump(is_numeric($txt));
    echo "convertir un valor numerico a otro tipo de dato";
    $num = 2334.343;
    $int_cast = (int)$num;
    echo "<br>";
    echo "El numero entero convertido es $int_cast";
    echo "<br>";
    echo var_dump($int_cast);
    $float_cast = (string)$int_cast;
    echo "<br>";
    echo $float_cast;
    echo "<br>";
    echo var_dump($float_cast)
    ?>
</body>

</html>