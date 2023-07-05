<?php

    $txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtFoto = (isset($_FILES['txtFoto']["name"]))?$_FILES['txtFoto']["name"]:"";
    $txtTitulo = (isset($_POST['txtTitulo']))?$_POST['txtTitulo']:"";
    $txtDescripcion = (isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";

    $accion = (isset($_POST['accion']))?$_POST['accion']:"";

    $error = array();

    $accionAgregar = "";
    $accionModificar = $accionEliminar = $accionCancelar = "disabled";
    $mostrarModal = false;

    include "../CRUD2/conexion/conexion.php";

    switch($accion){
        case "btn1Agregar":

            $sentencia = $pdo -> prepare("INSERT INTO blog(foto, titulo, descripcion) 
            VALUES (:foto, :titulo, :descripcion)");

            $Fecha = new DateTime();
            $nombreArchivo = ($txtFoto != "")?$Fecha -> getTimestamp()."_".$_FILES['txtFoto']['name']:"imagen.jpg";

            $tmpFoto = $_FILES["txtFoto"]['tmp_name'];

            if($tmpFoto != ""){
                move_uploaded_file($tmpFoto, "img/".$nombreArchivo);

            }

            $sentencia->bindParam(':foto', $nombreArchivo);
            $sentencia->bindParam(':titulo', $txtTitulo);
            $sentencia->bindParam(':descripcion', $txtDescripcion);
            $sentencia->execute(); 

            echo '<script>
                alert("Registro realizado correctamente");
                location.href ="blog.php";
                </script>';
                
            break;

        case "btn2Modificar":

            $sentencia = $pdo -> prepare("UPDATE blog SET 
            titulo=:titulo, 
            descripcion=:descripcion WHERE id=:id"); 

            $sentencia->bindParam(':titulo', $txtTitulo);
            $sentencia->bindParam(':descripcion', $txtDescripcion);
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute(); 


            $Fecha = new DateTime();
            $nombreArchivo = ($txtFoto != "")?$Fecha -> getTimestamp()."_".$_FILES['txtFoto']['name']:"imagen.jpg";

            $tmpFoto = $_FILES["txtFoto"]['tmp_name'];

            if($tmpFoto != ""){
                move_uploaded_file($tmpFoto, "img/".$nombreArchivo);

                $sentencia = $pdo -> prepare("SELECT foto FROM blog WHERE id=:id"); 
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

                $sentencia = $pdo -> prepare("UPDATE blog SET 
                foto=:foto WHERE id=:id"); 
                $sentencia->bindParam(':foto', $nombreArchivo);
                $sentencia->bindParam(':id', $txtID);
                $sentencia->execute();

            }
            
            header("Location: blog.php");

            break;

        case "btn3Eliminar":

            $sentencia = $pdo -> prepare("SELECT foto FROM  blog WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

            if(isset($empleado["foto"]) && ($item['foto'] != "imagen.jpg")){
                if(file_exists("img/".$empleado["foto"])){
                    unlink("img/".$empleado["foto"]);

                }
            }

            $sentencia = $pdo -> prepare("DELETE FROM blog WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();

            header("Location: blog.php");

            break;
        
        case "btn4Cancelar":

            header("Location: blog.php");
            break;


        case "Seleccionar":
            $accionAgregar = "disabled";
            $accionModificar = $accionEliminar = $accionCancelar = "";
            $mostrarModal = true;

            $sentencia = $pdo -> prepare("SELECT * FROM blog WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

            $txtFoto = $empleado['foto'];
            $txtTitulo = $empleado['titulo'];
            $txtDescripcion = $empleado['descripcion'];

            break;
            
        }

        $sentencia = $pdo -> prepare("SELECT * FROM blog");
        $sentencia -> execute();
        $listaEmpleados = $sentencia -> fetchAll(PDO::FETCH_ASSOC);

        