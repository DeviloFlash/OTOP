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
          <div class="row">
            <div class="col-sm-6">
              <h5>รหัสสินค้า : <?php echo $readproductadmin->id_product; ?></h5>
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
                  <img src="<?php echo base_url('assest/img/otop') ?>/<?php echo $readproductadmin->img_otop; ?>" class="product-image" alt="Product Image">
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
                <h3 class="my-3"><?php echo $readproductadmin->name_product; ?></h3>
                <p><?php echo $readproductadmin->detel; ?></p>
                <hr style="border:0.3px solid #000;">

                <p>จำนวนทั้งหมด <?php echo $readproductadmin->number; ?> รายการ</p>

                <div class="bg-gray py-2 px-3 mt-4">
                  <h2 class="mb-0">
                    ราคาส่ง <?php echo $readproductadmin->kerry_price; ?>.00 .-
                  </h2>
                </div>

                <div class="bg-gray py-2 px-3 mt-4">
                  <h2 class="mb-0">
                    ฿ <?php echo $readproductadmin->price; ?>.00 .-
                  </h2>
                </div>

                <?php
                $block = $readproductadmin->status_product;
                if (empty($block) == 0) { ?>

                  <form action="<?php echo base_url(); ?>Admin/addblock" method="post">
                    <div class="mt-4">
                      <input type="hidden" name="id_product" value="<?php echo $readproductadmin->id_product; ?>">
                      <input type="hidden" name="status_product" value="0" value="<?php echo $readproductadmin->status_product; ?>">
                      <button type="submit" class="btn btn-danger btn-lg btn-flat">
                        <l type="submit" class="fas fa-lock fa-lg mr-2"></l>บล็อค
                      </button>
                    </div>
                  </form>

                  <?php } elseif (empty($block) == 1) { ?>

                    <form action="<?php echo base_url(); ?>Admin/addnoblock" method="post">
                    <input type="hidden" name="id_product" value="<?php echo $readproductadmin->id_product; ?>">
                    <input type="hidden" name="status_product" value="1" value="<?php echo $readproductadmin->status_product; ?>">
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
                  <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">ผู้ขาย</a>
                </div>
              </nav>
              <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> <?php echo $readproductadmin->detel; ?></div>
                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                  <h5 class="mt-1">คิวอาร์โค้ด</h5>
                  <div><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://www.peejame.com/Product/Product_view/<?php echo $readproductadmin->id_product; ?>" style="width:100%;" alt="qrcode"></div>
                </div>
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">

                  <!-- Main content -->
                  <section class="content px-0">

                    <div class="row">

                      <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                          <div class="card-body box-profile">
                            <div class="text-center">
                              <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url() ?>assest/dist/img/user4-128x128.jpg" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?php echo $readproductadmin->display_name; ?></h3>


                            <a href="<?php echo base_url('Admin/SellerView/').$readproductadmin->user_id ?>" class="btn btn-primary btn-block text-white"><b>ดูโปรไฟล์</b></a>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->

                      <div class="col-md-6">
                        <!-- About Me Box -->
                        <div class="card">
                          <div class="card-header bg-primary">
                            <h3 class="card-title text-white">รายละเอียด</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <strong><i class="fas fa-phone mr-1"></i> เบอร์โทร</strong>

                            <p class="text-muted">
                              <?php echo $readproductadmin->mobile_number; ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i>ที่อยู่</strong>

                            <p class="text-muted"> <?php echo $readproductadmin->address; ?> </p>

                            <hr>

                            <strong><i class="fas fa-mail-bulk mr-1"></i> รหัสไปรษณี</strong>

                            <p class="text-muted">47160</p>

                            <hr>

                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->

                      <div class="col-md-3">
                        <div class="px-auto elevation-2"><img src="<?php echo base_url() ?>assest/dist/img/license/t1.jpg" alt="license Image" style="width:100%; height:335px;"></div>
                      </div>
                      <!-- /.col -->

                    </div>
                    <!-- /.row -->

                  </section>

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
    });
  </script>
</body>

</html>
