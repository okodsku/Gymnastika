<?php
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
            <h1 class="m-0">Alumnos</h1>
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
              <button class="btn btn-primary" data-toggle="modal" data-target="#studentModal">Agregar Alumno</button>
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Alumnos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="tablaAlumnos"></div>
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
  <div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studentModalLabel">Agregar Alumno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" id="formAlumno">
          <div class="form-group">
            <label for="date">Fecha Ingreso</label>
            <input type="datetime-local" class="form-control"  required id="fecha_ingreso" name="fecha_ingreso">
          </div>
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" required id="nombres" name="nombres">
          </div>
          <div class="form-group">
            <label for="surname">Apellido</label>
            <input type="text" class="form-control" required id="apellidos" name="apellidos">
          </div>
          <div class="form-group">
            <label for="curp">CURP</label>
            <input type="text" class="form-control" required id="curp" name="curp">
          </div>
          <div class="form-group">
            <label for="bloodType">Tipo de Sangre</label>
            <input type="text" class="form-control" required id="tipo_sangre" name="tipo_sangre">
          </div>
          <div class="form-group">
            <label for="allergies">Alergias</label>
            <input type="text" class="form-control" id="alergias" name="alergias">
          </div>
          <div class="form-group">
            <label for="operations">Operaciones</label>
            <input type="text" class="form-control" id="operaciones" name="operaciones">
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
    $('#tablaAlumnos').load('Busquedas/TablaAlumnos.php');
    $('#formAlumno').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url: 'Busquedas/AgregarAlumno.php',
            type: 'post',
            data: $('#formAlumno').serialize(),
            success: function(response){
                Swal.fire(response, '', 'success');
                $('#formAlumno')[0].reset();
                $('#studentModal').modal('hide');
                $('#tablaAlumnos').load('Busquedas/TablaAlumnos.php');
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
                url: 'Busquedas/EliminarAlumno.php',
                type: 'post',
                data: {id: id},
                success: function(response){
                    Swal.fire(response, '', 'success');
                    $('#tablaAlumnos').load('Busquedas/TablaAlumnos.php');
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(textStatus, errorThrown);
                }
            });
        }
    });
}
</script>
</body>
</html>
