<?php
session_start();

if(isset($_POST['iniciarAdmin'])) {
    if(!empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
        // Verificar si la conexión se realizó correctamente
        if($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        $usuario = $conexion->real_escape_string($_POST['usuario']);
        $contrasenia = $conexion->real_escape_string($_POST['contrasenia']);

        // Consultar la base de datos para verificar las credenciales del administrador
        $sql = "SELECT * FROM administrador WHERE usuario='$usuario' AND contrasenia='$contrasenia'";
        $resultado = $conexion->query($sql);

        // Verificar si se encontraron resultados
        if($resultado->num_rows > 0) {
            // Obtener los datos del administrador
            $datos = $resultado->fetch_assoc();

            // Almacenar los datos del administrador en la sesión
            $_SESSION["id"] = $datos["id"];
            $_SESSION["nombre"] = $datos["nombre"];
            $_SESSION["apellido"] = $datos["apellido"];

            // Redirigir al usuario a la página de inicio
            header("Location: seccion/inicio.php");
            exit();
        } else {
            // Mostrar mensaje de acceso denegado si no se encontraron resultados
            echo "<script>alert('Acceso denegado');</script>";
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
    } else {
        // Mostrar mensaje si hay campos vacíos
        echo "<script>alert('No puedes enviar campos vacíos');</script>";
    }
}
?>
