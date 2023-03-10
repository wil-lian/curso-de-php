<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Variables SuperGlobales</h1>
    <h2>Variable SuperGlobal $GLOBALS</h2>
    <?php
    $x = 5;
    $y = 6;
    function sum()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    sum();
    echo "La suma es: " . $z;
    ?>

    <h2>Variable SuperGlobal $_SERVER</h2>
    <p>Es una variable superglobal que contiene imformacion <br>sobre encabezadosrutas y ubicaciones de secuencia de comandos</p>

    <?php
    echo $_SERVER['PHP_SELF'] .  " ====> devuelve el nombre del script que se esta ejecutando actualmente";
    echo "<br>";
    echo $_SERVER['SERVER_NAME'] . " ====> devuelve el nombre del servidor";
    echo "<br>";
    echo $_SERVER['HTTP_HOST'] . " ====> devuelve el encabezado host de la solicitud actual";
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'] . " ====> devuelve la url de la pagina actual";
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'] . " ====> ";
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'] . " ====> devueleve la ruta del script actual";
    echo "<br>";
    /*
        $_SERVER['PHP_SELF']	Returns the filename of the currently executing script
        $_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
        $_SERVER['SERVER_ADDR']	Returns the IP address of the host server
        $_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
        $_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
        $_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
        $_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
        $_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
        $_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
        $_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
        $_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
        $_SERVER['HTTP_HOST']	Returns the Host header from the current request
        $_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
        $_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
        $_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
        $_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
        $_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
        $_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
        $_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
        $_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
        $_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
        $_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
        $_SERVER['SCRIPT_NAME']	Returns the path of the current script
        $_SERVER['SCRIPT_URI']	Returns the URI of the current page
    */
    ?>
    <h2>Variable SuperGlobal $_REQUEST</h2>
    <h3>Se utiliza para recopilar datos despues de enviar un formulario HTML</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nombre: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /* RECOPILAR EL VALOR DEL CAMPO DE ENTRADA */
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "El nombre esta vacio";
        } else {
            echo "Mi nombre es: " . $name;
        }
    }
    ?>

    <h4>NOTA NO SE PUEDE PONER DOS FORMULARIOS AL MISMO TIEMPO NOS MANDA UN ERROR</h4>

    <h2>Variable SuperGlobal $_POST</h2>
    <h3>Se utiliza para recopilar datos de formulario despues de enviar un formulario HTML con el metodo="post" tambien se utiliza ampliamente para pasar variables</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Apellido: <input type="text" name="lname">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] = "POST") {
        $lastName = $_POST['lname'];
        if (empty($lastName)) {
            echo "Si el campo esta vacio";
        } else {
            echo "El apellido es: " . $lastName;
        }
    }
    ?>

    <h2>Variable SuperGlobal $_GET</h2>
    <a href="14test_get.php?subject=PHP&web=W3schools.com&x=es facilito">Test $GET</a>
</body>

</html>