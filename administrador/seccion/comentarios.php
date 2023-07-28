<?php

session_start();
    if(empty($_SESSION["id"])){
        header("location:../admin.php");   
    }

include("template/cabecera.php");

?>

<?php

    require "code/code_comentario.php";

?>


<body>

    <div class="container text-center">
        <h1>SECCION COMENTARIOS</h1>
        <br>
    <div class="row">
            <table class="table table-hover table-bordered light-table-filter table_id" id="tabla">
                <thead class="thead-dark">
                    <tr>
                        <th width="10%">Nombre</th>
                        <th width="20%">Profesion</th>
                        <th width="40%">Descripcion</th>
                        <th width="10%">Estado</th>
                        <th width="10%">Fecha</th>
                        <th width="10%">Accion</th>
                    </tr>
                </thead>
                <?php foreach ($listaEmpleados as $empleado) {  ?>
                    <tr>
                        <td><?php echo $empleado['nombre']; ?></td>
                        <td><?php echo $empleado['profesion']; ?></td>
                        <td><?php echo $empleado['descripcion']; ?></td>   
                        <td><?php echo $empleado['estado']; ?></td>                    
                        <td><?php echo $empleado['fecha']; ?></td>
                        <td>

                            <form action="" method="POST">
                                <input type="hidden" name="txtID" value="<?php echo $empleado['id']; ?>">
                                <button value="btn3Eliminar" type="submit" name="accion" class="btn btn-small btn-danger" 
                                onclick="return ConfirmDelete()"><i class="fa-sharp fa-solid fa-trash"></i></button>

                            </form>

                        </td>
                    </tr>
                <?php } ?>

            </table>
    </div>
    
</body>

<?php

include("template/pie.php");

?>