<?php
session_start(); // Inicia la sesión
// Verificar si la sesión está activa
if (!isset($_SESSION['usuario'])) {
  // Si no hay una sesión activa, redirige al usuario a la página de inicio de sesión
  header("Location: Routes/login.php");
  exit;
}

include './config/config.php';
include 'routes/Conexiones/conexion.php';
$sql = "SELECT count(id_alumno) as total FROM alumnos;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_alumnos = $row['total'];

$sql = "SELECT count(id_instructor) as total FROM instructores;";
$result = $conn->query($sql);
$row2 = $result->fetch_assoc();
$total_instructores = $row2['total'];

$sql = "SELECT count(id_disciplina) as total FROM disciplina;";
$result = $conn->query($sql);
$row3 = $result->fetch_assoc();
$total_disciplina = $row3['total'];
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
            <a href="<?=BASE_PATH?>routes/instructores.php"><div class="d-flex small-box bg-success justify-content-between align-items-center" style="background-color: #7E9DB6 !important; ">
              <div class="inner">
                <h3><?php echo $total_instructores ?></h3>

                <p>Instructores</p>
              </div>
              <div class="icon mr-3">
                <img src="<?=BASE_PATH?>src/images/icons/Libro.svg" alt="IconMaestros">
              </div>
            </div></a>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <a href="<?=BASE_PATH?>routes/disciplina.php"><div class="d-flex small-box bg-primary justify-content-between align-items-center" style="background-color: #7E9DB6 !important; ">
              <div class="inner">
                <h3><?php echo $total_disciplina ?></h3>

                <p>Diciplinas</p>
              </div>
              <div class="icon">
                <img src="<?=BASE_PATH?>src/images/icons/stats.svg" alt="IconPencil">
              </div>
            </div></a>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <a href="<?=BASE_PATH?>routes/alumnos.php"><div class="d-flex small-box bg-primary justify-content-between align-items-center" style="background-color: #7E9DB6 !important; ">
              <div class="inner">
                <h3><?php echo $total_alumnos ?></h3>

                <p>Alumnos Registrados</p>
              </div>
              <div class="icon">
                <img src="<?=BASE_PATH?>src/images/icons/pencil.svg" alt="IconPencil">
              </div>
            </div></a>
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

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <img src="<?=BASE_PATH?>src/images/v2_5.png" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <img src="<?=BASE_PATH?>src/images/v2_6.png" class="card-img-top" style="max-height: 300px;" alt="Image 2">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <img src="<?=BASE_PATH?>src/images/v2_7.png" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- /.card -->
            <!-- Map card -->
            
          </section>
          <section class="col-lg-12">
            
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
