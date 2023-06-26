<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >

    <link rel="stylesheet" href="../css/styleLogin2.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>

</head>
<body>

    <div class="preloader">
        <div class="spiner">
            <div class="spiner">
                <div class="spiner">
                    <div class="spiner"></div>
                </div>
            </div>
        </div>
    </div>

    <?php $url = "http://".$_SERVER['HTTP_HOST']."/proyectoEm02"  ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        
        <div class="nav navbar-nav">
            <p class="nav-item nav-link active">Administrador del sitio Web</p>
            <a href="<?php echo $url; ?>/administrador/inicio.php" class="nav-item nav-link active">Inicio</a>
            <a href="<?php echo $url; ?>/administrador/seccion/productos.php" class="nav-item nav-link active">Insertar Fotos</a>
            <a href="<?php echo $url; ?>/administrador/seccion/eventos.php" class="nav-item nav-link active">Registrar profesores</a>
            <a href="<?php echo $url; ?>/administrador/seccion/equipoTrabajo.php" class="nav-item nav-link active">Equipo de trabajo</a>
            <a href="<?php echo $url; ?>/administrador/seccion/clases_populares.php" class="nav-item nav-link active">Clases populares</a>
            <a href="<?php echo $url; ?>/administrador/seccion/tallerActividad.php" class="nav-item nav-link active">Talleres y actividades</a>
            <a href="<?php echo $url; ?>/administrador/seccion/blog.php" class="nav-item nav-link active">Blog</a>

            <p class="lead">
                <a class="btn btn-outline-dark" href="controlador/controlador_cerrar_sesion.php" role="button">CERRAR SESION</a>
            </p>
        </div>
        
    </nav>

    <div class="container">
        <br>
        <div class="row">