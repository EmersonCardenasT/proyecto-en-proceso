<?php

    session_start();
    if(isset($_POST['registrar'])){
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $repContraseña = $_POST['repContraseña'];

        if(!empty($usuario) && !empty($nombre) && !empty($apellidos)
        && !empty($correo) && !empty($contraseña) && !empty($repContraseña)){

            $sql = "INSERT INTO registro_emanuel(id, usuario, nombres, apellidos, correo, contraseña, repContraseña)
            VALUES (NULL, '$usuario', '$nombre', '$apellidos', '$correo', '$contraseña', '$repContraseña')";

            $resultado = $conexion -> query($sql);

            if($resultado){
                $resultado = "Los datos se registraron correctamente...";
            }

        }else{
            $resultado = "Ingrese datos...";
        }
    }

?>