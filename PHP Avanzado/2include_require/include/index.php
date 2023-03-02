<html>

<body>
    <!-- menu con enlaces -->
    <?php include 'menu.php' ?>
    <h1>Welocome to my page</h1>
    <p>Some text.</p>
    <p>Some more text</p>
    <!-- pie de pagina -->
    <?php include 'footer.php' ?>
    <?php include 'variable.php';
    /* usamos include  cuaando el archivo no sea necesario y la aplicaciondeba
    continuar cuando no se encuentre el archivo */
    echo "My name is " .  $name;
    ?>
</body>

</html>