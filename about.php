<?php

    include "template/cabecera.php";

?>

<?php 
    include("administrador/config/PDO.php"); 

    $sentenciaSQL = $conexion->prepare("SELECT * FROM talleres");
    $sentenciaSQL -> execute();
    $listaLibros2 = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);

    $sentenciaSQL = $conexion->prepare("SELECT * FROM equipo");
    $sentenciaSQL -> execute();
    $listaLibros5 = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC); 

?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Acerca de nosotros</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.php">Inicio</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Acerca de nosotros</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                <iframe width="450" height="380" src="https://www.youtube.com/embed/_HIh8osVgzs" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen></iframe>
                    <!-- <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt=""> -->
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">Conociendo un poco mas</span></p>
                    <h1 class="mb-4">La mejor educacion para tus hijos</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                        </div>
                        <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Labores diarias y ayudas constantes</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Insentivamos las buenas labores</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Cooperacion en equipo, desarrollo personal.</li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mt-2 py-2 px-4">Leer mas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Titulo 01 -->
    <div class="text-center pb-2">
        <p class="section-title px-5"><span class="px-2">NUESTRAS FORTALEZAS</span></p>
        <h1 class="mb-4">Actividades - Talleres - Beneficios</h1>
    </div>

    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
            <?php foreach($listaLibros2 as $libro){ ?>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4><?php echo $libro['titulo']; ?></h4>
                            <p class="m-0"><?php echo $libro['descripcion']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <!-- Facilities Start -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Nuestro Equipo de Trabajo</span></p>
                <h1 class="mb-4">Seccion de personal Administrativo</h1>
            </div>
            <div class="row">
            <?php foreach($listaLibros5 as $libro){ ?>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="administrador/seccion/img/<?php echo $libro['foto']; ?>" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4><?php echo $libro['nombre']; ?></h4>
                    <i><?php echo $libro['correo']; ?></i>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <!-- Team End -->


<?php

    include "template/pie.php";

?>