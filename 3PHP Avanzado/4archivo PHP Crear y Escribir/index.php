<html>

<body>
    <h1>Esto corre en el servidor</h1>
    <h2>El modo w borra y anula el contenido antiguo del archivo</h2>
    <?php
    $myfile =  fopen("texto.php", "w") or die("incapaz de abrir el archivo");
    $txt = "alejandra parraga\n";
    fwrite($myfile, $txt);
    $txt = "william fabricio\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>

    <?php
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "1\n";
    fwrite($myfile, $txt);
    $txt = "2\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>
</body>

</html>