/*
Una cookie se utiliza a menudo para
identificar a un usuario. Una cookie
es un pequeño archivo que el servidor
incrusta en la computadora del usuario.
Cada vez que la misma computadora solicite
una página con un navegador, también enviará
la cookie. Con PHP, puede crear y recuperar
valores de cookies. */

<?php
//creamos una cookie llamada usuario con el valor Jhon Doe  
$cookie_name = "user";
$cookie_value = "Jhon Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400 = 1 day
//el simbolo / significa que la cookie esta habilitada para todo el sitio web
// de lo contrario seleccione el directorio que prefiera
//la funcion setcookie debe aparecer antes de la etiqueta html
?>
<html>

<body>
    <?php
    // funcion para averiguar si la cookie esta configurada
    //recuperamos el valor de la cookie usuario usando la variable globla (global $_COOKIE)
    if (!isset($_COOKIE[$cookie_name])) {
        echo "La cookie llamada '" . $cookie_name . "' no esta configurada!";
    } else {
        echo "La cookie '" . $cookie_name . "' esta configurada!";
        echo "El valor es: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>