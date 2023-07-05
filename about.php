<?php

include "template/cabecera.php";

?>

<?php
include("administrador/config/PDO.php");


$sentenciaSQL = $conexion->prepare("SELECT * FROM equipo");
$sentenciaSQL->execute();
$listaLibros5 = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);



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





<!-- NUESTRA HISTORIA -->
<div class="container py-5">
    <div class="row pt-5">
        <div class="col-lg-12">
            <div class="d-flex flex-column text-left mb-3">
                <p class="section-title pr-5 text-center"><span class="pr-2">Nuestra historia</span></p>
            </div>
            <div class="mb-12">
                <h1 class="mb-12 text-center">Conoce el camino que recorremos</h1>
                <p>La historia del Colegio Emanuel se remonta al año 1985, cuando un grupo de educadores visionarios y comprometidos decidió fundar una institución educativa que ofreciera una educación integral y de calidad a los niños y jóvenes de la comunidad.
                    Con el objetivo de brindar una formación académica sólida y al mismo tiempo promover valores éticos y humanos, el Colegio Emanuel abrió sus puertas en una pequeña sede con apenas unos pocos salones de clases. Desde el principio, se enfocó en desarrollar un ambiente de aprendizaje inclusivo y estimulante, donde cada estudiante pudiera alcanzar su máximo potencial.
                    A lo largo de los años, el Colegio Emanuel ha experimentado un crecimiento significativo. Debido a la creciente demanda de matrícula y el reconocimiento de su excelencia académica, se han construido nuevas instalaciones y se ha ampliado la oferta educativa. Hoy en día, el colegio cuenta con aulas espaciosas y bien equipadas, laboratorios de ciencias, biblioteca, áreas deportivas y recreativas, y todas las comodidades necesarias para el desarrollo integral de los estudiantes.
                    <br><br>El Colegio Emanuel se ha destacado por su compromiso con la formación integral de sus alumnos. Además de brindar una educación académica de calidad, se promueve el desarrollo de habilidades socioemocionales, el fomento de la creatividad, el pensamiento crítico y el respeto por la diversidad. Se fomenta la participación activa de los padres y se establece una estrecha colaboración entre la comunidad educativa.
                    A lo largo de su historia, el Colegio Emanuel ha formado a generaciones de estudiantes exitosos y comprometidos con su comunidad. Sus egresados han destacado tanto en el ámbito académico como en el profesional, siendo reconocidos por su ética de trabajo, liderazgo y responsabilidad social.
                    El Colegio Emanuel continúa su compromiso de brindar una educación de calidad, adaptándose a los cambios y desafíos del mundo actual, y preparando a sus estudiantes para que sean ciudadanos conscientes, comprometidos y capaces de enfrentar los retos del futuro.
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
                        <p>En el Colegio Emanuel, nuestra misión es brindar una educación integral y de calidad, guiada por valores éticos y morales, que prepare a nuestros estudiantes para enfrentar los desafíos del siglo XXI y convertirse en ciudadanos responsables y comprometidos con su comunidad. Nos esforzamos por ofrecer un entorno de aprendizaje seguro, inclusivo y estimulante, donde cada estudiante sea valorado y respetado como individuo único.
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
                        <p>En el Colegio Emanuel, aspiramos a ser una institución educativa líder y reconocida a nivel local y nacional. Nos proponemos ser un referente de excelencia académica, donde nuestros estudiantes alcancen los más altos estándares de logro académico y se destaquen por su pensamiento crítico, su capacidad de resolución de problemas y su creatividad.
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
                        <p>En el Colegio Emanuel, nuestra misión es brindar una educación integral y de calidad, guiada por valores éticos y morales, que prepare a nuestros estudiantes para enfrentar los desafíos del siglo XXI y convertirse en ciudadanos responsables y comprometidos con su comunidad. Nos esforzamos por ofrecer un entorno de aprendizaje seguro, inclusivo y estimulante, donde cada estudiante sea valorado y respetado como individuo único.
                            <br><br>
                        </p>
                        <h4 class="">Respeto</h4>
                        <p>En el Colegio Emanuel, nuestra misión es brindar una educación integral y de calidad, guiada por valores éticos y morales, que prepare a nuestros estudiantes para enfrentar los desafíos del siglo XXI y convertirse en ciudadanos responsables y comprometidos con su comunidad. Nos esforzamos por ofrecer un entorno de aprendizaje seguro, inclusivo y estimulante, donde cada estudiante sea valorado y respetado como individuo único.
                            <br><br>
                        </p>
                        <h4 class="">Puntualidad</h4>
                        <p>En el Colegio Emanuel, nuestra misión es brindar una educación integral y de calidad, guiada por valores éticos y morales, que prepare a nuestros estudiantes para enfrentar los desafíos del siglo XXI y convertirse en ciudadanos responsables y comprometidos con su comunidad. Nos esforzamos por ofrecer un entorno de aprendizaje seguro, inclusivo y estimulante, donde cada estudiante sea valorado y respetado como individuo único.
                            <br><br>
                        </p>
                        <h4 class="">Responsabilidad</h4>
                        <p>En el Colegio Emanuel, nuestra misión es brindar una educación integral y de calidad, guiada por valores éticos y morales, que prepare a nuestros estudiantes para enfrentar los desafíos del siglo XXI y convertirse en ciudadanos responsables y comprometidos con su comunidad. Nos esforzamos por ofrecer un entorno de aprendizaje seguro, inclusivo y estimulante, donde cada estudiante sea valorado y respetado como individuo único.
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
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Nuestro Equipo de Trabajo</span></p>
            <h1 class="mb-4">Seccion de personal Administrativo</h1>
        </div>
        <div class="row">
            <?php foreach ($listaLibros5 as $libro) { ?>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="administrador/seccion/img/<?php echo $libro['foto']; ?>" alt="">
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
</div>
<!-- Team End -->






<?php

include "template/pie.php";

?>