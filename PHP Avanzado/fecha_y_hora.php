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
</body>

</html>