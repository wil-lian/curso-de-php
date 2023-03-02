<html>

<body>
    <h1>Welcome To My page!</h1>
    <?php
    /*user require cuando la aplicacion requiera el archivo */
    require 'nofileExists.php';
    /* echo no se ejecutara porque la ejecucion del script muere */
    echo "I have a car" . $car;
    ?>
</body>

</html>