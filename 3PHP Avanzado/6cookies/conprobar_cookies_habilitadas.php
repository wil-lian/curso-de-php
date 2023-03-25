<?php
setcookie($test_cookie, $test, time() + 3600, '/')
?>
<html>

<body>
    <?php
    if (count($_COOKIE) > 0) {
        echo "Las cookies estan habilitadas";
    } else {
        echo "Las cookies no estan habilitadas";
    }
    ?>
</body>

</html>