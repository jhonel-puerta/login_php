<?php 
require_once "../model/usersModel.php";
$user = new usuario();
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $dat = $user->dataUser($id);
    require_once "../view/editar.php";
}
if(isset($_POST["actualiza"])){
    $nameuser = $_POST["nameuser"];
    $name = $_POST["name_actualizar"];
    $lastname = $_POST["lastname_actualizar"];
    $id = $_POST["id"];
    $result = $user->editar($id,$nameuser,$name,$lastname);
    if($result == "correcto"){
        header("Location: ../controller/usersController.php?actualizacion=correcta");
    }else if($result == "falló"){
        header("Location: ../view/error.php");
    }
}

?>