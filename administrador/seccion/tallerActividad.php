<?php

include("../template/cabecera.php");

?>

<?php

require "code/code_taller.php";

?>


<body>
    <div class="container-fluid">
        <hr>
        <h2 class="text-center">Agregar Talleres al inicio</h2>
        <!-- <hr>
        <form action="" class="d-flex">
            <br>
            <input type="text" class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar...">
            <br>
        </form> -->
        <br>
    </div>

    <br>
    <div class="container col-5">

        <form method="POST">

            <input type="hidden" name="txtID" value="<?php echo $txtID; ?>" placeholder="" id="txtID" require="">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">TITULO</label>
                <input type="text" class="form-control" value="<?php echo $txtTitulo; ?>" name="txtTitulo" required>
                <div id="emailHelp" class="form-text">Actividades a realizar.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">DESCRIPCION</label>
                <input type="text" class="form-control" value="<?php echo $txtDescripcion; ?>" name="txtDescripcion" required>
            </div>

            <button value="btn1Agregar" <?php echo $accionAgregar; ?> type="submit" name="accion" class="btn btn-success">Agregar</button>
            <button value="btn2Modificar" <?php echo $accionModificar; ?> type="submit" name="accion" class="btn btn-warning">Modificar</button>
            <button value="btn3Eliminar" <?php echo $accionEliminar; ?> type="submit" name="accion" class="btn btn-danger">Eliminar</button>
            <button value="btn4Cancelar" <?php echo $accionCancelar; ?> type="submit" name="accion" class="btn btn-primary">Cancelar</button>

            <br><br><br>
            <div id="emailHelp" class="form-text">Este es el lugar a rellenar. -></div>
            <br>

        </form>
        <br><br>
    </div>

    <div class="container col-7">
        <img src="../../img/Captura.PNG" alt="" width="670px" height="400px">
    </div>

    <!-- <div class="container-fluid">
        <br><br>
        <form action="" class="d-flex">
            <br>
            <input type="text" class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar...">
            <br>
        </form>
        <br><br>
    </div> -->

    <table class="table table-striped table-hover table_id" id="tabla">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>

        <?php foreach ($listaEmpleados as $empleado) {  ?>
            <tr>
                <th scope="row"><?php echo $empleado['id']; ?></th>
                <td><?php echo $empleado['titulo']; ?></td>
                <td><?php echo $empleado['descripcion']; ?></td>
                <td>
                    <form action="" method="POST">
                        <input type="hidden" name="txtID" value="<?php echo $empleado['id']; ?>">
                        <button value="btn3Eliminar" type="submit" name="accion" class="btn btn-danger">Borrar</button>
                        <input type="submit" value="Seleccionar" name="accion" class="btn btn-primary">
                    </form>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

<script>
    var tabla = document.querySelector("#tabla");

    var dataTable = new DataTable(tabla,{
        perPage:4,
        perPageSelect:[4,8,12,16]
    });
</script>

<?php

include("../template/pie.php");

?>