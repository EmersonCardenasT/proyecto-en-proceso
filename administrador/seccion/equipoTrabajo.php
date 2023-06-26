<?php

include("../template/cabecera.php");

?>

<?php
require "code/code_equipo.php";
?>

<h2>AGREGA FOTOS A LA SECCION DE PERSONAL ADMINISTRATIVO</h2>

<div class="container">

    <!-- <div class="container-fluid">
        <form action="" class="d-flex">
            <br>
            <input type="text" class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar...">
            <br>
        </form>
    </div> -->
    <br>
    <form action="" method="POST" enctype="multipart/form-data">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Agregar Equipo de Trabajo
        </button>

        <!-- <a href="../controlador/controlador_cerrar_sesion.php" class="btn btn-success">CERRAR SESION</a>
        <br><br> -->

        <br><br>

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

                            <div class="form-group col-md-6">
                                <label for="">DNI</label>
                                <input type="text" class="form-control" name="txtDNI" value="<?php echo $txtDNI; ?>" placeholder="" id="txtDNI">


                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Nombres</label>
                                <input type="text" class="form-control" name="txtNombre" value="<?php echo $txtNombre; ?>" placeholder="" id="txtNombre" require="">


                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Apellidos</label>
                                <input type="text" class="form-control" name="txtApellidos" value="<?php echo $txtApellidos; ?>" placeholder="" id="txtApellidos" require="">


                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Telefono</label>
                                <input type="text" class="form-control" name="txtTelefono" value="<?php echo $txtTelefono; ?>" placeholder="" id="txtTelefono" require="">


                            </div>

                            <label for="">Correo</label>
                            <input type="email" class="form-control" name="txtCorreo" value="<?php echo $txtCorreo; ?>" placeholder="" id="txtCorreo" require="">


                            <label for="">Especialidad</label>
                            <input type="text" class="form-control" name="txtEspecialidad" value="<?php echo $txtEspecialidad; ?>" placeholder="" id="txtEspecialidad" require="">


                            <label for="">Foto</label>
                            <input type="file" class="form-control" accept="image/*" value="<?php echo $txtFoto; ?>" name="txtFoto" placeholder="" id="txtFoto" require="">

                            <br>
                            <?php if ($txtFoto != "") { ?>
                                <img src="img/<?php echo $txtFoto; ?>" alt="" class="img-thumbnail rounded mx-auto d-block" width="100px">
                            <?php } ?>
                            <br>
                            <br>


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
        <table class="table table-hover table-bordered light-table-filter table_id" id="tabla">
            <thead class="thead-dark">
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Cargo</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <?php foreach ($listaEmpleados as $empleado) {  ?>
                <tr>
                    <td><?php echo $empleado['DNI']; ?></td>
                    <td><?php echo $empleado['nombre']; ?></td>
                    <td><?php echo $empleado['apellidos']; ?></td>
                    <td><?php echo $empleado['telefono']; ?></td>
                    <td><?php echo $empleado['correo']; ?></td>
                    <td><?php echo $empleado['especialidad']; ?></td>
                    <td><img class="img-thumbnail" width="100px" src="img/<?php echo $empleado['foto']; ?>"></td>
                    <td>

                        <form action="" method="POST">
                            <input type="hidden" name="txtID" value="<?php echo $empleado['id']; ?>">
                            <button value="btn3Eliminar" type="submit" name="accion" class="btn btn-danger">Eliminar</button>
                            <input type="submit" value="Seleccionar" name="accion" class="btn btn-primary">
                        </form>

                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>

    <?php if ($mostrarModal) { ?>
        <script>
            $('#exampleModal').modal('show');
        </script>
    <?php } ?>

    <script>
        var tabla = document.querySelector("#tabla");

        var dataTable = new DataTable(tabla, {
            perPage: 4,
            perPageSelect: [4, 8, 12, 16]
        });
    </script>

    <?php

    include("../template/pie.php");

    ?>