<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Ludiflex</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="login-box">
        <div class="login-header">
            <header style="font-size: 40px;">BIENVENIDO</header>
            <p>Seccion administracion</p>
        </div>
        <form action="" method="POST">
            <?php
            include "config/bd.php";
            include "controlador/controlador_admin.php";
            ?>

            <div class="input-box">
                <input type="text" class="input-field" id="email" autocomplete="off" name="usuario" required>
                <label for="email">Usuario</label>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" id="password" autocomplete="off" name="contrasenia" required>
                <label for="password">Contraseña</label>
            </div>

            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>

            <div class="forgot">
                <section>
                    <input type="checkbox" id="check">
                    <label for="check">Recordarme</label>
                </section>
            </div>

            <div class="input-box">
                <!-- <input type="submit" class="btn btn-outline-primary width-100" name="iniciarAdmin" value="Iniciar Admin"> -->

                <input type="submit" class="input-submit" name="iniciarAdmin" value="Iniciar">
            </div>
            <div class="middle-text">
                <hr>
                <p class="or-text">EMANUEL</p>
            </div>
            <div class="social-sign-in">
                <button class="input-google">
                    <img src="images/google.png" alt="">
                    <p>DE LA MANO DE DIOS</p>
                </button>
            </div>
            <div class="sign-up">
                <p>Volver a la pagina de inicio<a href="../index.php"> VOLVER</a></p>
            </div>
        </form>

    </div>
</body>

</html>

<!-- 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                    <h3 class="font-weight-bold text-light">¡Cada paso cuenta hacia un futuro Brillante!.</h3>
                    <p class="lead text-light">Solo unidos hacemos la diferencia.</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="text-center">I.E.P. EMANUEL</h1>
                    <h1 class="font-weight-bold text-center">Iniciar Sesion como Administrador</h1>
                    
                    <div class="form-group">

                        <a href=""><button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3">
                            <i class="icon ion-logo-whatsapp lead align-middle mr-2"></i>Whatsapp</button></a>
                        <a href="https://www.facebook.com/EstudiaYTriunfa" target="_blank"><button class="btn btn-outline-dark d-inline-block text-light mb-3">
                            <i class="icon ion-logo-facebook lead align-middle mr-2"></i>Facebook</button></a>

                    </div>

                    <p>Iniciar sesion como panel administrativo</p>

                    <form  method="POST" action="">
                        <div class="form-group mb-3">
                            <label class="font-weight-bold"> Usuario <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Ingresa tu correo" name="usuario">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Ingresa tu contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="contrasenia">
                        </div>

                        <?php
                        // include "config/bd.php";
                        // include "controlador/controlador_admin.php";
                        ?>

                        <input type="submit" class="btn btn-outline-primary width-100" name="iniciarAdmin" value="Iniciar Admin">
                        
                        <a href="../index.php" class="btn btn btn-outline-info width-100">Volver</a> 


                    </form>

                    <small class="d-inline-block text-muted mt-5"> © ECARDENAS TORRES | 2023 </small>

                </div>
            </div>
       </div>
        

   </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> -->