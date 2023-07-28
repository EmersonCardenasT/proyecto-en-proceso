<?php

    include "template/cabecera.php";

?>

<?php 
    include("administrador/config/PDO.php"); 

    $sentenciaSQL = $conexion->prepare("SELECT * FROM imagenes");
    $sentenciaSQL -> execute();
    $listaLibros = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);
    
?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Galleria</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.php">Inicio</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Galleria</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Registro constante de actividades</span></p>
                <h1 class="mb-4">Nuestros hijos en el dia a dia</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">Todo</li>
                        <!-- <li class="btn btn-outline-primary m-1" data-filter=".first">Playing</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">Drawing</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">Reading</li> -->
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">

                <?php foreach($listaLibros as $libro){ ?>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img src="img/<?php echo $libro['imagen']; ?>" with="400" height="280" class="card-img-top">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/<?php echo $libro['imagen']; ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                            <h4 class="card-title"><?php echo $libro['nombre']; ?></h4>
                            <!-- <a href="" class="btn btn-primary">Ver mas</a> -->
                    </div>
                </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
    <!-- Gallery End -->


<?php

    include "template/pie.php";

?>