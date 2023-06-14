<?php
    include("template/cabecera.php");
?>
<?php 
    include("administrador/config/PDO.php"); 

    $sentenciaSQL = $conexion->prepare("SELECT * FROM imagenes");
    $sentenciaSQL -> execute();
    $listaLibros = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);
    
?>

<div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="https://cdn.pixabay.com/photo/2016/11/14/05/15/academic-1822682_960_720.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Shree Suryodaya Secondary School</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="https://cdn.pixabay.com/photo/2017/02/05/00/08/graduation-2038864_960_720.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Shree Suryodaya Secondary School</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="img/fondoEmanuel.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Shree Suryodaya Secondary School</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about mt-5">
            <div class="container-fluid">
                <h2 class="h1-responsive font-weight-bold text-center my-2">About</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-1">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                <div class="row  pt-5 pb-5">

                    
                    <?php foreach($listaLibros as $libro){ ?>
                    <div class="col-lg-5 align-items-stretch video-box">

                        <img src="./img/<?php echo $libro['imagen']; ?>" alt="" class="img-thumbnail rounded">
                        
                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                        <h2 class=""><?php echo $libro['nombre']; ?> </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                        
                    </div> 
                    <hr>
                    <br>
                    <?php } ?>

                </div>

            </div>
        </section><!-- End About Section 

        


<?php
    include("template/pie.php");
?>