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

  <title>OTOP | HOME</title>
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
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
      <form class="form-inline ml-3 elevation-1" action="<?php echo base_url(); ?>Product" method="post">
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
            <a href="<?php echo base_url(); ?>Dashboard/Alertorder">
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
        <img src="<?php echo base_url() ?>assest/dist/img/logo/logo-otop.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
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
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
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
                  <a href="<?php echo base_url(); ?>dashboard/player_team" class="nav-link active">
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
              <a href="<?php echo base_url(); ?>dashboard/player_profile" class="nav-link">
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
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h5>รหัสสินค้า : <?php echo  $readotop->id_product; ?></h5>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->



  <div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3 class="d-inline-block d-sm-none">ชื่อสินค้า</h3>
          <div class="col-12">
            <img src="<?php echo base_url('assest/img/otop') ?>/<?php echo  $readotop->img_otop; ?>" class="product-image" alt="Product Image">
          </div>

          <div class="col-12 product-image-thumbs">

            <?php foreach ($showimgorder as $row) { ?>
            <?php if ($row->name_img == '') { ?>

              <?php } else { ?>
            <a href="<?php echo base_url(); ?>assest/img/product/<?php echo $row->name_img; ?>">
              <div class="product-image-thumb p-1 m-1"><img src="<?php echo base_url(); ?>assest/img/product/<?php echo $row->name_img; ?>" style="width:100%; height:50px; object-fit:cover;" alt="Product Image"></div>
            </a>

          <?php } ?>
          <?php } ?>

          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="my-3"><?php echo  $readotop->name_product; ?></h3>
          <p><?php echo  $readotop->detel; ?></p>
          <hr style="border:0.3px solid #000;">
          <p>จำนวนทั้งหมด <?php echo  $readotop->number; ?> รายการ</p>

          <!-- เพิ่มจำนวนสินค้า -->
          <form action="<?php echo base_url('Dashboard/editstock'); ?>" method="post">
          <input type="hidden" name="id_product" value="<?php echo $readotop->id_product; ?>">
          <div class="btn-group btn-group-toggle pt-2" data-toggle="buttons">
            <div class="def-number-input number-input safari_only">
              <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
              <input class="quantity" min="0" name="number" value="<?php echo $readotop->number; ?>" type="number">
              <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
            </div>

          </div>

          <div class="mt-1">
            <button type="submit" class="btn btn-info btn-lg"><i class="far fa-share-square mr-2"></i>เพิ่มจำนวนสินค้า</button>
          </div>
          </form>

          <div class="bg-gray py-2 px-3 mt-4">
            <h2 class="mb-0">
              ราคาส่ง <?php echo  $readotop->kerry_price; ?>.00 .-
            </h2>
          </div>

          <div class="bg-gray py-2 px-3 mt-4">
            <h2 class="mb-0">
              ฿ <?php echo  $readotop->price; ?>.00 .-
            </h2>
          </div>

          <?php
          $blockproductsell =  $readotop->status_product;
          if (empty($blockproductsell) == 0) { ?>

            <form action="<?php echo base_url(); ?>Dashboard/addblocksell" method="post">
              <div class="mt-4">
                <input type="hidden" name="id_product" value="<?php echo  $readotop->id_product; ?>">
                <input type="hidden" name="status_product" value="0" value="<?php echo  $readotop->status_product; ?>">
                <button type="submit" class="btn btn-danger btn-lg btn-flat">
                  <l type="submit" class="fas fa-lock fa-lg mr-2"></l>บล็อค
                </button>
              </div>
            </form>

            <?php } elseif (empty($blockproductsell) == 1) { ?>

              <form action="<?php echo base_url(); ?>Dashboard/addnoblocksell" method="post">
              <input type="hidden" name="id_product" value="<?php echo  $readotop->id_product; ?>">
              <input type="hidden" name="status_product" value="1" value="<?php echo  $readotop->status_product; ?>">
              <div class="mt-4">
                <button type="submit" class="btn btn-success btn-lg btn-flat">
                  <l type="submit" class="fas fa-lock fa-lg mr-2"></l>ปลดบล็อค
                </button>
              </div>
            </form>

          <?php } else { ?>

          <?php } ?>

        </div>
      </div>


      <div class="row mt-4">
        <nav class="w-100">
          <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">รายละเอียด</a>
            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">คิวอาร์โค้ด</a>
          </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
          <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> <?php echo  $readotop->detel; ?></div>
          <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
            <h5 class="mt-1">คิวอาร์โค้ด</h5>
            <div><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://www.peejame.com/Product/Product_view/<?php echo $readotop->id_product; ?>" style="width:100%;" alt="qrcode"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
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
  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script type="text/javascript">
    function logout() {
      window.location.href = "<?php echo site_url('login/logout'); ?>"
    }
  </script>
  <script>
    $(function() {
      $("#example1").DataTable();
    });
  </script>
</body>

</html>
