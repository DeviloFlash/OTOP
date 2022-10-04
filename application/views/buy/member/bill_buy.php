<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP | Follow</title>
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
            <span class="dropdown-item dropdown-header">2 Notifications</span>
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
            <span class="badge badge-success navbar-badge">0</span>
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
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-qrcode"></i>
                  <p>
                    QRCODE
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>News" class="nav-link active">
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
    <form action="<?php echo base_url(); ?>Buy/addbillotop" method="post">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Main content -->
              <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h4>
                      <small class="float-right">วันที่ : <?php echo $readshowbasket->data_basket; ?></small>
                    </h4>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                    <address>
                      <strong>ผู้ซื้อ(ถ้าเปลี่ยนที่อยู่กรุณาเเก้ไข้ข้อมูลหน้าโปรไฟล์)</strong><br>
                      ชื่อ <?php echo $readshowbasket->first_name_buy; ?><br>
                      นามสกุล <?php echo $readshowbasket->last_name_buy; ?><br>
                      โทร: <?php echo $readshowbasket->mobile_number_buy; ?><br>
                      ที่อยู่: <?php echo $readshowbasket->address_buy; ?><br>
                      อีเมล: <?php echo $readshowbasket->email; ?>
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <h4><i class="fas fa-globe"></i> OTOP นวัตวิธี</h4>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>ไอดีผู้ซื้อ :</b> <?php echo $readshowbasket->buyer_id; ?><br>
                    <b>วันที่สั่งซื้อ :</b> <?php echo $readshowbasket->data_basket; ?><br>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                  <div class="col-12 table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>ชื่อ</th>
                          <th>จำนวน</th>
                          <th>ราคา</th>
                          <th>ค่าส่ง</th>
                          <th>ราคาสินค้ารวม</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  $stocktell=0; { $pro=$readshowbasket->number_basket; $stock=$readshowbasket->number; $stocktell=$stock-$pro; ?>

                      <input type="hidden" name="id_basket" value="<?php echo $readshowbasket->id_basket; ?>">
                      <input type="hidden" name="id_product" value="<?php echo $readshowbasket->id_product; ?>">
                      <input type="hidden" name="buyer_id" value="<?php echo $readshowbasket->buyer_id; ?>">
                      <input type="hidden" name="number_bill" value="<?php echo $readshowbasket->number_basket; ?>">
                      <input type="hidden" name="name_product_bill" value="<?php echo $readshowbasket->name_product_basket; ?>">
                      <input type="hidden" name="status_bill" value="<?php echo $readshowbasket->status_basket; ?>">
                      <input type="hidden" name="stocktell" value="<?php echo $stocktell; ?>">
                      <?php } ?>

                        <?php { ?>
                          <?php $totelbill = 0;
                    
                            $totelbill1 = $readshowbasket->number_basket;
                            $totelbill2 = $readshowbasket->price;
                            $kerry = $readshowbasket->kerry_price;
                            $totelbill3 = $totelbill1 * $totelbill2;
                            $totelkerry = $totelbill3 + $kerry;
                            $totelbill = $totelbill + $totelkerry; ?>
                            <tr>
                              <td>1</td>
                              <td><?php echo $readshowbasket->name_product; ?></td>
                              <td><?php echo $readshowbasket->number_basket; ?></td>
                              <td><?php echo $readshowbasket->price; ?></td>
                              <td><?php echo $readshowbasket->kerry_price; ?></td>
                              <td><?php echo $totelkerry; ?></td>
                            </tr>
                          <?php } ?>

                      </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- accepted payments column -->
                  <div class="col-6">
                    <p class="lead">เลือกจ่าย :</p>
                    <img src="<?php echo base_url(); ?>assest/dist/img/credit/visa.png" alt="Visa">
                    <img src="<?php echo base_url(); ?>assest/dist/img/credit/mastercard.png" alt="Mastercard">
                    <img src="<?php echo base_url(); ?>assest/dist/img/credit/american-express.png" alt="American Express">
                    <img src="<?php echo base_url(); ?>assest/dist/img/credit/paypal2.png" alt="Paypal">

                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                      plugg
                      dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                    </p>
                  </div>
                  <!-- /.col -->
                  <div class="col-6">
                    <p class="lead">วันที่สั่งซื้อ : <?php echo $readshowbasket->data_basket; ?></p>

                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th style="width:50%">ราคาสินค้ารวม:</th>
                          <td><?php echo $totelbill; ?></td>
                        </tr>
                        <tr>
                          <th>ทั้งหมด:</th>
                          <td><?php echo $totelbill; ?> .-</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
       
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary float-right"><i class="far fa-credit-card"></i>
                    ยืนยันการสั่งซื้อ
                  </button>
                </div>
              </div>
              </div>
              <!-- /.invoice -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      </form>
    </div>
    <!-- /.content-wrapper -->




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