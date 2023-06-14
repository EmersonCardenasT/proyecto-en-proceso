<?php

    require 'dbcon.php';

    if(isset($_POST['save_student']))
    {
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']);
        $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
        $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
        $especialidad = mysqli_real_escape_string($conexion, $_POST['especialidad']);
        $contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']);
        $confirmarContraseña = mysqli_real_escape_string($conexion, $_POST['confirmarContraseña']);

        if($nombre == NULL || $apellidos == NULL || $telefono == NULL ||$correo == NULL || 
        $especialidad == NULL || $contraseña == NULL || $confirmarContraseña == NULL){

            $respuesta = [
                'status' => 422,
                'message' => 'Todos los campos son obligatorios'
            ];
            echo json_encode($respuesta);
            return false;

        }

        $query = "INSERT INTO registroprofesores (nombre, apellidos, telefono, correo, especialidad, contraseña, confirmarContraseña) VALUES
        ('$nombre', '$apellidos', '$telefono', '$correo', '$especialidad', '$contraseña', '$confirmarContraseña')";
        
        $query_run = mysqli_query($conexion, $query);

        if($query_run){

            $respuesta = [
                'status' => 200,
                'message' => 'Usuario creado correctamente'
            ];
            echo json_encode($respuesta);
            return false;

        }else{

            $respuesta = [
                'status' => 500,
                'message' => 'Usuario no creado'
            ];
            echo json_encode($respuesta);
            return false;

        }

    }
    

?>