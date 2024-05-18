<?php

    $txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtTitulo = (isset($_POST['txtTitulo']))?$_POST['txtTitulo']:"";
    $txtDescripcion = (isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";

    $accion = (isset($_POST['accion']))?$_POST['accion']:"";

    $error = array();

    $accionAgregar = "";
    $accionModificar = $accionEliminar = $accionCancelar = "disabled";
    $mostrarModal = false;

    include "../config/PDO.php";

    switch($accion){
        case "btn1Agregar":
            $sentencia = $conexion -> prepare("INSERT INTO talleres(titulo, descripcion) 
            VALUES (:titulo, :descripcion)");
            $sentencia->bindParam(':titulo', $txtTitulo);
            $sentencia->bindParam(':descripcion', $txtDescripcion);
            $sentencia->execute(); 
            
            header("Location: tallerActividad.php");

            break;

        case "btn2Modificar":

            $sentencia = $conexion -> prepare("UPDATE talleres SET 
            titulo=:titulo, 
            descripcion=:descripcion WHERE id=:id"); 
    
            $sentencia->bindParam(':titulo', $txtTitulo);
            $sentencia->bindParam(':descripcion', $txtDescripcion);
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute(); 
                
            header("Location: tallerActividad.php");
    
            break;
    
        case "btn3Eliminar":
    
            $sentencia = $conexion -> prepare("DELETE FROM talleres WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
    
            header("Location: tallerActividad.php");
    
            break;
            
        case "btn4Cancelar":
    
            header("Location: tallerActividad.php");
            break;
    
    
        case "Seleccionar":
            $accionAgregar = "disabled";
            $accionModificar = $accionEliminar = $accionCancelar = "";
            $mostrarModal = true;
    
            $sentencia = $conexion -> prepare("SELECT * FROM talleres WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

            $txtTitulo = $empleado['titulo'];
            $txtDescripcion = $empleado['descripcion'];
            break;
    }

    $sentencia = $conexion -> prepare("SELECT * FROM talleres");
    $sentencia -> execute();
    $listaEmpleados = $sentencia -> fetchAll(PDO::FETCH_ASSOC);


?>