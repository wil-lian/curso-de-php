<!DOCTYPE>
<html>

<body>
    <h1>Fecha y hora en PHP</h1>
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");

    echo "<h2>Copyright </h2>";
    ?>
    &copy; 2015- <?php echo date("Y"); ?>

    <h2>Obtener un tiempo</h2>
    <?php
    echo "The time is " . date("H:i:s a");
    ?>

    <h2>Obtenga su zona horaria</h2>
    <?php
    date_default_timezone_set("America/La_Paz");
    echo "The time is " . date("h:i:s a");
    ?>

    <h2>Crear una fecha con mktime()</h2>
    <?php
    // sintaxis mktime(hour, minute, second, month, day, year)
    $d = mktime(11, 14, 54, 8, 12, 2014);
    echo "La fecha creadad es " . date("Y-m-d h:i:s a", $d)
    ?>

    <h2>Crear una fecha apartir de una cadena</h2>
    <?php
    $d = strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:s a", $d) . "<br>";
    ?>

    <?php
    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    ?>

    <h2>El siguiente ejemplo muestra las fechas de los próximos seis sábados:</h2>
    <?php
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }
    ?>

    <h2>El siguiente ejemplo muestra el número de días hasta el 4 de julio:</h2>
    <?php
    $d1 = strtotime("July 04");
    $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
    echo "There are " . $d2 . " days until 4th of July.";
    ?>
</body>

</html>