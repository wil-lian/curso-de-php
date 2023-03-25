/**
Una sesión es una forma de almacenar información (en variables) para usarla en varias páginas.
A diferencia de una cookie, la información no se almacena en la computadora de los usuarios.
*/
<?php
//la funcion session start debe ser lo primero en un documento
session_start()
?>
<!Doctype html>
<html>

<body>
    <?php
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Se establecen las variables de sesion";
    ?>
</body>

</html>