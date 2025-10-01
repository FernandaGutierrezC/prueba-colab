<html>
    <head>
        <title>Envío de  parámetros en un link</title>
    </head>
    <body>
        <?php
            $param_e = '12345';
        ?>
        <!--se debe escribir el nombre del archivo, signo de interrogación y el nombre del par atributo-valor que se quiere enviar-->

        <a href="recepcion.php?parametro=12345">Link para enviar el parámetro</a> <!--escribe el par manualmente-->
        <a href="recepcion.php?parametro=<?php echo $param_e;?>">Link para enviar el parámetro</a> <!--llama a la variable php-->
    </body>
</html>