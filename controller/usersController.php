<?php

session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
}

require_once "../model/usersModel.php";
$user = new usuario();
$cant = "*";
$btnMostrar = "";
if(isset($_GET["buscar"]) && $_GET["buscar"] == "true"){
    $cant = $_POST["busqueda"];
    $btnMostrar = "( mostrar todo )";
}


$listaUsuarios = $user->getUsers($cant);

require_once "../view/crud_user.php";

if(isset($_GET["actualizacion"]) && $_GET["actualizacion"] == "correcta"){
    echo "<script> swal('actualizacion correcta!!','','success');</script>";
}
if(isset($_GET["eliminar"])){
    $id = $_GET["eliminar"];
    $user->eliminar($id);
    echo "<script> swal('eliminado correctamente!!','','success');</script>";
    header("Location: ../controller/usersController.php");
}

?>
