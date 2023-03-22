<?php
$target_dir = "5carga_de_archivosPHP/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Comprobar si el archivo de imagen es una imagen real o una imagen falsa
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
    /*  Script PHP explicado:
        $target_dir = "uploads/": especifica el directorio donde se colocará el archivo
        $target_file especifica la ruta del archivo que se cargará
        $uploadOk=1 aún no se usa (se usará más adelante)
        $imageFileType contiene la extensión de archivo del archivo (en minúsculas)
        A continuación, compruebe si el archivo de imagen es una imagen real o una imagen falsa
    */
