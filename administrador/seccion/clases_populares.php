<?php

    include("../template/cabecera.php"); 

?>

<?php

    require "code/code_clasesP.php";

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
    <br><br>
    <div class="container-fluid">
            <form action="" class="d-flex">
                <br>
                <input type="text" class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar...">
                <br>
            </form>
        </div>
    <br>
        <form action="" method="POST" enctype="multipart/form-data">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Agregar curso Especial
        </button>
        <br><br>
        <!-- <a href="../controlador/controlador_cerrar_sesion.php" class="btn btn-success">CERRAR SESION</a>
        <br><br> -->

        

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Empleado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        
                        <input type="hidden" name="txtID" value="<?php echo $txtID; ?>" placeholder="" id="txtID" require=""> 
                            <br>

                            <label for="">Foto</label>
                            <input type="file" class="form-control" accept="image/*" value="<?php echo $txtFoto; ?>" name="txtFoto" placeholder="Foto" id="txtFoto" require=""> 
                            <br>
                            <br>
                            <?php if($txtFoto != "") {?>
                                <img src="img/<?php echo $txtFoto; ?>" alt="" class="img-thumbnail rounded mx-auto d-block" width="100px">
                            <?php } ?>
                            <br>

                            <div class="form-group col-md-6">
                                <label for="">Titulo</label>
                                <input type="text" class="form-control" name="txtTitulo" value="<?php echo $txtTitulo; ?>" placeholder="Titulo" id="txtTitulo" > 
                                
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Descripcion</label>
                                <input type="text" class="form-control"  name="txtDescripcion" value="<?php echo $txtDescripcion; ?>" placeholder="" id="txtDescripcion" require=""> 
                                

                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Edad</label>
                                <input type="text" class="form-control"  name="txtEdad" value="<?php echo $txtEdad; ?>" placeholder="" id="txtEdad" require=""> 
                                
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Sesiones</label>
                                <input type="text" class="form-control" name="txtSesiones" value="<?php echo $txtSesiones; ?>" placeholder="" id="txtSesiones" require=""> 
                            

                            </div>

                            <label for="">Horario</label>
                            <input type="text" class="form-control" name="txtHorario" value="<?php echo $txtHorario; ?>" placeholder="" id="txtHorario" require=""> 
                            
                            
                            <label for="">Costo</label>
                            <input type="text" class="form-control" name="txtCosto" value="<?php echo $txtCosto; ?>" placeholder="" id="txtCosto" require=""> 

                            <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    
                    <button value="btn1Agregar" <?php echo $accionAgregar; ?> type="submit" name="accion" class="btn btn-success">Agregar</button>
                    <button value="btn2Modificar" <?php echo $accionModificar; ?> type="submit" name="accion" class="btn btn-warning">Modificar</button>
                    <button value="btn3Eliminar" <?php echo $accionEliminar; ?> type="submit" name="accion" class="btn btn-danger">Eliminar</button>
                    <button value="btn4Cancelar" <?php echo $accionCancelar; ?> type="submit" name="accion" class="btn btn-primary">Cancelar</button>
                </div>
                </div>
            </div>
        </div>
                            

                            
        
        </form>

        <div class="row">
            <table class="table table-hover table-bordered light-table-filter table_id">
                <thead class="thead-dark">
                    <tr>
                        <th>Imagen</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Edad</th>
                        <th>Sesiones</th>
                        <th>Horario</th>
                        <th>Costo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <?php foreach($listaEmpleados as $empleado){  ?>
                        <tr>
                            <td><img class="img-thumbnail" width="100px" src="img/<?php echo $empleado['foto']; ?>"></td>
                            <td><?php echo $empleado['titulo']; ?></td>
                            <td><?php echo $empleado['descripcion']; ?></td>
                            <td><?php echo $empleado['edad']; ?></td>
                            <td><?php echo $empleado['sesiones']; ?></td>
                            <td><?php echo $empleado['horario']; ?></td>
                            <td><?php echo $empleado['costo']; ?></td>
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="txtID" value="<?php echo $empleado['id']; ?>">
                                    <button value="btn3Eliminar"  type="submit" name="accion" class="btn btn-danger">Eliminar</button>
                                    <input type="submit" value="Seleccionar" name="accion">
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

    </div>

    <script src="js/buscador.js"></script>

</body>
</html>