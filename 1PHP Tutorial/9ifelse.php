<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>condicionales if else</h1>
    <?php
    $x = "7";
    $y = 7;
    if ($x > $y) {
        echo "si x es mayor que y";
    } else {
        echo "no x no es mayor";
    }

    echo "<br>";
    if ($x && $y > 9) {
        echo "si son mayores que 0";
    } elseif ($x == $y) {
        echo "si son iguales";
    } else {
        echo "no son iguales";
    }

    ?>
</body>

</html>