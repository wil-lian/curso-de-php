<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>funciones de cadenas Strings (Cadenas)</h1>
    <h2>strlen devuelve la longitud de una Cadena</h2>
    <?php
    $name = "william";
    echo "Mi nombre es: $name mi nombre tiene <b>";
    echo strlen($name); /* funcion para ver longitud de caracteres */
    echo " caracteres";
    ?>

    <h2>str_word_count() cuenta las palabras de una cadena</h2>
    <?php
    echo str_word_count("william fabricio tito");
    ?>

    <h2>strrev() invierte una Cadena</h2>
    <?php
    echo strrev("william");
    ?>

    <h2>strpos() buscar un texto dentro de una cadena devuelve la pocision del caracter si no se encuentra devolvera falso</h2>
    <?php
    echo strpos("william fabricio tito", "tito");
    ?>

    <h2>str_replace Reemplazar texto dentro de una cadena</h2>
    <?php
    echo str_replace("william", "Isabella", "hola william");
    ?>


</body>

</html>