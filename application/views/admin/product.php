<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP | ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- my style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/dist/style/css/style.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light" style="background:	#605ca8;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url() ?>admin" class="nav-link text-white">OTOP</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link text-white">ติดต่อ</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3 elevation-1" action="" method="post">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" name="keyword" type="search" placeholder="ค้นหา" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-light btn-navbar text-white " type="submit">
              <i class="fas fa-search" style="color:#605ca8;"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link text-white" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-danger navbar-badge">2</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="<?php echo base_url(); ?>Admin/Alertorder">
              <span class="dropdown-item dropdown-header">ดูข้อความทั้งหมด</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url(); ?>Admin/Alertorder" class="dropdown-item">
              <i class="fas fa-user-tag mr-2"></i> ผู้ขาย 1 ข้อค้วาม
            </a>
            <a href="<?php echo base_url(); ?>Admin/Alertorderseller" class="dropdown-item">
              <i class="fas fa-user-tie mr-2"></i> ผู้ซื้อ 1 ข้อค้วาม
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo base_url() ?>admin" class="brand-link">
        <img src="<?php echo base_url() ?>assest/dist/img/logo/logo-otop.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">OTOP ADMIN</span>
      </a>

      <?php if (isset($_SESSION['admin_id']) && $_SESSION['display_name_admin'] != "") { ?>
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo base_url() ?>assest/dist/img/admin-icon-png-1.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo $admin_id->display_name_admin; ?> (ผู้ดูเเล)</a>
            </div>
          </div>
        <?php } else { ?>
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="<?php echo base_url() ?>assest/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="<?php echo base_url(); ?>loginadmin" class="d-block">เข้าสู่ระบบ</a>
              </div>
            </div>
          <?php } ?>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/Product" class="nav-link">
                  <i class="nav-icon fas fa-shopping-bag"></i>
                  <p>
                    สินค้า
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/News" class="nav-link">
                  <i class="nav-icon fas fa-audio-description"></i>
                  <p>
                    ข่าวสาร
                  </p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/seller" class="nav-link">
                  <i class="nav-icon fas fa-store"></i>
                  <p>
                    ผู้ขาย
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/User" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    ผู้ซื้อ
                  </p>
                </a>
              </li>
              <?php if (isset($_SESSION['admin_id']) && $_SESSION['display_name_admin'] != "") { ?>
                <li class="nav-item">
                  <a href="<?php echo base_url('loginadmin/logout'); ?>" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                      ออกจากระบบ
                    </p>
                  </a>
                </li>
              <?php } else { ?>

              <?php } ?>
          </nav>
          <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <div class="row">
                <h3>หมวดหมู่สินค้า</h3>
                <a href="<?php echo base_url(); ?>Admin/Group" class="btn btn-success ml-2"><i class="fas fa-plus mr-2"></i>เพิ่มหมวดหมู่</a>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="col-12">
          <div class="d-flex flex-nowrap overflow-auto">

            <div class="col-6 col-lg-2">
              <div class="text-center">
                <a href="#All+?">
                  <p class="py-2 rounded text-white text-center" style="background:#605ca8;">
                    <i class="fas fa-border-all mr-1" style="font-size:2em;"></i><br>
                    ทั้งหมด</p>
                </a>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h3>รายการสินค้า</h3>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="col-md-12 col-12">
          <!-- TABLE: สมาชิกผู้ซื้อ -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title"><i class="fas fa-users mr-2"></i>ผู้ซื้อ</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-2">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ชื่อ</th>
                      <th>หมวดหมู่</th>
                      <th>ผู้ขาย</th>
                      <th>สถานะ</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $i=1; foreach ($showproductadmin as $showproduct) { ?>
                      <tr>
                      <th><?php echo $i++; ?></th>
                        <td><a href="<?php echo base_url('Admin/ProductView/') . $showproduct->id_product ?>"><?php echo $showproduct->name_product; ?></a></td>
                        <th><?php echo $showproduct->grop_name; ?></th>
                        <td><?php echo $showproduct->display_name; ?></td>

                        <?php
                        $block = $showproduct->status_product;
                        if (empty($block) == 0) { ?>
                          <td><span class="badge badge-success">ปกติ</span></td>
                        <?php } elseif (empty($block) == 1) { ?>
                          <td><span class="badge badge-danger">บล็อค</span></td>
                        <?php } else { ?>

                        <?php } ?>
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
          </div>
          <!-- /.card -->
        </div>

      </section>

    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="#">CPE-Project</a>.</strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assest/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url() ?>assest/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url() ?>assest/plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assest/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url() ?>assest/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>assest/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() ?>assest/dist/js/pages/dashboard.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url() ?>assest/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>assest/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable();
      $("#example2").DataTable();
      $("#example3").DataTable();
      $("#example4").DataTable();
    });
  </script>
</body>

</html>