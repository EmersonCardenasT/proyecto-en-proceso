<?php

    include "template/cabecera.php";

?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Contaca con nosotros</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.php">Inicio</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Contacatanos</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Cada vez mas cerca</span></p>
                <h1 class="mb-4">Rellena el formulario</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>

                        <form name="sentMessage" id="contactForm" novalidate="novalidate" method="POST" action="enviar_correo/enviarCorreo.php">
                            <div class="control-group">
                                <input type="text" class="form-control" name="nombre" placeholder="Tu nombre" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" name="correo" placeholder="Tu correo" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="asunto" placeholder="Asunto" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="6" name="mensaje" placeholder="Telefono y mensaje" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary py-2 px-4" id="sendMessageButton" value="Enviar mensaje">
                            </div>
                        </form>
                        
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <p>Labore sea amet kasd diam justo amet ut vero justo. Ipsum ut et kasd duo sit, ipsum sea et erat est dolore, magna ipsum et magna elitr. Accusam accusam lorem magna, eos et sed eirmod dolor est eirmod eirmod amet.</p>
                    <div class="d-flex">
                        <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Direccion</h5>
                            <p>188 SN Pichanaki - Chanchamyo</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Correo</h5>
                            <p>emanuel@example.edu.pe</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Telefono</h5>
                            <p>+51 900 231 421</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Horarios de atencion</h5>
                            <strong>Lunes - Viernes:</strong>
                            <p class="m-0">08:00 AM - 05:00 PM </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<?php

    include "template/pie.php";

?>