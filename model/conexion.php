<?php

class ConexionModel{
    function Conexion(){
        $conexion = mysqli_connect("localhost","root","","login");
        return $conexion;
    }
}

?>