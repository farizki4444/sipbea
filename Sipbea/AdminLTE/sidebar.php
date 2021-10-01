<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="../AdminLTE/dist/img/logoPNC.png" alt="SIPBEA" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SIPBEA PNC</span>
  </a>

  <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../AdminLTE/dist/img/avatar3.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Farizki hermawan</a>
        </div>
      </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Data Pegawai -->
        <li class="nav-item ">
          <a href="../tb_pegawai/data_pegawai.php" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data mahasiswa
            </p>
          </a>
        </li>

        <!-- Data Jurusan -->
        <li class="nav-item ">
          <a href="../tb_jurusan/data_jurusan.php" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Jurusan
            </p>
          </a>
        </li>

         <!-- Data Prodi -->
        <li class="nav-item ">
          <a href="../tb_prodi/data_prodi.php" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Prodi
            </p>
          </a>
        </li>  
        
         <!-- Data beasiswa -->
         <li class="nav-item ">
          <a href="../tb_beasiswa/data_beasiswa.php" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data beasiswa
            </p>
          </a>
        </li>

           <!-- Data syarat -->
           <li class="nav-item ">
          <a href="../tb_syarat_beasiswa/data_syarat_beasiswa.php" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data syarat
            </p>
          </a>
        </li>
      
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>