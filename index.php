<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="public/css/styleDefault.css">
    <script src="https://kit.fontawesome.com/558e50de0e.js" crossorigin="anonymous"></script>
</head>
<body>
    
     <?php

        require_once "view/login.php";
        
        if(isset($_GET["typeError"])){
            $typeError = $_GET["typeError"];
            if($typeError=="Error_name"){
                echo " <div class='contError'><h2 class='error'>Nombre incorrecto</h2></div> ";
            }
            else if($typeError == "Error_password"){
                echo " <div class='contError'><h2 class='error'>Contraseña incorrecta</h2></div> ";
            }
        }
        else if(isset($_GET["registro"])){
            if($_GET["registro"] == "exitoso"){
                echo "<div class='contRegitro'><h2>registro exitoso, ya puede iniciar sesion!!</h2></div> ";
            }
        }
    require_once "view/footer.php"; 

    if(isset($_GET["g"])){
        $n = $_GET["g"];
        require_once "view/agradecimiento.php";
    }

    ?>

</body>
</html>