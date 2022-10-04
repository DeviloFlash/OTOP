<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>OTOP | Edit Profile</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-info">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>Dashboard/player" class="nav-link text-white">OTOP</a>
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
            <i class="fas fa-search"></i>
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
          <a href="<?php echo base_url();?>Dashboard/Alertorder">
            <span class="dropdown-item dropdown-header">ดูข้อความทั้งหมด</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-tag mr-2"></i> ผู้ขาย 1 ข้อค้วาม
          </a>
					<a href="#" class="dropdown-item">
						<i class="fas fa-user-tie mr-2"></i> ระบบ 1 ข้อค้วาม
					</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>Dashboard/player" class="brand-link">
      <img src="<?php echo base_url() ?>assest/dist/img/logo/logo-otop.png"
           alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">OTOP นวัตวิถี</span>
    </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo base_url() ?>assest/dist/img/admin-icon-png-1.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="<?php echo base_url(); ?>dashboard/player_profile" class="d-block"><?php echo $user->display_name; ?> (ผู้ขาย)</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview ">
                <a href="#" class="nav-link ">
                  <i class="fas fa-project-diagram nav-icon"></i>
                  <p>
                    หน้าจัดการสินค้า
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>dashboard/player_tournament" class="nav-link">
                      <i class="fas fa-store-alt nav-icon"></i></i>
                      <p>รายการสินค้าของฉัน</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>dashboard/player_team" class="nav-link">
                      <i class="fas fa-cart-plus nav-icon"></i>
                      <p>เพิ่มสินค้า</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>dashboard/player_player" class="nav-link">
                    <i class="fas fa-exchange-alt nav-icon"></i>
                      <p>รายการสั่งซื้อ</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>dashboard/player_profile" class="nav-link active">
                  <i class="nav-icon fas fa-user-cog"></i>
                  <p>
                    จัดการโปรไฟล์
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" data-toggle="modal" data-target="#modalLogout">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                    ออกจากระบบ
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">หน้าแก้ไขโปรไฟล์</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">


        <div class="row">
          <div class="col-12">
            <h4>หน้าแก้ไขโปรไฟล์ &nbsp;<span class="badge badge-pill badge-info">กรุณากรอกให้ครบถ้วน</span></h4>
            <hr>
          </div>
        </div>


        <form action="<?php echo base_url('Dashboard/editprofile'); ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-8">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <!-- <div class="widget-user-header text-white"
                   style="background: url('../dist/img/photo1.png') center center;"> -->
              <div class="widget-user-header bg-info">
                <h2 class="text-left"><?php echo $user->display_name ;?></h2>
                <h6 class="widget-user-desc text-left">ผู้ขาย</h6>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url(); ?>assest/dist/img/gamer_icon.jpg" alt="User Avatar">
              </div>

              <div class="card-footer">
                <div class="row">

                  <div class="col-sm-6 border-right">
                    <div class="description">
                    <input type="hidden" name="user_id" value="<?php echo $user->user_id; ?>">
                      <h5>ชื่อ</h5>
                      <p><input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name; ?>"></p>

                      <h5>นามสกุล</h5>
                      <p><input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name; ?>"></p>

                      <h5>วัน/เดือน/ปีเกิด (1997-02-03)</h5>
                      <p><input type="text" name="birthday" class="form-control" value="<?php echo $user->birthday; ?>"></p>

                      <h5>เพศ</h5>
                      <p><input type="text" name="gender" class="form-control" value="<?php echo $user->gender; ?>"></p>

                      <h5>อีเมล</h5>
                      <p><input type="text" name="email" class="form-control" value="<?php echo $user->email; ?>" disabled></p>

                      <h5>รหัสผ่าน</h5>
                      <p><input type="password" name="password" class="form-control" value="<?php echo $user->password; ?>"></p>

                      <h5>เบอร์โทรศัพท์</h5>
                      <p><input type="text" name="mobile_number" class="form-control" value="<?php echo $user->mobile_number ?>"></p>

                      <h5>ที่อยู่</h5>
                      <p><input type="text" name="address" class="form-control" value="<?php echo $user->address ?>"></p>

                      <h5>ประเทศ</h5>
                      <p><input type="text" name="user_country" class="form-control" value="<?php echo $user->user_country ?>"></p>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="description">
                      <h4>Social Media</h4>
                      <h5>Facebook</h5>
                      <p><input type="text" name="facebook_url" class="form-control" value="<?php echo $user->facebook_url ?>"></p>

                      <h5>Line</h5>
                      <p><input type="text" name="line_url" class="form-control" value="<?php echo $user->line_url ?>"></p>

                      <h4>รายละเอียดร้าน</h4>
                      <p><textarea id="w3mission" class="col-12" name="detel_sell" value="<?php echo $user->detel_sell ?>" rows="6"><?php echo $user->detel_sell ?></textarea></p>

                      <button type="submit" class="btn btn-primary" onclick="return confirm('ยืนยัน')">ยืนยัน</button>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>

                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
        </div>
        </form>


      </div><!-- /.container-fluid -->
    </div><!-- /.content -->
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
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
  <strong>Copyright &copy; 2020 <a href="#">CPE-Project</a>.</strong>
  </footer>


<!-- Modal Logout -->
<div class="modal fade" id="modalLogout">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="text">
          Log Out
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        Are you sure to logout?
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" onclick="logout()">Yes</button>
        <button type="submit" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>

    </div>
  </div>
</div>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assest/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assest/dist/js/adminlte.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">

  function logout() {
    window.location.href = "<?php echo site_url('login/logout'); ?>"
  }


</script>
</body>
</html>
