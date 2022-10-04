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
            <a href="<?php echo base_url();?>Admin/Alertorder">
              <span class="dropdown-item dropdown-header">ดูข้อความทั้งหมด</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-user-tag mr-2"></i> ผู้ขาย 1 ข้อค้วาม
            </a>
            <a href="#" class="dropdown-item">
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
          <a href="#" class="d-block"><?php echo $admin_id->display_name_admin ;?> (ผู้ดูเเล)</a>
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
            <div class="col-sm-12">
                <h3>ID :<?php echo $readshowselladmin->user_id; ?></h3>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-md-3 col-12">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url(); ?>assest/dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $readshowselladmin->display_name; ?></h3>

                <p class="text-muted text-center">ID : <?php echo $readshowselladmin->user_id; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>สินค้า</b> <a class="float-right"><?php echo count($showotopselladmin); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>กดไลค์</b> <a class="float-right"><?php echo count($countlikeadmin); ?></a>
                  </li>
                </ul>

                <?php
                $blockuser = $readshowselladmin->user_role;
                if (empty($blockuser) == 0) { ?>
                <form action="<?php echo base_url(); ?>Admin/addblockuser" method="post">
                <input type="hidden" name="user_id" value="<?php echo $readshowselladmin->user_id; ?>">
                <input type="hidden" name="user_role" value="0" value="<?php echo$readshowselladmin->user_role; ?>">
                <button type="submit" class="btn btn-danger btn-block"><b><i class="fas fa-unlock mr-2"></i>บล็อค</b></button>
                </form>

                <?php } elseif (empty($blockuser) == 2) { ?>
                  <form action="<?php echo base_url(); ?>Admin/addblockuser" method="post">
                <input type="hidden" name="user_id" value="<?php echo $readshowselladmin->user_id; ?>">
                <input type="hidden" name="user_role" value="2" value="<?php echo $readshowselladmin->user_role; ?>">
                  <button type="submit" class="btn btn-success btn-block"><b><i class="fas fa-unlock mr-2"></i>ปลดบล็อค</b></button>
                  </form>
                <?php } else { ?>
                  
                  <?php } ?>

                  <?php
                if ($showotopgood == NULL ) { ?>

                  <form action="<?php echo base_url(); ?>Admin/addotopgood" method="post">
                  <input type="hidden" name="user_id"  value="<?php echo $readshowselladmin->user_id; ?>">
                  <button type="submit" class="btn btn-success btn-block"><b><i class="fas fa-unlock mr-2"></i>ร้านดีเด่น</b></button>
                  </form>

                  <?php } else { 
                  foreach ($showotopgood as $show) { ?>
                    <form action="<?php echo base_url('Admin/delotopgood/') . $show->id_otop_good; ?>" method="post">
                    <input type="hidden" name="user_id"  value="<?php echo $readshowselladmin->user_id; ?>">
                    <button type="submit" class="btn btn-success btn-block"><b><i class="fas fa-unlock mr-2"></i>ยกเลิกร้านดีเด่น</b></button>
                    </form>
                  <?php } ?>
                  <?php } ?>

                
      

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-6 col-12">

            <div class="card">
              <div class="card-header card-primary card-outline p-2">
                <h5>รายละเอียด</h5>
              </div><!-- /.card-header -->
              <div class="card-body">
                <p><i class="fas fa-map-marked-alt mr-2"></i>ที่อยู่</p>
                <p><?php echo $readshowselladmin->address; ?></p>
                <p><i class="fas fa-phone-volume mr-2"></i>เบอร์โทร</p>
                <p><?php echo $readshowselladmin->mobile_number; ?></p>
                <p><i class="fas fa-at mr-2"></i>อีเมล</p>
                <p><?php echo $readshowselladmin->email; ?></p>
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->

          </div>

          <div class="col-md-3 col-12">
            <div class="card">
              <div class="card-body">
                <div class="px-auto elevation-2"><img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $readshowselladmin->user_profile_cover_img; ?>" alt="license Image" style="width:100%; height:335px;"></div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>

        </div>
      </section>

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h3>สินค้าของผู้ขาย</h3>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Content Header (Page header) -->
      <section class="content-header">

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
            <div class="card-body p-0">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ชื่อ</th>
                    <th>หมวดหมู่</th>
                    <th>ผู้ขาย</th>
                    <th>สถานะ</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  <?php foreach ($showotopselladmin as $showotopadmin) { ?>
                  <tr>
                    <td><a href="<?php echo base_url('Admin/ProductView/').$showotopadmin->id_product ?>"><?php echo $showotopadmin->name_product; ?></a></td>
                    <th><?php echo $showotopadmin->grop_name; ?></th>
                    <td><?php echo $showotopadmin->display_name; ?></td>
                    <?php
                        $block = $showotopadmin->status_product;
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
    $(function () {
      $("#example1").DataTable();
    });
  </script>
</body>

</html>
