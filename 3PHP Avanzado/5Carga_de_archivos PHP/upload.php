<?php
$target_dir = "5carga_de_archivosPHP/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//Comprobar si el archivo de imagen es una imagen real o una imagen falsa
if (isset($_POST["submit"])) {
    $check = getimagesize(($_FILES["fileToUpload"]["tmp_name"]));
    if ($check !== false) {
        echo "El archivo es una imagen - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else if (file_exists($target_file)) {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }
}

// Comprobar si el archivo ya existe
if (file_exists($target_file)) {
    echo "El archivo ya existe";
    $uploadOk = 0;
}

// Comprobar el tamaño del archivo
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Lo sentimos su archivo es demasiado grande";
    $uploadOk = 0;
}

// Permitir ciertos formatos de archivo
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Lo sentimos solo se permite archivos jpg, png, jpeg, gif";
    $uploadOk = 0;
}

// Comprobar si $uploadOk se establece en 0 por un error
if ($uploadOk == 0) {
    echo "Lo sentimos, su archivo no fue subido";
}
// si todo está bien, intente cargar el archivo
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Este archivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " ha sido subido";
    } else {
        echo "Lo sentimos hubo un error al subir el archivo";
    }
}
