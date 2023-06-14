<?php
    session_start();
    if(!empty($_POST['btningresar'])){
        if(!empty($_POST['usuario']) and !empty($_POST['password'])){
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];

            $sql = $conexion -> query("select * from registro_emanuel where usuario='$usuario' and contraseña='$password'");
            if($datos = $sql -> fetch_object()){
                $_SESSION["id"] = $datos -> id;
                $_SESSION["nombre"] = $datos -> nombres;
                $_SESSION["apellido"] = $datos -> apellidos;
                header("Location: inicio.php");
            }else{
                echo "<div class='alert alert-danger'>Acceso denegado</div>";
            }
 
        }else{
            echo "Campos vacios";
        }
    }

?>