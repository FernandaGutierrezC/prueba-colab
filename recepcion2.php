<html>
    <head>
        <title>Recepción de parámetros en un formulario</title>
    </head>
    <body>
        <?php
        $nombre= $_GET['nombre'];
        $edad=$_GET['edad'];
        echo "Tu nombre es: ".$nombre."<br>";
        echo "Tu edad es: ".$edad."<br>";
        ?>
    </body>
</html>