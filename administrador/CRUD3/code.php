<?php

    require 'dbcon.php';

    if(isset($_GET['student_id']))
    {
        $student_id = mysqli_real_escape_string($conexion, $_GET['student_id']);

        $query = "SELECT * FROM registroprofesores WHERE id='$student_id";
        $query_run = mysqli_query($conexion, $query);

        iF(mysqli_num_rows($query_run) == 1){

            $student = mysqli_fetch_array($query_run);

            $respuesta = [
                'status' => 200,
                'message' => 'Usuario registrado correctament por ID',
                'data' => $student
            ];
            echo json_encode($respuesta);
            return false;

        }else{

            $respuesta = [
                'status' => 404,
                'message' => 'Id seleccionado no existe'
            ];
            echo json_encode($respuesta);
            return false;

        }
    }

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