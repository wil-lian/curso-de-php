<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ARRAYS (MATRIZ)</h1>
    <?php
    $caja = array("toyota", "samsumg", "philips", "sony");
    echo "El primero es $caja[0] el segundo es $caja[1] y el tercero es $caja[2]";

    echo "<h2>La longitud de una matriz</h2>";

    echo count($caja);

    echo "<h2>Bucle atravez de una matriz indexada</h2>";
    for ($x = 0; $x < count($caja); $x++) {
        echo "La posicion $x es el auto $caja[$x] <br>";
    }

    echo "<h2>Matrices asociativas</h2>";
    $edad = array("william" => "30", "alejandra" => "27");
    echo "William tiene $edad[william] años <br>";

    foreach ($edad as $x => $x_value) {
        echo "La llave es $x y el valor es $x_value <br>";
    }

    echo "<h2>Arrays Multidimencionales</h2>";
    $phone = array(
        array("sony", 5, 8),
        array("samsumg", 3, 10),
        array("nokia", 8, 7),
        array("realme", 1, 56)
    );

    echo $phone[0][0] . ": en stock: " . $phone[0][1] . " , vendidos: " . $phone[0][2] . "<br>";
    echo $phone[1][0] . ": en stock: " . $phone[1][1] . " , vendidos: " . $phone[1][2] . "<br>";
    echo $phone[2][0] . ": en stock: " . $phone[2][1] . " , vendidos: " . $phone[2][2] . "<br>";
    echo $phone[3][0] . ": en stock: " . $phone[3][1] . " , vendidos: " . $phone[3][2] . "<br>";

    echo "<h2>Recorriendo con dos fors</h2>";

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Numero de la fila $row:</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $phone[$row][$col] . "</li>";
        }
        echo "</ul>";
    }

    echo "<h2>Clasificacion de Matrices</h2>";
    $names = array("william", "fabricio", "tito", "vargas");
    sort($names);

    echo "<h2>Orden alfabetico ascendente</h2>";

    foreach ($names as $value) {
        echo $value . "<br>";
    }

    echo "<h2>Orden Alfabetico descendente</h2>";


    rsort($names);
    foreach ($names as $value) {
        echo $value . "<br>";
    }

    echo "<h2>Orden de una matriz (ascendente) segun su valor</h2>";

    $women = array("alejandra" => "34", "maruja" => "1", "marcela" => "9", "anahi" => "4", "karem" => "76");
    asort($women);
    foreach ($women as $value) {
        echo $value . "<br>";
    }

    echo "<h2>Orden de una matriz (ascendente) segun su clave</h2>";
    ksort($women);
    foreach ($women as $value) {
        echo $value . "<br>";
    }

    echo "<h2>Orden de una matriz (descendente) segun su valor</h2>";
    arsort($women);
    foreach ($women as $value) {
        echo $value . "<br>";
    }

    echo "<h2>Orden de una matriz (descendente) segun su clave</h2>";
    krsort($women);
    foreach ($women as $value) {
        echo $value . "<br>";
    }
    ?>
</body>

</html>