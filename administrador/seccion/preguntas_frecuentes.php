<?php

session_start();
if (empty($_SESSION["id"])) {
  header("location:../admin.php");
}

include("template/cabecera.php");

?>

<?php

require "code/code_preguntas.php";

?>

<h2 class="text-center">PREGUNTAS FRECUENTES</h2>

<div class="container-fluid">
  <br>
  <div class="container">

    <form method="POST">

      <input type="hidden" name="txtID" value="<?php echo $txtID; ?>" placeholder="" id="txtID" require="">

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pregunta</label>
        <input type="text" class="form-control" value="<?php echo $txtPreguntas; ?>" name="txtPreguntas" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Respuesta</label>
        <input type="text" class="form-control" value="<?php echo $txtRespuesta; ?>" name="txtRespuesta" required>
      </div>

      <button value="btn1Agregar" <?php echo $accionAgregar; ?> type="submit" name="accion" class="btn btn-success">Agregar</button>
      <button value="btn2Modificar" <?php echo $accionModificar; ?> type="submit" name="accion" class="btn btn-warning">Modificar</button>
      <button value="btn3Eliminar" <?php echo $accionEliminar; ?> type="submit" name="accion" class="btn btn-danger" onclick="return ConfirmDelete()">Eliminar</button>
      <button value="btn4Cancelar" <?php echo $accionCancelar; ?> type="submit" name="accion" class="btn btn-primary">Cancelar</button>

      <br><br>

    </form>
    <br><br>
  </div>

  <table class="table table-striped table-bordered" id="tabla">
    <thead>
      <tr class="table-dark text-center">
        <th scope="col">ID</th>
        <th scope="col">Pregunta</th>
        <th scope="col">Respuesta</th>
        <th scope="col">Accion</th>
      </tr>
    </thead>
    <?php foreach ($listaEmpleados as $empleado) {  ?>
      <tr>
        <th scope="row"><?php echo $empleado['id']; ?></th>
        <td><?php echo $empleado['pregunta']; ?></td>
        <td><?php echo $empleado['respuesta']; ?></td>
        <td>
          <form action="" method="POST">
            <input type="hidden" name="txtID" value="<?php echo $empleado['id']; ?>">
            <button value="btn3Eliminar" type="submit" name="accion" class="btn btn-danger" onclick="return ConfirmDelete()"><i class="fa-sharp fa-solid fa-trash"></i></button>
            <button value="Seleccionar" type="submit" name="accion" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>

          </form>
        </td>
      </tr>
    <?php } ?>
  </table>

  <script>
    var tabla = document.querySelector("#tabla");

    var dataTable = new DataTable(tabla, {
        perPage:4,
            perPageSelect:[4, 8, 12,16],
            labels: {
            placeholder: "Buscar:",
            perPage: "{select} Registros por pagina",
            noRows: "Registro no Encontrado",
			info: "Mostrando registros del {start} al {end} de {rows} Registros"
		}
    });
</script>



  <?php include "template/pie.php"; ?>