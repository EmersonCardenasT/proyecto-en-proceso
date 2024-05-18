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