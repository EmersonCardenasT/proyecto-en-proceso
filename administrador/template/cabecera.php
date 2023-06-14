<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/styleLogin2.css">

</head>
<body>

    <?php $url = "http://".$_SERVER['HTTP_HOST']."/proyectoEm02"  ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        
        <div class="nav navbar-nav">
            <p class="nav-item nav-link active">Administrador del sitio Web</p>
            <a href="<?php echo $url; ?>/administrador/inicio.php" class="nav-item nav-link active">Inicio</a>
            <a href="<?php echo $url; ?>/administrador/seccion/productos.php" class="nav-item nav-link active">Insertar Fotos</a>
        </div>
        
    </nav>

    <div class="container">
        <br>
        <div class="row">