<?php

    require ("../administrador/config/bd.php");

    if(isset($_POST['reservar'])){
        $nombre = $_POST['nombre'];
        $celular = $_POST['celular'];
        $correo = $_POST['correo'];
        $clase = $_POST['clase'];

        if(!empty($nombre) && !empty($correo) && !empty($clase)){

            $sql = ("INSERT INTO reserva_asientos(id, nombre, celular, correo, clase) VALUES (NULL, '$nombre', '$celular', '$correo', '$clase')");

            if(mysqli_query($conexion, $sql)){
                echo'<script type="text/javascript">
                alert("Registro realizado satisfactoriamente");
                window.location.href="../index.php";
                </script>';

            }else{
                echo "Error";
            }

        }
    }

?>