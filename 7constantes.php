<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Constantes en PHP</h1>
    <?php
    /* definimos la constante con el nombre william y el valor es
    eres el mejor y lo vas a lograr ya lo tienes */
    define("william", "eres el mejor y lo vas a lograr ya lo tienes");
    echo william;
    /*definimos una constante que no distinga entre minisculas y mayuculas*/
    define("GREETING", "eres lo suficiente", true);
    echo GREETING;
    echo "<h1>Matrices constantes en PHP</h1>";
    define("cars", [2, 4, 3, true, false, define("girls", [
        56, true, false,
        "william"
    ])]);
    echo cars[girls[3]];
    echo "<br>";
    echo "<h2>Las constantes son globales</h2>";
    define("tito", "ya lo tienes solo tines que practicar mas");
    function myTest()
    {
        echo tito;
    }
    myTest();
    ?>
</body>

</html>