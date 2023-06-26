<?php
    session_start();
    if(!empty($_POST['btningresar'])){
        if(!empty($_POST['correo']) and !empty($_POST['password'])){
            $correo = $_POST['correo'];
            $password = $_POST['password'];

            $sql = $conexion -> query("select * from registro_profesores where correo='$correo' and contrasenia='$password'");
            if($datos = $sql -> fetch_object()){
                $_SESSION["id"] = $datos -> id;
                $_SESSION["nombre"] = $datos -> nombres;
                $_SESSION["apellidos"] = $datos -> apellidos;
                header("Location:profesores/usuarios.php");
            }else{
                echo "<div class='alert alert-danger'>Acceso denegado</div>";
            }
 
        }else{
            echo "Campos vacios";
        }
    }

?>