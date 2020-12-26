<?php
require_once "conexion.php";
class usuario{
    
    function getUsers($name){
        $conexion = new ConexionModel();
        $con = $conexion->Conexion();
        if($name == "*"){
            $query = "SELECT * FROM users";
        }else{
            $query = "SELECT * FROM users WHERE NAME = '$name'";
        }
        $result = $con->query($query);
        $lista = array();
        while($fila = $result->fetch_assoc()){
            $lista[] = $fila;
        }
        return $lista;  

    }
    function dataUser($id){
        $db = new ConexionModel();
        $conexion = $db->Conexion();
        $sql = "SELECT * FROM users WHERE ID = '$id'";
        $result = $conexion->query($sql);
        $lista = array();
        while($fila = $result->fetch_assoc()){
            $lista[] = $fila;
        }
        return $lista;
    }  
    function auth($nameUS,$pass){
        try{
            $cn = new ConexionModel();
            $conexion = $cn->Conexion();
            $sql = "SELECT `NAMEUS`,`PASSWORD` FROM users WHERE NAMEUS = '$nameUS'";
            $result = $conexion->query($sql);
            $nameError = "";
            if($result->num_rows != 0){
                while($fila = $result->fetch_array()){
                    if($fila[0] == $nameUS){
                        if (password_verify($pass,$fila[1])){
                            $nameError = "acceso";
                        }else{
                            $nameError = "Error_password";
                        }
                    }
                }
            }
            else{
                $nameError = "Error_name";
            }
            return $nameError;
        }catch(Exception $e){
            die("error " . $e->getMessage());
        }
    }
    public function usuarioUnico($nameUS){
        $db = new ConexionModel();
        $dbConexion = $db->Conexion();
        $result = $dbConexion->query("SELECT NAMEUS FROM users WHERE NAMEUS = '$nameUS'");
        if($result->num_rows != 0){
            return false;
        }else{
            return true;
        }
        
    }
    function eliminar($id){
        $db= new ConexionModel();
        $conexion = $db->Conexion();
        $q = "DELETE FROM `users` WHERE `users`.`ID` = $id";
        $conexion->query($q);
    }
    function editar($id,$nameUS,$name,$lastname){
        $estado = "";
        try{
            $db = new ConexionModel();
            $conexion = $db->Conexion();
            $query = "UPDATE `users` SET `NAMEUS` = '$nameUS', `NAME` = '$name', `LASTNAME` = '$lastname' WHERE `users`.`ID` = $id";
            $conexion->query($query);
            $estado = "correcto";
        }catch(Exception $e){
            die($e->getMessage());
            $estado = "falló";
        }
        return $estado;
    }
    function crear ($nameUS,$name,$lastname,$password){
        $UsuarioUnico = $this->usuarioUnico($nameUS);
        $estado = "";
        if($UsuarioUnico){
            try{
                $db = new ConexionModel();
                $dbConexion= $db->Conexion();
                $sql = "INSERT INTO users (ID, NAMEUS, NAME, LASTNAME, PASSWORD) VALUES (NULL, '$nameUS', '$name', '$lastname', '$password')";
                $dbConexion->query($sql);
                $estado = "exito";
            }catch(Exception $e){
                die("error -> " .$e->getMessage());
                $estado = "falló";
            }
        }else{
            $estado = "Duplicado";
        }
        return $estado;
    }

    public function getId($nameUS){
        $db = new ConexionModel();
        $conexion = $db->Conexion();
        $query = "SELECT * FROM users WHERE NAMEUS = '$nameUS'";
        $result = $conexion->query($query);
        $id = $result->fetch_assoc();
        return $id["ID"];
        
    }
}

?>
