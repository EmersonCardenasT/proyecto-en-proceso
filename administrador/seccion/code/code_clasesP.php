<?php

    $txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtFoto = (isset($_FILES['txtFoto']["name"]))?$_FILES['txtFoto']["name"]:"";
    $txtTitulo = (isset($_POST['txtTitulo']))?$_POST['txtTitulo']:"";
    $txtDescripcion = (isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
    $txtEdad = (isset($_POST['txtEdad']))?$_POST['txtEdad']:"";
    $txtSesiones = (isset($_POST['txtSesiones']))?$_POST['txtSesiones']:"";
    $txtHorario = (isset($_POST['txtHorario']))?$_POST['txtHorario']:"";
    $txtCosto = (isset($_POST['txtCosto']))?$_POST['txtCosto']:"";

    $accion = (isset($_POST['accion']))?$_POST['accion']:"";

    $error = array();

    $accionAgregar = "";
    $accionModificar = $accionEliminar = $accionCancelar = "disabled";
    $mostrarModal = false;

    include "../config/PDO.php";

    switch($accion){
        case "btn1Agregar":

            $sentencia = $conexion -> prepare("INSERT INTO clases_populares(foto, titulo, descripcion, edad, sesiones, horario, costo) 
            VALUES (:foto, :titulo, :descripcion, :edad, :sesiones, :horario, :costo)");

            $Fecha = new DateTime();
            $nombreArchivo = ($txtFoto != "")?$Fecha -> getTimestamp()."_".$_FILES['txtFoto']['name']:"imagen.jpg";

            $tmpFoto = $_FILES["txtFoto"]['tmp_name'];

            if($tmpFoto != ""){
                move_uploaded_file($tmpFoto, "img/".$nombreArchivo);

            }

            $sentencia->bindParam(':foto', $nombreArchivo);
            $sentencia->bindParam(':titulo', $txtTitulo);
            $sentencia->bindParam(':descripcion', $txtDescripcion);
            $sentencia->bindParam(':edad', $txtEdad);
            $sentencia->bindParam(':sesiones', $txtSesiones);
            $sentencia->bindParam(':horario', $txtHorario);
            $sentencia->bindParam(':costo', $txtCosto);
            $sentencia->execute(); 
            
            header("Location: clases_populares.php");

            break;

        case "btn2Modificar":

            $sentencia = $conexion -> prepare("UPDATE clases_populares SET 
            titulo=:titulo, 
            descripcion=:descripcion, 
            edad=:edad, 
            sesiones=:sesiones, 
            horario=:horario, 
            costo=:costo WHERE id=:id"); 

            $sentencia->bindParam(':titulo', $txtTitulo);
            $sentencia->bindParam(':descripcion', $txtDescripcion);
            $sentencia->bindParam(':edad', $txtEdad);
            $sentencia->bindParam(':sesiones', $txtSesiones);
            $sentencia->bindParam(':horario', $txtHorario);
            $sentencia->bindParam(':costo', $txtCosto);
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute(); 


            $Fecha = new DateTime();
            $nombreArchivo = ($txtFoto != "")?$Fecha -> getTimestamp()."_".$_FILES['txtFoto']['name']:"imagen.jpg";

            $tmpFoto = $_FILES["txtFoto"]['tmp_name'];

            if($tmpFoto != ""){
                move_uploaded_file($tmpFoto, "img/".$nombreArchivo);

                $sentencia = $conexion -> prepare("SELECT foto FROM clases_populares WHERE id=:id"); 
                $sentencia->bindParam(':id', $txtID);
                $sentencia->execute();

                $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

                if(isset($empleado["foto"])){
                    if(file_exists("img/".$empleado["foto"])){

                        if($empleado['foto'] != "imagen.jpg"){
                            unlink("img/".$empleado["foto"]);
                        }

                    }
                }

                $sentencia = $conexion -> prepare("UPDATE clases_populares SET 
                foto=:foto WHERE id=:id"); 
                $sentencia->bindParam(':foto', $nombreArchivo);
                $sentencia->bindParam(':id', $txtID);
                $sentencia->execute();

            }
            
            header("Location: clases_populares.php");

            break;

        case "btn3Eliminar":

            $sentencia = $conexion -> prepare("SELECT foto FROM clases_populares WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

            if(isset($item['foto']) && $item['foto'] != "imagen.jpg"){
                if(file_exists("img/".$empleado["foto"])){
                    unlink("img/".$empleado["foto"]);

                }
            }

            $sentencia = $conexion -> prepare("DELETE FROM clases_populares WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();

            header("Location: clases_populares.php");

            break;
        
        case "btn4Cancelar":

            header("Location: clases_populares.php");
            break;


        case "Seleccionar":
            $accionAgregar = "disabled";
            $accionModificar = $accionEliminar = $accionCancelar = "";
            $mostrarModal = true;

            $sentencia = $conexion -> prepare("SELECT * FROM clases_populares WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

            $txtFoto = $empleado['foto'];
            $txtTitulo = $empleado['titulo'];
            $txtDescripcion = $empleado['descripcion'];
            $txtEdad = $empleado['edad'];
            $txtSesiones = $empleado['sesiones'];
            $txtHorario = $empleado['horario'];
            $txtCosto = $empleado['costo'];

            break;
            
        }

        $sentencia = $conexion -> prepare("SELECT * FROM clases_populares");
        $sentencia -> execute();
        $listaEmpleados = $sentencia -> fetchAll(PDO::FETCH_ASSOC);

?>