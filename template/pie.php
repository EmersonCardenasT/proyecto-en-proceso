 <!-- Footer Start -->
 <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
     <div class="row pt-5">
         <div class="col-lg-3 col-md-6 mb-5">
             <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                 <i class="flaticon-043-teddy-bear"></i>
                 <span class="text-white">I.E.P. EMANUEL</span>
             </a>
             <p>Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr stet diam duo eos rebum ipsum diam ipsum elitr.</p>
             <div class="d-flex justify-content-start mt-4">
                 <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                 <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                 <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
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
                 <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                 <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Acerca de Nosotros</a>
                 <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Nuestras Clases</a>
                 <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Nuestros Profesores</a>
                 <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Nuestro Blog</a>
                 <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contactenos</a>
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
             &copy; <a class="text-primary font-weight-bold" href="#">I.E.P. EMANUEL</a>. Reservados todos los derechos. Diseñado por
             <a class="text-primary font-weight-bold" href="https://htmlcodex.com">ECardenasT</a>
         </p>
     </div>
 </div>
 <!-- Footer End -->


 <!-- Back to Top -->
 <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
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
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
     AOS.init();
 </script>

 </body>

 </html>