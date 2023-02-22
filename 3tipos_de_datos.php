<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tipos de Datos en PHP</h1>
    <!-- php los siguientes tipos de datos
        String (una cadena es una secuencia de caracteres)
        Integer
        Float (floating point numbers - also called double)
        Boolean
        Array
        Object
        NULL
        Resource 
        -->

    <!-- string(cadena) en PHP -->

    <h2>String (cadena)</h2>
    <?php
    $txt = "Esta es una cadena";
    $txt1 = "Esta es otra cadena";
    echo $txt;
    echo "<br>";
    echo $txt1;
    echo "<br>";
    ?>


    <h2>Entero Integer</h2>
    <!-- Integer (entero)  -->
    <?php
    $x = 5;
    var_dump($x);
    ?>

    <!-- float (double) -->
    <h2>Float (double)</h2>
    <?php
    $x = 2424.8989;
    var_dump($x);
    ?>

    <!-- bool (booleano) -->
    <h2>Bool booleano</h2>
    <?php
    $x = true;
    $y = false;
    var_dump($x, $y);
    ?>

    <h2>Array</h2>
    <!-- array (matriz) -->
    <?php
    $x = array("william", "fabricio", 3, 35, true, false, 343.89, null);
    var_dump($x);
    ?>

    <h2>Object (objeto)</h2>
    <?php
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "Mi auto es un " . $this->model . " de color " . $this->color;
        }
    }

    $myCar = new Car("blanco", "TOYOTA");
    echo $myCar->message();
    ?>

    <h2>Valor NULL (nulo)</h2>
    <?php
    $z = null;
    var_dump($z);
    ?>
</body>

</html>