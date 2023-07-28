<div id="formulario-container" class="oculto">
    <div id="screen">
        <div id="header">ManuBoot
            <img src="img/icono.png" alt="Imagen" id="profiles-image">
        </div>
        <div id="messageDisplaySection">
            <!-- bot messages -->
            <!-- <div class="chat botMessages">Hello there, how can I help you?</div> -->

            <!-- usersMessages -->
            <!-- <div id="messagesContainer">
          <div class="chat usersMessages">I need your help to build a website.</div>
      </div> -->
        </div>
        <!-- messages input field -->
        <div id="userInput">
            <input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Escribe tu mensaje aquí."
                required>
            <input type="submit" value="Send" id="send" name="send">
        </div>
    </div>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Jquery Start -->
<script>
    $(document).ready(function () {
        $("#messages").on("keyup", function () {
            if ($("#messages").val()) {
                $("#send").css("display", "block");
            } else {
                $("#send").css("display", "none");
            }
        });
    });

    // when send button clicked
    $("#send").on("click", function (e) {
        $userMessage = $("#messages").val();
        $appendUserMessage = '<div class="chat usersMessages">' + $userMessage + '</div>';
        $("#messageDisplaySection").append($appendUserMessage);

        // ajax start
        $.ajax({
            url: "bot.php",
            type: "POST",
            // sending data
            data: { messageValue: $userMessage },
            // response text
            success: function (data) {
                // show response
                $appendBotResponse = '<div id="messagesContainer"><div class="chat botMessages">' + data + '</div></div>';
                $("#messageDisplaySection").append($appendBotResponse);
            }
        });

        $("#messages").val("");
        $("#send").css("display", "none");
    });
</script>

<a href="#" id="boton-flotante" onclick="return false;">🤖</a>


<script src="js/formulario.js"></script>
<!-- Blog End -->
 
 <!-- Footer Start -->
 <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
     <div class="row pt-5">
         <div class="col-lg-3 col-md-6 mb-5">
             <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                 <i class="flaticon-043-teddy-bear"></i>
                 <span class="text-white">I.E.P. EMANUEL</span>
             </a>
             <p>En cada paso que damos, en cada esfuerzo que invertimos, nos acercamos más a nuestro potencial ilimitado. Somos los arquitectos de nuestro propio éxito, construyendo un futuro brillante con cada decisión que tomamos. ¡Creemos en nosotros mismos y alcancemos las estrellas!.</p>
             <div class="d-flex justify-content-start mt-4">
                 <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-whatsapp"></i></a>
                 <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.facebook.com/EstudiaYTriunfa" Target="_blank"><i class="fab fa-facebook-f"></i></a>
                 <!-- <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>-->
                 <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a> 
             </div>
         </div>
         <div class="col-lg-3 col-md-6 mb-5">
             <h3 class="text-primary mb-4">Ponerse en contacto</h3>
             <div class="d-flex">
                 <h4 class="fa fa-map-marker-alt text-primary"></h4>
                 <div class="pl-3">
                     <h5 class="text-white">Direccion</h5>
                     <p>SN - Pichanaki - Junin</p>
                 </div>
             </div>
             <div class="d-flex">
                 <h4 class="fa fa-envelope text-primary"></h4>
                 <div class="pl-3">
                     <h5 class="text-white">Correo electronico</h5>
                     <p>info@example.com</p>
                 </div>
             </div>
             <div class="d-flex">
                 <h4 class="fa fa-phone-alt text-primary"></h4>
                 <div class="pl-3">
                     <h5 class="text-white">Telefono</h5>
                     <p>+51 999 123 987</p>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 mb-5">
             <h3 class="text-primary mb-4">Enlaces rapidos</h3>
             <div class="d-flex flex-column justify-content-start">
                 <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                 <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>Acerca de Nosotros</a>
                 <a class="text-white mb-2" href="class.php"><i class="fa fa-angle-right mr-2"></i>Nuestras Clases</a>
                 <a class="text-white mb-2" href="team.php"><i class="fa fa-angle-right mr-2"></i>Nuestros Profesores</a>
                 <a class="text-white mb-2" href="gallery.php"><i class="fa fa-angle-right mr-2"></i>Seccion galeria</a>
                 <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contactenos</a>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 mb-5">
             <h3 class="text-primary mb-4">Boletin informativo</h3>
             <form action="enviar_correo/boletinInfor.php" method="POST" >
                 <div class="form-group">
                     <input type="text" class="form-control border-0 py-4" placeholder="Su nombre" required="required" name="nombre"/>
                 </div>
                 <div class="form-group">
                     <input type="email" class="form-control border-0 py-4" placeholder="Tu correo electronico" required="required" name="correo"/>
                 </div>
                 <div>
                    <input type="submit" class="btn btn-primary btn-block border-0 py-3" name="enviar" value="Enviar ahora">
                     <!-- <button class="btn btn-primary btn-block border-0 py-3" type="submit">Enviar ahora</button> -->
                 </div>
             </form>
         </div>
     </div>
     <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
         <p class="m-0 text-center text-white">
         2023 &copy; <a class="text-primary font-weight-bold" href="https://www.facebook.com/EstudiaYTriunfa" Target="_blank">colegioCristianoEmanuel.edu.pe</a>.
              | Realizado: <a class="text-primary font-weight-bold" href="https://www.facebook.com/profile.php?id=100008643588266" Target="_blank"> Emerson Cardenas Torres</a>
         </p>
     </div>
 </div>
 <!-- Footer End -->


 <!-- Back to Top -->
 <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
 <script src="lib/easing/easing.min.js"></script>
 <script src="lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="lib/isotope/isotope.pkgd.min.js"></script>
 <!-- <script src="lib/lightbox/js/lightbox.min.js"></script> -->

 <!-- Contact Javascript File -->
 <script src="mail/jqBootstrapValidation.min.js"></script>
 <script src="mail/contact.js"></script>

 <!-- Template Javascript -->
 <script src="js/main.js"></script>
 <script src="js/codigo.js"></script>


 </body>

 </html>