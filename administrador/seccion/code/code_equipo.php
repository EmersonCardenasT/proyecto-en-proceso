<?php


    $txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtDNI = (isset($_POST['txtDNI']))?$_POST['txtDNI']:"";
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $txtApellidos = (isset($_POST['txtApellidos']))?$_POST['txtApellidos']:"";
    $txtTelefono = (isset($_POST['txtTelefono']))?$_POST['txtTelefono']:"";
    $txtCorreo = (isset($_POST['txtCorreo']))?$_POST['txtCorreo']:"";
    $txtEspecialidad = (isset($_POST['txtEspecialidad']))?$_POST['txtEspecialidad']:"";
    $txtFoto = (isset($_FILES['txtFoto']["name"]))?$_FILES['txtFoto']["name"]:"";

    $accion = (isset($_POST['accion']))?$_POST['accion']:"";

    $error = array();

    $accionAgregar = "";
    $accionModificar = $accionEliminar = $accionCancelar = "disabled";
    $mostrarModal = false;

    include "../CRUD2/conexion/conexion.php";

    switch($accion){
        case "btn1Agregar":

            if($txtNombre == ""){
                $error['nombre'] = "Escribe el nombre";
            }

            if($txtNombre == ""){
                $error['DNI'] = "Escribe el DNI";
            }

            if($txtNombre == ""){
                $error['apellidos'] = "Escribe los apellidos";
            }

            if($txtNombre == ""){
                $error['correo'] = "Escribe el correo";
            }

            if(count($error) > 0){
                $mostrarModal = true;
                break;
            }

            $sentencia = $pdo -> prepare("INSERT INTO equipo(DNI, nombre, apellidos, telefono, correo, especialidad, foto) 
            VALUES (:DNI, :nombre, :apellidos, :telefono, :correo, :especialidad, :foto)");

            $sentencia->bindParam(':DNI', $txtDNI);
            $sentencia->bindParam(':nombre', $txtNombre);
            $sentencia->bindParam(':apellidos', $txtApellidos);
            $sentencia->bindParam(':telefono', $txtTelefono);
            $sentencia->bindParam(':correo', $txtCorreo);
            $sentencia->bindParam(':especialidad', $txtEspecialidad);

            $Fecha = new DateTime();
            $nombreArchivo = ($txtFoto != "")?$Fecha -> getTimestamp()."_".$_FILES['txtFoto']['name']:"imagen.jpg";

            $tmpFoto = $_FILES["txtFoto"]['tmp_name'];

            if($tmpFoto != ""){
                move_uploaded_file($tmpFoto, "img/".$nombreArchivo);

            }

            $sentencia->bindParam(':foto', $nombreArchivo);
            $sentencia->execute();

            header("Location: equipoTrabajo.php");

        break;

        case "btn2Modificar":

            $sentencia = $pdo -> prepare("UPDATE equipo SET 
            DNI=:DNI, 
            nombre=:nombre, 
            apellidos=:apellidos, 
            telefono=:telefono, 
            correo=:correo, 
            especialidad=:especialidad  WHERE id=:id"); 

            $sentencia->bindParam(':DNI', $txtDNI);
            $sentencia->bindParam(':nombre', $txtNombre);
            $sentencia->bindParam(':apellidos', $txtApellidos);
            $sentencia->bindParam(':telefono', $txtTelefono);
            $sentencia->bindParam(':correo', $txtCorreo);
            $sentencia->bindParam(':especialidad', $txtEspecialidad);
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute(); 


            $Fecha = new DateTime();
            $nombreArchivo = ($txtFoto != "")?$Fecha -> getTimestamp()."_".$_FILES['txtFoto']['name']:"imagen.jpg";

            $tmpFoto = $_FILES["txtFoto"]['tmp_name'];

            if($tmpFoto != ""){
                move_uploaded_file($tmpFoto, "img/".$nombreArchivo);

                $sentencia = $pdo -> prepare("SELECT foto FROM equipo WHERE id=:id"); 
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

                $sentencia = $pdo -> prepare("UPDATE equipo SET 
                foto=:foto WHERE id=:id"); 
                $sentencia->bindParam(':foto', $nombreArchivo);
                $sentencia->bindParam(':id', $txtID);
                $sentencia->execute();

            }
            
            header("Location: equipoTrabajo.php");

            break;
    
        case "btn3Eliminar":

            $sentencia = $pdo -> prepare("SELECT foto FROM equipo WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

            if(isset($empleado["foto"]) && ($item['foto'] != "imagen.jpg")){
                if(file_exists("img/".$empleado["foto"])){
                    unlink("img/".$empleado["foto"]);

                }
            }

            $sentencia = $pdo -> prepare("DELETE FROM equipo WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();

            header("Location: equipoTrabajo.php");

            break;
        
        case "btn4Cancelar":

            header("Location: equipoTrabajo.php");
            break;

    
        case "Seleccionar":
            $accionAgregar = "disabled";
            $accionModificar = $accionEliminar = $accionCancelar = "";
            $mostrarModal = true;

            $sentencia = $pdo -> prepare("SELECT * FROM equipo WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

            $txtDNI = $empleado['DNI'];
            $txtNombre = $empleado['nombre'];
            $txtApellidos = $empleado['apellidos'];
            $txtTelefono = $empleado['telefono'];
            $txtCorreo = $empleado['correo'];
            $txtEspecialidad = $empleado['especialidad'];
            $txtFoto = $empleado['foto'];
    
            break;
            
        }

        $sentencia = $pdo -> prepare("SELECT * FROM equipo");
        $sentencia -> execute();
        $listaEmpleados = $sentencia -> fetchAll(PDO::FETCH_ASSOC);


?>