<?php

session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
}
require_once "../model/usersModel.php";
$user = new usuario();
$listaUsers = $user->getUsers("*");
$nameus = $_GET["nameuser"];
$id = $user->getId($nameus);
$dataUser = $user->dataUser($id);


require_once "../view/home.php";


?>