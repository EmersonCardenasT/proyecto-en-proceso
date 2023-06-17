<?php

    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) &&
        !empty($_POST['mensaje'])){

            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $mensaje = $_POST['mensaje'];

            $header = "From: noreply@" . "\r\n";
            $header = ""

        }
    }

?>