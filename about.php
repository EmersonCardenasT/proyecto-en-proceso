<?php
include("administrador/config/PDO.php");


$sentenciaSQL = $conexion->prepare("SELECT * FROM equipo");
$sentenciaSQL->execute();
$listaLibros5 = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>I.E.P. EMANUEL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/colegio.png">
    <!-- <link href="img/colegio.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Flaticon Font -->

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="icon" type="img/png" href="img/logo.png">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slider.css">

</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-dual-ring"></div>
    </div>

    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <i class="bi bi-journal-medical"></i>
                <span class="text-primary">I.E.P. EMANUEL</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                    <a href="about.php" class="nav-item nav-link active">Acerca de Nosotros</a>
                    <a href="class.php" class="nav-item nav-link">Clases de Verano</a>
                    <a href="team.php" class="nav-item nav-link">Profesores</a>
                    <a href="gallery.php" class="nav-item nav-link">Galeria</a>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Niveles
                        </a>
                        <ul class="dropdown-menu rounded-0 m-0" aria-labelledby="dropdownMenuButton1">
                            <li><a href="inicial.php" class="dropdown-item">Educacion Inicial</a></li>
                            <li><a href="primaria.php" class="dropdown-item">Educacion Primaria</a></li>
                            <li><a href="secundaria.php" class="dropdown-item">Educacion Secundaria</a></li>
                        </ul>
                    </div>

                    <a href="contact.php" class="nav-item nav-link">Contacto</a>
                </div>
                <a href="administrador/admin.php" class="btn btn-primary px-4">
                    <i class="bi bi-person-square"></i>Iniciar</a>
            </div>
        </nav>
    </div>

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

    <!-- NUESTRA HISTORIA -->
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title pr-5 text-center"><span class="pr-2">Nuestra historia</span></p>
                </div>
                <div class="mb-12">
                    <h1 class="mb-12 text-center">Conoce el camino que recorremos</h1>
                    <p>historia del Colegio Antonio Raymondi se remonta al año 1985, cuando un grupo de educadores visionarios y comprometidos decidió fundar una institución educativa que ofreciera una educación integral y de calidad a los niños y jóvenes de la comunidad.
                        Con el objetivo de brindar una formación académica sólida y al mismo tiempo promover valores éticos y humanos, el Colegio Antonio Raymondi abrió sus puertas en una pequeña sede con apenas unos pocos salones de clases. Desde el principio, se enfocó en desarrollar un ambiente de aprendizaje inclusivo y estimulante, donde cada estudiante pudiera alcanzar su máximo potencial.
                        A lo largo de los años, el Colegio Antonio Raymondi ha experimentado un crecimiento significativo. Debido a la creciente demanda de matrícula y el reconocimiento de su excelencia académica, se han construido nuevas instalaciones y se ha ampliado la oferta educativa. Hoy en día, el colegio cuenta con aulas espaciosas y bien equipadas, laboratorios de ciencias, biblioteca, áreas deportivas y recreativas, y todas las comodidades necesarias para el desarrollo integral de los estudiantes.
                        <br><br>El Colegio Antonio Raymondi se ha destacado por su compromiso con la formación integral de sus alumnos. Además de brindar una educación académica de calidad, se promueve el desarrollo de habilidades socioemocionales, el fomento de la creatividad, el pensamiento crítico y el respeto por la diversidad. Se fomenta la participación activa de los padres y se establece una estrecha colaboración entre la comunidad educativa.
                        A lo largo de su historia, el Colegio Antonio Raymondi ha formado a generaciones de estudiantes exitosos y comprometidos con su comunidad. Sus egresados han destacado tanto en el ámbito académico como en el profesional, siendo reconocidos por su ética de trabajo, liderazgo y responsabilidad social.
                        El Colegio Antonio Raymondi continúa su compromiso de brindar una educación de calidad, adaptándose a los cambios y desafíos del mundo actual, y preparando a sus estudiantes para que sean ciudadanos conscientes, comprometidos y capaces de enfrentar los retos del futuro.
                    </p>
                    <br>
                    <div class="text-center">
                        <img class="img-fluid rounded w-45 mb-4" src="img/historia.jpg" alt="Image">
                        <img class="img-fluid rounded w-45 mb-4" src="img/historia2.jpg" alt="Image">
                        <img class="img-fluid rounded w-45 mb-4" src="img/historia3.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE HISTORIA -->

    <!-- MISION Y VISION -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">MISION Y VISION</span></p>
            </div>
            <div class="row pb-3">

                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">NUESTRA MISION</h4>
                            <p>En el Colegio Antonio Raymondi, nuestra misión es brindar una educación integral y de calidad, guiada por valores éticos y morales, que prepare a nuestros estudiantes para enfrentar los desafíos del siglo XXI y convertirse en ciudadanos responsables y comprometidos con su comunidad. Nos esforzamos por ofrecer un entorno de aprendizaje seguro, inclusivo y estimulante, donde cada estudiante sea valorado y respetado como individuo único.
                                <br><br>
                                Nuestro compromiso es promover el desarrollo académico, socioemocional y físico de nuestros estudiantes, brindándoles las herramientas necesarias para alcanzar su máximo potencial en todas las áreas de su vida. Buscamos fomentar el amor por el aprendizaje, el pensamiento crítico y la creatividad, a través de una pedagogía innovadora y centrada en el estudiante.
                                <br><br>
                                Valoramos la formación integral, por lo que promovemos la adquisición de habilidades sociales, el trabajo en equipo y el respeto a la diversidad. Nos esforzamos por cultivar en nuestros estudiantes los valores de la honestidad, la responsabilidad, la solidaridad y el respeto hacia los demás y el entorno. Asimismo, buscamos inculcarles una conciencia ambiental, para que sean agentes de cambio en la construcción de un mundo sostenible.
                            </p>
                        </div>
                        <img class="card-img-top mb-2" src="img/mision.png" alt="">
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">NUESTRA VISION</h4>
                            <p>En el Colegio Antonio Raymondi, aspiramos a ser una institución educativa líder y reconocida a nivel local y nacional. Nos proponemos ser un referente de excelencia académica, donde nuestros estudiantes alcancen los más altos estándares de logro académico y se destaquen por su pensamiento crítico, su capacidad de resolución de problemas y su creatividad.
                                <br><br>
                                Buscamos ser un espacio de aprendizaje inclusivo y equitativo, donde se valore y respete la diversidad de nuestros estudiantes y se les brinden igualdad de oportunidades para su desarrollo integral. Queremos ser reconocidos por nuestra oferta educativa diversificada, que abarque no solo los aspectos académicos, sino también artísticos, deportivos y culturales, permitiendo a cada estudiante descubrir y desarrollar sus talentos y pasiones.
                                <br><br>
                                Nos esforzamos por estar a la vanguardia de la educación, incorporando tecnologías de vanguardia y metodologías innovadoras que promuevan el aprendizaje activo y significativo. Además, buscamos establecer alianzas estratégicas con instituciones y organizaciones locales e internacionales, para enriquecer la experiencia educativa de nuestros estudiantes y fortalecer nuestra proyección hacia la comunidad..
                            </p>
                        </div>
                        <img class="card-img-top mb-2" src="img/vision.png" alt="">

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FIN DE MISION Y VISION -->


    <!-- VALORES Y FORTALEZAS -->
    <br>
    <div class="container-fluid pt-5  bg-light shadow-sm">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="pr-2">NUESTROS VALORES</span></p>
            </div>
            <div class="row pb-3 ">
                <div class="col-lg-7 mb-4">
                    <div class="card border-0 mb-2">
                        <div class="card-body p-4">
                            <h4 class="">Disciplina</h4>
                            <p>En el Colegio Antonio Raymondi, nuestra misión es brindar una educación integral y de calidad, guiada por valores éticos y morales, que prepare a nuestros estudiantes para enfrentar los desafíos del siglo XXI y convertirse en ciudadanos responsables y comprometidos con su comunidad. Nos esforzamos por ofrecer un entorno de aprendizaje seguro, inclusivo y estimulante, donde cada estudiante sea valorado y respetado como individuo único.
                                <br><br>
                            </p>
                            <h4 class="">Respeto</h4>
                            <p>En el Colegio Antonio Raymondi, nuestra misión es brindar una educación integral y de calidad, guiada por valores éticos y morales, que prepare a nuestros estudiantes para enfrentar los desafíos del siglo XXI y convertirse en ciudadanos responsables y comprometidos con su comunidad. Nos esforzamos por ofrecer un entorno de aprendizaje seguro, inclusivo y estimulante, donde cada estudiante sea valorado y respetado como individuo único.
                                <br><br>
                            </p>
                            <h4 class="">Puntualidad</h4>
                            <p>En el Colegio Antonio Raymondi, nuestra misión es brindar una educación integral y de calidad, guiada por valores éticos y morales, que prepare a nuestros estudiantes para enfrentar los desafíos del siglo XXI y convertirse en ciudadanos responsables y comprometidos con su comunidad. Nos esforzamos por ofrecer un entorno de aprendizaje seguro, inclusivo y estimulante, donde cada estudiante sea valorado y respetado como individuo único.
                                <br><br>
                            </p>
                            <h4 class="">Responsabilidad</h4>
                            <p>En el Colegio Antonio Raymondi, nuestra misión es brindar una educación integral y de calidad, guiada por valores éticos y morales, que prepare a nuestros estudiantes para enfrentar los desafíos del siglo XXI y convertirse en ciudadanos responsables y comprometidos con su comunidad. Nos esforzamos por ofrecer un entorno de aprendizaje seguro, inclusivo y estimulante, donde cada estudiante sea valorado y respetado como individuo único.
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img src="img/disciplina.jpg" alt="">
                    </div>
                    <div class="card border-0 shadow-sm mb-2">
                        <img src="img/blog-2.jpg" alt="">
                    </div>
                    <div class="card border-0 shadow-sm mb-2">
                        <img src="img/class-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- FIN VALORES Y FORTALEZAS -->

    <!-- NUESTROS PRINCIPIOS -->

    <div class="container-fluid pt-5  bg-light shadow-sm">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="pr-2">NUESTROS PRINCIPIOS</span></p>
            </div>
            <div class="row pb-3 ">
                <div class="col-lg-7 mb-4">
                    <div class="card border-0 mb-2">
                        <div class="card-body p-4">
                            <h4 class="">Fe en Dios</h4>
                            <p>Reconocemos a Dios como el centro de nuestras vidas y la fuente de sabiduría y amor. Guiamos a nuestros estudiantes hacia una relación personal con Él, fomentando valores cristianos y promoviendo la importancia de vivir de acuerdo con principios bíblicos.
                                <br><br>
                            </p>
                            <h4 class="">Desarrollo integral</h4>
                            <p>Nos preocupamos por el crecimiento integral de nuestros estudiantes, fomentando su desarrollo físico, emocional, social y espiritual. Buscamos equilibrar el aprendizaje académico con actividades deportivas, artísticas, culturales y espirituales, brindando oportunidades para el desarrollo de habilidades y talentos diversos.
                                <br><br>
                            </p>
                            <h4 class="">Respeto y amor</h4>
                            <p>Cultivamos un ambiente de respeto mutuo, donde cada individuo es valorado y amado como hijo de Dios. Promovemos la tolerancia, la empatía y la compasión, alentando a nuestros estudiantes a tratar a los demás con amabilidad y a valorar la diversidad de pensamientos, culturas y creencias.
                                <br><br>
                            </p>
                            <h4 class="">Servicio a la comunidad</h4>
                            <p>Inspiramos a nuestros estudiantes a ser agentes de cambio positivo en la sociedad. Les enseñamos el valor del servicio y los alentamos a involucrarse en actividades de ayuda a los demás, promoviendo el amor al prójimo y la responsabilidad social.
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-4">
                    <br><br>
                    <div class="card border-0 shadow-sm mb-2">
                        <img src="img/respeto.jpg" alt="">
                    </div>
                    <br><br>
                    <div class="card border-0 shadow-sm mb-2">
                        <img src="img/desarrollo.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- FIN PRINCIPIOS -->


    <!-- Team Start -->
    <!-- <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Nuestro Equipo de Trabajo</span></p>
                <h1 class="mb-4">Seccion de personal Administrativo</h1>
            </div>
            <div class="row">
                <?php foreach ($listaLibros5 as $libro) { ?>
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                            <img class="card-img-top" src="administrador/seccion/img/<?php echo $libro['foto']; ?>" alt="" height="220px" width="100px">
                            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h4><?php echo $libro['nombre']; ?></h4>
                        <i><?php echo $libro['correo']; ?></i>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <?php

include "template/pie.php";

?>