<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/8d8e7e891c.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="../css/styleAdmin.css"> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>

    <script type="text/javascript">
        function ConfirmDelete() {
            var respuesta = confirm("Estas seguro que deseas eliminar el registro");

            if (respuesta == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>

    <script type="text/javascript">
        function ConfirmClose() {
            var respuesta = confirm("Estas seguro que deseas cerrar Sesion?");

            if (respuesta == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>

    <nav class="navbar navbar-expand navbar-dark bg-primary">

        <div class="nav navbar-nav">
            <a href="inicio.php">
                <p class="nav-item nav-link">Administrador del sitio Web</p>
            </a>
            <a href="inicio.php" class="nav-item nav-link active">Inicio</a>
            <a href="eventos.php" class="nav-item nav-link active">Profesores</a>
            <a href="equipoTrabajo.php" class="nav-item nav-link active">Equipo Trabajo</a>
            <a href="clases_populares.php" class="nav-item nav-link active">Clases Populares</a>
            <a href="blog.php" class="nav-item nav-link active">Blog</a>
            <a href="productos.php" class="nav-item nav-link active">Fotos</a>
            <a href="tallerActividad.php" class="nav-item nav-link active">Talleres</a>
            <a href="preguntas_frecuentes.php" class="nav-item nav-link active">Preguntas Frecuentes</a>

            <!-- <a class="btn btn-danger" href="../controlador/controlador_cerrar_sesion.php" onclick="return ConfirmDelete()" role="button">CERRAR SESION</a> -->
        </div>
        <a class="btn btn-danger" href="../controlador/controlador_cerrar_sesion.php" onclick="return ConfirmClose()" role="button">CERRAR SESION</a>

    </nav>



    <div class="container">
        <br>
        <div class="row">