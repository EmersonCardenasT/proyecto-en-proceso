<?php
include "../config/bd.php";

if (isset($_POST["guardar"])) {
   $nombrecompleto = $_POST['nombrecompleto'];
   $usuario = $_POST['usuario'];
   $telefono = $_POST['telefono'];
   $correo = $_POST['correo'];
   $contraseña = $_POST['contraseña'];
   $repContraseña = $_POST['repContraseña'];

   $sql = "INSERT INTO `registro_nuevo`(`id`, `nombreApellido`, `usuario`, `telefono`, `correo`, `contraseña`, `repContraseña`) 
   VALUES (NULL, '$nombrecompleto','$usuario','$telefono','$correo','$contraseña','$repContraseña')";

   $result = mysqli_query($conexion, $sql);


   if ($result) {
      header("Location: index.php?msg=Nuevo usuario creado satisfactioriamente.");
   } else {
      echo "Failed: " . mysqli_error($conexion);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Application</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      FORMULARIO DE REGISTROS
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Añadir nuevo usuario:</h3>
         <p class="text-muted">Completa el formulario para añadir nuevo registro.</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="add-new.php" method="POST" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Apellidos y nombres:</label>
                  <input type="text" class="form-control" name="nombrecompleto" placeholder="Nombres completos">
               </div>

               <div class="col">
                  <label class="form-label">Usuario:</label>
                  <input type="text" class="form-control" name="usuario" placeholder="usuario">
               </div>
            </div>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Telefono:</label>
                  <input type="text" class="form-control" name="telefono" placeholder="telefono">
               </div>

               <div class="col">
                  <label class="form-label">Contraseña:</label>
                  <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
               </div>
               <div class="col">
                  <label class="form-label">Confirmar Contraseña:</label>
                  <input type="password" class="form-control" name="repContraseña" placeholder="Confirmar Contraseña">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Correo:</label>
               <input type="email" class="form-control" name="correo" placeholder="usuario@example.com">
            </div>

            <!-- <div class="form-group mb-3">
               <label>Genero:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="masculino" id="masculino" value="masculino">
               <label for="male" class="form-input-label">Masculino</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="femenino" id="femenino" value="femenino">
               <label for="female" class="form-input-label">Femenino</label>
            </div> -->

            <div>
               <button type="submit" class="btn btn-success" name="guardar">Guardar</button>
               <a href="index.php" class="btn btn-danger">Cancelar</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>