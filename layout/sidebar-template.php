<aside class="main-sidebar elevation-4 "style="background-color: #7E9DB6;">
    <!-- Brand Logo -->
    <a href="<?=BASE_PATH?>" class="brand-link">
      <img src="<?=BASE_PATH?>src/images/v2_4.png" alt="AdminLTE Logo" class="img-thumbnail" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=BASE_PATH?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrador</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul  class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=BASE_PATH?>" class="nav-link d-flex justify-content-start align-items-center">
              <img src="<?=BASE_PATH?>src/images/sidebar/home-outline.svg" class="mr-1" alt="">
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=BASE_PATH?>routes/alumnos.php" class="nav-link d-flex justify-content-start align-items-center">
              <img src="<?=BASE_PATH?>src/images/sidebar/people-outline.svg" alt="">
              <p>Alumnos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=BASE_PATH?>routes/instructores.php" class="nav-link d-flex justify-content-start align-items-center">
              <img src="<?=BASE_PATH?>src/images/sidebar/barbell-outline.svg" alt="">
              <p>Instructores</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=BASE_PATH?>routes/pagos.php" class="nav-link d-flex justify-content-start align-items-center">
              <img src="<?=BASE_PATH?>src/images/sidebar/card-outline.svg" alt="">
              <p>Pagos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=BASE_PATH?>routes/disciplina.php" class="nav-link d-flex justify-content-start align-items-center">
              <img src="<?=BASE_PATH?>src/images/sidebar/newspaper-outline.svg" alt="">
              <p>Disciplina</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=BASE_PATH?>routes/membresia.php" class="nav-link d-flex justify-content-start align-items-center">
              <img src="<?=BASE_PATH?>src/images/sidebar/newspaper-outline.svg" alt="">
              <p>Membresia</p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>