<?php
//validar si la sesión existe
session_start();
$name = $_SESSION['user'];
$mail = $_SESSION['email'];
?>


<html>
    <head>
        <title>Página sesión 3</title>
    </head>
    <body>
        <h2>Bienvenido <?php echo $name; ?></h2>
        <h2>El email <?php echo $mail; ?> se ha registrado correctamente</h2>
    </body>
</html>