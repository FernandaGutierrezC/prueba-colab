<?php 
    if(isset($_POST["send"])){ //enviar datos del form mediante post
        session_start();
        $_SESSION["user"] = htmlentities($_POST["user"]);//recibir lo que se envió por POST en el campo usuario
        $_SESSION["email"] = htmlentities($_POST["email"]);//recibir lo que se envió por POST en el campo email

        header("Location: paginasesion3.php");//redireccionar
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sesiones PHP</title>
    </head>
    <body>
        <form method ="POST">
            <input type="text" name="user" placeholder="Ingresar usuario">
            <input type="text" name="email" placeholder="Ingresar correo">
            <input type="submit" name="send" value="Enviar">
        </form>
    </body>
</html>