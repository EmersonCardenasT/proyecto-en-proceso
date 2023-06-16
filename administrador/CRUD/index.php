<?php
    require "profesores.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</head>
<body>

    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
        <br><br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Agregar Registro + 
        </button>
        <br><br>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro de usuarios</h5>
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <!-- El echo $txtID hace que la informacion no se pierda al momento de presionar los botones -->
                            <input type="hidden" required name="txtID" value="<?php echo $txtID; ?>" placeholder="" id="txtID" require=""> 
                            <br>

                            <div class="form-group col-md-6">
                                <label for="">DNI</label>
                                <input type="text" class="form-control" <?php echo (isset($error['DNI']))?"is-invalid":""; ?> name="txtDNI" value="<?php echo $txtDNI; ?>" placeholder="" id="txtDNI" require=""> 
                                <div class="invalid-feedback">
                                    <?php echo (isset($error['DNI']))?$error['DNI']:""; ?>
                                </div>
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Nombres</label>
                                <input type="text" class="form-control" <?php echo (isset($error['nombre']))?"is-invalid":""; ?> name="txtNombre" value="<?php echo $txtNombre; ?>" placeholder="" id="txtNombre" require=""> 
                                <div class="invalid-feedback">
                                    <?php echo (isset($error['nombre']))?$error['nombre']:""; ?>
                                </div>

                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Apellidos</label>
                                <input type="text" class="form-control" <?php echo (isset($error['apellidos']))?"is-invalid":""; ?> name="txtApellidos" value="<?php echo $txtApellidos; ?>" placeholder="" id="txtApellidos" require=""> 
                                <div class="invalid-feedback">
                                    <?php echo (isset($error['apellidos']))?$error['apellidos']:""; ?>
                                </div>
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Telefono</label>
                                <input type="text" class="form-control" <?php echo (isset($error['telefono']))?"is-invalid":""; ?> name="txtTelefono" value="<?php echo $txtTelefono; ?>" placeholder="" id="txtTelefono" require=""> 
                                <div class="invalid-feedback">
                                    <?php echo (isset($error['telefono']))?$error['telefono']:""; ?>
                                </div>

                            </div>

                            <label for="">Correo</label>
                            <input type="email" class="form-control" <?php echo (isset($error['correo']))?"is-invalid":""; ?> name="txtCorreo" value="<?php echo $txtCorreo; ?>" placeholder="" id="txtCorreo" require=""> 
                            <div class="invalid-feedback">
                                <?php echo (isset($error['correo']))?$error['correo']:""; ?>
                            </div>

                            
                            <label for="">Especialidad</label>
                            <input type="text" class="form-control" <?php echo (isset($error['curso']))?"is-invalid":""; ?> name="txtEspecialidad" value="<?php echo $txtEspecialidad; ?>" placeholder="" id="txtEspecialidad" require=""> 
                            <div class="invalid-feedback">
                                <?php echo (isset($error['curso']))?$error['curso']:""; ?>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Contraseña</label>
                                <input type="password" class="form-control" <?php echo (isset($error['contrasenia']))?"is-invalid":""; ?> name="txtContraseña" placeholder="" value="<?php echo $txtContraseña; ?>" id="txtContraseña" require=""> 
                                <div class="invalid-feedback">
                                <?php echo (isset($error['contrasenia']))?$error['contrasenia']:""; ?>
                                </div>

                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Confirmar contraseña</label>
                                <input type="password" class="form-control"  <?php echo (isset($error['confirmarContrasenia']))?"is-invalid":""; ?> name="txtConfirmarContraseña" placeholder="" value="<?php echo $txtConfirmarContraseña; ?>" id="txtConfirmarContraseña" require=""> 
                                <div class="invalid-feedback">
                                    <?php echo (isset($error['confirmarContrasenia']))?$error['confirmarContrasenia']:""; ?>
                                </div>

                            </div>

                            
                            <label for="">Foto</label>
                            <input type="file" class="form-control" accept="image/*" name="txtFoto" placeholder="" value="<?php echo $txtFoto; ?>" id="txtFoto" require=""> 
                            <br>
                            <?php if($txtFoto != "") {?>
                                <img src="img/<?php echo $txtFoto; ?>" alt="" class="img-thumbnail rounded mx-auto d-block" width="100px">
                            <?php } ?>
                            <br>
                            <br>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button value="btn1Agregar" <?php echo $accionAgregar; ?> type="submit" name="accion" class="btn btn-success">Agregar</button>
                        <button value="btn2Modificar" <?php echo $accionModificar; ?> type="submit" name="accion" class="btn btn-warning">Modificar</button>
                        <button value="btn3Eliminar" <?php echo $accionEliminar; ?> onclick="return Confirmar('¿Realmente deseas borrar?');" type="submit" name="accion" class="btn btn-danger">Eliminar</button>
                        <button value="btn4Cancelar" <?php echo $accionCancelar; ?> type="submit" name="accion" class="btn btn-primary">Cancelar</button>
                        
                    </div>
                </div>
            </div>
        </div>

            

        </form>

        <div class="row">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Especialidad</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <?php foreach($listaEmpleados as $empleado){  ?>

                        <tr>
                            <td><?php echo $empleado['DNI']; ?></td>
                            <td><?php echo $empleado['nombre']; ?></td>
                            <td><?php echo $empleado['apellidos']; ?></td>
                            <td><?php echo $empleado['telefono']; ?></td>
                            <td><?php echo $empleado['correo']; ?></td>
                            <td><?php echo $empleado['curso']; ?></td>
                            <td><img class="img-thumbnail" width="100px" src="img/<?php echo $empleado['foto']; ?>"></td>
                            <td>
                                
                                <form action="" method="POST">

                                    <input type="hidden" name="txtID" value="<?php echo $empleado['id']; ?>">

                                    <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                                    <button value="btn3Eliminar" onclick="return Confirmar('¿Realmente deseas borrar?');" type="submit" name="accion" class="btn btn-danger">Eliminar</button>

                                </form>
                        
                            </td>
                        </tr>

                <?php } ?>

            </table>
        </div>

        <?php if($mostrarModal){?>

            <script>
                $('#exampleModal').modal('show');
            </script>

        <?php } ?>

        <!-- <script>
            function Confirmar(Mensaje){
                return (confirm(Mensaje))?true:false;
            }
        </script> -->
        <?php require "function/mensaje.php"; ?>

    </div>

    <script src="function/validar_registro.js"></script>
    
</body>
</html>