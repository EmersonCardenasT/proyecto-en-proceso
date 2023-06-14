<?php

    session_start();
    if(!empty($_POST['iniciarAdmin'])){
        if(!empty($_POST['correo']) and !empty($_POST['password'])){
            $correo = $_POST['correo'];
            $password = $_POST['password'];

            $sql = $conexion -> query("select * from registro_emanuel where correo='$correo' and contraseña='$password'");
            if($datos = $sql -> fetch_object()){
                $_SESSION["id"] = $datos -> id;
                $_SESSION["nombre"] = $datos -> nombres;
                $_SESSION["apellido"] = $datos -> apellidos;
                header("Location: registrar_usuario.php");
            }else{
                echo "<div class='alert alert-danger'>Acceso denegado</div>";
            }
 
        }else{
            echo "Campos vacios";
        }
    }

?>