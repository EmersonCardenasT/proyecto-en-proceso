<?php

    session_start();
    if(empty($_SESSION["id"])){
        header("location:../index.php");   
    }

    include("../template/cabecera.php");

?>

    <div class="col-md-12">

        <div class="jumbotron text-center">
            <h4 class="display-3">Bienvenido <?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?> </h4>
            <p class="lead">Administrador de archivos</p>
            <hr class="my-2">
                <img src="../../img/class-3.jpg" width="400" class="img-thumbnail rounded mx-auto d-block">
            
        </div>

    </div>

<?php

    include("../template/pie.php")

?>