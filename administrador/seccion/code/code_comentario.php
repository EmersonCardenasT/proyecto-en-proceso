<?php

    //Obtenemos lo datos del formulario de comentarios...
    $txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $txtProfesion = (isset($_POST['txtProfesion']))?$_POST['txtProfesion']:"";
    $txtComentario = (isset($_POST['txtComentario']))?$_POST['txtComentario']:"";

    $accion = (isset($_POST['accion']))?$_POST['accion']:"";

    include "../CRUD2/conexion/conexion.php";

    switch ($accion){
        
        case 'comentar':
            $sentencia = $pdo -> prepare("INSERT INTO comentarios(nombre, profesion, descripcion, estado) 
            VALUES (:nombre, :profesion, :descripcion, 0)");

            $sentencia -> bindParam(':nombre', $txtNombre);
            $sentencia -> bindParam(':profesion', $txtProfesion);
            $sentencia -> bindParam(':descripcion', $txtComentario);
            $sentencia -> execute();

            echo '<script>
            alert("Comentado correctamente...");
            window.open("../../../index.php", "_self");
            </script>';

            break;

        case 'btn3Eliminar':
            $sentencia = $pdo -> prepare("DELETE FROM comentarios WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
    
            header("Location: comentarios.php");
    
            break;
    }

$sentencia = $pdo -> prepare("SELECT * FROM comentarios");
$sentencia -> execute();
$listaEmpleados = $sentencia -> fetchAll(PDO::FETCH_ASSOC);

?>