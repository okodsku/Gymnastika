<?php
  include './config/config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include 'layout/head-template.php';
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="./src/images/v2_4.png" alt="AdminLTELogo" height="150" width="150">
  </div>

  <!-- Main Sidebar Container -->
  <?php
    include 'layout/sidebar-template.php';
    include 'layout/navbar-template.php';
  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #E2EBED;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inicio</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="d-flex small-box bg-success justify-content-between align-items-center" style="background-color: #7E9DB6 !important; ">
              <div class="inner">
                <h3>150</h3>

                <p>Maestros</p>
              </div>
              <div class="icon mr-3">
                <img src="<?=BASE_PATH?>src/images/icons/Libro.svg" alt="IconMaestros">
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="d-flex small-box bg-light justify-content-between align-items-center">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Eventos</p>
              </div>
              <div class="icon">
                <img src="<?=BASE_PATH?>src/images/icons/stats.svg" alt="IconStats">
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="d-flex small-box bg-primary justify-content-between align-items-center" style="background-color: #7E9DB6 !important; ">
              <div class="inner">
                <h3>44</h3>

                <p>Alumnos Registrados</p>
              </div>
              <div class="icon">
                <img src="<?=BASE_PATH?>src/images/icons/pencil.svg" alt="IconPencil">
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->

          <section class="col-lg-12 connectedSortable"> <!-- tamaño del boostrap  -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Rendimiento del gimnasio
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 500px;">
                      <canvas id="revenue-chart-canvas" height="500" style="height: 500px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 500px;">
                    <canvas id="sales-chart-canvas" height="500" style="height: 500px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            
            
            <!-- /.card -->
            <!-- Map card -->
            
          </section>
          <section class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Estudiantes en estado de adeudo</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Alumno</th>
                    <th>ID</th>
                    <th>Clase</th>
                    <th>Saldo pendiente</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Andres Gtz
                    </td>
                    <td>ID: #6969</td>
                    <td>
                      <small class="text-success mr-1">
                        Striper
                      </small>
                    </td>
                    <td>
                      $1000,00
                    </td>
                  </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card bg-gradient-primary" style="visibility:hidden">
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
<style>
  .bg-gradient-success{
    background-color: #fff;
  }
</style>
