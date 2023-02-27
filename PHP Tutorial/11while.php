<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bucles</h1>
    <?php
    echo "<h2>Bucle while (mientras)</h2>";
    $num = 0;
    while ($num <= 100) {
        echo "El numero es: $num <br>";
        $num += 10;
    }

    echo "<h2>Bucle do while (hacer mientras)</h2>";
    $x = 1;
    do {
        echo "El numero es: $x <br>";
        $x += 1;
    } while ($x <= 10);

    echo "<h2>Bucle For (Para)</h2>";
    for ($y = 2; $y <= 20; $y += 2) {
        echo "El numero par es: $y <br>";
    }

    echo "<h2>Bucle Foreach(para cada)</h2>";
    $colors = array("red", "yellow", "blue", "orange", "green", "violet");
    foreach ($colors as $value) {
        echo "The color is: $value <br>";
    }

    echo "<h2>Bucle Foreach(para cada clave/valor)</h2>";
    foreach ($colors as $v => $valor) {
        echo "La clave es : $v = $valor <br>";
    }

    echo "<h2>Break (pausa)</h2>";
    $a = 0;
    while ($a <= 5) {
        echo "El numero es $a <br>";
        $a += 1;
        if ($a == 4) {
            break;
        }
    }

    echo "<h2>Continue (continuar)</h2>";
    $b = 0;
    while ($b <= 10) {
        if ($b == 5) {
            $b++;
            continue;
        }
        echo "El numero es: $b <br>";
        $b++;
    }
    ?>
</body>

</html>