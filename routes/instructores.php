<?php
session_start(); // Inicia la sesión
// Verificar si la sesión está activa
if (!isset($_SESSION['usuario'])) {
  // Si no hay una sesión activa, redirige al usuario a la página de inicio de sesión
  header("Location: login.php");
  exit;
}
  include '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

  <?php
    include '../layout/head-template.php';
  ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  
  <!-- Main Sidebar Container -->
  
  <?php
    include '../layout/sidebar-template.php';
  ?>

  <?php
    include '../layout/navbar-template.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Instructores</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 ">
            <div class="col-lg-12 d-flex justify-content-end mb-4">
              <button class="btn btn-primary" data-toggle="modal" data-target="#studentModal" style='border-color:#3d5d71; background-color:#3d5d71;' onclick="recordatorio()">Agregar Instructor</button>
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Instructores</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="tablaInstructores"></div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
        <div class="card bg-gradient-primary" style="visibility:hidden">
          <div class="card-footer bg-transparent">
            <div class="row">
              <div class="col-4 text-center">
                <div id="sparkline-1"><canvas width="80" height="50" style="width: 80px; height: 50px;"></canvas></div>
                <div class="text-white">Visitors</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-2"><canvas width="80" height="50" style="width: 80px; height: 50px;"></canvas></div>
                <div class="text-white">Online</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-3"><canvas width="80" height="50" style="width: 80px; height: 50px;"></canvas></div>
                <div class="text-white">Sales</div>
              </div>
              <!-- ./col -->
            </div>
          </div><!-- /.container-fluid -->
        </div>
      <!-- /.row -->
    </div>
  </div>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="studentModalLabel">Agregar Instructor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post" id="formInstructor">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Datos Generales</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <label for="nombres">Nombre</label>
                <input type="text" class="form-control" required id="nombres" name="nombres">
              </div>
              <div class="form-group">
                <label for="apellidos">Apellido</label>
                <input type="text" class="form-control" required id="apellidos" name="apellidos">
              </div>
              <div class="form-group">
                <label for="domicilio">Domicilio</label>
                <input type="text" class="form-control" required id="domicilio" name="domicilio">
              </div>
              <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" required id="celular" name="celular">
              </div>
              <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo">
              </div>
              <div class="form-group">
                <label for="sueldo">Sueldo</label>
                <input type="text" class="form-control" id="sueldo" name="sueldo">
              </div>
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mostrarModal" tabindex="-1" role="dialog" aria-labelledby="mostrarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mostrarModalLabel">Mostrar Instructor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modificarInstructoresModal" style="z-index: 1050 !important; " tabindex="-1" role="dialog" aria-labelledby="modificarInstructoresModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modificarInstructoresModalLabel">Modificar Instructor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="modal-body-alumno"></div>
      </div>
    </div>
  </div>
</div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <?php
    include '../layout/footer-template.php';
  ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<?php
  include '../layout/scripts-template.php';
?>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function(){
    $('#tablaInstructores').load('Busquedas/TablaInstructores.php');
    $('#formInstructor').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url: 'Busquedas/AgregarInstructor.php',
            type: 'post',
            data: $('#formInstructor').serialize(),
            success: function(response){
                Swal.fire(response, '', 'success');
                $('#formInstructor')[0].reset();
                $('#studentModal').modal('hide');
                $('#tablaInstructores').load('Busquedas/TablaInstructores.php');
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(textStatus, errorThrown);
            }
        });
    });
});

let eliminar = (id) => {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminarlo!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'Busquedas/EliminarInstructor.php',
                type: 'post',
                data: {id: id},
                success: function(response){
                    Swal.fire(response, '', 'success');
                    $('#tablaInstructores').load('Busquedas/TablaInstructores.php');
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(textStatus, errorThrown);
                }
            });
        }
    });
}

let mostrar = (id) => {
    $.ajax({
        url: 'Busquedas/MostrarInstructor.php',
        type: 'post',
        data: {id: id},
        success: function(response){
            $('#mostrarModal .modal-body').html(response);
            $('#mostrarModal').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.log(textStatus, errorThrown);
        }
    });
}


let recordatorio = () => {
    Swal.fire({
        position: "top-center",
        title: '¡Asegurate de que sea un instructor!',
        icon: 'info',
        showConfirmButton: false,
        timer: 2500
    });
}
let modificar = (id) => {
    $.ajax({
      url: 'Busquedas/ModificarInstructoresModal.php',
      type: 'post',
      data: {id: id},
      success: function(response){
        $('#modal-body-alumno').html(response);
        $('#modificarInstructoresModal').modal('show');
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log(textStatus, errorThrown);
      }
    });
  }

  let guardarInstructores = () => {
    event.preventDefault();
    $.ajax({
      url: 'Busquedas/ModificarInstructores.php',
      type: 'post',
      data: $('#formModificarInstructores').serialize(),
      success: function(response){
        Swal.fire(response, '', 'success');
        $('#modificarInstructoresModal').modal('hide');
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log(textStatus, errorThrown);
      }
    });
  }

</script>
</body>
</html>
