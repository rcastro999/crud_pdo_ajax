<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./css/estilos.css">
    
    <title>CRUD PHP PDO AJAX DATATABLES</title>
  </head>
  <body>
    <div class="container fondo">
      <h1 class="text-center">CRUD PHP PDO AJAX DATATABLES</h1>
      <h1 class="text-center">Roland C.</h1>

      <div class="row">
        <div class="col-2 offset-10">
          <div class="text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
              <i class="bi bi-plus-circle"></i> Crear
            </button>
          </div>
        </div>
      </div>
        <br>
        <br>
        <div class="table-responsive">
            <table id="datos_usuario" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Imagen</th>
                  <th>Fecha Creacion</th>
                  <th>Editar</th>
                  <th>Borrar</th>
                </tr>
              </thead>
            </table>
        </div>
    </div>



      <!-- Modal -->
      <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
            <form action="" method="POST" id="formulario" enctype="multipart/form-data">
                <div class="modal-content">
                  <div class="modal-body">
                    <label for="nombre">Ingrese el nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">

                    <label for="apellidos">Ingrese los apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control">

                    <label for="telefono">Ingrese el Telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control">


                    <label for="email">Ingrese el email</label>
                    <input type="text" name="email" id="email" class="form-control">

                    <label for="nombre">Seleccione una imagen</label>
                    <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
                    <span id="imagen_subida"></span>
                </div>

                <div class="modal-footer">
                  <input type="hidden" name="id_usuario" id="id_usuario">
                  <input type="hidden" name="operacion" id="operacion">
                  <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>

    <!-- J QUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>