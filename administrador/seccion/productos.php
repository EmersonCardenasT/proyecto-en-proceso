<?php

session_start();
    if(empty($_SESSION["id"])){
        header("location:../admin.php");   
    }

include("template/cabecera.php");

?>

<?php

$txtId = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

/* echo $txtId."<br>";
    echo $txtNombre."<br>";
    echo $txtImagen."<br>";
    echo $accion."<br>"; */

include("../config/PDO.php");

switch ($accion) {
    case "Agregar":

        //INSERT INTO `imagenes` (`id`, `nombre`, `imagen`) VALUES (NULL, 'php', 'imagen.jpg');
        $sentenciaSQL = $conexion->prepare("INSERT INTO imagenes (nombre, imagen) VALUES (:nombre, :imagen);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);

        $fecha = new DateTime();
        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";

        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

        if ($tmpImagen != "") {
            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);
        }

        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
        $sentenciaSQL->execute();

        header("Location:productos.php");

        break;

    case 'Modificar':
        $sentenciaSQL = $conexion->prepare("UPDATE imagenes SET nombre=:nombre WHERE id=:id");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':id', $txtId);
        $sentenciaSQL->execute();

        if ($txtImagen != "") {

            $fecha = new DateTime();
            $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
            $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);

            $sentenciaSQL = $conexion->prepare("SELECT imagen FROM imagenes WHERE id=:id");
            $sentenciaSQL->bindParam(':id', $txtId);
            $sentenciaSQL->execute();
            $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if (isset($libro["imagen"]) && ($libro["imagen"] != "imagen.jpg")) {

                if (file_exists("../../img/" . $libro["imagen"])) {

                    unlink("../../img/" . $libro["imagen"]);
                }
            }

            $sentenciaSQL = $conexion->prepare("UPDATE imagenes SET imagen=:imagen WHERE id=:id");
            $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
            $sentenciaSQL->bindParam(':id', $txtId);
            $sentenciaSQL->execute();
        }
        header("Location:productos.php");
        break;

    case 'Cancelar':
        header("Location:productos.php");
        break;

    case 'Seleccionar':
        $sentenciaSQL = $conexion->prepare("SELECT * FROM imagenes WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtId);
        $sentenciaSQL->execute();
        $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre = $libro['nombre'];
        $txtImagen = $libro['imagen'];
        //echo "Presionad boton Seleccionar";
        break;

    case 'Borrar':
        $sentenciaSQL = $conexion->prepare("SELECT imagen FROM imagenes WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtId);
        $sentenciaSQL->execute();
        $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if (isset($libro["imagen"]) && ($libro["imagen"] != "imagen.jpg")) {

            if (file_exists("../../img/" . $libro["imagen"])) {

                unlink("../../img/" . $libro["imagen"]);
            }
        }

        $sentenciaSQL = $conexion->prepare("DELETE FROM imagenes WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtId);
        $sentenciaSQL->execute();
        header("Location:productos.php");
        break;

    default:
        # code...
        break;
}

$sentenciaSQL = $conexion->prepare("SELECT * FROM imagenes");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="container-fluid">
    <h2 class="text-center">AGREGAR FOTOS A LA SECCION DE GALERIA GALERIA</h2>
</div>
<br><br><br>
<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Fotos del colegio
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtID">ID: </label>
                    <input type="text" required readonly class="form-control" value="<?php echo $txtId; ?>" id="txtID" name="txtID" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre: </label>
                    <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" id="txtNombre" name="txtNombre" placeholder="Nombre de la imagen">
                </div>

                <div class="form-group">
                    <label for="txtImagen">Imagen:</label>

                    <br />

                    <?php if ($txtImagen != "") { ?>

                        <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen; ?>" width="80" alt="">

                    <?php } ?>


                    <input type="file" class="form-control" id="txtImagen" name="txtImagen" placeholder="Imagen">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>
            </form>

        </div>
    </div>

</div>

<div class="col-md-7">

    <table class="table table-bordered" id="tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($listaLibros as $libro) { ?>

                <tr>
                    <td><?php echo $libro['id']; ?></td>
                    <td><?php echo $libro['nombre']; ?></td>
                    <td>

                        <img class="img-thumbnail rounded" src="../../img/<?php echo $libro['imagen']; ?>" width="80" alt="">


                    </td>
                    <td>
                        <form method="POST">

                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro['id']; ?>">
<!-- 
                            <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary">
                            <input type="submit" name="accion" value="Borrar" class="btn btn-danger"> -->

                            <button value="Borrar" type="submit" name="accion" class="btn btn-danger" onclick="return ConfirmDelete()"><i class="fa-sharp fa-solid fa-trash"></i></button>
                            <button value="Seleccionar" type="submit" name="accion" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>


                        </form>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

</div>

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

<?php

include("template/pie.php");

?>