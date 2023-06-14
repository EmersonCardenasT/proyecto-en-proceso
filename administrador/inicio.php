<?php

    session_start();
    if(empty($_SESSION["id"])){
        header("location:login.php");   
    }

    include("template/cabecera.php");

?>

    <div class="col-md-12">

        <div class="jumbotron text-center">
            <h1 class="display-3">Bienvenido <?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?> </h1>
            <p class="lead">Jumbo helper text</p>
            <hr class="my-2">
                <img src="../img/fondo5.jpg" width="400" class="img-thumbnail rounded mx-auto d-block">
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar libros</a>
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="controlador/controlador_cerrar_sesion.php" role="button">CERRAR SESION</a>
            </p>
        </div>

    </div>

<?php

    include("template/pie.php")

?>