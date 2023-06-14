<?php

    require "../config/bd.php";

    extract($_POST);

    if (isset($_POST['usuarioSend']) && isset($_POST['nombresSend']) && isset($_POST['apellidosSend']) 
    && isset($_POST['emailSend']) && isset($_POST['contraseñaSend']) && isset($_POST['repContraseñaSend'])) {
        
        $sql = "insert into `registro_emanuel` (usuario, nombres, apellidos, correo, contraseña, repContraseña)
        values ('$usuarioSend', '$nombresSend', '$apellidosSend', '$emailSend', '$contraseñaSend', '$repContraseñaSend')";

        $resultado = mysqli_query($conexion, $sql);

    }

?>