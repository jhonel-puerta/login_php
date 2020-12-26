<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/styleLogin.css">
</head>
<body>
<?php
require_once "view/header.php";
?>
    <main>
        <div id="contLogin">
            <form action="controller/loginController.php" method="POST">
                <h1 id="title-form">Iniciar sesión</h1>
                <input type="text" placeholder="nombre de usuario" name="nameUS" class="input">
                
                <input type="password" placeholder="Contraseña" name="password" class="input">
                
                <input type="submit" value="ingresar" name="ingresar" id="btnIngresar">
                <a href="controller/loginController.php?action=registrar" id="link">ó crear cuenta</a>
            </form>
        </div>

        
    </main>
    
</body>
</html>