<?php
require_once "../model/usersModel.php";

class loginController{

    public function home(){
        $btn = $_POST["ingresar"];
        $nameUS = $_POST["nameUS"];
        $password = $_POST["password"];
        $usuario = new usuario();
        if($usuario->auth($nameUS,$password) == "acceso"){
            //$name = $usuario->nombreUsuario($nameUS);
            session_start();
            $_SESSION["usuario"] = $_POST["nameUS"];
            if($nameUS == "admin"){
                header("Location: ../controller/usersController.php");
            }else{
                header("Location: ../controller/homeController.php?nameuser=$nameUS");
            }
            
        }
        else if($usuario->auth($nameUS,$password) == "Error_name"){
            header("Location: ../index.php?typeError=Error_name");
        }
            
        else if($usuario->auth($nameUS,$password) == "Error_password"){
            header("Location: ../index.php?typeError=Error_password");
        }
        

    }
    public function registro()
    {
        header("Location: ../view/registrarse.php");
    }

    public function nuevoUser()
    {
        $user = new usuario();
        $nameUs = $_POST["nameUS"];
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $password = $_POST["password"];
        $pass_hash = password_hash($password,PASSWORD_DEFAULT);
        $newUser = $user->crear($nameUs,$name,$lastname,$pass_hash);
        if($newUser == "exito"){
            header("Location: ../index.php?registro=exitoso");
        }
        else if($newUser == "falló"){
            header("Location: ../view/registrarse.php?registro=fallo");
        }
        else if($newUser == "Duplicado"){
            header("Location: ../view/registrarse.php?registro=duplicado");
        }
    }
}


if(isset($_POST["ingresar"])){
    echo "pulsaste ingresar";
    $login = new loginController();
    $login->home();


}

if(isset($_GET["action"])){
    if($_GET["action"]=="registrar"){
        $login = new loginController();
        $login->registro();
    }
}

if(isset($_POST["crear"])){
    $login = new loginController();
    $login->nuevoUser();
}

?>
