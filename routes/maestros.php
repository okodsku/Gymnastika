<?php
  include '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
            <h1 class="m-0">Maestros</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 mt-5">
            <div class="col-lg-12 d-flex justify-content-end mb-4">
              <button class="btn btn-primary">Agregar maestro</button>
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Maestros</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Nombre</th>
                      <th>Domicilio</th>
                      <th>Celular</th>
                      <th>Correo</th>
                      <th>Sueldo</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Pollo</td>
                      <td>Av. Siempre Viva 123</td>
                      <td>612 123 22 22</td>
                      <td>pollo@gmail.com</td>
                      <td>$20,000</td>
                      <td>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                          Launch Default Modal
                        </button>
                        <button class="btn btn-danger">Eliminar</button>
                      </td>

                    </tr>
                  </tbody>
                </table>
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

</body>
</html>
