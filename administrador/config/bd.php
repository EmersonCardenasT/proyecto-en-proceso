<?php


/* $host = "localhost";
$bd = "emanuel";
$usuario = "root";
$contrasenia = "";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    if($conexion){
        //echo "Conectado a sistema...";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
} */

    /*$conexion = new mysqli("localhost", "root", "", "emanuel");
    $conexion-> set_charset("utf8");
    echo "La base de datos esta conectada"; */

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "emanuel";

    // Create connection
    $conexion = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";

?>