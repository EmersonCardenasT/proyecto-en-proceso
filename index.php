<?php
include("template/cabecera.php");
?>
<?php
include("administrador/config/PDO.php");
include("administrador/config/conect.php");

// $sentenciaSQL = $conexion->prepare("SELECT * FROM clases_populares");
// $sentenciaSQL->execute();
// $listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sql = $conect->query("SELECT * FROM clases_populares");

$sentenciaSQL = $conexion->prepare("SELECT * FROM talleres");
$sentenciaSQL->execute();
$listaLibros2 = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL = $conexion->prepare("SELECT * FROM registro_profesores");
$sentenciaSQL->execute();
$listaLibros3 = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL = $conexion->prepare("SELECT * FROM blog");
$sentenciaSQL->execute();
$listaLibros4 = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL = $conexion->prepare("SELECT * FROM comentarios");
$sentenciaSQL->execute();
$listaLibros7 = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL = $conexion->prepare("SELECT * FROM preguntas_frecuentes");
$sentenciaSQL->execute();
$listaLibros8 = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


$sentenciaSQL = $conexion->prepare("SELECT * FROM imagenes");
$sentenciaSQL -> execute();
$listaLibros = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);

?>

<!-- seccion preguntas frecuentes -->

<!-- fin preguntas frecuentes -->


<!-- Header Start -->
<div class="container-fluid bg-primary px-0 px-md-5 mb-5 ">
    <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
            <!-- <h4 class="text-white mb-4 mt-5 mt-lg-0">Colegio Cristiano</h4> -->
            <h1 class="display-3 font-weight-bold text-white">¡Cada paso cuenta hacia un futuro brillante!</h1>
            <p class="text-white mb-4">En cada paso que damos, en cada esfuerzo que invertimos, nos acercamos más a
                nuestro potencial
                ilimitado. Somos los arquitectos de nuestro propio éxito, construyendo un futuro brillante con cada
                decisión que tomamos.
                ¡Creemos en nosotros mismos y alcancemos las estrellas!.</p>
            <a href="" class="btn btn-secondary mt-1 py-3 px-5">Leer mas</a>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <img class="img-fluid mt-5" src="img/banner2.jpg" alt="" height="700px" width="700px">
        </div>
    </div>
</div>
<!-- Header End -->

<!-- SLIDER -->


<!--    fin slider -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <iframe width="450" height="380" src="https://www.facebook.com/100003919658320/videos/1709403272870240/"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <!-- <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt=""> -->
            </div>
            <div class="col-lg-7">
                <p class="section-title pr-5"><span class="pr-2">Conociendo un poco mas</span></p>
                <h1 class="mb-4">Participacion constante</h1>
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                <div class="row pt-2 pb-4">
                    <div class="col-6 col-md-4">
                        <img class="img-fluid rounded" src="img/blog-3.jpg" alt="">
                    </div>
                    <div class="col-6 col-md-8">
                        <ul class="list-inline m-0">
                            <li class="py-2 border-top border-bottom"><i
                                    class="fa fa-check text-primary mr-3"></i>Labores diarias y ayudas constantes</li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Insentivamos las
                                buenas labores</li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Cooperacion en
                                equipo, desarrollo personal.</li>
                        </ul>
                    </div>
                </div>
                <a href="class.php" class="btn btn-primary mt-2 py-2 px-4">Leer mas</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<br><br>


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-5 mb-lg-0" src="img/img1.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <p class="section-title pr-5"><span class="pr-2">Acerca de Nosotros</span></p>
                <h1 class="mb-4">La mejor educacion para tus hijos</h1>
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                <div class="row pt-2 pb-4">
                    <div class="col-6 col-md-4">
                        <img class="img-fluid rounded" src="img/blog-3.jpg" alt="">
                    </div>
                    <div class="col-6 col-md-8">
                        <ul class="list-inline m-0">
                            <li class="py-2 border-top border-bottom"><i
                                    class="fa fa-check text-primary mr-3"></i>Labores diarias</li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Enfoque hacia
                                los niños</li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Ayuda constatne.
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="about.php" class="btn btn-primary mt-2 py-2 px-4">Leer mas</a>
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
            <?php foreach ($listaLibros2 as $libro) { ?>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>
                                <?php echo $libro['titulo']; ?>
                            </h4>
                            <p class="m-0">
                                <?php echo $libro['descripcion']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Facilities Start -->


<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Clases populares</span></p>
            <h1 class="mb-4">Clases de verano</h1>
        </div>
        <div class="row">
            <?php while ($datos = $sql->fetch_object()) { ?>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="./administrador/seccion/img/<?= $datos->foto; ?>"
                            alt="" width="200px" height="300px">
                        <div class="card-body text-center">
                            <h4 class="card-title">
                                <?= $datos->titulo; ?>
                            </h4>
                            <p class="card-text">
                                <?= $datos->descripcion; ?>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Edad de los niños</strong></div>
                                <div class="col-6 py-1">
                                    <?= $datos->edad; ?>
                                </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Total de sesiones</strong></div>
                                <div class="col-6 py-1">
                                    <?= $datos->sesiones; ?>
                                </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Tiempo de clases</strong></div>
                                <div class="col-6 py-1">
                                    <?= $datos->horario; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong>Costo</strong></div>
                                <div class="col-6 py-1">
                                    <?= $datos->costo; ?> / Mes
                                </div>
                            </div>
                        </div>
                        <a href="class.php" class="btn btn-primary px-4 mx-auto mb-4">Unete ahora</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Class End -->


<!-- Registration Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0" id="reserva">
                <p class="section-title pr-5"><span class="pr-2">CLASES POPULARES - RESERVAR TU LUGAR</span></p>
                <h1 class="mb-4">Reserve un asiento para su hijo</h1>
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                <ul class="list-inline m-0">
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Aprendizaje garantizado</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Talleres full practica</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Enfoque dinamico y creativo.</li>
                </ul>
                <div class="text-center">
                    <img src="img/flecha.png" alt="" width="150px">
                </div>
                <!-- <a href="#reserva" class="btn btn-primary mt-4 py-2 px-4">Reservar ahora</a> -->
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-secondary text-center p-4">
                        <h1 class="text-white m-0">Nos pondremos en contacto con Usted</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-primary p-5">
                        <form method="POST" action="pag_principal/reservar_asiento.php">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Su nombre"
                                    required="required" name="nombre" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Celular"
                                    required="required" name="celular" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4"
                                    placeholder="Tu correo electronico(opcional)" name="correo" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4"
                                    placeholder="Dibujo-Idiomas-Ciencia(Taller interesado)" required="required"
                                    name="clase">
                            </div>
                            <div>
                                <input type="submit" class="btn btn-secondary btn-block border-0 py-3"
                                    value="Reservar ahora" name="reservar">
                                <!-- <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Reservar ahora</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration End -->

<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Nuestros Profesores</span></p>
            <h1 class="mb-4">Conoce a nuestros maestros</h1>
        </div>
        <div class="row">
            <?php foreach ($listaLibros3 as $libro) { ?>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="administrador/seccion/img/<?php echo $libro['foto']; ?>" alt="">
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>
                        <?php echo $libro['nombre']; ?>
                    </h4>
                    <i>
                        <?php echo $libro['correo']; ?>
                    </i>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Blog Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Blog mas reciente</span></p>
            <h1 class="mb-4">Ultimos articulos del Blog</h1>
        </div>
        <div class="row pb-3">
            <?php foreach ($listaLibros4 as $libro) { ?>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="administrador/seccion/img/<?php echo $libro['foto']; ?>" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">
                                <?php echo $libro['titulo']; ?>
                            </h4>
                            <!-- <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div> -->
                            <p>
                                <?php echo $libro['descripcion']; ?>
                            </p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Leer mas</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container p-0">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Lista de Comentarios</span></p>
            <h1 class="mb-4">Opiniones!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <?php foreach ($listaLibros7 as $libro) {
                ?>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        <?php echo $libro['descripcion'];
                        ?>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/perfil.png" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <p>
                                <?php $libro['fecha'];
                                ?>
                            </p>
                            <h5>
                                <?php echo $libro['nombre'];
                                ?>
                            </h5>
                            <i>
                                <?php echo $libro['profesion'];
                                ?>
                            </i>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- INICIO SECCION COMENTARIOS -->
<br>
<h2 class="text-center">PREGUNTAS FRECUENTES</h2>
<br>
<div class="accordion container" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
  <?php foreach ($listaLibros8 as $libro) { ?>
    <h1 class="" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        <?php echo $libro['pregunta']; ?>
      </button>
    </h1>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <?php echo $libro['respuesta']; ?>
      </div>
    </div>
    <?php } ?>
  </div>
</div><br>
<!-- FIN SECCION COMENTARIOS -->

<br>
<!-- Mapà -->
<div class="container-fluid">
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1956.3089567779584!2d-74.7007216!3d-11.289472199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910bc33a04d4647b%3A0x3793328afcbb3cb1!2sI.E.I.%20%22ANTONIO%20RAYMONDI%22!5e0!3m2!1ses!2spe!4v1716044048550!5m2!1ses!2spe"   
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>





<?php
include("template/pie.php");
?>