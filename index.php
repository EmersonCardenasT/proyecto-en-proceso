<?php
    include("template/cabecera.php");
?>
<?php 
    include("administrador/config/PDO.php"); 

    $sentenciaSQL = $conexion->prepare("SELECT * FROM clases_populares");
    $sentenciaSQL -> execute();
    $listaLibros = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);

    $sentenciaSQL = $conexion->prepare("SELECT * FROM talleres");
    $sentenciaSQL -> execute();
    $listaLibros2 = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);

    $sentenciaSQL = $conexion->prepare("SELECT * FROM registro_profesores");
    $sentenciaSQL -> execute();
    $listaLibros3 = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC); 
    
    $sentenciaSQL = $conexion->prepare("SELECT * FROM blog");
    $sentenciaSQL -> execute();
    $listaLibros4 = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC); 
?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5 ">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Colegio Cristiano</h4>
                <h1 class="display-3 font-weight-bold text-white">Nuevo enfoque para la educacion</h1>
                <p class="text-white mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                    Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                    lorem dolore sed stet et est justo dolore.</p>
                <a href="" class="btn btn-secondary mt-1 py-3 px-5">Leer mas</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="img/banner.png" alt="" height="700px" width="700px">
            </div>
        </div>
    </div>
    <!-- Header End -->


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


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">Learn About Us</span></p>
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
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Labores diarias</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Enfoque hacia los niños</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Ayuda constatne.</li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mt-2 py-2 px-4">Leer mas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Clases populares</span></p>
                <h1 class="mb-4">Clases de verano</h1>
            </div>
            <div class="row">
            <?php foreach($listaLibros as $libro){ ?>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="./administrador/seccion/img/<?php echo $libro['foto']; ?>" alt="" width="200px" height="300px">
                        <div class="card-body text-center">
                            <h4 class="card-title"><?php echo $libro['titulo']; ?></h4>
                            <p class="card-text"><?php echo $libro['descripcion']; ?></p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Edad de los niños</strong></div>
                                <div class="col-6 py-1"><?php echo $libro['edad']; ?></div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Total de sesiones</strong></div>
                                <div class="col-6 py-1"><?php echo $libro['sesiones']; ?></div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Tiempo de clases</strong></div>
                                <div class="col-6 py-1"><?php echo $libro['horario']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong>Costo</strong></div>
                                <div class="col-6 py-1"><?php echo $libro['costo']; ?> / Mes</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Unete ahora</a>
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
                <div class="col-lg-7 mb-5 mb-lg-0"  id="reserva">
                    <p class="section-title pr-5"><span class="pr-2">CLASES POPULARES - RESERVAR TU LUGAR</span></p>
                    <h1 class="mb-4">Reserve un asiento para su hijo</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline m-0">
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                    <div class="text-center">
                        <img src="img/flecha.png" alt="" width="150px">
                    </div>
                    <!-- <a href="#reserva" class="btn btn-primary mt-4 py-2 px-4">Reservar ahora</a> -->
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Reservar un asiento</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form method="POST" action="pag_principal/reservar_asiento.php">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Su nombre" required="required" name="nombre"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Celular" required="required" name="celular" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Tu correo electronico(opcional)" name="correo" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Dibujo - Idiomas - Ciencia" required="required" name="clase">
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-secondary btn-block border-0 py-3" value="Reservar ahora" name="reservar">
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
            <?php foreach($listaLibros3 as $libro){ ?>
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


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Testimonios</span></p>
                <h1 class="mb-4">Que dicen los padres!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-1.jpg" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-2.jpg" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-3.jpg" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-4.jpg" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Blog mas reciente</span></p>
                <h1 class="mb-4">Ultimos articulos del Blog</h1>
            </div>
            <div class="row pb-3">
            <?php foreach($listaLibros4 as $libro){ ?>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="administrador/seccion/img/<?php echo $libro['foto']; ?>" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class=""><?php echo $libro['titulo']; ?></h4>
                            <!-- <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div> -->
                            <p><?php echo $libro['descripcion']; ?></p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Leer mas</a>
                        </div>
                    </div>
                </div>
            <?php } ?>  
            </div>
        </div>
    </div>
    <!-- Blog End -->


<?php
    include("template/pie.php");
?>