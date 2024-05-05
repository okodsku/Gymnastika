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
            <div class="card pt-5">
              <!-- /.card-header -->
              <div class="card-body p-5 ">
                <ul class="users-list clearfix">
                  <li>
                    <img src="<?=BASE_PATH?>dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                  <li>
                    <img src="<?=BASE_PATH?>dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                  <li>
                    <img src="<?=BASE_PATH?>dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                  <li>
                    <img src="<?=BASE_PATH?>dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                  <li>
                    <img src="<?=BASE_PATH?>dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                  <li>
                    <img src="<?=BASE_PATH?>dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                  <li>
                    <img src="<?=BASE_PATH?>dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                  <li>
                    <img src="<?=BASE_PATH?>dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                 
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript:">View All Users</a>
              </div>
              <!-- /.card-footer -->
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
