<?php

    $txtID = !empty((isset($_POST['txtID'])))?$_POST['txtID']:"";
    $txtPreguntas = !empty((isset($_POST['txtPreguntas'])))?$_POST['txtPreguntas']:"";
    $txtRespuesta = !empty((isset($_POST['txtRespuesta'])))?$_POST['txtRespuesta']:"";

    $accion = (isset($_POST['accion']))?$_POST['accion']:"";

    $error = array();

    $accionAgregar = "";
    $accionModificar = $accionEliminar = $accionCancelar = "disabled";
    $mostrarModal = false;

    include "../CRUD2/conexion/conexion.php";

    switch($accion){
        case "btn1Agregar":
            $sentencia = $pdo -> prepare("INSERT INTO preguntas_frecuentes(pregunta, respuesta) 
            VALUES (:pregunta, :respuesta)");
            $sentencia->bindParam(':pregunta', $txtPreguntas);
            $sentencia->bindParam(':respuesta', $txtRespuesta);
            $sentencia->execute(); 
            
            header("Location: preguntas_frecuentes.php");

            break;

        case "btn2Modificar":

            $sentencia = $pdo -> prepare("UPDATE preguntas_frecuentes SET 
            pregunta=:pregunta, 
            respuesta=:respuesta WHERE id=:id"); 
    
            $sentencia->bindParam(':pregunta', $txtPreguntas);
            $sentencia->bindParam(':respuesta', $txtRespuesta);
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute(); 
                
            header("Location: preguntas_frecuentes.php");
    
            break;
    
        case "btn3Eliminar":
    
            $sentencia = $pdo -> prepare("DELETE FROM preguntas_frecuentes WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
    
            header("Location: preguntas_frecuentes.php");
    
            break;
            
        case "btn4Cancelar":
    
            header("Location: preguntas_frecuentes.php");
            break;
    
    
        case "Seleccionar":
            $accionAgregar = "disabled";
            $accionModificar = $accionEliminar = $accionCancelar = "";
            $mostrarModal = true;
    
            $sentencia = $pdo -> prepare("SELECT * FROM preguntas_frecuentes WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

            $txtPreguntas = $empleado['pregunta'];
            $txtRespuesta = $empleado['respuesta'];
            break;
    }

    $sentencia = $pdo -> prepare("SELECT * FROM preguntas_frecuentes");
    $sentencia -> execute();
    $listaEmpleados = $sentencia -> fetchAll(PDO::FETCH_ASSOC);


?>