<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Añadir profesores -->
    <div class="modal fade" id="profesorAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="saveStudent">
                    <div class="modal-body">

                        <div class="alert alert-warning d-none"></div>

                        <div class="mb-3">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Telefono</label>
                            <input type="text" name="telefono" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Correo</label>
                            <input type="email" name="correo" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Especialidad</label>
                            <input type="text" name="especialidad" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Contraseña</label>
                            <input type="password" name="contraseña" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">confirmarContraseña</label>
                            <input type="password" name="confirmarContraseña" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Actualizar profesores -->
    <div class="modal fade" id="profesorEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualiar Datos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateStudent">
                    <div class="modal-body">

                        <div class="alert alert-warning d-none"></div>

                        <input type="text" name="student_id" id="student_id">

                        <div class="mb-3">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Telefono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control">
                        </div>
                        <div class="mb-3">
                         <div class="mb-3">                            <label for="">Especialidad</label>
                            <input type="text" name="especialidad" id="especialidad" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Contraseña</label>
                            <input type="password" name="contraseña" id="contraseña" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">confirmarContraseña</label>
                            <input type="password" name="confirmarContraseña" id="confirmarContraseña" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Actualizar changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>REGISTRO DE PROFESORES</h4>
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#profesorAddModal">
                            Añadir profesor
                            </button>
                    </div>
                    <div class="card-body">

                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Especialidad</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                require 'dbcon.php';

                                $query = "SELECT * FROM registroprofesores";
                                $query_run = mysqli_query($conexion, $query);

                                if(mysqli_num_rows($query_run) > 0){

                                    foreach($query_run as $student){

                                        ?>
                                            <tr>
                                                <td><?= $student['id'] ?></td>
                                                <td><?= $student['nombre'] ?></td>
                                                <td><?= $student['apellidos'] ?></td>
                                                <td><?= $student['telefono'] ?></td>
                                                <td><?= $student['correo'] ?></td>
                                                <td><?= $student['especialidad'] ?></td>
                                                <td>
                                                    <a href="" class="btn btn-info">Ver</a>
                                                    <button type="button" href="" value="<?= $student['id']; ?>" class="editStudentBtn btn btn-success">Editar</button>
                                                    <a href="" class="btn btn-warning">Borrar</a>
                                                </td>
                                            </tr>
                                        <?php

                                    }

                                }

                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        $(document).on('submit', '#saveStudent', function(e){

            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_student", true);
            
            $.ajax({
                type:"POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response){

                    var res = jQuery.parseJSON(response);
                    if(res.status == 422){
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);
                    }else if (res.status == 200) {
                        
                        $('#errorMessage').addClass('d-none');
                        $('#profesorAddModal').modal('hide');
                        $('#saveStudent')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    }

                }
            });

        });

        $(document).on('click', '.editStudentBtn', function(){

            var student_id = $(this).val();

            $.ajax({
                type:"GET",
                url:"code.php?student_id=" + student_id,
                success: function (response){

                    var res = jQuery.parseJSON(response);
                    if(res.status == 422){
                        alert(res.message);

                    }else if (res.status == 200) {
                        
                        $('#student_id').val(res.data.id);
                        $('#nombre').val(res.data.nombre);
                        $('#apellidos').val(res.data.apellidos);
                        $('#telefono').val(res.data.telefono);
                        $('#correo').val(res.data.correo);
                        $('#especialidad').val(res.data.especialidad);
                        $('#contraseña').val(res.data.contraseña);
                        $('#confirmarContraseña').val(res.data.confirmarContraseña);

                        $('#profesorEditModal').modal('show');
                        
                    }

                }
            });

        });

    </script>

  </body>
</html>