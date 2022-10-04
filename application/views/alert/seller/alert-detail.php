<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP | Send-Mail</title>
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
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/summernote/summernote-bs4.css">

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
            <a href="<?php echo base_url(); ?>Dashboard/Alertorder">
              <span class="dropdown-item dropdown-header">ดูข้อความทั้งหมด</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url() ?>Dashboard/Alertordersell" class="dropdown-item">
              <i class="fas fa-user-tag mr-2"></i> ผู้ขาย 1 ข้อค้วาม
            </a>
            <a href="<?php echo base_url(); ?>Dashboard/Alertorder" class="dropdown-item">
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
                    <a href="<?php echo base_url(); ?>dashboard/player_team" class="nav-link">
                      <i class="fas fa-cart-plus nav-icon"></i>
                      <p>เพิ่มสินค้า</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>dashboard/player_player" class="nav-link active">
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
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>รายละเอียดการสั่งซื้อ</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php {  $totel1=$readbillotopbuy->number_bill; $totel2=$readbillotopbuy->price; $totel3=$totel1*$totel2; $kerrybill= $readbillotopbuy->kerry_price; $totellkerrybill=$totel3+$kerrybill;  ?>
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
                    <small class="float-right">วันที่ : <?php echo $readbillotopbuy->data_bill; ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <address>
                    <strong>ผู้ซื้อ</strong><br>
                    ชื่อผู้ใช้ : <?php echo $readbillotopbuy->display_name_buy; ?><br>
                    ชื่อ : <?php echo $readbillotopbuy->first_name_buy; ?><br>
                    นามสกุล : <?php echo $readbillotopbuy->last_name_buy; ?><br>
                    โทร : <?php echo $readbillotopbuy->mobile_number_buy; ?><br>
                    ที่อยู่ : <?php echo $readbillotopbuy->address_buy; ?><br>
                    อีเมล : <?php echo $readbillotopbuy->email; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                <h4><i class="fas fa-globe"></i> OTOP นวัตวิธี</h4>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>รหัสบิล #<?php echo $readbillotopbuy->id_billotop; ?></b><br>
                  <br>
                  <b>ไอดีผู้ซื้อ :</b> <?php echo $readbillotopbuy->buyer_id; ?><br>
                  <b>วันที่สั่งซื้อ :</b> <?php echo $readbillotopbuy->data_bill; ?><br>
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
                      <th>ราคารวม</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td><?php echo $readbillotopbuy->name_product_bill	; ?></td>
                      <td><?php echo $readbillotopbuy->number_bill	; ?></td>
                      <td><?php echo $readbillotopbuy->price; ?></td>
                      <td><?php echo $totel3; ?></td>
                    </tr>

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
                  <p class="lead">วันที่สั่งซื้อ : <?php echo $readbillotopbuy->data_bill; ?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">ราคาสินค้ารวม:</th>
                        <td><?php echo $totel3; ?></td>
                      </tr>
                      <tr>
                        <th>ค่าส่ง:</th>
                        <td><?php echo $readbillotopbuy->kerry_price; ?></td>
                      </tr>
                      <tr>
                        <th>ทั้งหมด:</th>
                        <td><?php echo $totellkerrybill; ?> .-</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <form action="<?php echo base_url(); ?>Dashboard/addstatusbillotop" method="post">
              <div class="row no-print">
                  <input type="hidden" name="id_billotop" value="<?php echo $readbillotopbuy->id_billotop; ?>">
                 <input type="hidden" name="status_bill" value="0" value="<?php echo $readbillotopbuy->status_bill; ?>">
                <div class="col-12">
                <button type="submit" class="btn btn-success float-right"><i class="far fa-credit-card"></i> เคลียใบเสร็จ</button>
                </div>
              </div>
            </div>


            </form>
            <?php } ?>






            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">CPE-Project</a>.</strong> All rights
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
<!-- Page Script -->
<script src="<?php echo base_url() ?>assest/plugins/summernote/summernote-bs4.min.js"></script>
<script>
$(function () {
  //Add text editor
  $('#compose-textarea').summernote()
})
</script>

<script type="text/javascript">
  function logout() {
    window.location.href = "<?php echo site_url('login/logout'); ?>"
  }
</script>

</body>
</html>
