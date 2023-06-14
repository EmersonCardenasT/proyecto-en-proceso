<?php

    require "../config/bd.php";

    if(isset($_POST["updateid"])){
        $user_id = $_POST["updateid"];

        $sql = "Select * from `registro_emanuel` where id=$user_id";

        $resultado = mysqli_query($conexion, $sql);
        $response = array();
        while($row=mysqli_fetch_assoc($resultado)){
            $response = $row;
        }

        echo son_decode($response);

    }else{
        $response["status"] = 200;
        $response["message"] = "Dato invalido o inexistente";
    }

?>