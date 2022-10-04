<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP | Cart</title>
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
    <nav class="main-header navbar navbar-expand navbar-light" style="background:	#ff851b;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url() ?>" class="nav-link text-white">OTOP</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link text-white">ติดต่อ</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3 elevation-1">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="ค้นหา" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-light btn-navbar text-white " type="submit">
              <i class="fas fa-search" style="color:#ff851b;"></i>
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
            <a href="<?php echo base_url(); ?>Alertorder">
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
        <li class="nav-item">
          <a class="nav-link text-white" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge badge-success navbar-badge"><?php echo count($showbasket); ?></span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo base_url() ?>Home" class="brand-link">
        <img src="<?php echo base_url() ?>assest/dist/img/logo/logo-otop.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">OTOP นวัตวิถี</span>
      </a>

      <?php if (isset($_SESSION['buyer_id']) && $_SESSION['display_name_buy'] != "") { ?>
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo base_url() ?>assest/dist/img/admin-icon-png-1.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="<?php echo base_url(); ?>Member" class="d-block"><?php echo $buyer->display_name_buy; ?> (ผู้ซื้อ)</a>
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
                <a href="<?php echo base_url(); ?>login2/member" class="d-block">เข้าสู่ระบบ</a>
              </div>
            </div>
          <?php } ?>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="https://www.the-qrcode-generator.com/scan" class="nav-link">
                  <i class="nav-icon fas fa-qrcode"></i>
                  <p>
                    QRCODE
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>News" class="nav-link">
                  <i class="nav-icon fas fa-audio-description"></i>
                  <p>
                    ข่าวสาร
                  </p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Product" class="nav-link">
                  <i class="nav-icon fas fa-shopping-bag"></i>
                  <p>
                    สินค้า
                    <span class="right badge badge-info"><?php echo count($showproduct); ?></span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Store" class="nav-link">
                  <i class="nav-icon fas fa-store"></i>
                  <p>
                    ร้านค้า
                    <span class="right badge badge-info"><?php echo count($showsell); ?></span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Status" class="nav-link">
                  <i class="nav-icon fas fa-truck"></i>
                  <p>
                    ติดตามสินค้า
                    <span class="right badge badge-warning">Kerry Express</span>
                  </p>
                </a>
              </li>
              <?php if (isset($_SESSION['buyer_id']) && $_SESSION['display_name_buy'] != "") { ?>
                <li class="nav-item">
                  <a href="<?php echo base_url('login2/logout'); ?>" class="nav-link">
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
            <div class="col-sm-12">
              <h1>ตระกล้าสินค้า</h1>
              <hr style="border: 1px solid #000;">
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <table class="table">
          <thead class="bg-dark">
            <tr>
              <th scope="col">ชื่อ</th>
              <th scope="col">จำนวน</th>
              <th scope="col">ราคา</th>
              <th scope="col">ค่าส่ง</th>
              <th scope="col">รวม</th>
              <th scope="col">จัดการ</th>

            </tr>
          </thead>
            <?php { ?>
              <?php $totell = 0;
              foreach ($showbasket as $show) {
                $totel1 = $show->number_basket;
                $totel2 = $show->price;
                $totel3 = $totel1 * $totel2;
                $kerrybatket = $show->kerry_price_basket;
                $totellkerrybasket = $totel3 + $kerrybatket;
                $totell = $totellkerrybasket + $totell; ?>
                <tbody>
                  <!-- รายการ -->

                  <tr>
                    <td><a href="<?php echo base_url(); ?>Product/Product_view/<?php echo $show->id_product; ?>"><?php echo $show->name_product; ?><a></td>
                    <td><?php echo $show->number_basket; ?></td>
                    <td><?php echo $show->price; ?>.-</td>
                    <td><?php echo $show->kerry_price_basket; ?>.-</td>
                    <td><?php echo $totellkerrybasket; ?>.-</td>
                    <td>
                        <a class="btn btn-success" href="<?php echo base_url('Buy/bill_buy/') . $show->id_basket; ?>"><l type="button" class="fas fa-cart-plus fa-lg"></l></a>
                        <a href="<?php echo base_url('Cart/delbasket/') . $show->id_basket; ?>" type="button" class="btn btn-danger"><i class="fas fa-times px-2"></i></a></td>
                  </tr>
                <?php } ?>
                <!-- รายการ -->

                </tbody>
                <tfooter>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">รวม :</th>
                    <th scope="col" style="text-decoration: underline;"><?php echo $totell; ?></th>
                    <th scope="col">บาท</th>
                  </tr>
                </tfooter>
        </table>
      <?php } ?>
      </section>

      </section>
      <!-- /.content -->

      <!-- Main content -->
      <section class="content">

      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

   <!-- ตระกล้าสินค้า -->
   <aside class="control-sidebar control-sidebar-light">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>ตระกล้าสินค้า <span class="right badge badge-success"><?php echo count($showbasket);  ?></span> </h5>
        <hr style="border:1px solid #000;">
        <div class="row">
          <!-- สินค้า -->

          <?php $totell= 0; foreach ($showbasket as $show) {

            $totel1 = $show->number_basket;
            $totel2 = $show->price;
            $totel3 = $totel1 * $totel2;
            $kerrybatket = $show->kerry_price_basket;
            $totellkerrybasket = $totel3 + $kerrybatket;
            $totell = $totellkerrybasket + $totell;?>

            <div class="col-4">
              <img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $show->img_otop; ?>" style="height:4.5rem;object-fit:cover;" alt="...">
            </div>
            <div class="col-5">
              <?php echo $show->name_product; ?><br>
              <?php echo $show->number_basket; ?> รายการ<br>
              <?php echo $show->kerry_price_basket;?> ราคาส่ง
              <?php echo $show->price; ?>.-
            </div>
            <div class="col-3">
              <a href="<?php echo base_url('Cart/delbasket/') . $show->id_basket; ?>" type="button" class="btn btn-danger"><i class="fas fa-times"></i></a>
            </div>
          <?php } ?>
        </div>
        <hr style="border:1px solid #000;">
        <div class="row">
          <div class="col-6">
            <a href="<?php echo base_url() ?>Cart" class="btn btn-success">ชำระสินค้า</a>
          </div>
          <div class="col-6">
            <p class="py-1">รวม :<?php echo $totell; ?> .-<p>
          </div>
        </div>
      </div>
    </aside>
    <!-- /.control-sidebar -->


    <footer class="main-footer">
      <strong>Copyright &copy; 2563 <a href="CPE">CPE-Project</a>.</strong> All rights
      reserved.
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
  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000
    });
  </script>
</body>

</html>
