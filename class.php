<?php

include "template/cabecera.php";

?>

<?php
include("administrador/config/PDO.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM clases_populares");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


$sentenciaSQL = $conexion->prepare("SELECT * FROM talleres");
$sentenciaSQL->execute();
$listaLibros2 = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);



?>


<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Aprovecha al maximo tus vacaciones</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="index.php">Inicio</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Nuestras clases</p>
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
            <?php foreach ($listaLibros2 as $libro) { ?>
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


<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Clases populares</span></p>
            <h1 class="mb-4">Clases de verano</h1>
        </div>
        <div class="row">
            <?php foreach ($listaLibros as $libro) { ?>
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
            <div class="col-lg-7 mb-5 mb-lg-0" id="reserva">
                <p class="section-title pr-5"><span class="pr-2">CLASES POPULARES - RESERVAR TU LUGAR</span></p>
                <h1 class="mb-4">Reserve un asiento para su hijo</h1>
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                <ul class="list-inline m-0">
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Compromiso con la educacion.</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Supervicion en todo momento, seguridad para tus hijos.</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Aprendizaje constante.</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Tambien puedes comunicarte con nosotros 999 222 888.</li>
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
                                <input type="text" class="form-control border-0 p-4" placeholder="Su nombre" required="required" name="nombre" />
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


<?php

include "template/pie.php";

?>