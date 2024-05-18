<?php

    if(!empty($_POST['btnmodificar'])){
        if(!empty($_POST['title']) and !empty($_POST['primerparrafo']) and !empty($_POST['subtitle']) and !empty($_POST['segundoparrafo']) and
        !empty($_POST['tercersubtitle']) and !empty($_POST['tercerparrafo'])){

            $title = $_POST['title'];
            $primerparrafo = $_POST['primerparrafo'];
            $subtitle = $_POST['subtitle'];
            $segundoparrafo = $_POST['segundoparrafo'];
            $tercersubtitle = $_POST['tercersubtitle'];
            $tercerparrafo = $_POST['tercerparrafo'];

            $sql = $conexion -> query("UPDATE tb_inicial SET title='$title', primer_parrafo='$primerparrafo', sub_title='$subtitle',
            segundo_parrafo='$segundoparrafo', Tercersub_title='$tercersubtitle', tercer_parrafo='$tercerparrafo'");

            if ($sql == true) { ?>
                
                <script>
                    alert("Modificado correctamente");
                </script>

            <?php } else { ?>
                <script>
                    alert("Error al modificar");
                </script>
            <?php }
            

        }else{ ?>
            
            <script>
                alert("No puede dejar campos vacios");
            </script>

        <?php } ?>

        <script>
            setTimeout(() => {
                window.history.replaceState(null, null, window.location.pathname);
            }, 0);
        </script>

    <?php }

?>