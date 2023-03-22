<!DOCTYPE html>
<html>

<body>
    <h1>Carga de Archivos PHP</h1>
    <p>
        Con PHP, es fácil cargar archivos al servidor.

        Sin embargo, con la facilidad viene el peligro, ¡así que siempre tenga cuidado al permitir la carga de archivos!
    </p>
    <!-- 
        Algunas reglas a seguir para el formulario HTML anterior:

        Asegúrate de que el formulario use method="post"
        El formulario también necesita el siguiente atributo: enctype="multipart/form-data". Especifica qué tipo de contenido usar al enviar el formulario
        Sin los requisitos anteriores, la carga del archivo no funcionará.
                
        Otras cosas a tener en cuenta:
                
        El atributo type="file" de la etiqueta <input> muestra el campo de entrada como un control de selección de archivos, con un botón "Examinar" junto al control de entrada.
        El formulario anterior envía datos a un archivo llamado "upload.php", que crearemos a continuación.
    -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Seleccione la Imagen para cargar:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Subir Imagen" name="submit">
    </form>
</body>

</html>