<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $color = "violeta";
    switch ($color) {
        case "red":
            echo "Tu color favorito es rojo";
            break;
        case "blue":
            echo "Tu color favorito es azul";
            break;
        default:
            echo "No tienes un color favorito ";
    }
    ?>
</body>

</html>