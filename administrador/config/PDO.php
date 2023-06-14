<?php

    $host = "localhost";
    $bd = "emanuel";
    $usuario = "root";
    $contrasenia = "";

    try {
        $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
        if($conexion){
            echo "Conectado a sistema con PDO...";
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }

?>