<?php

    session_start();
    if(!empty($_POST['iniciarAdmin'])){
        if(!empty($_POST['usuario']) and !empty($_POST['contrasenia'])){
            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];

            $sql = $conexion -> query("select * from administrador where usuario='$usuario' and contrasenia='$contrasenia'");
            if($datos = $sql -> fetch_object()){
                $_SESSION["id"] = $datos -> id;
                $_SESSION["nombre"] = $datos -> nombre;
                $_SESSION["apellido"] = $datos -> apellido;
                header("Location: seccion/inicio.php");

            }else{
                echo "<script>alert('Acesso denegado');</script>";
            }
 
        }else{
            echo "<script>alert('No puedes enviar campos vacios');</script>";
        }
    }

?>