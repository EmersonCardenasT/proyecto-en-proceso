<?php

    require "../config/bd.php";

    if(isset($_POST['displaySend'])){
        $table = '<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Usuario</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>';

        $sql = "Select * from `registro_emanuel`";

        $resultado = mysqli_query($conexion, $sql);
        //Tambien puede ir con el ID, lo unico que hariamos
        //seroa no poner el "$number" y en td row seria '$id'
        $number = 1;
        while($row=mysqli_fetch_assoc($resultado)){
            $id = $row['id'];
            $usuario = $row['usuario'];
            $nombres = $row['nombres'];
            $apellidos = $row['apellidos'];
            $correo = $row['correo'];
            $contraseña = $row['contraseña'];
            $repContraseña = $row['repContraseña'];
            $table .= '<tr>
            <td scope="row">'.$number.'</td>
            <td>'.$usuario.'</td>
            <td>'.$nombres.'</td>
            <td>'.$apellidos.'</td>
            <td>'.$correo.'</td>
            <td>
                <button class="btn btn-dark" 
                onclick="GetDetails('.$id.')">Actualizar</button>
                <button class="btn btn-danger" 
                onclick="DeleteUser('.$id.')">Borrar</button>
            </td>
          </tr>'; 
          $number ++;
        }
        $table .= '</table>';
        echo $table;
    }

?>

