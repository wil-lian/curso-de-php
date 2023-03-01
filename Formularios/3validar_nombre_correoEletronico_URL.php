<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    $nameErr = $emailErr = $commentErr = $websiteErr = $genderErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "El nombre es requerido";
        } else {
            $name = test_input($_POST["name"]);
            /*conprobar si el nombre solo tiene letras y espacios en balnco */
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Solamente se permiten letras y espacios en blanco";
            }
        }
        if (empty($_POST["email"])) {
            $emailErr = "Se requiere el email";
        } else {
            $email = test_input($_POST["email"]);
            /*conprbar si la direccion de correo electronico esta bien formada */
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Formato de Correo Invalido";
            }
        }
        if (empty($_POST["website"])) {
            $websiteErr = "";
        } else {
            $website = test_input($_POST["website"]);
            /*comprueba si la sintaxis de la dirección URL es válida (esta expresión regular también permite guiones en la URL) */
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $website = "URL invalida";
            }
        }
        if (empty($_POST["comment"])) {
            $commentErr = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Se requiere el genero";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Formulario de Validacino con PHP</h2>
    <p><span class="error">* Campo Requerido</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr ?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr ?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr ?></span>
        <br><br>
        Comment: <textarea name="comment" cols="40" rows="5"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Las salidas son:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
</body>

</html>