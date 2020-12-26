<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrarse</title>
    <link rel="stylesheet" href="../public/css/styleRegistroo.css">
    <link rel="stylesheet" href="../public/css/default.css">
    <script src="https://kit.fontawesome.com/558e50de0e.js" crossorigin="anonymous"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    <?php
    
    require_once "header.php";
    ?>
    <main>
        <div id="cont-registro">
        <h1>crear cuenta</h1>
        <form action="../controller/loginController.php" method="post">
            <input type="text" name="nameUS" class="inputTXT" placeholder="nombre de usuario">
            <br>
            <input type="text" name="name" class="inputTXT" placeholder="nombre">
            <br>
            <input type="text" name="lastname" class="inputTXT" placeholder="apellidos">
            <br>
            <input type="password" name="password" class="inputTXT" placeholder="contraseña">
            <br>
            <input type="submit" name="crear" value="crear" class="btnSuces">
        </form>

        <?php
        
        if(isset($_GET["registro"])){
            $typeError = $_GET["registro"];
            if($typeError == "fallo")
            {
                echo "<div class='mal'><h3 class='fallo-registro'>algo salió mal, por favor intentalo nuevamente</h3></div>";
            }
            else if($typeError == "duplicado")
            {
                echo "<div class='duplicado animate__wobble animate__delay-5s'><h3 class='registro-duplicado'>Este nombre de usuario ya esta en uso</h3></div>";
            }
        }

        ?>
        </div>
        <div id="btns-action">
            <a href="../index.php" class="btn" id="home"><i class="fas fa-home ico"></i></a>
            <a href="#" class="btn" id="salir"><i class="fas fa-sign-out-alt ico"></i></a>
        </div>
    </main>
    <?php
    require_once "footer.php";
    ?>
</body>
</html>