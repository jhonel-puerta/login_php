<?php

foreach($dat as $data){
    $nameUS = $data["NAMEUS"];
    $name = $data["NAME"];
    $lastname = $data["LASTNAME"];
    $id=$data["ID"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styleDefault.css">
    <link rel="stylesheet" href="../public/css/styleEdit.css">
    <script src="https://kit.fontawesome.com/558e50de0e.js" crossorigin="anonymous"></script>
    <title>actualizar</title>
    
    <style>
        
        #btns-action{
    width: 130px;
    height: 30px;
    display: flex;
    justify-content: space-between;
    position: absolute;
    display: scroll;
    right: 30px;
    top: 30px;
}
.btn{
    color: white;
    text-decoration: none;
}
#salir{
    color: rgba(179, 179, 179, 0.815);
}
.ico{
    font-size: 40px;
}
    </style>

</head>
<?php
require_once "../view/header.php";
?>
<body>
    
        <form action="../controller/editController.php" method="POST">
            <h1 class="title-edit">Editar</h1>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input class="input" type="text" name="nameuser" value="<?php echo $nameUS?>">
            <input class="input" type="text" name="name_actualizar" value="<?php echo $name?>">
            <input class="input" type="text" name="lastname_actualizar" value="<?php echo $lastname?>">
            <input class="btnedit" type="submit" value="actualizar" name="actualiza">
        </form>
   
</body>
<div id="btns-action">
            <a href="../controller/usersController.php" class="btn" id="home"><i class="fas fa-home ico"></i></a>
            <a href="../controller/cerrarSesion.php" class="btn" id="salir"><i class="fas fa-sign-out-alt ico"></i></a>
        </div>
<?php
require_once "../view/footer.php";
?>
</html>

