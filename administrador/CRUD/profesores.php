<?php

    //include ("function/contrasenia.php");

    $txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtDNI = (isset($_POST['txtDNI']))?$_POST['txtDNI']:"";
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $txtApellidos = (isset($_POST['txtApellidos']))?$_POST['txtApellidos']:"";
    $txtTelefono = (isset($_POST['txtTelefono']))?$_POST['txtTelefono']:"";
    $txtCorreo = (isset($_POST['txtCorreo']))?$_POST['txtCorreo']:"";
    $txtEspecialidad = (isset($_POST['txtEspecialidad']))?$_POST['txtEspecialidad']:"";
    $txtFoto = (isset($_FILES['txtFoto']["name"]))?$_FILES['txtFoto']["name"]:"";
    $txtContraseña = (isset($_POST['txtContraseña']))?$_POST['txtContraseña']:"";
    $txtConfirmarContraseña = (isset($_POST['txtConfirmarContraseña']))?$_POST['txtConfirmarContraseña']:"";

    $accion = (isset($_POST['accion']))?$_POST['accion']:"";

    $error = array();

    // if(contrasenasIguales($txtContraseña, $txtConfirmarContraseña)){
    //     echo "Contraseñas correctas";
    // }else{
    //     $error[] = "Las contraseñas no cincidieron";
    // }
 
    include "Conexion/conexion.php";

    $accionAgregar = "";
    $accionModificar = $accionEliminar = $accionCancelar = "disabled";
    $mostrarModal = false;

    switch($accion){
        case "btn1Agregar":

            if($txtDNI == ""){
                $error['DNI'] = "Ingrese su DNI";
            }
            if($txtNombre == ""){
                $error['nombre'] = "Ingresa el nombre";
            }
            if($txtApellidos == ""){
                $error['apellidos'] = "Ingrese sus apellidos";
            }
            if($txtTelefono == ""){
                $error['telefono'] = "Ingrese su telefono";
            }
            if(!filter_var($txtCorreo, FILTER_VALIDATE_EMAIL)){
              $error['correo'] = "Correo electronico invalido";  
            }
            if($txtEspecialidad == ""){
                $error['curso'] = "Ingrese su especialidad o curso";
            }
            if($txtContraseña == ""){
                $error['contrasenia'] = "Campo contraseña requerido";
            }
            if($txtConfirmarContraseña == ""){
                $error['confirmarContrasenia'] = "Campo contraseña requerido";
            }

            if(count($error) > 0){
                $mostrarModal = true;
                break;
            }

            $sentencia = $pdo -> prepare("INSERT INTO registro_profesores(DNI, nombre, apellidos, telefono, correo, curso, foto, contrasenia, confirmarContrasenia) 
            VALUES (:DNI, :nombre, :apellidos, :telefono, :correo, :curso, :foto, :contrasenia, :confirmarContrasenia)");

            $sentencia->bindParam(':DNI', $txtDNI);
            $sentencia->bindParam(':nombre', $txtNombre);
            $sentencia->bindParam(':apellidos', $txtApellidos);
            $sentencia->bindParam(':telefono', $txtTelefono);
            $sentencia->bindParam(':correo', $txtCorreo);
            $sentencia->bindParam(':curso', $txtEspecialidad);

            $Fecha = new DateTime();
            $nombreArchivo = ($txtFoto != "")?$Fecha -> getTimestamp()."_".$_FILES['txtFoto']['name']:"imagen.jpg";

            $tmpFoto = $_FILES["txtFoto"]['tmp_name'];

            if($tmpFoto != ""){
                move_uploaded_file($tmpFoto, "img/".$nombreArchivo);

            }

            $sentencia->bindParam(':foto', $nombreArchivo);
            $sentencia->bindParam(':contrasenia', $txtContraseña);
            $sentencia->bindParam(':confirmarContrasenia', $txtConfirmarContraseña);
            $sentencia->execute();

            
            header("Location: index.php");

            break;

        case "btn2Modificar":

            $sentencia = $pdo -> prepare("UPDATE registro_profesores SET 
            DNI=:DNI, 
            nombre=:nombre, 
            apellidos=:apellidos, 
            telefono=:telefono, 
            correo=:correo, 
            curso=:curso, 
            contrasenia=:contrasenia, 
            confirmarContrasenia=:confirmarContrasenia WHERE id=:id"); 

            $sentencia->bindParam(':DNI', $txtDNI);
            $sentencia->bindParam(':nombre', $txtNombre);
            $sentencia->bindParam(':apellidos', $txtApellidos);
            $sentencia->bindParam(':telefono', $txtTelefono);
            $sentencia->bindParam(':correo', $txtCorreo);
            $sentencia->bindParam(':curso', $txtEspecialidad);
            $sentencia->bindParam(':contrasenia', $txtContraseña);
            $sentencia->bindParam(':confirmarContrasenia', $txtConfirmarContraseña);
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute(); 


            $Fecha = new DateTime();
            $nombreArchivo = ($txtFoto != "")?$Fecha -> getTimestamp()."_".$_FILES['txtFoto']['name']:"imagen.jpg";

            $tmpFoto = $_FILES["txtFoto"]['tmp_name'];

            if($tmpFoto != ""){
                move_uploaded_file($tmpFoto, "img/".$nombreArchivo);

                $sentencia = $pdo -> prepare("SELECT foto FROM registro_profesores WHERE id=:id"); 
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

                $sentencia = $pdo -> prepare("UPDATE registro_profesores SET 
                foto=:foto WHERE id=:id"); 
                $sentencia->bindParam(':foto', $nombreArchivo);
                $sentencia->bindParam(':id', $txtID);
                $sentencia->execute();

            }
            
            header("Location: index.php");

            break;

        case "btn3Eliminar":

            $sentencia = $pdo -> prepare("SELECT foto FROM registro_profesores WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

            if(isset($empleado["foto"]) && ($item['foto'] != "imagen.jpg")){
                if(file_exists("img/".$empleado["foto"])){
                    unlink("img/".$empleado["foto"]);

                }
            }

            $sentencia = $pdo -> prepare("DELETE FROM registro_profesores WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();

            header("Location: index.php");

            break;
    
        case "btn4Cancelar":

            header("Location: index.php");

            break;

        case "Seleccionar":
            $accionAgregar = "disabled";
            $accionModificar = $accionEliminar = $accionCancelar = "";
            $mostrarModal = true;

            $sentencia = $pdo -> prepare("SELECT * FROM registro_profesores WHERE id=:id"); 
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia -> fetch(PDO::FETCH_LAZY);

            $txtDNI = $empleado['DNI'];
            $txtNombre = $empleado['nombre'];
            $txtApellidos = $empleado['apellidos'];
            $txtTelefono = $empleado['telefono'];
            $txtCorreo = $empleado['correo'];
            $txtEspecialidad = $empleado['curso'];
            $txtFoto = $empleado['foto'];
            $txtContraseña = $empleado['contrasenia'];
            $txtConfirmarContraseña = $empleado['confirmarContrasenia'];


            break;
        
    }

    $sentencia = $pdo -> prepare("SELECT * FROM registro_profesores");
    $sentencia -> execute();
    $listaEmpleados = $sentencia -> fetchAll(PDO::FETCH_ASSOC);


?>