<?php

    session_start();
    if(!empty($_POST['iniciarAdmin'])){
        if(!empty($_POST['DNI']) and !empty($_POST['password'])){
            $DNI = $_POST['DNI'];
            $password = $_POST['password'];

            $sql = $conexion -> query("select * from registro_profesores where DNI='$DNI' and contrasenia='$password'");
            if($datos = $sql -> fetch_object()){
                $_SESSION["id"] = $datos -> id;
                $_SESSION["nombre"] = $datos -> nombres;
                $_SESSION["apellidos"] = $datos -> apellidos;
                header("Location: CRUD/index.php");
            }else{
                echo "<div class='alert alert-danger'>Acceso denegado</div>";
            }
 
        }else{
            echo "Campos vacios";
        }
    }

?>