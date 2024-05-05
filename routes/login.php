<?php
  include '../config/config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include '../layout/head-template.php'
  ?>
</head>


<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <img src="../src/images/v2_4.png" class="img-fluid" alt="">
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Ingresa tu usuario y contraseña</p>

      <form action="../index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
          </div>
        </div>
      </form>


      <span>No cuento con cuenta.</span><a href="login.html" class="text-center"> Registrarme</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
