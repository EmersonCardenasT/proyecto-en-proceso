<?php

    include "../config/bd.php";

    if(isset($_POST['deletesend'])){
        $unique = $_POST['deletesend'];

        $sql = "delete from `registro_emanuel` where id=$unique";
        
        $resultado = mysqli_query($conexion, $sql);
    }

?>