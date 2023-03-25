<?php
setcookie("user", "", time() - 3600);

?>
<html>

<body>
    <?php
    echo "Se elimina la cookie 'usuario'";
    ?>
</body>

</html>