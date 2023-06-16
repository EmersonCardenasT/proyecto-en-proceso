<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">

    <title>Administrador</title>
  </head>
  <body>
   <section class="">

       <div class="row no-gutters bg-dark">
            <div class="col-xl-5 col-lg-12 register-bg">
                <div class="position-absolute testiomonial p-4">
                    <h3 class="font-weight-bold text-light">La siguiente revolución digital.</h3>
                    <p class="lead text-light">La nueva etapa de la revolución digital se aproxima.</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold">Iniciar Sesion como Administrador</h1>
                    
                    <div class="form-group">

                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3">
                            <i class="icon ion-logo-google lead align-middle mr-2"></i>Google</button>
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3">
                            <i class="icon ion-logo-facebook lead align-middle mr-2"></i>Facebook</button>

                    </div>

                    <p>Para poder registrar a un nuevo usuario primero se debe iniciar como Administrador</p>

                    <form  method="POST" action="">
                        <div class="form-group mb-3">
                            <label class="font-weight-bold"> DNI <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Ingresa tu correo" name="DNI">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Ingresa tu contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="password">
                        </div>

                        <?php
                            include "config/bd.php";
                            include "controlador/controlador_admin.php";
                        ?>

                        <input type="submit" class="btn btn-outline-primary width-100" name="iniciarAdmin" value="Iniciar Admin">
                        
                        <a href="login.php" class="btn btn btn-outline-info width-100">Volver</a> 
                        <!-- <a href="CRUD/index.php" class="btn btn btn-outline-info width-100">CRUD</a>  -->


                    </form>

                    <small class="d-inline-block text-muted mt-5"> © ECARDENAS TORRES | 2023 </small>

                </div>
            </div>
       </div>
        

   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>