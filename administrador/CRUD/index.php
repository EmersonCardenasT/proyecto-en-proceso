<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO USUARIOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
</head>
<body>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST">
                <div class="form-group">
                    <label for="completeusuario" class="form-label">Usuario: </label>
                    <input type="text" class="form-control" id="completeusuario" name="usuario" placeholder="Cree un usuario">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="completenombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="completenombres" name="nombres" placeholder="Ingrese nombre">
                </div>
                <div class="form-group">
                    <label for="completeapellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="completeapellidos" name="apellidos"  placeholder="Ingrese sus apellidos">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="completeemail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="completeemail" name="email" placeholder="Ingrese email">
                </div>
                <div class="form-group">
                    <label for="completecontraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="completecontraseña" name="contraseña" placeholder="Ingrese su contraseña">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="completerepContraseña" class="form-label">Confirme su contraseña</label>
                    <input type="password" class="form-control" id="completerepContraseña" name="repContraseña" placeholder="Confirme contraseña">
                </div>
                <div class="modal-footer" class="form-label">
                <button type="button" class="btn btn-dark" data-dismiss="modal" >Close</button>
                <button type="button" class="btn btn-danger" value="" onclick="adduser()">Save changes</button>
                </div>
            </form>
        </div>
        
        </div>
    </div>
    </div>

    <!-- Actualizar modal -->

    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST">
                <div class="form-group">
                    <label for="updateusuario" class="form-label">Usuario: </label>
                    <input type="text" class="form-control" id="updateusuario" placeholder="Cree un usuario">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="updatenombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="updatenombres" placeholder="Ingrese nombre">
                </div>
                <div class="form-group">
                    <label for="updateapellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="updateapellidos"  placeholder="Ingrese sus apellidos">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="updateemail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="updateemail"  placeholder="Ingrese email">
                </div>
                <div class="form-group">
                    <label for="updatecontraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="updatecontraseña" placeholder="Ingrese su contraseña">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="updaterepContraseña" class="form-label">Confirme su contraseña</label>
                    <input type="password" class="form-control" id="updaterepContraseña" placeholder="Confirme contraseña">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal" >Cancelar</button>
                <button type="button" class="btn btn-danger">Actualizar</button>
                <input type="hidden" id="hiddendata">
                </div>
            </form>
        </div>
        
        </div>
    </div>
    </div>

    <div class="container my-3">
        <h1 class="text-center">REGISTRO IEP EMANUEL</h1>
        <button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#completeModal">Añadir nuevo usuario</button>
        <div id="displayDataTable"></div>
    </div>

    <!--Boostrap-->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <script>

        $(document).ready(function(){
            displayData();
        });

        //display function
        function displayData(){
            var displayData = "true";
            $.ajax({
                url:"display.php",
                type:"post",
                data:{
                    displaySend:displayData
                },
                success:function(data, status){
                    $('#displayDataTable').html(data);
                }
            });
        }

        function adduser(){
            var usuarioAdd = $('#completeusuario').val()
            var nombresAdd = $('#completenombres').val()
            var apellidosAdd = $('#completeapellidos').val()
            var emailAdd = $('#completeemail').val()
            var contraseñaAdd = $('#completecontraseña').val()
            var repContraseñaAdd = $('#completerepContraseña').val()

            $.ajax({
                url: "insert.php",
                type: "post",
                data:{
                    usuarioSend:usuarioAdd,
                    nombresSend:nombresAdd,
                    apellidosSend:apellidosAdd,
                    emailSend:emailAdd,
                    contraseñaSend:contraseñaAdd,
                    repContraseñaSend:repContraseñaAdd
                },
                success:function(data, status){
                    //function to display data:
                    //console.log(status);
                    displayData();
                }

            })

        }

        //BORRAR REGISTRO
        function DeleteUser(deleteid){
            $.ajax({
                url:"delete.php",
                type:"post",
                data:{
                    deletesend:deleteid
                },
                success:function(data, status){
                    displayData();
                }
            });
        }

        //ACTUALIZAR REGISTRO
        function GetDetails(updateid){

            $("#hiddendata").val(updateid);

            $.post("update.php", {updateid:updateid}, function(data, 
            status){
                var userid = JSON.parse(data);
                $("#updateusuario").val(userid.usuario);
                $("#updatenombres").val(userid.nombres);
                $("#updateapellidos").val(userid.apellidos);
                $("#updateemail").val(userid.correo);
                $("#updatecontraseña").val(userid.contraseña);
                $("#updaterepContraseña").val(userid.repContraseña);
            });

            $("#updateModal").modal("show");
    
        }

    </script>

</body>
</html>