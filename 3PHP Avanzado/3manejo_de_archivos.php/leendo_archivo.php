<html>

<body>
    <h1>Manejo de Archivos</h1>
    <h2>readfile() lee un archivo y lo escribe en el bufer de salida abre un archivo y lee su contenido</h2>
    <?php
    echo readfile("texto.txt")
    ?>
    <h2>Mejor opcion es fopen()</h2>
    <?php
    $myfile = fopen("texto.txt", "r") or die("No se puede abrir el archivo");
    // "<h3>El primer parámetro de fread()contiene el nombre del archivo desde el que leer y el segundo parámetro especifica el número máximo de bytes para leer.</h3>";
    echo fread($myfile, filesize("texto.txt"));
    /* La fclose()función se utiliza para cerrar un archivo abierto. */
    echo "<h4>Es una buena práctica de programación cerrar todos los archivos una vez que haya terminado con ellos. ¡No desea que un archivo abierto se ejecute en su servidor y consuma recursos!</h4>";
    fclose($myfile)
    /*
    Modos   Descripcion
     r      Abre un archivo de solo lectura. El puntero del archivo comienza al principio del archivo.
     w      Abre un archivo solo para escritura. Borra el contenido del archivo o crea un nuevo archivo si no existe. El puntero del archivo comienza al principio del archivo.
     a      Abre un archivo solo para escritura. Los datos existentes en el archivo se conservan. El puntero de archivo comienza al final del archivo. Crea un nuevo archivo si el archivo no existe     
     x      Crea un nuevo archivo solo para escritura. Devuelve FALSO y un error si el archivo ya existe
     r+     Abra un archivo para lectura/escritura. El puntero del archivo comienza al principio del archivo.
     w+     Abra un archivo para lectura/escritura. Borra el contenido del archivo o crea un nuevo archivo si no existe. El puntero del archivo comienza al principio del archivo.
     a+     Abra un archivo para lectura/escritura. Los datos existentes en el archivo se conservan. El puntero de archivo comienza al final del archivo. Crea un nuevo archivo si el archivo no existe
     x+     Crea un nuevo archivo para lectura/escritura. Devuelve FALSO y un error si el archivo ya existe
     */
    ?>

    <h2>La fgets()función se utiliza para leer una sola línea de un archivo.</h2>
    <?php
    $myfile = fopen("texto.txt", "r") or die("incapaz d abrir el archivo!");
    echo fgets($myfile);
    fclose($myfile);
    ?>

    <h2>La fgetc()función se utiliza para leer un solo carácter de un archivo.</h2>
    <?php
    $myfile = fopen("texto.txt", "r") or die("incapaz de abrir el archivo!");
    // Output one character until end-of-file
    while (!feof($myfile)) {
        echo fgetc($myfile);
    }
    fclose($myfile);
    ?>
</body>

</html>