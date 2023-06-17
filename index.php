<?php
    include("template/cabecera.php");
?>
<?php 
    include("administrador/config/PDO.php"); 

    $sentenciaSQL = $conexion->prepare("SELECT * FROM imagenes");
    $sentenciaSQL -> execute();
    $listaLibros = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);
    
?>

<div id="carouselExampleCaptions" class="carousel slide mb-3 col-md-12" data-bs-ride="carousel">
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
            <div class="container course pb-5 pt-5">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Courses</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center text-muted display-4">ACTIVIDADES</h2>
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <?php foreach($listaLibros as $libro){ ?>
                                <img src="./img/<?php echo $libro['imagen']; ?>"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $libro['nombre']; ?></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#!" class="btn btn-primary">Read More</a>
                                        <hr> <br>
                                <?php } ?>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

        

        


<?php
    include("template/pie.php");
?>